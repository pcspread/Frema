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
        $closes = ['ラルフローレン', 'グローバルワーク', 'ナノユニバース', 'ビームス', 'ポールスミス'];
        
        for ($i = 1; $i < 9; $i++) {
            DB::table('brands')->insert([
                'item_id' => $i,
                'brand' => $closes[mt_rand(0, 4)],
            ]);
        }
    }
}
