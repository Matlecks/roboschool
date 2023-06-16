<?php

use App\Http\Controllers\IndexPageController;
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

Route::get('/',[IndexPageController::class,'index'])->name('index');

Route::post('/send_mail', [IndexPageController::class, 'send_mail'])->name('send_mail');
