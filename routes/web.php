<?php

use App\Http\Controllers\IndexPageController;
use App\Http\Controllers\Index_2Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisualSettingsController;

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

Route::get('/', [IndexPageController::class, 'index'])->name('index');

Route::post('/send_mail', [IndexPageController::class, 'send_mail'])->name('send_mail');

Route::post('/filter', [IndexPageController::class, 'filter'])->name('table.filter');

Route::get('/index_v2', [Index_2Controller::class, 'index'])->name('index_v2');

Route::get('/ajax_get_user', [IndexPageController::class, 'ajax_get_user'])->name('ajax_get_user');

Route::post('/ajax_update_user', [IndexPageController::class, 'ajax_update_user'])->name('ajax_update_user');

Route::get('/ajax_get_service', [IndexPageController::class, 'ajax_get_service'])->name('ajax_get_service');

Route::post('/ajax_update_service', [IndexPageController::class, 'ajax_update_service'])->name('ajax_update_service');

Route::delete('/user_delete', [IndexPageController::class, 'user_delete'])->name('user_delete');

Route::post('/user_restore', [IndexPageController::class, 'user_restore'])->name('user_restore');

Route::get('/user_show_active', [IndexPageController::class, 'user_show_active'])->name('user_show_active');

Route::get('/user_show_deleted', [IndexPageController::class, 'user_show_deleted'])->name('user_show_deleted');

Route::delete('/service_delete', [IndexPageController::class, 'service_delete'])->name('service_delete');

Route::post('/service_restore', [IndexPageController::class, 'service_restore'])->name('service_restore');

Route::get('/service_show_active', [IndexPageController::class, 'service_show_active'])->name('service_show_active');

Route::get('/service_show_deleted', [IndexPageController::class, 'service_show_deleted'])->name('service_show_deleted');

Route::post('/update_robots', [IndexPageController::class, 'update_robots'])->name('update_robots');

Route::get('/generate-sitemap', [IndexPageController::class, 'generate_sitemap'])->name('generate-sitemap');

Route::get('/ajax_filter_get_incoming_letters_mess', [IndexPageController::class, 'ajax_filter_get_incoming_letters_mess'])->name('ajax_filter_get_incoming_letters_mess');

Route::get('/ajax_filter_get_sent_letters_mess', [IndexPageController::class, 'ajax_filter_get_sent_letters_mess'])->name('ajax_filter_get_sent_letters_mess');

Route::get('/ajax_filter_get_selected_letters_mess', [IndexPageController::class, 'ajax_filter_get_selected_letters_mess'])->name('ajax_filter_get_selected_letters_mess');

Route::get('/ajax_filter_get_deleted_letters_mess', [IndexPageController::class, 'ajax_filter_get_deleted_letters_mess'])->name('ajax_filter_get_deleted_letters_mess');

Route::post('/upload_settings', [VisualSettingsController::class, 'upload_settings'])->name('upload_settings');

Route::view('/auth_page','auth_page')->name('admin_auth');

Route::post('/auth', [UserController::class, 'auth'])->name('auth');

Route::post('/registrate', [UserController::class, 'registrate'])->name('registrate');
