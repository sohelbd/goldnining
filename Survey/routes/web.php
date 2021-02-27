<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -----------------------------login-----------------------------------------
// Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
// Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// // ------------------------------register---------------------------------------
// Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
// Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@storeUser')->name('register');

// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

//-------------------------------------System Controller Start Here ------------------------------------
//Route::resource('system', 'systemController@index');
Route::get('/system', 'App\Http\Controllers\systemController@index');
Route::post('/system/shaft_store', 'App\Http\Controllers\systemController@staftStore');
Route::get('/system/shaft_delete', 'App\Http\Controllers\systemController@staftDelete');
//Route::resource('system', systemController::class);
//Route::resource('shaft', shaftConrtoller::class);
//Route::get('/system/heading', 'App\Http\Controllers\systemController@headingIndex');

//-----------------------------------Heading Controller Start Here-------------------------------------
use App\Http\Controllers\ProductController;
  
Route::resource('products', ProductController::class);

Route::get('/period', 'App\Http\Controllers\PeriodController@index');
Route::get('/peg', 'App\Http\Controllers\PegController@index');
Route::get('/structure', 'App\Http\Controllers\StructureController@index');
Route::get('/survey_stopping', 'App\Http\Controllers\SurveyStoppingController@index');
Route::get('/heading', 'App\Http\Controllers\HeadingController@index');
Route::get('/user_management', 'App\Http\Controllers\UserManagementController@index');
Route::get('/minemeth', 'App\Http\Controllers\MineMethController@index');

//Budget 
Route::get('/millbudget', 'App\Http\Controllers\MillBudgetController@index');
Route::get('/minebudget', 'App\Http\Controllers\MineBudgetController@index');


//Development
Route::get('/development', 'App\Http\Controllers\DevelopmentController@index');

//Development
Route::get('/report', 'App\Http\Controllers\ReportController@index');

//Monthly
Route::get('/stock_pile', 'App\Http\Controllers\StockPileController@index');
Route::get('/mill_actual', 'App\Http\Controllers\MillActualController@index');
Route::get('/mine_actual', 'App\Http\Controllers\MineActualController@index');
Route::get('/firm_mill_actual', 'App\Http\Controllers\FirmMillActualController@index');



