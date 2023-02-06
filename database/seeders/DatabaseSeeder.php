<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(LawyerSeeder::class);   
        $this->call(AreaSeeder::class);
        $this->call(AreaLawyerSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ServiceLawyerSeeder::class);
        $this->call(CurrenciesSeeder::class);
        //$this->call(ServiceLawyerSeeder::class);
        
       
        
        
        $this->call(ClientSeeder::class);
    }
}
