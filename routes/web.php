<?php

use App\Http\Controllers\Controller;
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

Route::get('/forgot-password', [Controller::class, 'forgotpw']);
Route::get('/forgot-password-confirm', [Controller::class, 'forgotpwConfirm']);
Route::get('/login', [Controller::class, 'loginPage']);
Route::get('/sign-up', [Controller::class, 'signup']);
Route::get('/sign-up-confirm', [Controller::class, 'signupConfirm']);

Route::get('/user-profile', [Controller::class, 'userProfile']);
Route::get('/home', [Controller::class, 'home']);

Route::get('/success-payment-ticket', function () {
    return view('successpaymentTicket');
});

Route::get('/buy-ticket', function () {
    return view('buyTicket');
});

Route::get('/buy-merch', function () {
    return view('buyMerch');
});
Route::get('/detail-buy-merch', function () {
    return view('detailBuyMerch');
});

Route::get('/payment-page', function () {
    return view('paymentPage');
});

Route::get('/fail-payment', function () {
    return view('failPayment');
});




Route::get('/top-up', function () {
    return view('topUp');
});
Route::get('/topup-cat', function () {
    return view('topup-cat');
});


Route::get('/tournament', function () {
    return view('tournament');
});

Route::get('/faq/{faqs:slug}', [FaqController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);


Route::get('/detail-transaction-merch', function () {
    return view('detailTransactionMerch');
});

Route::get('/detail-transaction-ticket', function () {
    return view('detailTransactionTicket');
});

Route::get('/detail-transaction-topup', function () {
    return view('detailTransactionTopup');
});

Route::get('/modal', function () {
    return view('modal');
});
// coming soon 

Route::get('/valo-tour', function () {
    return view('valorant');
});

Route::get('/mole-tour', function () {
    return view('mobile-legend');
});

Route::get('/valo-detail', function () {
    return view('valodetail');
});
