<?php

namespace App\Http\Controllers;

use App\Customer_m;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Signin extends Controller
{
    public function index(){
    	return view('signin');
    }

    public function cek_login(Request $request){
        $this->validate($request,
                  ['username'=>'required'],
                  ['password'=>'required']
               );
 
        $user = $request->input('username');
        $pass = $request->input('password');
       	/*
       	$p = Hash::make($pass);
       	echo $p;
       	*/
 
        $data = Customer_m::where('mail_cust',$user)->first();
        $vendor = DB::table('vendor')->where('mail_vendor',$user)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($pass,$data->pass_cust)){

                Session::put('id_cust',$data->id_cust);
                Session::put('name',$data->nama_cust);
                Session::put('email',$data->mail_cust);
                Session::put('login',TRUE);
                return redirect('/');
            }
            else{
                return redirect('signin')->with('alert','Password Salah !');
            }
        }
        else{
            if($vendor){
                if (Hash::check($pass,$vendor->pass_vendor)) {
                    Session::put('id_vendor',$vendor->id_vendor);
                    Session::put('name',$vendor->nama_vendor);
                    Session::put('email',$vendor->mail_vendor);
                    Session::put('login_vendor',TRUE);
                    return redirect('/vendor');
                }else {
                    return redirect('signin')->with('alert','Password Salah !');
                }
            }else {
                return redirect('signin')->with('alert','Password atau Email1, Salah!');
            }
        }
    }

    public function logout(){
        Session::flush(); //session_destroy()
        return redirect('/')->with('alert','Kamu sudah logout');
    }
}
