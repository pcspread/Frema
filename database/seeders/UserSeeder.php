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
        for ($i = 1; $i < 6; $i++) {
            $param = [
                'email' => "test{$i}@test.com",
                'password' => Hash::make('test1111'),
                'email_verified_at' => Carbon::now()->__toString(),
                'remember_token' => Hash::make('remember_token'),
                'created_at' => Carbon::now()->__toString(),
                'updated_at' => Carbon::now()->__toString(),
            ];
            DB::table('users')->insert($param);
        }
    }
}