<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lines')->insert([
            [
                'name' => 'HVAC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'XFK',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
