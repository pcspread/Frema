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
            DB::table('categories')->insert([
                [
                    'name' => 'アウター'
                ],
                [
                    'name' => 'カーディガン'
                ],
                [
                    'name' => 'トップス'
                ],
                [
                    'name' => 'ボトムス'
                ],
                [
                    'name' => 'バッグ'
                ],
                [
                    'name' => 'シューズ'
                ],
            ]);
    }
}
