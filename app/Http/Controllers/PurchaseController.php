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
}
