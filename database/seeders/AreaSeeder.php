<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'name' => 'Bankruptcy'
        ]);

        DB::table('areas')->insert([
            'name' => 'Business'
        ]);

        DB::table('areas')->insert([
            'name' => 'Employment'
        ]);

        DB::table('areas')->insert([
            'name' => 'Environment'
        ]);

        DB::table('areas')->insert([
            'name' => 'Family'
        ]);

        DB::table('areas')->insert([
            'name' => 'Health'
        ]);

        DB::table('areas')->insert([
            'name' => 'Immigration'
        ]);

        DB::table('areas')->insert([
            'name' => 'Intellectual Property'
        ]);

        DB::table('areas')->insert([
            'name' => 'Personal Injury'
        ]);

        DB::table('areas')->insert([
            'name' => 'Education'
        ]);

        DB::table('areas')->insert([
            'name' => 'Insuarance'
        ]);

        DB::table('areas')->insert([
            'name' => 'Tax'
        ]);
    }
}
