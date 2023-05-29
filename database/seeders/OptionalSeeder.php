<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Optional;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = ['AC',
                'catene neve',
                'ruota di scorta', 
                'sedili riscaldati',
                'schermo touch'
                ];

       foreach($arr as $arrayItem){
            $newOptional = new Optional();
            $newOptional->name = $arrayItem;
            $newOptional->save();
        }
    }
}
