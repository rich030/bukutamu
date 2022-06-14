<?php

use App\Http\Controllers\TamuController;
use App\Http\Controllers\LoginController;
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



Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/datatamu', [TamuController::class, 'index'])->name('tamu.datatamu');
    Route::get('/inputtamu', [TamuController::class, 'create'])->name('tamu.inputtamu');
    Route::post('/simpantamu', [TamuController::class, 'store'])->name('tamu.simpantamu');
    Route::get('/edittamu/{id}', [TamuController::class, 'edit'])->name('tamu.edittamu');
    Route::post('/updatetamu/{id}', [TamuController::class, 'update'])->name('tamu.updatetamu');
    Route::get('/deletetamu/{id}', [TamuController::class, 'destroy'])->name('tamu.deletetamu');

});

Route::get('/home', [HomeController::class, 'index'])->name('home');




