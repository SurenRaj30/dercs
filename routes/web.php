<?php

use Illuminate\Support\Facades\Route;
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

//Route to the main page = customer login page
Route::get('/', [LoginController::class, 'viewCustLogin']);

//Route to registration interfaces
Route::get('/registerCust', [UserController::class, 'viewCustForm']);
Route::get('/registerStaff', [UserController::class, 'viewStaffForm']);
Route::get('/registerRun', [UserController::class, 'viewRunnerForm']);

//Route to registration validations
Route::post('/save', [UserController::class, 'saveCust']);
Route::post('/saveStaff', [UserController::class, 'saveStaff']);
Route::post('/saveRunner', [UserController::class, 'saveRun']);

//Route to login interfaces
Route::get('/loginStaff', [LoginController::class, 'viewStaffLogin']);
Route::get('/loginRun', [LoginController::class, 'viewRunnerLogin']);

//Route to login validations
Route::post('/loginCust', [LoginController::class, 'check']);
Route::post('/loginStaff', [LoginController::class, 'checkStaff']);
Route::post('/loginRunner', [LoginController::class, 'checkRunner']);


/*check session before login
havent check; dont uncomment

Route::get('/login', function() {

    if (session()->has('logged'))
    {
        return view('manageAccount.account_customer');
    }

    return view('manageAuth.login');
});*/


//Destroy session after log out

Route::get('/logOut', function() 
{
    if(session()->has('logged'))
    {
        session()->pull('logged');
    }

    return view('manageAuth.login');
});
