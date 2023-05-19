<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\ShowtimeController;

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
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::get('/', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'create'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('listUser',[CustomAuthController::class,'listUser']);

//Categories
Route::resource('/categories', categoriesController::class);
// Route::get('/categories', [categoriesController::class,'index'])->name('categories.index');
// Route::get('/categories/create', [categoriesController::class,'create'])->name('categories.create');

//room
Route::resource('/room', RoomController::class);
// Route::get('/room', [RoomController::class,'index'])->name('room.index');
// Route::get('/room/create', [RoomController::class,'create'])->name('room.create');

//Seat
Route::resource('/seat', SeatController::class);
Route::get('/seat', [SeatController::class,'index'])->name('seat.index');
Route::get('/seat/create', [SeatController::class,'create'])->name('seat.create');

//films
Route::resource('/films', FilmsController::class);
// Route::get('/films', [FilmsController::class,'index'])->name('films.index');

Route::resource('/fontend', FrontendController::class);

Route::resource('/staffs', StaffController::class);
Route::resource('/voucher', VoucherController::class);
Route::resource('/cinemas', CinemaController::class);
Route::resource('/showtimes', ShowtimeController::class);
