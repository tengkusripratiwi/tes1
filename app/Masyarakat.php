<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    //
	protected $table='masyarakats';
	protected $guarded=['id'];

	public function pengaduan(){
		return $this->hasMany(Pengaduan::Class);
	}
}
