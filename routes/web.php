<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/{any}', function () {
    return view('index');
  })->where('any', '.*');

Route::get('/paystack', function () {
    return view('paystack');
});

Auth::routes();

Route::post('/continue_to_donate', [PaymentController::class, 'continueToDonate'])->name('continue_to_donate');
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/confirm_pay', [PaymentController::class, 'confirm_pay']);
Route::get('/success', [PaymentController::class, 'success']);
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
Route::get('all_donations', [PaymentController::class, 'all_donations'])->name('all_donations');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
