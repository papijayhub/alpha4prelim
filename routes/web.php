<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AuthController;

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


Route::get('/dashboard', function(){
    return view('auth.dashboard');
})->middleware('auth');