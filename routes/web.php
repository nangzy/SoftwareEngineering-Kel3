<?php

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