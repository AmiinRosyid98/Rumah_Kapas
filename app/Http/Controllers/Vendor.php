<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Vendor extends Controller
{
    //

    public function index(){

    	$myorder = DB::table('pesan')
                ->join('villages', 'pesan.id_kelurahan', '=', 'villages.id')
                ->join('districts', 'villages.district_id', '=', 'districts.id')            
                ->join('regencies', 'districts.regency_id', '=', 'regencies.id')           
                ->join('provinces', 'regencies.province_id', '=', 'provinces.id')  
                ->join('bahan', 'pesan.id_bahan', '=', 'bahan.id_bahan')  
                ->join('tipe', 'bahan.id_tipe', '=', 'tipe.id_tipe')  
                ->join('jenis', 'tipe.id_jenis', '=', 'jenis.id_jenis')  
                ->select('pesan.*','jenis.jenis as nama_jenis','tipe.tipe as nama_tipe','bahan.bahan as nama_bahan', 'villages.name as desa', 'districts.name as kecamatan','regencies.name as kabupaten','provinces.name as propinsi')         
                ->get();
    	return view('vendor/home',['order' => $myorder]);
    }

    public function detail_order($id){
    	$myorder = DB::table('pesan')
                ->join('villages', 'pesan.id_kelurahan', '=', 'villages.id')
                ->join('districts', 'villages.district_id', '=', 'districts.id')            
                ->join('regencies', 'districts.regency_id', '=', 'regencies.id')           
                ->join('provinces', 'regencies.province_id', '=', 'provinces.id')  
                ->join('bahan', 'pesan.id_bahan', '=', 'bahan.id_bahan')  
                ->join('tipe', 'bahan.id_tipe', '=', 'tipe.id_tipe')  
                ->join('jenis', 'tipe.id_jenis', '=', 'jenis.id_jenis')  
                ->select('pesan.*','jenis.jenis as nama_jenis','tipe.tipe as nama_tipe','bahan.bahan as nama_bahan', 'villages.name as desa', 'districts.name as kecamatan','regencies.name as kabupaten','provinces.name as propinsi')         
                ->where('pesan.id_pesan',$id )->get();
        return view('vendor/vieworder',['myorder' => $myorder,
                                        'id_pesan' => $id,
                                        
                                        ]);
    }

    public function bid(Request $request){
        
        DB::table('bid')->insert([
            'id_bid' => 2,
    		'id_pesan' => $request->id_pesan,
			'id_vendor' => Session::get('id_vendor'),
			'nominal_bid' => $request->tawaran,
			'status_bid' => 1,
    	]);

    	return redirect('/vendor');
    }
}
