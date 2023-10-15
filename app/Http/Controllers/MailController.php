<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Request読込
use App\Http\Requests\MessageRequest;
// Model読込
use App\Models\User;
use App\Models\Top;
use App\Models\Owner;
// Mail読込
use Illuminate\Support\Facades\Mail;
use App\Mail\OwnerMail;


class MailController extends Controller
{
    /**
     * view表示
     * admin.mail
     * @param void
     * @return view
     */
    public function indexOwnerMail()
    {
        return view('admin.mail');
    }

    /**
     * メール送信処理
     * @param object $request
     * @return back
     */
    public function storeOwnerMail(MessageRequest $request)
    {
        // フォーム情報の取得
        $form = $request->only('title', 'content');

        // ユーザーデータを全件取得(top,owner以外)
        $users = User::where('email', '!=', Top::find(1)['email'])->where('email', '!=', Owner::find(1)['email'])->get();

        // 各ユーザーへメール送信処理
        foreach ($users as $user) {
            Mail::send(new OwnerMail($user['email'], $form['title'], $form['content']));
        }

        return back()->with('success', 'メールを送信しました');
    }
}
