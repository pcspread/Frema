<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// DB読込
use Illuminate\Support\Facades\DB;
// Carbon読込
use Carbon\Carbon;
// Hash読込
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ダミーのユーザーデータを作成
        for ($i = 1; $i < 6; $i++) {
            $param = [
                'email' => "test{$i}@test.com",
                'password' => Hash::make('test1111'),
                'name' => "ユーザー{$i}",
                'email_verified_at' => Carbon::now()->__toString(),
                'remember_token' => Hash::make('remember_token'),
                'created_at' => Carbon::now()->__toString(),
                'updated_at' => Carbon::now()->__toString(),
            ];
            DB::table('users')->insert($param);
        }

        // 店舗代表者の情報を作成
        DB::table('users')->insert([
            'email' => 'top@top.com',
            'password' => Hash::make('top12345'),
            'email_verified_at' => Carbon::now()->__toString(),
            'remember_token' => Hash::make('remember_token'),
            'created_at' => Carbon::now()->__toString(),
            'updated_at' => Carbon::now()->__toString(),
        ]);

        // 管理者の情報を作成
        DB::table('users')->insert([
            'email' => 'owner@owner.com',
            'password' => Hash::make('owner12345'),
            'email_verified_at' => Carbon::now()->__toString(),
            'remember_token' => Hash::make('remember_token'),
            'created_at' => Carbon::now()->__toString(),
            'updated_at' => Carbon::now()->__toString(),
        ]);
    }
}