<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'Advice Session',
            'price' => 39,
            'service_fee' => 100,
            'service_fee_tax' => 14.98,
            'legal_fee' => 500,
            'legal_fee_tax' => 25,
            'description' => 'jfjfkkdllsllsslls'
        ]);

        DB::table('services')->insert([
            'title' => 'Advisor Agreement',
            'price' => 600,
            'service_fee' => 100,
            'service_fee_tax' => 14.98,
            'legal_fee' => 500,
            'legal_fee_tax' => 25,
            'description' => 'jfjfkkdllsllsslls'
        ]);

        DB::table('services')->insert([
            'title' => 'Common Equity Financing (Basic)',
            'price' => 2700,
            'service_fee' => 100,
            'service_fee_tax' => 14.98,
            'legal_fee' => 500,
            'legal_fee_tax' => 25,
            'description' => 'jfjfkkdllsllsslls'
        ]);

        DB::table('services')->insert([
            'title' => 'Common Equity Financing (Basic)',
            'price' => 2700,
            'service_fee' => 100,
            'service_fee_tax' => 14.98,
            'legal_fee' => 500,
            'legal_fee_tax' => 25,
            'description' => 'jfjfkkdllsllsslls'
        ]);

        DB::table('services')->insert([
            'title' => 'Common Equity Financing (Basic)',
            'price' => 2700,
            'service_fee' => 100,
            'service_fee_tax' => 14.98,
            'legal_fee' => 500,
            'legal_fee_tax' => 25,
            'description' => 'jfjfkkdllsllsslls'
        ]);

        DB::table('services')->insert([
            'title' => 'Common Equity Financing (Complex)',
            'price' => 4800,
            'service_fee' => 100,
            'service_fee_tax' => 14.98,
            'legal_fee' => 500,
            'legal_fee_tax' => 25,
            'description' => 'jfjfkkdllsllsslls'
        ]);

    }
}
