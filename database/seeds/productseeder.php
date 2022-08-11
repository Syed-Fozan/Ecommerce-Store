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
            'gallery'=>"file://C:/Users/Fame/Desktop/salesforce_partner.png"
            ],
         [ 'name'=>"LG TV ",
            'category'=>"TV",
            'price'=>"60000",
            'description'=>"Ld Led Tv",
            'gallery'=>"file:///C:/Users/Fame/Desktop/salesforce_partner.png"
        ],
        [
            'name'=>"Haier Washing Machine ",
            'category'=>"Was",
            'price'=>"70000",
            'description'=>"abcdsfdfd",
            'gallery'=>"file:///C:/Users/Fame/Desktop/salesforce_partner.png"
        ],
        [
            'name'=>"Gree Air Conditioner ",
            'category'=>"AC",
            'price'=>"70000",
            'description'=>"Gree Air Conditioner",
            'gallery'=>"file:///C:/Users/Fame/Desktop/Ai-banner-image.png"
        ]
    ]);
    }
}
