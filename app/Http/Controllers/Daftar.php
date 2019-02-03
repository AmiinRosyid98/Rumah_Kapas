<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Daftar extends Controller
{
    //
    public function index(){
    	return view('daftar');
    }

    public function tambah_data(Request $request){

    	$messages = [
		    'required' => ':attribute wajib diisi cuy!!!',
		    'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
		    'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',		    
		    'numeric' => ':attribute harus diisi dengan angka',
		    'same' => 'Password harus Ssama'
		];
    	 $this->validate($request,[
    	 	'nama' => 'required|min:5|max:6',
			'jabatan' => 'required',
			'umur' => 'required|numeric',
			'alamat' => 'required',
			'password' => 'required',
			'konfirmasi_password' => 'same:password',
    	 ],$messages);

    		DB::table('partner')->insert([
				'nama' => $request->nama,
				'jabatan' => $request->jabatan,
				'umur' => $request->umur,
				'alamat' => $request->alamat,
				'password' => $request->password
			]);
	// alihkan halaman ke halaman pegawai
	return redirect('/partner');
    }
}
