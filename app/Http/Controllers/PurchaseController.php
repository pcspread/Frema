<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\Item;

class PurchaseController extends Controller
{
    /**
     * view表示
     * purchase
     * @param int $id
     * @return view
     */
    public function showPurchase($id)
    {
        // 該当の商品データを取得
        $item = Item::find($id);

        return view('purchase', compact('item'));
    }

    /**
     * view表示
     * thanks_purchase
     * @param void
     * @return view
     */
    public function showPurchaseMail()
    {
        return view('thanks_purchase');
    }
}
