<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Spatie\Activitylog\Traits\LogsActivity;

class Brand extends Model
{
	protected $table = 'brand';
	protected $primaryKey = 'id';
	protected $fillable = [
		'id','nama_brand','deskripsi_brand','logo_brand','katalog_id','created_at','updated_at'
	];

	// terima dari Katalog
	public function Katalog()
	{
		return $this->belongsTo('App\Katalog', 'katalog_id', 'id');
	}
	// kirim var ke Tindakan
    // public function Tindakan()
    // {
    //     return $this->hasMany('App\Tindakan');
    // }
}
