<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('product')->insert(
       
       
        [
        	'name'=>'panasoic fidge',
        	'price'=>'14000',
        	'description'=>'smart phone with 4 gb ram and much more feacher',
        	'category'=>' fidge',
        	'gallery'=>'C:\Users\Lenovo\Desktop\panasoic fidge.jfif'

        	
        ]

    );
    }
}
