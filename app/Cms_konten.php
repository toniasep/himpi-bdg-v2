<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Spatie\Activitylog\Traits\LogsActivity;

class Cms_konten extends Model
{
	protected $table = 'cms_konten';
	protected $fillable = [
		'id', 'halaman', 'logo1', 'logo2', 'logo3', 'k1', 'k2', 'k3', 'k4', 'k5', 'k6', 'k7', 'k8', 'created_at', 'updated_at'
	];

}
