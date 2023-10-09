<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * view表示
     * purchase
     * @param void
     * @return view
     */
    public function showPurchase()
    {
        return view('purchase');
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
