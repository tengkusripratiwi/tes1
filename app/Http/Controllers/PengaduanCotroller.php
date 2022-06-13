<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Pengaduan, Masyarkat};

class PengaduanCotroller extends Controller
{
    //index
    public function index(){
    	$data_pengaduan=Pengaduan::get();
    	return view('pengaduan_index')->with('data_pengaduan', $data_pengaduan);
    }
}
