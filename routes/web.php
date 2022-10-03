<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SiteController;

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
Route::post('sendmail', [MailController::class, 'sendMail']);

Route::get('/', [AuthController::class, 'loginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
Route::get('/logout', [AuthController::class, 'logout']);



// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/dashboard', function(){
//         return view('auth.dashboard');
//     })->middleware('auth');
    
//     Route::get('/crud', function(){
//         return view('customerfile.crud');
//     })->middleware('auth');
    
//     Route::get('/edit/{customera}', [CustomerController::class, 'edit'])->middleware('auth');
//     Route::get('/delete/{customera}', [CustomerController::class, 'destroy'])->middleware('auth');
    
// });

Route::group(['middleware' => ['auth', 'verified']], function(){
    Route::get('/dashboard', function(){
        return view('auth.dashboard');
    });
    Route::get('/crud', function(){
        return view('customerfile.crud');
    });
    Route::get('/edit/{customera}', [CustomerController::class, 'edit']);
    Route::get('/delete/{customera}', [CustomerController::class, 'destroy']);
    Route::get('/logs', [SiteController::class, 'logs']);
});
