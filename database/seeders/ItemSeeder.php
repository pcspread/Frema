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
        DB::table('items')->insert([
            [
                'user_id' => 1,
                'brand_id' => mt_rand(1,5),
                'category_id' => 1,
                'condition_id' => 3,
                'category' => 'メンズ',
                'image' =>'https://dummyimage.com/200x200/888888/888888',
                'name' => 'パーカー',
                'content' => '温かく、着心地の良いパーカーです',
                'price' => '10000'
            ],
            [
                'user_id' => 1,
                'brand_id' => mt_rand(1,5),
                'category_id' => 2,
                'condition_id' => 3,
                'category' => 'メンズ',
                'image' =>'https://dummyimage.com/200x200/888888/888888',
                'name' => 'スウェット',
                'content' => '温かいスウェットです',
                'price' => '1000'
            ],
            [
                'user_id' => 2,
                'brand_id' => mt_rand(1,5),
                'category_id' => 2,
                'condition_id' => 3,
                'category' => 'メンズ',
                'image' =>'https://dummyimage.com/200x200/888888/888888',
                'name' => 'カーディガン',
                'content' => 'さっと羽織れるカーディガンです',
                'price' => '5000'
            ],
            [
                'user_id' => 2,
                'brand_id' => mt_rand(1,5),
                'category_id' => 1,
                'condition_id' => 3,
                'category' => 'メンズ',
                'image' =>'https://dummyimage.com/200x200/888888/888888',
                'name' => 'ジャケット',
                'content' => '頑丈な作りのジャケットです',
                'price' => '5000'
            ],
            [
                'user_id' => 3,
                'brand_id' => mt_rand(1,5),
                'category_id' => 1,
                'condition_id' => 3,
                'category' => 'メンズ',
                'image' =>'https://dummyimage.com/200x200/888888/888888',
                'name' => 'MA-1',
                'content' => '使いやすいジャケットです',
                'price' => '5000'
            ],
            [
                'user_id' => 3,
                'brand_id' => mt_rand(1,5),
                'category_id' => 1,
                'condition_id' => 3,
                'category' => 'メンズ',
                'image' =>'https://dummyimage.com/200x200/888888/888888',
                'name' => 'ティラードジャケット',
                'content' => '綺麗なジャケットです',
                'price' => '5000'
            ],
            [
                'user_id' => 4,
                'brand_id' => mt_rand(1,5),
                'category_id' => 1,
                'condition_id' => 3,
                'category' => 'メンズ',
                'image' =>'https://dummyimage.com/200x200/888888/888888',
                'name' => 'トレンチコート',
                'content' => '色んな服装に合うコートです',
                'price' => '3000'
            ],
            [
                'user_id' => 4,
                'brand_id' => mt_rand(1,5),
                'category_id' => 2,
                'condition_id' => 3,
                'category' => 'メンズ',
                'image' =>'https://dummyimage.com/200x200/888888/888888',
                'name' => 'ニット',
                'content' => 'とても温かいニットです',
                'price' => '100000'
            ],
            [
                'user_id' => 5,
                'brand_id' => mt_rand(1,5),
                'category_id' => 3,
                'condition_id' => 3,
                'category' => 'メンズ',
                'image' =>'https://dummyimage.com/200x200/888888/888888',
                'name' => 'シャツ',
                'content' => 'きれいめのシャツです',
                'price' => '15000'
            ],
            [
                'user_id' => 5,
                'brand_id' => mt_rand(1,5),
                'category_id' => 3,
                'condition_id' => 3,
                'category' => 'メンズ',
                'image' =>'https://dummyimage.com/200x200/888888/888888',
                'name' => 'カットソー',
                'content' => '品質の良いカットソーです',
                'price' => '30000'
            ]
        ]);
    }
}