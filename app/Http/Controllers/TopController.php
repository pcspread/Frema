<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\User;
use App\Models\Top;
use App\Models\Owner;
use App\Models\Invite;

class TopController extends Controller
{
    /**
     * view表示
     * admin.top_user
     * @param void
     * @return view
     */
    public function indexTopUser()
    {
        // ユーザー情報を全件取得(top,ownerを除く)
        $users = User::where('email' , '!=', Top::find(1)['email'])->where('email', '!=', Owner::find(1)['email'])->get();

        return view('admin.top_user', compact('users'));
    }

    /**
     * create処理
     * ユーザーの招待処理
     * @param object $request
     * @param back
     */
    public function createTopUser(Request $request)
    {
        // create処理
        Invite::create([
            'user_id' => $request->id,
        ]);

        // ユーザー名を取得
        $name = User::find($request->id)['name'];

        if (empty($name)) {
            return back()->with('success', "招待しました");
        } else {
            return back()->with('success', "「{$name}」を招待しました");
        }
    }

    /**
     * delete処理
     * ユーザー削除処理
     * @param object $request
     * @return back
     */
    public function destroyTopUser(Request $request)
    {
        // delete処理
        User::find($request['id'])->delete();

        return back()->with('success', '削除しました');
    }

    /**
     * view表示
     * admin.top_invite
     * @param void
     * @return view
     */
    public function indexTopInvite()
    {
        return view('admin.top_invite');
    }
}
