<?php

namespace App\Http\Controllers\Admin;
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
    return view('welcome');
});

Route::prefix('/admin')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('admin.index');
    
    Route::get('/login', [AuthController::class, 'login'])->name('admin.auth.login');

    Route::post('/login', [AuthController::class, 'checkLogin'])->name('admin.auth.check-login');
});

Route::prefix('/admin')->middleware('auth.login')->group(function() {

    Route::resource('woodblocks', WoodblockController::class);
});