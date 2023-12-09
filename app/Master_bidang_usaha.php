<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Spatie\Activitylog\Traits\LogsActivity;

class Master_bidang_usaha extends Model
{
	protected $table = 'master_bidang_usaha';
	// protected $primaryKey = 'ID_Perawat';
	protected $fillable = [
		'id', 'bidang_usaha', 'created_at', 'updated_at'
	];
	// kirim var ke Katalog
    public function Katalog()
    {
        return $this->hasMany('App\Katalog');
    }
}
