<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Galeri extends Controller
{
    public function index(){
    	return view('galeri');
    }
}
