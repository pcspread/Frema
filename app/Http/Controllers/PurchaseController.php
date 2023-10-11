<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\Item;
use App\Models\Purchase;
// Auth読込
use Illuminate\Support\Facades\Auth;

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

        // ログインしている場合
        if (Auth::check()) {
            // 購入方法(purchases)に登録が無い場合の処理
            if (empty(Purchase::where('user_id', Auth::id())->where('item_id', $id)->first()['method'])) {
                // 購入方法の初期データを作成
                Purchase::create([
                    'user_id' => Auth::id(),
                    'item_id' => $id,
                    'method' => 'コンビニ払い',
                ]);
            }
        } else {
            return redirect("/item/{$id}")->with('danger', '購入の場合は会員登録が必要です');
        }

        return view('purchase', compact('item'));
    }

    /**
     * 購入方法変更処理
     * @param int $id
     * @return redirect
     */
    public function updatePurchase($id, Request $request)
    {
        // フォーム情報の取得
        $method = $request->only('method');

        // 購入方法格納用に変数を定義
        $purchase = '';

        // 購入方法を格納
        switch ($method['method']) {
            case 'case1':
                $purchase = 'コンビニ払い';
                break;
            case 'case2':
                $purchase = '口座振替';
                break;
            case 'case3':
                $purchase = '現金払い';
                break;
        }

        // update処理
        Purchase::where('user_id', Auth::id())->where('item_id', $id)->first()->update([
            'method' => $purchase,
        ]);

        return back()->with('success', '購入方法を変更しました');

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
