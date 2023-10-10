<?php

use Illuminate\Support\Facades\Route;
// Controller読込
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CommentController;

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

// view表示：item
Route::get('/item', [ItemController::class, 'showItemDetail']);

// view表示：purchase
Route::get('/item/purchase', [PurchaseController::class, 'showPurchase']);

// view表示：address
Route::get('/item/address', [UserController::class, 'showAddress']);

// view表示：thanks_purchase
Route::get('/item/purchase/email', [PurchaseController::class, 'showPurchaseMail']);

// view表示：comment
Route::get('/item/comment', [CommentController::class, 'showComment']);

// view表示：mypage
Route::get('/mypage', [ItemController::class, 'showMypage']);

// view表示：profile
Route::get('/mypage/edit', [ItemController::class, 'editProfile']);

// view表示：profile
Route::get('/item/sell', [ItemController::class, 'editSell']);
