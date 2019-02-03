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
    	
    	return view('myorder');
    }
}
