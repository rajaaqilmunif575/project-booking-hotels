<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\dashboardcontroller;
use App\Http\Controllers\homecontroller;
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


// Route::get('/detail', [homecontroller::class, 'detail']);
Route::get('/', [homecontroller::class, 'index']);
// Route::get('/contact', [homecontroller::class, 'contact']);



Route::get('admin/dashboard', [dashboardcontroller::class, 'index']);
