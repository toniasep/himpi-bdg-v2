<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Katalog;
use App\Banom;
use App\User;
use App\Master_bidang_usaha;
use App\Slider;
use App\Susunanpengurus;
use App\Pertanyaanumum;
use App\Brand;
use App\Kerjasama;


use Illuminate\Support\Facades\Auth;
use App\Activity_log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendChangeEmail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;
use Mail;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $count_katalog = Katalog::count();
        $count_master_bidang_usaha = Master_bidang_usaha::count();
        $count_pengurus = User::where('role', 'pengurus')->count();
        $katalog = Katalog::orderBy('kerjasama_count','desc')->limit(15)->get();
        $slider = Slider::where('kategori', 'slider')->inRandomOrder()->get();
        if(is_null($request->q)){
            $anggota = null; 
            $perusahaan = "-";
        }else{
            $anggota = User::where('role', 'anggota')->where('kta', "{$request->q}")->get();
            // dd($anggota->count());
            if($anggota->count() == 0){
                $anggota = "not found";
                $perusahaan = "-";
            }else{
                //get list name katalog from user id
                $katalogs = Katalog::where('user_id',$anggota[0]['id'])->get();
                if(count($katalogs) == 0){
                    $perusahaan = "-";
                }else{
                    $katalogs = Katalog::where('user_id',$anggota[0]['id'])->pluck('nama_katalog');
                    //make like this "katalog1, katalog2, katalog3"
                    $perusahaan = implode(", ", $katalogs->toArray());
                }
            }

        }

        return view('index',compact('katalog','count_katalog','count_master_bidang_usaha','count_pengurus','slider', 'anggota', 'perusahaan'));
    }
    public function ekatalog(Request $request)
    {
        $master_bidang_usaha = Master_bidang_usaha::all();
        if(count($request->all()) > 1) {
            if(is_null($request->q)){
                //fungsi F
                $search = Katalog::where( function($query) use($request){
                    $query->where('master_bidang_usaha_id', '=', $request->f);
                })
                ->orderBy('kerjasama_count','desc')->paginate(20);
                $search->appends($request->only('q'));
                // dd("f not null");
            }elseif(is_null($request->f)){
                //fungsi Q
                $search = Katalog::where( function($query) use($request){
                        $query->where('nama_katalog', 'LIKE', "%{$request->q}%");
                })
                ->orderBy('kerjasama_count','desc')->paginate(20);
                $search->appends($request->only('q'));
                // dd("Q not null");
            }else{
                // dd("cek");
                //kondisi cari 2 variabel
                $search = Katalog::where( function($query) use($request){
                    $query->where('nama_katalog', 'LIKE', "%{$request->q}%");
                })->where(function($query) use($request){
                    $query->where('master_bidang_usaha_id', '=', $request->f);
                })
                ->orderBy('kerjasama_count','desc')->paginate(20);
                $search->appends($request->only('q'));
            }
        }else{

            $search=Katalog::orderBy('kerjasama_count','desc')->paginate(20);
            // dd($search->toArray());
        }
        $katalog = Katalog::orderBy('kerjasama_count','asc')->paginate(20);        
        return view('ekatalog', ['katalog' => $katalog, 'search' => $search, 'q' => $request->q, 'f' => $request->f, 'master_bidang_usaha' => $master_bidang_usaha]);
    }
    public function backupekatalog(Request $request)
    {
        // $search = Katalog::when($request->q, function ($query) use ($request) {
        //     $query->where('nama_katalog', 'LIKE', "%{$request->q}%");
        //     })->orderBy('created_at','desc')->paginate(20);
        // $search->appends($request->only('q'));

        // $katalog = Katalog::orderBy('created_at','desc')->paginate(20);        
        // return view('ekatalog', ['katalog' => $katalog, 'search' => $search, 'q' => $request->q, 'master_bidang_usaha' => $master_bidang_usaha]);
    }
    public function tentangkami()
    {
        $aktif = Susunanpengurus::where('kategori', 'aktif')->orderBy('nourut','asc')->get();
        $partner = Susunanpengurus::where('kategori', 'partner')->orderBy('nourut','asc')->get();
        $riwayat = Susunanpengurus::where('kategori', 'riwayat')->orderBy('nourut','asc')->get();
        return view('tentangkami', compact('aktif','partner','riwayat'));
    }
    public function badanotonom()
    {
        $result = Banom::all();
        return view('badanotonom', compact('result'));
    }
    public function detailbadanotonom($id)
    {
        $result = Banom::find($id);
        if(!$result){
            abort(404);
        }
        return view('detailbanom', compact('result'));
    }
    public function detailekatalog($id)
    {
        $katalog = Katalog::inRandomOrder()->limit(3)->get();
        $var = Katalog::find($id);
        $brand = Brand::where('katalog_id',$id)->get();
        // dd($brand);
        if(!$var){
            abort(404);
        }
        // return view('detailekatalog')->with('var', $var,'katalog',$katalog);
        return view('detailekatalog', ['katalog' => $katalog, 'var' => $var, 'brand' => $brand]);

        // return view('');
    }
    public function keanggotaan()
    {
        $result = Pertanyaanumum::orderBy('nourut','asc')->get();
        return view('keanggotaan', compact('result'));
    }
    
    public function akun()
    {
        $logs = Activity_log::where('causer_id', auth()->user()->id)->where('log_name', "login")->Orwhere('log_name', "logout")->orderBy('created_at', 'desc')->get();
        return view('akun')->with('logs', json_decode($logs, true));
    }
    public function suntingakun()
    {
        return view('suntingakun');
    }
    public function gantiemail()
    {
        return view('gantiemail');
    }
    public function suntingakunupdate(Request $request){
        $this->validate($request, [
            'nama_cp' => 'required',
            'no_hp' => 'required',
            'alamat_surat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'kode_pos_surat' => 'required',
        ]);
        $var = User::find(auth()->user()->id);
        if ($request->hasFile('gambar')) {
            $nameimage = 'anggota-perkindo-jabar-'.time().'.'.request()->gambar->getClientOriginalExtension();
            $request->gambar->storeAs('public/logo',$nameimage,['disk' => 'public_uploads']);
            $oldback = $var->gambar;
            $var->gambar = $nameimage;
            // Storage::delete('public/logo/'.$oldback);
        }
            $var->nama_cp = $request->nama_cp;
            $var->no_hp = $request->no_hp;
            $var->alamat_surat = $request->alamat_surat;
            $var->rt = $request->rt;
            $var->rw = $request->rw;
            $var->kecamatan = $request->kecamatan;
            $var->kelurahan = $request->kelurahan;
            $var->kode_pos_surat = $request->kode_pos_surat;
            $var->provinsi_surat = $request->provinsi;
            $var->kabupaten_surat = $request->kabupaten;
            $var ->save();
        return redirect()->back()->with(['message' => 'Data berhasil Di Sunting!', 'error' => 'success']);
    }
    public function gantiemailupdate(Request $request) 
    { 
        $resp = null; 
        $user = User::find(auth()->user()->id); 
        $isEmailTaken = User::select()->where('email', $request->email)->exists(); 
        if($isEmailTaken){ 
            $resp['message'] = 'Email Sudah Terdaftar di Sistem, Silahkan Gunakan Email Lain!'; 
            $resp['error'] = 'error'; 
        }else{ 
            if($request->email) 
            {    
                $token = Str::random(32); 
                $expiredAt = Carbon::now()->addHours(3); 
                $toEmail = $request->email; 
                $data = [ 
                    'user_id' => $user->id, 
                    'token' => $token, 
                    'expired_date_time' => $expiredAt 
                ]; 
                $now = Carbon::now(); 
                DB::table('email_tokens')->insert($data); 
 
                $email = [ 
                    'pengguna' => $user->nama_lengkap,
                    'pesan' => 'Silahkan klik tombol di bawah untuk melakukan perubahan email.', 
                    'token' => $data['token'], 
                    'new_email' => $request->email, 
                    'url_process' => '/akun/email/update/'. $data['token'] .'/'. $request->email 
                ]; 
                Mail::to($request->email)->send(new SendChangeEmail($email)); 
            } 
            $resp['message'] = 'Silahkan periksa email baru anda untuk melakukan perubahan!'; 
            $resp['error'] = 'success'; 
        } 
        return redirect()->back()->with($resp); 
    }
    public function akunemailUpdate($token, $email) 
    { 
        // check if token and email are valid. 
        $check = DB::table('email_tokens')->where('token', $token); 
        if($check->exists()) 
        { 
            $query = $check->first(); 
            $now = Carbon::now(); 
            $expiredIn = Carbon::parse($query->expired_date_time); 
 
            if(!$now->greaterThan($expiredIn)) 
            { 
                User::find($query->user_id) 
                        ->update(['email' => $email]); 
            }else{ 
                return 'Token kadaluarsa!'; 
            } 
        }else{ 
            return 'Token tidak terdaftar!'; 
        } 
        $check->update(['token' => null]); 
        // return 'Email anda berhasil di update!'; 
        return redirect()->route('akun.gantiemail')->with(['message' => 'Email anda berhasil di disunting!', 'error' => 'success']); 
    } 

    public function gantipw()
    {
        return view('gantipw');
    }
    public function gantipwupdate(Request $request){ 
        $validator = Validator::make($request->all(), [
            'oldpw' => 'required|min:8|max:191',
            'newpw' => 'required|min:8|max:191',
            'conpw' => 'required|min:8|max:191'
        ]);
        if ($validator->fails()) {
            return redirect()->route('akun.gantipw')
                ->withErrors($validator)
                ->withInput();
        }
        $resp = null; 
        $user = User::find(auth()->user()->id); 
        if($request->newpw == $request->conpw){ 
            if(Hash::check($request->oldpw, $user->password)){ 
                $user->password = Hash::make($request->newpw); 
                $user->update(); 
                $resp['message'] = 'Ganti kata sandi berhasil'; 
                $resp['error'] = 'success'; 
            }else{ 
                $resp['message'] = 'kata sandi lama salah!'; 
                $resp['error'] = 'error'; 
            } 
        }else{ 
            $resp['message'] = 'Konfirmasi kata sandi salah'; 
            $resp['error'] = 'error'; 
        } 
        return redirect()->route('akun.gantipw')->with($resp); 
    }  
    public function debug(){
        $search=Katalog::orderBy('kerjasama_count','desc')->paginate(20);
        dd($search->toArray());
    }
    public function kerjasama(Request $request, $id)
    {
        $katalog = new Kerjasama;
        $katalog->katalog_id_pengajuan = auth()->user()->Katalog[0]['id'];
        $katalog->katalog_id_penerima = $id;
        // $katalog->status = 0;
        $katalog->save();
        return redirect()->back()->with(['message' => 'Pengajuan Kerja Sama Berhasil!', 'error' => 'success']);
    }
    public function anggota()
    {
        $list_request = Kerjasama::where('katalog_id_penerima', auth()->user()->id)->where('status', '0')->get();
        $list_riwayat = Kerjasama::where('katalog_id_penerima', auth()->user()->id)->where('status', '1')->get();
        return view('anggota.index',compact('list_request','list_riwayat'));
    }
    public function setuju(Request $request, $id)
    {
        $faq = Kerjasama::find($id);
        $faq->status = '1';
        $nilai_pengaju = $faq->katalog_id_pengajuan;
        $faq->save();

        $pengaju = Katalog::where('id', $nilai_pengaju)->first();
        $count = $pengaju->kerjasama_count;
        $pengaju->kerjasama_count = $count + 1;
        $pengaju->save();
        
        $cekid = Katalog::where('user_id', auth()->user()->id)->first();
        $oldview = $cekid->kerjasama_count;
        $cekid->kerjasama_count = $oldview + 1;
        $cekid->save();

        return redirect()->back()->with(['message' => 'Permohonan Kerjasama berhasil disetujui!', 'error' => 'success']);
    }
    public function tolak(Request $request, $id)
    {
        $faq = Kerjasama::find($id);
        $faq->status = '2';
        $faq->save();
        return redirect()->back()->with(['message' => 'Permohonan Kerjasama berhasil tolak!', 'error' => 'success']);
    }
    
}
