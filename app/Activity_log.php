<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity_log extends Model
{
    protected $table = 'activity_log';
	// protected $fillable = [
 //    	'nama_kegiatan'
 //    ];
    //terima dari user
	public function User()
	{
		return $this->belongsTo('App\User', 'causer_id', 'id');
	}
}
