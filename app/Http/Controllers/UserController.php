<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\User;
// Hash読込
use Illuminate\Support\Facades\Hash;
// Request読込
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\AddressRequest;
// Carbon読込
use Carbon\Carbon;
// Mail読込
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyMail;
// Auth読込
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * view表示
     * auth.register
     * @param void
     * @return view
     */
    public function indexRegister()
    {
        return view('auth.register');
    }

    /**
     * store処理
     * @param object $request
     * @return redirect
     */
    public function storeRegister(RegisterRequest $request)
    {
        // フォーム情報の取得
        $form = $request->only('email', 'password');

        // トークンを作成
        $token = bin2hex(random_bytes(32));

        // store処理
        User::create([
            'email' => $form['email'],
            'password' => Hash::make($form['password']),
            'remember_token' => Hash::make($token),
            'created_at' => Carbon::now()->__toString(),
            'updated_at' => Carbon::now()->__toString(),
        ]);

        // メール送信
        Mail::send(new VerifyMail($form['email'], $token));

        // メール二重送信防止処理
        $request->session()->regenerateToken();

        session()->put([
            'email' => $form['email'],
            'token' => $token
        ]);
        return redirect('/verify/email');
    }

    /**
     * メール再送信処理
     * @param
     * @return void
     */
    public function resendMail(Request $request)
    {
        // フォーム情報の取得
        $form = $request->only(['email', 'token']);

        // dd($form);

        // 再送処理
        Mail::send(new VerifyMail($form['email'], $form['token']));

        // メール二重送信防止処理
        $request->session()->regenerateToken();

        return redirect('/verify/email')->with([
            'email' => $form['email'],
            'token' => $form['token'],
        ]);
    }

    /**
     * view表示
     * auth.thanks
     * @param object $request
     * @return view
     */
    public function indexThanks(Request $request)
    {
        // ユーザー情報を全件取得
        $users = User::all();

        // トークンを照合
        foreach($users as $user) {
            if (Hash::check($request->token, $user['remember_token'])) {
                // email_verified_atに現在時刻を代入
                $user['email_verified_at'] = Carbon::now()->__toString();
                $user->save();
                
                // 登録用に格納したセッションデータを削除
                session()->forget(['email', 'token']);

                return view('auth.thanks');
            }
        }

        return redirect('/login')->with('danger', '不正なリクエストです');
    }

    /**
     * view表示
     * auth.login
     * @param void
     * @return view
     */
    public function indexLogin()
    {
        return view('auth.login');
    }

    /**
     * login処理
     * @param object $request
     * @return view
     */
    public function storeLogin(LoginRequest $request)
    {
        // フォーム情報の取得
        $form = $request->only(['email', 'password']);

         // email_verified_atが有る場合
        if (!empty(User::where('email', $form['email'])->first()['email_verified_at'])) {
            // ログイン情報がある場合
            if (Auth::attempt($form)) {
                return redirect('/')->with('success', 'ログインしました');
            }
        }

        return redirect('/login')->with('danger', '登録情報が見つかりませんでした');
    }

    /**
     * view表示
     * auth.verify_email
     * @param void
     * @return view
     */
    public function indexMail()
    {
        return view('auth.verify_email');
    }
    
    /**
     * view表示
     * address
     * @param int $id
     * @return view
     */
    public function showAddress($id)
    {
        // ユーザーデータを取得
        $user = User::find(Auth::id());

        return view('address', compact('user', 'id'));
    }

    /**
     * 住所更新処理
     * @param int $id
     * @return redirect
     */
    public function updateAddress($id, AddressRequest $request)
    {
        // フォーム情報の取得
        $form = $request->only('postcode', 'address', 'building');

        // update処理
        User::find(Auth::id())->update($form);

        return back()->with('success', '住所を更新しました');
    }
    
    /**
     * view表示
     * auth.logout
     * @param object $request
     * @return view
     */
    public function storeLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'ログアウトしました');
    }
}
