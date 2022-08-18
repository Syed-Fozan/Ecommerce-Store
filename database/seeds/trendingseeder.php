<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class trendingseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB ::table('trendings')->insert([[
            'name'=>"Computer",
            'img'=>"img/product1.png"
        ],
        [
            'name'=>"Laptop",
            'img'=>"images/laptop/01/02.jpg"
        ],
        [
            'name'=>"Tablets",
            'img'=>"img/product3.png"

        ],
        [
            'name'=>"Speakers",
            'img'=>"img/product4.png"

        ],
        [
            'name'=>"Internet",
            'img'=>"img/product5.png"

        ],
        [
            'name'=>"Harddisk",
            'img'=>"img/product6.png"

        ],
        [
            'name'=>"Rams",
            'img'=>"img/product7.png"

        ],
        [
            'name'=>"Battery",
            'img'=>"img/product8.png"

        ],
        [
            'name'=>"Drive",
            'img'=>"img/product9.png"

        ]


        ]

    );

        
    }
}
