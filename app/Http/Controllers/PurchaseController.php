<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\Item;
use App\Models\Purchase;
use App\Models\User;
// Auth読込
use Illuminate\Support\Facades\Auth;
// Mail読込
use Illuminate\Support\Facades\Mail;
use App\Mail\PurchaseMail;
// DB読込
use Illuminate\Support\Facades\DB;
// Log読込
use Illuminate\Support\Facades\Log;

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

        // ログインしていない場合
        if (!Auth::check()) {
            return redirect("/item/{$id}")->with('danger', '購入の場合は会員登録が必要です');
        }

        return view('purchase', compact('item'));
    }

    /**
     * 購入処理
     * @param int $id
     * @return back
     * @return redirect
     */
    public function updatePurchaseBuy($id, Request $request)
    {
        // ユーザーデータの取得
        $user = User::find(Auth::id());

        // 配送先を選択していない場合
        if (empty($user['postcode']) || empty($user['address'])) {
            return back()->with('danger', '配送先を指定してください');
        }

        // 金額情報の取得
        $item = Item::find($id);

        // トランザクション開始
        DB::beginTransaction();

        try {
            // update処理(Item)
            Item::find($id)->update([
                'buyer' => Auth::id(),
            ]);
            // delete処理(Item)
            Item::find($id)->delete();
            DB::commit();
        } catch (\PDOException $e) {
            DB::rollback();
            // エラー内容を保存
            Log::error('データベース接続失敗', [
                'content' => $e->getMessage(),
                'location' => $e->getFile(),
                'row' => $e->getLine()
            ]);
        }
        
        // 購入詳細メール送信処理
        Mail::send(new PurchaseMail($user['name'], $user['email'], $user['postcode'], $user['address'], $user['building'], $item['method'], $item['price']));

        // 二重送信防止処理
        $request->session()->regenerateToken();
        
        return redirect("/item/{$id}/purchase/email");
    }

    /**
     * 購入方法変更処理
     * @param int $id
     * @return back
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
                $purchase = '銀行振込';
                break;
            case 'case3':
                $purchase = '現金払い';
                break;
        }

        // update処理
        Item::find($id)->update([
            'method' => $purchase,
        ]);

        return back()->with('success', '購入方法を変更しました');
    }

    /**
     * view表示
     * thanks_purchase
     * @param int $id
     * @return view
     */
    public function showPurchaseMail($id)
    {
        return view('thanks_purchase');
    }
}
