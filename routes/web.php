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
    return view('welcome');
});

Route::get('/index.html', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/clinic.html', [App\Http\Controllers\HomeController::class, 'clinic'])->name('clinic');
Route::get('/service.html', [App\Http\Controllers\HomeController::class, 'service'])->name('service');
Route::get('/staff.html', [App\Http\Controllers\HomeController::class, 'staff'])->name('staff');
Route::get('/access.html', [App\Http\Controllers\HomeController::class, 'access'])->name('access');


