<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            'HTML',
            'CSS',
            'JavaScript',
            'PHP'
        ];

        foreach($items as $item){
            $technology = new Technology();
            $technology->technology = $item;
            $technology->save();
        }
    }
}
