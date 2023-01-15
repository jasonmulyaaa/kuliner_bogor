<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AlurController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PageTitleController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\MenuController;

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BlogUserController;
use App\Http\Controllers\ProductUserController;
use App\Http\Controllers\CategoryUserController;
use App\Http\Controllers\ContactUsController;

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
Route::resource('banner', BannerController::class)->middleware('admin');
Route::resource('alur', AlurController::class)->middleware('admin');
Route::resource('testimonial', TestimonialController::class)->middleware('admin');
Route::resource('partner', PartnerController::class)->middleware('admin');
Route::resource('pagetitle', PageTitleController::class)->middleware('admin');

Route::resource('user', UserController::class)->middleware('superadmin');
Route::resource('config', ConfigController::class)->middleware('superadmin');
Route::resource('contact', ContactController::class)->middleware('superadmin');

Route::resource('/', HomePageController::class);
Route::resource('blogs', BlogUserController::class);
Route::resource('restoran', ProductUserController::class);
Route::resource('categoryrestoran', CategoryUserController::class);
Route::resource('contactus', ContactUsController::class);


Route::get('/panel', [PanelController::class, 'index'])->name('panel')->middleware('guest');
Route::post('/panel', [PanelController::class, 'authentication'])->name('authentication');
Route::post('/logout', [PanelController::class, 'logout'])->name('logout');
