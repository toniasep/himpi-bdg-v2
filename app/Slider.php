<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Slider extends Model
{
	protected $table = 'slider';
	protected $fillable = [
		'gambar'
	];

	// public static function getList() {
	// 	return self::select(['id', 'gambar', 'created_at', 'updated_at'])
	// 				->where('kategori', 'slider')
	// 				->orderByRaw('RAND()')
	// 				->paginate(10);
	// }
}