<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Spatie\Activitylog\Traits\LogsActivity;

class Banom extends Model
{
	protected $table = 'banom';
	// protected $primaryKey = 'ID_Perawat';
	protected $fillable = [
		'id', 'logo', 'judul', 'deskripsi_pendek', 'deskripsi', 'created_at', 'updated_at'
	];
	
	public static function PanduanAnggota()
    {
        $panduan_anggota = static::orderBy('created_at', 'asc')->get();
        // $panduan = Panduan::where('tampil','=','1')->where('role','=','anggota')->orderBy('urutan','asc')->get(); 
        return $panduan_anggota;
    }

}
