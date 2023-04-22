<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\checkLogin;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PitchController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;


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
    return view('welcome');
});
Route::middleware([checkLogin::class])->group(function () {
    Route::resource('customer', CustomerController::class);
    Route::resource('pitch', PitchController::class);
    Route::resource('booking', BookingController::class);
    Route::resource('dashboard', DashboardController::class);
    

});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
