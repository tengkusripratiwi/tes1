<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Tanggapan, Pengaduan, Petugas};

class TanggapanController extends Controller
{
    //index
    public function index(){
    	$data_tanggapan=Tanggapan::get();
    	return view('tanggapan_index')->with('data_tanggapan', $data_tanggapan);
    }
}
