<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;

class PetugasController extends Controller
{
    //index
    public function index(){
    	$data_petugas=Petugas::get();
    	return view('petugas_index')->with('data_petugas',$data_petugas);
    }

    // create
    public function create(){
    	$data_petugas=Petugas::get();
    	return view('petugas_create')->with('data_petugas', $data_petugas);
    }
}
