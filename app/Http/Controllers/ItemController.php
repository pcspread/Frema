<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\Item;
use App\Models\Favorite;
// Auth読込
use Illuminate\Support\Facades\Auth;

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
        return view('mypage');
    }

    /**
     * view表示
     * profile
     * @param void
     * @return view
     */
    public function editProfile()
    {
        return view('profile');
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
