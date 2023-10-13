<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model読込
use App\Models\Item;
use App\Models\Brand;
use App\Models\Comment;
// Request読込
use App\Http\Requests\CommentRequest;
// Auth読込
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * view表示
     * comment
     * @param int $id
     * @return view
     */
    public function showComment($id)
    {
        // 商品情報を取得
        $item = Item::find($id);

        // ブランド名を取得
        $brand = Brand::where('id', $item['brand_id'])->first()['name'];

        // コメント情報の取得
        $comments = Comment::where('item_id', $id)->get();

        return view('comment', compact('item', 'brand', 'comments'));
    }

    /**
     * コメント送信処理
     * @param int $id
     * @return back
     */
    public function updateComment($id, CommentRequest $request)
    {
        // フォーム情報の取得
        $form = $request->only('checkbox', 'user_name', 'name', 'content');

        // 名前の入力が無い場合
        if ($form['checkbox'] === 'new') {
            if (empty($form['name'])) {
                return back()->withInput()->with('danger', '名前を入力してください');
            } else {
                $name = $form['name'];
            }
        } else {
            // 名前の入力が有る場合
            $name = $form['user_name'];
        }

        // create処理
        Comment::create([
            'user_id' => Auth::id(),
            'item_id' => $id,
            'name' => $name,
            'content' => $form['content'],
        ]);

        return back()->with('success', 'コメントを送信しました');
    }
}
