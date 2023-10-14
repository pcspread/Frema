<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// Model読込
use App\Models\Top;
use App\Models\Owner;
// Hash読込
use Illuminate\Support\Facades\Hash;
// Auth読込
use Illuminate\Support\Facades\Auth;

class FirstMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // フォーム情報の取得
        $form = $request->only('email', 'password');

        if (Auth::attempt($form)) {
            // 入力されたメールアドレスが店舗代表者のものと一致した場合
            if ($form['email'] === Top::first()['email']) {
                // セッションID再生成
                $request->session()->regenerate();
                return redirect('/admin/top')->with('success', 'ログインしました');
            }

            // 入力されたメールアドレスが管理者のものと一致した場合
            if ($form['email'] === Owner::first()['email']) {
                // セッションID再生成
                $request->session()->regenerate();
                return redirect('/admin/owner')->with('success', 'ログインしました');
            }
        }
        

        return $next($request);
    }
}
