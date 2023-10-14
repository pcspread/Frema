<?php

use Illuminate\Support\Facades\Route;
// Controller読込
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// ===============================================
// ↓↓↓↓↓↓消す↓↓↓↓↓↓
// view表示：auth.send_email
Route::get('/send/email', function () {
    return view('auth.send_email');
});
// ===============================================
// ================================================
// auth関係
// ================================================
// view表示：auth.register
Route::get('/register', [UserController::class, 'indexRegister']);

// store処理
Route::post('/register', [UserController::class, 'storeRegister']);

// view表示：auth.login
Route::get('/login', [UserController::class, 'indexLogin']);

// login処理
Route::post('/login', [UserController::class, 'storeLogin']);

// view表示：auth.verify_email
Route::get('/verify/email', [UserController::class, 'indexMail']);

// 認証メール再送信処理
Route::post('/verify/email', [UserController::class, 'resendMail']);

// view表示：auth.thanks
Route::get('/thanks', [UserController::class, 'indexThanks']);

// view表示：auth.logout
Route::get('/logout', [UserController::class, 'storeLogout']);

// ================================================
// その他
// ================================================

// view表示：items
Route::get('/', [ItemController::class, 'indexItem']);

// 商品一覧ページの抽出処理(マイリスト)
Route::get('/favorite', [ItemController::class, 'indexItemFavorite']);

// view表示：item
Route::get('/item/{id}', [ItemController::class, 'showItemDetail']);

// お気に入り登録
Route::post('/item/{id}', [ItemController::class, 'operateFavorite']);

// view表示：purchase
Route::get('/item/{id}/purchase', [PurchaseController::class, 'showPurchase']);

// 購入方法変更処理
Route::patch('/item/{id}/purchase', [PurchaseController::class, 'updatePurchase']);

// 購入処理
Route::post('/item/{id}/purchase', [PurchaseController::class, 'updatePurchaseBuy']);

// view表示：address
Route::get('/item/{id}/address', [UserController::class, 'showAddress']);

// 住所更新処理
Route::post('/item/{id}/address', [UserController::class, 'updateAddress']);

// view表示：thanks_purchase
Route::get('/item/{id}/purchase/email', [PurchaseController::class, 'showPurchaseMail']);

// view表示：comment
Route::get('/item/{id}/comment', [CommentController::class, 'showComment']);

// コメント送信処理
Route::post('/item/{id}/comment', [CommentController::class, 'updateComment']);

// view表示：mypage
Route::get('/mypage', [ItemController::class, 'showMypage']);

// マイページの抽出処理(購入した商品)
Route::get('/mypage/purchase', [ItemController::class, 'searchMypagePurchase']);

// view表示：profile
Route::get('/mypage/profile', [ItemController::class, 'editProfile']);

// update処理：profile
Route::post('/mypage/profile', [ItemController::class, 'updateProfile']);

// view表示：profile
Route::get('/sell', [ItemController::class, 'editSell']);

// 出品処理
Route::post('/sell', [ItemController::class, 'updateSell']);

// ================================================
// admin
// ================================================
// view表示：admin.top_user
Route::get('/admin/top', [TopController::class, 'indexTopUser']);

// view表示：admin.top_invite
Route::get('/admin/top/invite', [TopController::class, 'indexTopInvite']);

// view表示：admin.mail
Route::get('/admin/mail', [MailController::class, 'indexOwnerMail']);

// view表示：admin.top_user
Route::get('/admin/owner', [OwnerController::class, 'indexOwnerUser']);

// view表示：admin.top_invite
Route::get('/admin/owner/invite', [OwnerController::class, 'indexOwnerInvite']);