<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('trainers')->insert([
                'company_id' => random_int(1, 99),
                'user_id' => $i % 99,
                'is_leader' => $i % 2 == 0 && $i % 100 == 0 ? 1 : 0,
                'status' => 1,
            ]);
        }
    }
}
