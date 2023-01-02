<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\MenuController;

use App\Http\Controllers\PanelController;
use Illuminate\Auth\Events\Logout;

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

Route::resource('/', HomeController::class);

Route::resource('dashboard', DashboardController::class)->middleware('auth');
Route::resource('setting', SettingController::class)->middleware('auth');

Route::resource('resto', ProductController::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');
Route::resource('blog', BlogController::class)->middleware('auth');
Route::resource('menu', MenuController::class)->middleware('auth');

Route::resource('counter', CounterController::class)->middleware('admin');

Route::resource('user', UserController::class)->middleware('superadmin');
Route::resource('config', ConfigController::class)->middleware('superadmin');
Route::resource('contact', ContactController::class)->middleware('superadmin');

Route::get('/panel', [PanelController::class, 'index'])->name('panel')->middleware('guest');
Route::post('/panel', [PanelController::class, 'authentication'])->name('authentication');
Route::post('/logout', [PanelController::class, 'logout'])->name('logout');
