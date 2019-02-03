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

    	$order = DB::table('pesan')->get();
    	return view('vendor/home',['order' => $order]);
    }

    public function view_order($id){
    	$order = DB::table('pesan')->get();
    	return view('vendor/vieworder',['order' => $order]);
    }
}
