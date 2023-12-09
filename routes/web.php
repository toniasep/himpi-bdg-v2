<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => true, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
// start company profil
Route::get('/', 'HomeController@index')->name('beranda');
Route::get('e-katalog', 'HomeController@ekatalog')->name('ekatalog');
Route::get('e-katalog/{id}', 'HomeController@detailekatalog')->name('detailekatalog');
Route::get('keanggotaan', 'HomeController@keanggotaan')->name('keanggotaan');
Route::get('tentang-kami', 'HomeController@tentangkami')->name('tentangkami');
Route::get('badan-otonom', 'HomeController@badanotonom')->name('badanotonom');
Route::get('badan-otonom/{id}', 'HomeController@detailbadanotonom')->name('detailbadanotonom');
Route::get('badan-otonom/law-and-tax', 'HomeController@pt')->name('lawandtax');
Route::get('badan-otonom/pt', 'HomeController@pt')->name('pt');
// Route::get('badan-otonom/{id}', 'HomeController@detailbadanotonom')->name('detailbadanotonom');
Route::get('debug', 'HomeController@debug')->name('debug');
Route::post('kerjasama/{id}', 'HomeController@kerjasama')->name('kerjasama');

// Route::get('generate', function () {
//     Artisan::call('storage:link');
//     echo 'ok';
// });

// Auth::routes(['verify' => true]);
// Auth::routes();

Route::get('/generate', function(){
    echo Hash::make('hipmi2022'); 
});

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth', 'admin']], function () {
    Route::get('home', 'PenggunaController@home')->name('home');
    Route::get('akun', 'HomeController@akun')->name('akun');
    Route::get('akun/suntingakun', 'HomeController@suntingakun')->name('akun.suntingakun');
    Route::put('akun/suntingakunupdate', 'HomeController@suntingakunupdate')->name('akun.suntingakunupdate');
    Route::get('akun/gantiemail', 'HomeController@gantiemail')->name('akun.gantiemail');
    Route::post('akun/gantiemailupdate', 'HomeController@gantiemailupdate')->name('akun.gantiemailupdate');
    Route::get('akun/email/update/{token}/{newemail}', 'HomeController@akunemailUpdate')->name('akunemailUpdate');
    Route::get('gantipw', 'HomeController@gantipw')->name('akun.gantipw');
    Route::post('gantipw', 'HomeController@gantipwupdate')->name('akun.gantipwupdate');
});

//manajeman data
// Route::group(['prefix' => 'manajemen'], function () {
Route::group(['prefix' => 'manajemen', 'middleware' => ['web', 'auth', 'admin']], function () {
    Route::resource('pengguna', 'PenggunaController');
    Route::resource('slider', 'SliderController');
    Route::resource('master_bidang_usaha', 'Master_bidang_usahaController');
    Route::resource('brand', 'BrandController');
    Route::resource('bidang_usaha', 'BidangusahaController');
    Route::resource('katalog', 'KatalogController');
    Route::resource('banom', 'BanomController');
    Route::resource('faq', 'FaqController');
    Route::get('faq/{id}/faqnonaktif', 'FaqController@faqnonaktif')->name('faq.nonaktif');
    Route::get('faq/{id}/restore', 'FaqController@faqrestore')->name('faq.restore');
    //PANDUAN CMS LARAVEL GLOBAL
    //CMS KONTEN TENTANG KAMI
    Route::group(['prefix' => 'tentang-kami'], function () {
        Route::get('sejarah/{id}', 'CmsController@sejarah')->name('sejarah');
        Route::put('sejarah/{id}', 'CmsController@sejarahupdate')->name('sejarah.update');
        Route::get('vmm/{id}', 'CmsController@vmm')->name('vmm');
        Route::put('vmm/{id}', 'CmsController@vmmupdate')->name('vmm.update');

        Route::get('struktur-organisasi', 'CmsController@strukturorganisasi')->name('strukturorganisasi');
        Route::post('struktur-organisasi', 'CmsController@strukturorganisasistore')->name('strukturorganisasi.store');
        Route::get('struktur-organisasi/{id}/edit', 'CmsController@strukturorganisasiedit')->name('strukturorganisasi.edit');
        Route::put('struktur-organisasi/{id}/edit', 'CmsController@strukturorganisasiupdate')->name('strukturorganisasi.update');
        Route::delete('struktur-organisasi/{id}/delete', 'CmsController@strukturorganisasidestroy')->name('strukturorganisasi.destroy');
    });
    //CMS KONTEN ANGGOTA
    Route::group(['prefix' => 'anggota'], function () {

        Route::get('deskripsibanom/{id}', 'CmsController@deskripsibanom')->name('deskripsibanom');
        Route::put('deskripsibanom/{id}', 'CmsController@deskripsibanomupdate')->name('deskripsibanom.update');

        Route::get('regulasi/{id}', 'CmsController@regulasi')->name('regulasi');
        Route::put('regulasi/{id}', 'CmsController@regulasiupdate')->name('regulasi.update');

        Route::get('pertanyaan-umum', 'CmsController@pertanyaanumum')->name('pertanyaanumum');
        Route::post('pertanyaan-umum', 'CmsController@pertanyaanumumstore')->name('pertanyaanumum.store');
        Route::get('pertanyaan-umum/{id}/edit', 'CmsController@pertanyaanumumedit')->name('pertanyaanumum.edit');
        Route::put('pertanyaan-umum/{id}/edit', 'CmsController@pertanyaanumumupdate')->name('pertanyaanumum.update');
        Route::delete('pertanyaan-umum/{id}/delete', 'CmsController@pertanyaanumumdestroy')->name('pertanyaanumum.destroy');
    });
});

Route::group(['prefix' => 'anggota', 'middleware' => ['web', 'auth', 'anggota']], function () {
    Route::get('/', 'HomeController@anggota')->name('anggota');
    Route::get('setuju/{id}', 'HomeController@setuju')->name('setuju');
    Route::get('tolak/{id}', 'HomeController@tolak')->name('tolak');
});