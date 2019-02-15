<?php

namespace App\Http\Controllers;

use App\Customer_m;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Myorder extends Controller
{
    public function index(){
        $id_cust = Session::get('id_cust');
        $myorder = DB::table('pesan')
                ->join('villages', 'pesan.id_kelurahan', '=', 'villages.id')
                ->join('districts', 'villages.district_id', '=', 'districts.id')            
                ->join('regencies', 'districts.regency_id', '=', 'regencies.id')           
                ->join('provinces', 'regencies.province_id', '=', 'provinces.id')  
                ->join('bahan', 'pesan.id_bahan', '=', 'bahan.id_bahan')  
                ->join('tipe', 'bahan.id_tipe', '=', 'tipe.id_tipe')  
                ->join('jenis', 'tipe.id_jenis', '=', 'jenis.id_jenis')  
                ->select('pesan.*','jenis.jenis as nama_jenis','tipe.tipe as nama_tipe','bahan.bahan as nama_bahan', 'villages.name as desa', 'districts.name as kecamatan','regencies.name as kabupaten','provinces.name as propinsi')         
                ->where('pesan.id_cust',$id_cust)->get();
    	return view('myorder',['myorder' => $myorder,]);
    }


    public function detail_order($id){
        $id_cust = Session::get('id_cust');
        $myorder = DB::table('pesan')
                ->join('villages', 'pesan.id_kelurahan', '=', 'villages.id')
                ->join('districts', 'villages.district_id', '=', 'districts.id')            
                ->join('regencies', 'districts.regency_id', '=', 'regencies.id')           
                ->join('provinces', 'regencies.province_id', '=', 'provinces.id')  
                ->join('bahan', 'pesan.id_bahan', '=', 'bahan.id_bahan')  
                ->join('tipe', 'bahan.id_tipe', '=', 'tipe.id_tipe')  
                ->join('jenis', 'tipe.id_jenis', '=', 'jenis.id_jenis')  
                ->select('pesan.*','jenis.jenis as nama_jenis','tipe.tipe as nama_tipe','bahan.bahan as nama_bahan', 'villages.name as desa', 'districts.name as kecamatan','regencies.name as kabupaten','provinces.name as propinsi')         
                ->where('pesan.id_cust',$id_cust)
                ->where('pesan.id_pesan',$id)
                ->get();
        $status_2 = DB::table('bid')->where('bid.id_pesan',$id)->where('bid.status_bid',2)->first();
    	return view('detail_order',['myorder' => $myorder,'status_2'=>$status_2,'id_pesan'=>$id]);
    }

    public function rekrut_vendor($id_bid){
        DB::table('bid')->where('id_bid',$id_bid)->update([
    		'status_bid' => 2
    	]);

    	return redirect()->back();
    }
}
