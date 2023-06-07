<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/forgot-password', function () {
    return view('forgotpw');
});

Route::get('/notification', function () {
    return view('notification');
});

Route::get('/forgot-password-confirm', function () {
    return view('forgotpw-confirm');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('signup');
});

Route::get('/sign-up-confirm', function () {
    return view('signup-confirm');
});

Route::get('/success-payment-ticket', function () {
    return view('successpaymentTicket');
});

Route::get('/buy-ticket', function () {
    return view('buyTicket');
});

Route::get('/buy-merch', function () {
    return view('buyMerch');
});

Route::get('/payment-page', function () {
    return view('paymentPage');
});

Route::get('/fail-payment', function () {
    return view('failPayment');
});

Route::get('/modal', function () {
    return view('modal');
});

Route::get('/user-profile', function () {
    return view('userProfile');
});

Route::get('/top-up', function () {
    return view('topUp');
});

Route::get('/detail-buy-merch', function () {
    return view('detailBuyMerch');
});

Route::get('/tournament', function () {
    return view('tournament');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/faq', [FaqController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);

Route::get('/topup-cat', function () {
    return view('topup-cat');
});

Route::get('/detail-transaction-merch', function () {
    return view('detailTransactionMerch');
});

Route::get('/detail-transaction-ticket', function () {
    return view('detailTransactionTicket');
});

Route::get('/detail-transaction-topup', function () {
    return view('detailTransactionTopup');
});

Route::get('/valo-tour', function () {
    return view('valorant');
});

Route::get('/mole-tour', function () {
    return view('mobile-legend');
});

Route::get('/valo-detail', function () {
    return view('valodetail');
});
