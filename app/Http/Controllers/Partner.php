<?php

namespace App\Http\Controllers;
use App\Partner_M;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Partner extends Controller
{
    //
    public function index(){
    	$partner = Partner_M::paginate(3);

    	return view('partner',['partner' => $partner]);
    }

    public function edit($id){

        $partner = Partner_M::where('id_partner',$id)->get();
    	//$partner = DB::table('partner')->where('id_partner',$id)->get();
    	return view('edit_partner',['partner' => $partner]);

    }

    public function update_data(Request $request){
    	DB::table('partner')->where('id_partner',$request->id_partner)->update([
    		'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'umur' => $request->umur,
			'alamat' => $request->alamat
    	]);

    	return redirect('/partner');
    }

    public function hapus($id){
    	Partner_M::where('id_partner',$id)->delete();
    	return redirect('/partner');
    }

    public function cari(Request $request){
    	$cari = $request->cari;

    	$partner = Partner_M::where('nama',"like","%".$cari."%")->paginate();
    	return view('partner',['partner' => $partner]);

    }
}
