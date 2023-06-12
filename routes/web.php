<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\GameCategoryController;


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
    return redirect('/home');
});

Route::get('/forgot-password', [Controller::class, 'forgotpw']);
Route::get('/forgot-password-confirm', [Controller::class, 'forgotpwConfirm']);
Route::get('/login', [Controller::class, 'loginPage']);
Route::post('/login', [Controller::class, 'loginUser']);
Route::post('/logout', [Controller::class, 'logout']);
Route::get('/sign-up', [Controller::class, 'signup']);
Route::get('/sign-up-confirm', [Controller::class, 'signupConfirm']);

Route::get('/user-profile', [Controller::class, 'userProfile']);
Route::get('/home', [Controller::class, 'home']);

Route::get('/success-payment-ticket', [TicketController::class, 'SuccessTicket']);
Route::get('/buy-ticket', [TicketController::class, 'buyTicket']);

Route::get('/buy-merch', [MerchController::class, 'buyMerch']);
Route::get('/detail-buy-merch', [MerchController::class, 'detailMerch']);

Route::get('/payment-page', [TransactionController::class, 'Payment']);
Route::get('/fail-payment', [TransactionController::class, 'failPayment']);

Route::get('/top-up', [TopUpController::class, 'Topup']);
Route::get('/topup-cat', [TopUpController::class, 'TopCat']);

Route::get('/faq/{faqs:slug}', [FaqController::class, 'index']);
Route::get('/news/{news:slug}', [NewsController::class, 'index']);

Route::get('/detail-transaction-merch', [TransactionController::class, 'DetailTransactionMerch']);
Route::get('/detail-transaction-ticket', [TransactionController::class, 'DetailTransactionTicket']);
Route::get('/detail-transaction-topup', [TransactionController::class, 'DetailTransactionTopup']);

Route::get('/modal', [GameCategoryController::class, 'Modal']);


Route::get('/ticket-cat', function(){
    return view('buy.ticket-cat');
});

// coming soon

Route::get('/valo-tour', [GameCategoryController::class, 'Valorant']);
Route::get('/mole-tour', [GameCategoryController::class, 'MobileLegend']);
Route::get('/valo-detail', [GameCategoryController::class, 'DetailValorant']);
Route::get('/tournament', [GameCategoryController::class, 'Tournament']);
