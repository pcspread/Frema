<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\User;
use App\Models\Top;
use App\Models\Owner;
use App\Models\Invite;


class OwnerController extends Controller
{
    /**
     * view表示
     * admin.owner_user
     * @param void
     * @return view
     */
    public function indexOwnerUser()
    {
        // ユーザーデータを取得
        $users = User::where('email', '!=', Top::find(1)['email'])->where('email', '!=', Owner::find(1)['email'])->get();

        return view('admin.owner_user', compact('users'));
    }

    /**
     * ユーザー削除処理
     * @param void
     * @return back
     */
    public function destroyOwnerUser(Request $request)
    {
        // delete処理
        User::find($request->id)->delete();

        return back()->with('success', "ID「{$request->id}」のデータを削除しました");
    }

    /**
     * view表示
     * admin.owner_invite
     * @param void
     * @return view
     */
    public function indexOwnerInvite()
    {
        // 招待情報の取得
        $invites = Invite::orderBy('created_at', 'desc')->get();

        return view('admin.owner_invite', compact('invites'));
    }
}
