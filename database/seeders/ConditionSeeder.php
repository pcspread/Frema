<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// DB読込
use Illuminate\Support\Facades\DB;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conditions')->insert([
            [
                'name' => '新品',
            ],
            [
                'name' => 'ほぼ新品',
            ],
            [
                'name' => '美品',
            ],
            [
                'name' => '良好',
            ],
            [
                'name' => '可',
            ],
        ]);
    }
}
