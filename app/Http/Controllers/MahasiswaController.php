<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
    	$data_mhs = \App\mhs::all();
    	return view ('Mahasiswa.index',['data_mhs' => $data_mhs]);
    }

    public function create(Request $request){
    	\App\mhs::create($request->all());
    	return redirect('/mahasiswa')->with('berhasil','Data berhasil ditambah!');
    }
    public function edit($id){
    	$mhs = \App\mhs::find($id);
    	return view('mahasiswa/update',['mhs' => $mhs]);
    }
    public function update(Request $request,$id){
    	$mhs = \App\mhs::find($id);
    	$mhs->update($request->all());
    	return redirect('/mahasiswa')->with('berhasil','Data berhasil diupdate!');
    }
    public function delete($id){
        $mhs = \App\mhs::find($id);
        $mhs->delte($mhs);
        return redirect('/mahasiswa')->with('berhasil','Data berhasil dihapus!');
    }
    public function profile($id){
        $mhs = \App\mhs::find($id);
        return view('mahasiswa.profile',['mhs' => $mhs]);
    }
}

