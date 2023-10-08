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
}
