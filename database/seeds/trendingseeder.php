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
            'name'=>"iphone",
            'img'=>"https://www.pngmart.com/image/328411"

        ],
        [
            'name'=>"Washing Machine",
            'img'=>"https://regalelectronics.pk/wp-content/uploads/WhatsApp-Image-2021-09-09-at-18.40.14.jpeg"

        ],
        [
            'name'=>"Ipad",
            'img'=>"https://www.techadvisor.com/wp-content/uploads/2022/06/apple_ipad_mini_2021_review_12.jpg?resize=1024%2C576&quality=50&strip=all"

        ],
        [
            'name'=>"Air conditioner",
            'img'=>"https://klivago.de/katalog/lg/2bd.png"

        ],

        ]

    );

        
    }
}
