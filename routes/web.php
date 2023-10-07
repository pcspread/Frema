<?php

use Illuminate\Support\Facades\Route;
// Controller読込
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('items');
});

Route::get('/send/email', function () {
    return view('auth.send_email');
});

// view表示：auth.register
Route::get('/register', [UserController::class, 'indexRegister']);

// view表示：auth.login
Route::get('/login', [UserController::class, 'indexLogin']);

// view表示：auth.verify_email
Route::get('/verify/email', [UserController::class, 'indexMail']);