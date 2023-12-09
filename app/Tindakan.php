<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Spatie\Activitylog\Traits\LogsActivity;

class Tindakan extends Model
{
	protected $table = 'Tabel_tindakan';
	protected $primaryKey = 'No_Registrasi';
	protected $fillable = [
		'No_Registrasi', 'ID_Perawat', 'Nama_Pasien', 'Jam', 'Diagnosa', 'Tindakan_Keperawatan', 'No_Ruang', 'Keterangan'
	];

	//terima dari Perawat
	public function Perawat()
	{
		return $this->belongsTo('App\Perawat', 'ID_Perawat', 'ID_Perawat');
	}
	//terima dari Pasien
	public function Pasien()
	{
		return $this->belongsTo('App\Pasien', 'Nama_Pasien', 'No_RM');
	}
}
