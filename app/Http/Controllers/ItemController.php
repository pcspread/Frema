<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\Item;

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
