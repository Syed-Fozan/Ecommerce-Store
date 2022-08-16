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
            'name'=>"Gaming Console",
            'img'=>"images/game console/02/01.jpg"

        ],
        [
            'name'=>"Laptop",
            'img'=>"images/laptop/01/02.jpg"

        ],
        [
            'name'=>"Smart Watch",
            'img'=>"images/smart watch/02/02.jpg"

        ],
        [
            'name'=>"Headphones",
            'img'=>"images/headphones/02/02.jpg"

        ],

        ]

    );

        
    }
}
