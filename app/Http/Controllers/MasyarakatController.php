<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masyarakat;

class MasyarakatController extends Controller
{
    //index
    public function index(){
    	$data_masyarakat=Masyarakat::get();
    	return view('masyarakat_index')->with('data_masyarakat', $data_masyarakat);
    }

    // create
    public function create(){
    	$data_masyarakat=Masyarakat::get();
    	return view('masyarakat_create')->with('data_masyarakat', $data_masyarakat);
    }

    // insert
    public function insert(Request $request){
    	Masyarakat::Create($request->all());
    	return redirect('/masyarakat');
    }
}
