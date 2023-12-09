<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Spatie\Activitylog\Traits\LogsActivity;

class Bidang_usaha extends Model
{
	protected $table = 'bidang_usaha';
	// protected $primaryKey = 'ID_Perawat';
	protected $fillable = [
		'id', 'master_bidang_usaha_id', 'katalog_id', 'user_id', 'created_at', 'updated_at'
	];

	// terima dari Master_bidang_usaha
	public function Master_bidang_usaha()
	{
		return $this->belongsTo('App\Master_bidang_usaha', 'master_bidang_usaha_id', 'id');
	}
	// terima dari Katalog
	public function Katalog()
	{
		return $this->belongsTo('App\Katalog', 'katalog_id', 'id');
	}
	// terima dari User
	public function User()
	{
		return $this->belongsTo('App\User', 'User_id', 'id');
	}
}
