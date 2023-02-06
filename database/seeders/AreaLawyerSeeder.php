<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Area;
use App\Models\Lawyer;

class AreaLawyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = Area::all();

        Lawyer::all()->each(function ($lawyer) use ($areas){
            $lawyer->areas()->attach(
                $areas->random(1)->pluck('id')       
            );
        });
    }
}
