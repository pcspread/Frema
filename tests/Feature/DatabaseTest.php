<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
// Model読込
use App\Models\User;
// Hash読込
use Illuminate\Support\Facades\Hash;
// Carbon読込
use Carbon\Carbon;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        User::factory()->create([
            'email' => "test1@test.com",
            'password' => Hash::make('test1111'),
            'name' => "ユーザー1",
            'email_verified_at' => Carbon::now()->__toString(),
            'remember_token' => Hash::make('remember_token'),
            'created_at' => Carbon::now()->__toString(),
            'updated_at' => Carbon::now()->__toString(),
        ]);
        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users', [
            'email' => "test1@test.com"
        ]);
    }
}
