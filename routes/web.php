<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	
	$jenis = DB::table('jenis')->get();
	$tipe = DB::table('tipe')
		->select('*')
		->join('jenis','tipe.id_jenis','=','jenis.id_jenis')
		->get();
    return view('home',[
					'jenis' => $jenis,
					'tipe' => $tipe
				]);
});

Route::get('tentang', 'Tentang@index');
Route::get('product', 'Product@index');
Route::get('galeri', 'Galeri@index');
Route::get('partner', 'Partner@index');
Route::get('partner/cari', 'Partner@cari');
Route::get('partner/edit/{id}', 'Partner@edit');
Route::get('partner/hapus/{id}', 'Partner@hapus');
Route::post('partner/update_data', 'Partner@update_data');
Route::get('daftar', 'Daftar@index');
Route::post('daftar/tambah_data', 'Daftar@tambah_data');
Route::get('signin', 'Signin@index');
Route::get('desain', 'Desain@index');
Route::post('cek_login', 'Signin@cek_login');
Route::get('logout', 'Signin@logout');
Route::post('shipping_info/select_kota', 'Shipping_info@select_kota');
Route::post('shipping_info/select_kecamatan', 'Shipping_info@select_kecamatan');
Route::post('shipping_info/select_kelurahan', 'Shipping_info@select_kelurahan');
Route::post('shipping_info/select_bahan', 'Shipping_info@select_bahan');
Route::post('shipping_info/tambah_pesanan', 'Shipping_info@tambah_pesanan');
Route::get('shipping_info', 'Shipping_info@index');
Route::get('myorder', 'Myorder@index');
Route::get('vendor', 'Vendor@index');
Route::get('vendor/view_order/{id}', 'Vendor@view_order');
