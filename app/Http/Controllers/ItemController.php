<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('items');
    }

    /**
     * view表示
     * item
     * @param void
     * @return view
     */
    public function showItemDetail()
    {
        return view('item');
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
