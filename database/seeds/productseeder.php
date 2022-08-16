<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>"Apple Iphone ",
            'category'=>"Mobile",
            'price'=>"100000",
            'description'=>"Iphone 11 pro Max",
            'gallery'=>'images/banner/01.jpg'
            ],
         [ 'name'=>"LG TV ",
            'category'=>"TV",
            'price'=>"60000",
            'description'=>"Ld Led Tv",
            'gallery'=>'images/banner/02.jpg'
        ],
        [
            'name'=>"Haier Washing Machine ",
            'category'=>"Was",
            'price'=>"70000",
            'description'=>"abcdsfdfd",
            'gallery'=>'images/banner/03.jpg'
        ],
        [
            'name'=>"Gree Air Conditioner ",
            'category'=>"AC",
            'price'=>"70000",
            'description'=>"Gree Air Conditioner",
            'gallery'=>'images/banner/04.jpg'
        ]
    ]);
    }
}
