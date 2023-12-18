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


//harus login jika ingin mengakses domain atau controller berikut
Route::group(['middleware' => 'auth'], function () {
Route::post('logout', [AuthController::class, 'logout']);

//kaset
Route::get('/Cassette', function () {
    return view('kaset');
});
Route::get('/Cassette', [KasetController::class, 'index']);

//CD
Route::get('/CompactDisk', function () {
    return view('compactdisk');
});
Route::get('/CompactDisk', [CompactdiskController::class, 'index']);

//pembayara
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/payment/{id}', [PaymentController::class, 'showkaset'])->name('payment');
Route::get('/payment/{id}', [PaymentController::class, 'showcompactdisk'])->name('payment');
Route::get('/checkout/{kaset_id}/{order_id}', [PaymentController::class, 'payment_show'])->name('checkout');

Route::post('checkout', [PaymentController::class, 'checkout']);
Route::post('/midtrans-callback', [PaymentController::class, 'callback']);
});
