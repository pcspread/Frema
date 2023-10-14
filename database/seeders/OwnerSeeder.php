<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// DB読込
use Illuminate\Support\Facades\DB;
// Hash読込
use Illuminate\Support\Facades\Hash;
// Carbon読込
use Carbon\Carbon;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 店舗代表者の情報を作成
        DB::table('tops')->insert([
            'email' => 'top@top.com',
            'created_at' => Carbon::now()->__toString(),
            'updated_at' => Carbon::now()->__toString(),
        ]);
        // 管理者の情報を作成
        DB::table('owners')->insert([
            'email' => 'owner@owner.com',
            'created_at' => Carbon::now()->__toString(),
            'updated_at' => Carbon::now()->__toString(),
        ]);
    }
}
