<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// DB読込
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'name' => 'ラルフローレン',
            ],
            [
                'name' => 'グローバルワーク',
            ],
            [
                'name' => 'ナノユニバース',
            ],
            [
                'name' => 'ビームス',
            ],
            [
                'name' => 'ポールスミス',
            ],
        ]);
    }
}
