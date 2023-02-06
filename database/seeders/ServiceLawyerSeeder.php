<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Service;
use App\Models\Lawyer;

class ServiceLawyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = Service::all();

        Lawyer::all()->each(function ($lawyer) use ($services){
            $lawyer->services()->attach(
                $services->random(1)->pluck('id')       
            );
        });
    }
}
