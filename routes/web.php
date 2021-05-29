<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/regCust', 'manageRegistration/regCust');
Route::view('/regStaff', 'manageRegistration/regStaff');
Route::view('/regRun', 'manageRegistration/regRun');

Route::post('/save', [UserController::class, 'saveCust']);
Route::post('/saveStaff', [UserController::class, 'saveStaff']);
Route::post('/saveRunner', [UserController::class, 'saveRun']);


Route::view('/login', 'manageAuth/login');

Route::view('/registerCust', 'manageRegistration/regCust');
Route::view('/registerRun', 'manageRegistration/regRun');

Route::post('/loginValid', [LoginController::class, 'check']);

//payment route

Route::get('bizappay','PaymentController@create')->name('bizappay');
Route::get('bizappay-status','PaymentController@status')->name('bizappay-status');
Route::post('bizappay-callback','PaymentController@callback')->name('bizappay-callback');

Route::get('toyyibpay','ToyyibpayController@createBill')->name('toyyibpay-create');
Route::get('toyyibpay-status','ToyyibpayController@paymentStatus')->name('toyyibpay-status');
Route::post('toyyibpay-callback','ToyyibpayController@callback')->name('toyyibpay-callback');

Route::view('/checkout', 'managePayment/checkout');