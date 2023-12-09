<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Spatie\Activitylog\Traits\LogsActivity;

class Katalog extends Model
{
	protected $table = 'katalog';
	protected $primaryKey = 'id';
	protected $fillable = [
		// 'id','nama_katalog','jenis','deskripsi','logo','alamat','nama_pemilik','no_pemilik','email_pemilik','facebook','instagram','twitter','youtube','youtube','cv','user_id','created_at','updated_at'
	];

	//terima dari user
	public function User()
	{
		return $this->belongsTo('App\User', 'user_id', 'id');
	}
	// kirim var ke Brand
    public function Brand()
    {
        return $this->hasMany('App\Brand');
    }
	//terima dari Master_bidang_usaha
	public function Master_bidang_usaha()
	{
		return $this->belongsTo('App\Master_bidang_usaha', 'master_bidang_usaha_id', 'id');
	}
}
