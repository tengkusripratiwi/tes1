<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    //
    protected $table='tanggapans';
    protected $guarded=['id'];

    public function pengaduan(){
    	return $this->belongsTo(Pengaduan::Class);
    }

    public function petugas(){
    	return $this->belongsTo(Petugas::Class);
    }
}
