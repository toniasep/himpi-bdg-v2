<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Traits\LogsActivity;
use DB;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'kta', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // kirim var ke Activity_log
    public function Activity_log()
    {
        return $this->hasMany('App\Activity_log');
    }
    // kirim var ke Bidang_usaha
    public function Bidang_usaha()
    {
        return $this->hasMany('App\Bidang_usaha');
    }
    // kirim var ke faq
    public function Faq()
    {
        return $this->hasMany('App\Faq');
    }
    public function Kebijakan()
    {
        return $this->hasMany('App\Kebijakan');
    }
    public function Banner()
    {
        return $this->hasMany('App\Banner');
    }
    public function Panduan()
    {
        return $this->hasMany('App\Panduan');
    }
    public function jabatan()
    {
        return $this->hasMany(Jabatan::class);
    }
    
    // kirim var ke Katalog
    public function Katalog()
    {
        return $this->hasMany('App\Katalog');
    }
}
