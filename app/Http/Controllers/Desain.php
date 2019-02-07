<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Desain extends Controller
{
    public function index($id){
    	return view('desain',['id_bahan' => $id]);
    }  

     
    
    
}
