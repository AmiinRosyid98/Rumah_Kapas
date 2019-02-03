<?php

use Illuminate\Database\Seeder;

//use Faker\Factory as Faker;

class Fuck extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('partner')->insert([
    			'nama' => "nama",
    			'jabatan' => "lkfdf",
    			'umur' => "45",
                'alamat' => "jfdf",
    			'password' => "dfvkdf",
    		]);
 
    	 
    }
}
