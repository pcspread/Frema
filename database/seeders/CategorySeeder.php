<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// DB読込
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 9; $i++) {
            DB::table('categories')->insert([
                [
                    'item_id' => $i,
                    'category' => '洋服'
                ]
            ]);
            DB::table('categories')->insert([
                [
                    'item_id' => $i,
                    'category' => 'メンズ'
                ]
            ]);
        }
    }
}
