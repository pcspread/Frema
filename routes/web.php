<?php

use Illuminate\Support\Facades\Route;
// Controller読込
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;

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

// view表示：items
Route::get('/', [ItemController::class, 'indexItem']);

// view表示：item
Route::get('/item', [ItemController::class, 'showItemDetail']);

// view表示：item
Route::get('/item/purchase', [PurchaseController::class, 'showPurchase']);

// view表示：auth.send_email
Route::get('/send/email', function () {
    return view('auth.send_email');
});

// view表示：auth.register
Route::get('/register', [UserController::class, 'indexRegister']);

// view表示：auth.login
Route::get('/login', [UserController::class, 'indexLogin']);

// view表示：auth.verify_email
Route::get('/verify/email', [UserController::class, 'indexMail']);
