<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('clients')->insert([
        //     'first_name' => 'Kevin', 
        //     'last_name' => 'Gates',
        //     'address' => '8 Alberta road',
        //     'city' => 'Montreal',
        //     'province' => 'QC',
        //     'postal' => '23401',
        //     'phone' => '+1845724953',
        //     'business' => 'Banker',
        //     'position' => 'Manager'

        // ]);

        // DB::table('clients')->insert([
        //     'first_name' => 'Donald', 
        //     'last_name' => 'Pearson',
        //     'address' => '12 Issac John road',
        //     'city' => 'Oshawa',
        //     'province' => 'QC',
        //     'postal' => '23401',
        //     'phone' => '+18457244583',
        //     'business' => 'Teacher',
        //     'position' => 'Assistant'

        // ]);

        // DB::table('clients')->insert([
        //     'first_name' => 'Frank', 
        //     'last_name' => 'Lampard',
        //     'address' => '22 Davison ave.',
        //     'city' => 'Perkers',
        //     'province' => 'QC',
        //     'postal' => '23401',
        //     'phone' => '+1849424992',
        //     'business' => 'Driver',
        //     'position' => 'Head'

        // ]);

        $users = User::all();

        $clients = [];

        foreach($users as $user) {
            $clients[] = [
            'user_id' => $user->id,
            'first_name' => 'Frank', 
            'last_name' => 'Lampard',
            'country' => 'Canada',
            'address' => '22 Davison ave.',
            'city' => 'Perkers',
            'province' => 'QC',
            'postal' => '23401',
            'phone' => '+1849424992',
            'business' => 'Driver',
            'position' => 'Head'
            ];
        }

        DB::table('clients')->insert($clients);
    }
}
