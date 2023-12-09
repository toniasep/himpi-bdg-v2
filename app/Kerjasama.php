<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Spatie\Activitylog\Traits\LogsActivity;

class Kerjasama extends Model
{
	protected $table = 'kerjasama';
	protected $primaryKey = 'id';
	protected $fillable = [
		// 'id','nama_katalog','jenis','deskripsi','logo','alamat','nama_pemilik','no_pemilik','email_pemilik','facebook','instagram','twitter','youtube','cv','user_id','created_at','updated_at'
	];

	// terima dari Katalog
	public function Katalog()
	{
		return $this->belongsTo('App\Katalog', 'katalog_id_pengajuan', 'id');
	}
	
}