<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// DB読込
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('items')->insert([
                [
                    'user_id' => $i,
                    'brand_id' => mt_rand(1,5),
                    'category_id' => 1,
                    'condition_id' => 3,
                    'gender' => 'メンズ',
                    'image' =>'https://dummyimage.com/200x200/888888/888888',
                    'name' => 'パーカー',
                    'content' => '温かく、着心地の良いパーカーです',
                    'price' => $i * 1000
                ],
                [
                    'user_id' => $i,
                    'brand_id' => mt_rand(1,5),
                    'category_id' => 2,
                    'condition_id' => 3,
                    'gender' => 'メンズ',
                    'image' =>'https://dummyimage.com/200x200/888888/888888',
                    'name' => 'スウェット',
                    'content' => '温かいスウェットです',
                    'price' => $i * 1000
                ],
                [
                    'user_id' => $i,
                    'brand_id' => mt_rand(1,5),
                    'category_id' => 2,
                    'condition_id' => 3,
                    'gender' => 'メンズ',
                    'image' =>'https://dummyimage.com/200x200/888888/888888',
                    'name' => 'カーディガン',
                    'content' => 'さっと羽織れるカーディガンです',
                    'price' => $i * 1000
                ],
                [
                    'user_id' => $i,
                    'brand_id' => mt_rand(1,5),
                    'category_id' => 1,
                    'condition_id' => 3,
                    'gender' => 'メンズ',
                    'image' =>'https://dummyimage.com/200x200/888888/888888',
                    'name' => 'ジャケット',
                    'content' => '頑丈な作りのジャケットです',
                    'price' => $i * 1000
                ],
                [
                    'user_id' => $i,
                    'brand_id' => mt_rand(1,5),
                    'category_id' => 1,
                    'condition_id' => 3,
                    'gender' => 'メンズ',
                    'image' =>'https://dummyimage.com/200x200/888888/888888',
                    'name' => 'トレンチコート',
                    'content' => '色んな服装に合うコートです',
                    'price' => $i * 1000
                ],
                [
                    'user_id' => $i,
                    'brand_id' => mt_rand(1,5),
                    'category_id' => 2,
                    'condition_id' => 3,
                    'gender' => 'メンズ',
                    'image' =>'https://dummyimage.com/200x200/888888/888888',
                    'name' => 'ニット',
                    'content' => 'とても温かいニットです',
                    'price' => $i * 1000
                ],
                [
                    'user_id' => $i,
                    'brand_id' => mt_rand(1,5),
                    'category_id' => 3,
                    'condition_id' => 3,
                    'gender' => 'メンズ',
                    'image' =>'https://dummyimage.com/200x200/888888/888888',
                    'name' => 'シャツ',
                    'content' => 'きれいめのシャツです',
                    'price' => $i * 1000
                ],
                [
                    'user_id' => $i,
                    'brand_id' => mt_rand(1,5),
                    'category_id' => 3,
                    'condition_id' => 3,
                    'gender' => 'メンズ',
                    'image' =>'https://dummyimage.com/200x200/888888/888888',
                    'name' => 'カットソー',
                    'content' => '品質の良いカットソーです',
                    'price' => $i * 1000
                ]
            ]);
        }
    }
}