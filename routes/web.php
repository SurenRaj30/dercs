<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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