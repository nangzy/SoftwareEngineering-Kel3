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

// kalau routesnya ke "/" redirect ke home page aja
Route::get('/', function () {
    return redirect('/home');
});

// home
Route::get('/home', [Controller::class, 'home']);

// login
Route::get('/login', [Controller::class, 'loginPage']);
Route::post('/login', [Controller::class, 'loginUser']);

// logout
Route::post('/logout', [Controller::class, 'logout']);

// forgot password
Route::get('/forgot-password', [Controller::class, 'forgotpw']);
Route::get('/forgot-password-confirm', [Controller::class, 'forgotpwConfirm']);

// sign up
Route::get('/sign-up', [Controller::class, 'signup']);
Route::post('/sign-up', [Controller::class, 'signUpUser']);
Route::get('/sign-up-confirm', [Controller::class, 'signupConfirm']);

// user profile
Route::get('/{user_id}/user-profile', [Controller::class, 'userProfile']);
Route::get('/{user_id}/user-profile-edit', [Controller::class, 'userProfileEditGet']);
Route::post('/{user_id}/user-profile-edit', [Controller::class, 'userProfileEdit']);

// ticket
Route::get('/{ticket_id}/buy-ticket', [TicketController::class, 'buyTicket']);
Route::post('/{ticket_id}/buy-ticket', [TicketController::class, 'buyTicketDetail']);
Route::get('/ticket-cat', [TicketController::class, 'ticketCat']);
Route::post('/ticket-cat', [TicketController::class, 'ticketPayment']);
Route::post('/{ticket_id}/detail-buy-ticket', [TicketController::class, 'detailTicket']);

// merch
Route::get('/{merch_id}/buy-merch', [MerchController::class, 'buyMerch']);
Route::post('/{merch_id}/buy-merch', [MerchController::class, 'buyMerchDetail']);
Route::get('/merch-cat', [MerchController::class, 'merchCat']);
Route::post('/merch-cat', [MerchController::class, 'merchPayment']);
Route::post('/{merch_id}/detail-buy-merch', [MerchController::class, 'detailMerch']);

// top up
Route::get('/top-up/{game_cat:id}', [TopUpController::class, 'topUp']);
Route::get('/topup-cat', [TopUpController::class, 'TopCat']);

// transactions
Route::post('/{item_category}/{item_id}/payment-page', [TransactionController::class, 'Payment']);
Route::post('/{item_category}/{item_id}/payment-success', [TransactionController::class, 'paymentSuccess']);
Route::get('/fail-payment', [TransactionController::class, 'failPayment']);
Route::post('/{merch_id}/detail-transaction-merch', [TransactionController::class, 'DetailTransactionMerch']);
Route::get('/detail-transaction-ticket', [TransactionController::class, 'DetailTransactionTicket']);
Route::get('/detail-transaction-topup', [TransactionController::class, 'DetailTransactionTopup']);
Route::get('/success-payment-merch-ticket', [TransactionController::class, 'successPaymentMerchAndTicket']);

// others
Route::get('/faq/{faqs:slug}', [FaqController::class, 'index']);
Route::get('/news/{news:slug}', [NewsController::class, 'index']);
Route::get('/modal', [GameCategoryController::class, 'Modal']);
Route::get('/notification', [Controller::class, 'viewNotification']);

// coming soon
Route::get('/valo-tour', [GameCategoryController::class, 'Valorant']);
Route::get('/mole-tour', [GameCategoryController::class, 'MobileLegend']);
Route::get('/valo-detail', [GameCategoryController::class, 'DetailValorant']);
Route::get('/tournament', [GameCategoryController::class, 'Tournament']);
