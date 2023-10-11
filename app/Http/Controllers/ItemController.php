<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\Item;
use App\Models\Favorite;
use App\Models\User;
// Auth読込
use Illuminate\Support\Facades\Auth;
// Request読込
use App\Http\Requests\ProfileRequest;

class ItemController extends Controller
{
    /**
     * view表示
     * items
     * @param void
     * @return view
     */
    public function indexItem()
    {
        $items = Item::all();

        return view('items', compact('items'));
    }

    /**
     * view表示
     * item
     * @param int $id
     * @return view
     */
    public function showItemDetail($id)
    {
        $item = Item::find($id);

        return view('item', compact('item'));
    }

    /**
     * お気に入り登録
     * @param int $id
     * @return view
     */
    public function operateFavorite($id)
    {
        if (empty(Favorite::where('item_id', $id)->first())) {
            // create処理
            Favorite::create([
                'user_id' => Auth::id(),
                'item_id' => $id
            ]);
            return redirect("/item/{$id}")->with('success', 'お気に入りに登録しました');
        } else {
            // delete処理
            Favorite::where('item_id', $id)->first()->delete();
            return redirect("/item/{$id}")->with('success', 'お気に入りを解除しました');
        }

    }

    /**
     * view表示
     * mypage
     * @param void
     * @return view
     */
    public function showMypage()
    {
        // ユーザーデータを取得
        $user = User::find(Auth::id());

        // 標品データを全件取得
        $items = Item::all();

        return view('mypage', compact('user', 'items'));
    }

    /**
     * view表示
     * profile
     * @param void
     * @return view
     */
    public function editProfile()
    {
        // ユーザーデータの取得
        $user = User::find(Auth::id());

        return view('profile', compact('user'));
    }

    /**
     * update処理
     * profile
     * @param object $request
     * @return redirect
     */
    public function updateProfile(ProfileRequest $request)
    {
        // 画像以外のフォーム情報の取得
        $form = $request->only('name', 'postcode', 'address', 'building');
        
        // 画像を取得
        $image = $request->file('image');

        // 画像以外をupdate処理
        User::find(Auth::id())->update($form);

        // 画像が選択されている場合
        if (!empty($image)) {
            $path = $image->store('images', 'public');
            // 画像をupdate処理
            Auth::user()->update(['image' => $path]);
        } 

        return redirect('/mypage/edit')->with('success', '更新が完了しました');
    }


    /**
     * view表示
     * sell
     * @param void
     * @return view
     */
    public function editSell()
    {
        return view('sell');
    }
}
