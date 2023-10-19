<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccessTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        // Seeder実行
        $this->seed('BrandSeeder');
        $this->seed('CategorySeeder');
        $this->seed('ConditionSeeder');
        $this->seed('UserSeeder');
        $this->seed('ItemSeeder');
    }

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        // 各リンクへのアクセステスト
        $response = $this->get('/register');
        $response->assertStatus(200);
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response = $this->get('/verify/email');
        $response->assertStatus(200);
        $response = $this->get('/');
        $response->assertStatus(200);
        $response = $this->get('/favorite');
        $response->assertStatus(200);
        $response = $this->get('/item/1');
        $response->assertStatus(200);
        
        // ダミーユーザーでログイン状態にする
        $user = User::find(1);
        $this->actingAs($user);
        $this->assertTrue(Auth::check());

        // ログイン状態で下記にアクセス
        $response = $this->get('/item/1/purchase');
        $response->assertStatus(200);
        $response = $this->get('/item/1/address');
        $response->assertStatus(200);
        $response = $this->get('/item/1/purchase/email');
        $response->assertStatus(200);
        $response = $this->get('/item/1/comment');
        $response->assertStatus(200);
        $response = $this->get('/mypage');
        $response->assertStatus(200);
        $response = $this->get('/mypage/purchase');
        $response->assertStatus(200);
        $response = $this->get('/mypage/profile');
        $response->assertStatus(200);
        
        // ログアウト確認
        $this->post('/logout');
        $this->assertNull(session('user'));
    }
}
