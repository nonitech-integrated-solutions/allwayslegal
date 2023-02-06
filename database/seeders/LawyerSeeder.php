<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Lawyer;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LawyerSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        $lawyers = [];

        foreach($users as $user) {
            $lawyers[] = [
            'user_id' => $user->id,
            'first_name' => 'Harry',
            'last_name' => 'Constantine',  
            'phone' => '+1(312)495284',  
            'gender' => 'Male',  
            'country' => 'Canada',  
            'address' => '31 sholanke street',      
            'city' => 'Toronto',  
            'province' => 'ON',  
            'postal' => '23401',  
            'languages' => '',  
            'law_firm_name' => 'Human Rights',  
            'law_firm_reg_no' => '47393034950',  
            'story' => ''
            ];
        }

        DB::table('lawyers')->insert($lawyers);
    }
}
