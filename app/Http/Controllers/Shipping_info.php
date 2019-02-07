<?php

namespace App\Http\Controllers;

use App\Customer_m;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Shipping_info extends Controller
{
    
    public function index($id){
    	$id_cust = Session::get('id_cust');
    	$customer = DB::table('customer')->where('id_cust',$id_cust)->get();
    	$provinsi = DB::table('provinces')->get();
    	return view('shipping_info',['customer' => $customer,
									 'provinsi' => $provinsi,
									 'id_bahan' => $id,]);
    }

    public function tambah_pesanan(Request $request){

    	/*$messages = [
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
    	 ],$messages);*/
    		DB::table('pesan')->insert([
                'nama' => $request->nama,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
				'alamat' => $request->alamat,
                'tanggal_jadi' => $request->tanggal_jadi,
                'id_kelurahan' => $request->id_kelurahan,
                'kode_pos' => $request->kode_pos,
                'ket_pesan' => "Keterangan",
				'id_cust' => $request->id_cust,
				'id_bahan' => $request->id_bahan,
                'id_desain' => "0",
                'xs' => $request->xs,
                's' => $request->s,
                'm' => $request->m,
                'l' => $request->l,
                'xl' => $request->xl,
                'xxl' => $request->xxl,
                'custom' => "0",
				
			]);
	// alihkan halaman ke halaman pegawai
	return redirect('/myorder');
    }

    public function select_kota(Request $request){
    	$id = $request->id_provinsi;
    	$kota = DB::table('regencies')->where('province_id',$id)->get();
    	$lists = "<option value=''>Pilih</option>";

    	foreach ($kota as $k ) {
    		$lists .= "<option value='".$k->id."'>".$k->name."</option>";
    	}
    	$callback = array('kota'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota    

    	echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }

     public function select_kecamatan(Request $request){
    	$id_kota= $request->id_kota;
    	$kota = DB::table('districts')->where('regency_id',$id_kota)->get();
    	$lists = "<option value=''>Pilih Kecamatan</option>";

    	foreach ($kota as $k ) {
    		$lists .= "<option value='".$k->id."'>".$k->name."</option>";
    	}
    	$callback = array('kecamatan'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota    

    	echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }

    public function select_kelurahan(Request $request){
    	$id_kecamatan= $request->id_kecamatan;
    	$kelurahan = DB::table('villages')->where('district_id',$id_kecamatan)->get();
    	$lists = "<option value=''>Pilih Kelurahan</option>";

    	foreach ($kelurahan as $k ) {
    		$lists .= "<option value='".$k->id."'>".$k->name."</option>";
    	}
    	$callback = array('kelurahan'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota    

    	echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }

    public function select_bahan(Request $request){
        $id_tipe= $request->id_tipe;
        $bahan = DB::table('bahan')->where('id_tipe',$id_tipe)->get();
        $lists = "<div class='row'>";

        foreach ($bahan as $b ) {
            $lists .= "<div class='col-lg-3 col-md-6 portfolio-item filter-kemeja' data-wow-delay='0.1s'>
                        <div class='portfolio-wrap'>
                          <a href='desain/$b->id_bahan'><img src='assets/img/portfolio/kemeja.jpg' class='img-fluid' alt=''></a>
                        </div>
                        <b>$b->bahan</b>
                        <ul style='margin-left: -20px;'>
                          <li>Lebih Tebal</li>
                          <li>Lebih Tebal</li>
                          <li>Lebih Tebal</li>
                          <li>Lebih Tebal</li>
                        </ul>
                    </div>";
        }
        $lists .="</div>";
        $callback = array('tampil_bahan'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota    

        echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }
}
