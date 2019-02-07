<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class daftarcust extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$c = DB::table('customer')->get();

    	// mengirim data pegawai ke view index
    	return view('daftarcust',['customer' => $c]);

    }
   
	public function store(Request $request)
	{
	// insert data ke table pegawai
		$messages = [
		    'required' => ':attribute Wajib Diisi',
		    'min' => ':attribute Error, Minimal :min Karakter',
		    'max' => ':attribute Error, Minimal :max Karakter',		    
		    'numeric' => ':attribute Error, Isi dengan Angka',
		    'same' => 'Password Harus Sama'
		];
    	 $this->validate($request,[
    	 	'email' => 'required',
    	 	'name' => 'required|min:5|max:25',
			'pass' => 'required',
			're_pass' => 'same:pass',
			'phone' => 'required',
    	 ],$messages);
	DB::table('customer')->insert([
		'mail_cust' => $request->email,
		'nama_cust' => $request->name,
		'pass_cust' => Hash::make($request->re_pass),
		'no_cust' => $request->phone
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('signin');
 
	}
}