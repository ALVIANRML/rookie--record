<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CD\CompactdiskController;
use App\Http\Controllers\Kaset\KasetController;
use App\Http\Controllers\PaymentController;

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
    return view('menu');
});
// register,login,logout
Route::get('/register', function () {
    return view('register');
});
Route::post('register',[AuthController::class, 'storeregister']);

Route::get('/login', function () {
    return view('login');
});
Route::post('login', [AuthController::class, 'authenticate']);
Route::post('logout', [AuthController::class, 'logout']);


Route::get('/Cassette', function () {
    return view('kaset');
});
Route::get('/Cassette', [KasetController::class, 'index']);

Route::get('/CompactDisk', function () {
    return view('compactdisk');
});
Route::get('/CompactDisk', [CompactdiskController::class, 'index']);

// Route::get('/payment', function () {
//     return view('payment');
// });
Route::get('/payment/{id}', [PaymentController::class, 'show'])->name('payment');
Route::post('checkout', [PaymentController::class, 'checkout']);
