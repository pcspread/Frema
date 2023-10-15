<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\Item;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\User;
use App\Models\Purchase;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Condition;

// Auth読込
use Illuminate\Support\Facades\Auth;
// Request読込
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\ItemRequest;
// Carbon読込
use Carbon\Carbon;

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
     * items
     * @param void
     * @return view
     */
     public function indexItemFavorite()
     {
        // お気に入り商品を選定
        $favorites = Favorite::select('item_id')->get();

        // 商品データ格納用の変数を定義
        $records = [];

        foreach ($favorites as $favorite) {
            if (Item::find($favorite->item_id)) {
                $records[] = Item::find($favorite->item_id);
            }
        }

        $items = collect($records);

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
        // 商品情報の取得
        $item = Item::find($id);

        // お気に入り数の取得
        $favorite = count(Favorite::where('item_id', $id)->get());

        // コメント数の取得
        $comment = count(Comment::where('item_id', $id)->get());

        return view('item', compact('item', 'favorite', 'comment'));
    }

    /**
     * お気に入り登録
     * @param int $id
     * @return redirect
     */
    public function operateFavorite($id)
    {
        if (empty(Favorite::where('user_id', Auth::id())->where('item_id', $id)->first())) {
            // create処理
            Favorite::create([
                'user_id' => Auth::id(),
                'item_id' => $id
            ]);
            return redirect("/item/{$id}")->with('success', 'お気に入りに登録しました');
        } else {
            // delete処理
            Favorite::where('user_id', Auth::id())->where('item_id', $id)->first()->delete();
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

        // 出品した商品データを全件取得
        $items = Item::where('user_id', Auth::id())->get();

        return view('mypage', compact('user', 'items'));
    }

    /**
     * マイページの抽出処理(購入した商品)
     * @param void
     * @return view
     */
    public function searchMypagePurchase()
    {
        // ユーザーデータを取得
        $user = User::find(Auth::id());

        // 購入した商品データを全件取得
        $items = Item::onlyTrashed()->where('buyer', Auth::id())->get();

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

        return redirect('/mypage')->with('success', '変更が完了しました');
    }

    /**
     * view表示
     * sell
     * @param void
     * @return view
     */
    public function editSell()
    {
        // ログインしていない場合
        if (empty(Auth::user()->invite)) {
            return back()->with('danger', '出品には管理者の許可が必要です');
        }

        // ブランド情報を取得
        $brands = Brand::all();

        // カテゴリー情報の取得
        $categories = Category::all();

        // コンディション情報の取得
        $conditions = Condition::all();
        
        return view('sell', compact('brands', 'categories', 'conditions'));
    }

    /**
     * 出品処理
     * @param object $request
     * @return back
     */
    public function updateSell(ItemRequest $request)
    {
        // 画像以外のフォーム情報の取得
        $form = $request->only('brand', 'new_brand', 'category', 'condition', 'gender', 'name', 'content', 'price');
        
        
        // 新しいブランドが入力されている場合
        if (!empty($form['new_brand'])) {
            // ブランド追加処理
            Brand::create([
                'name' => $form['new_brand'],
            ]);
            $brand_result = $form['new_brand'];
        } else {
            $brand_result = $form['brand'];
        }
        
        // 画像を取得
        $image = $request->file('image');
        
        // 画像のパスを格納
        $path = $image->store('images', 'public');
        
        // create処理
        Item::create([
            'user_id' => Auth::id(),
            'brand_id' => Brand::where('name', $brand_result)->first()['id'],
            'category_id' => Category::where('name', $form['category'])->first()['id'],
            'condition_id' => Condition::where('name', $form['condition'])->first()['id'],
            'gender' => $form['gender'],
            'image' => $path,
            'name' => $form['name'],
            'content' => $form['content'],
            'price' => $form['price'],
            'created_at' => Carbon::now()->__toString(),
            'updated_at'=> Carbon::now()->__toString(),
        ]);

        return back()->with('success', '商品を出品しました');
    }
}
