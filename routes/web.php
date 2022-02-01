<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;

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

Route::get('/', [LogoController::class, 'index']);

Route::group(['middleware' => ['auth', 'verified']], function () {
});

Route::get('/mensCollection', [LogoController::class, 'MensCollection'])->name('MensCollection');

Route::get('/humansCollection', [LogoController::class, 'humansCollection'])->name('HumansCollection');

Route::get('/mensCollection/{id}', [LogoController::class, 'mensDetails']);
Route::get('/humansCollection/{id}', [LogoController::class, 'humansDetails']);
Route::Post('/order/{id}', [LogoController::class, 'addDetails'])->name('details');
Route::get('/cart', [LogoController::class, 'cartOrder'])->name('cartOrder')->middleware(['auth', 'verified']);

Route::Post('/postApply', [LogoController::class, 'postApply']);
Route::get('/cart/apply', function () {
    return view('cart.apply');
});

Route::get('/remove/{id}/{guestid}', [LogoController::class, 'itemCartRemove']);

Route::get('/profile', [LogoController::class, 'profile'])->middleware('auth')->name('profile');
Route::post('/updatePro', [LogoController::class, 'updatePro']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::group(['middleware' => 'auth'], function () {
});

Route::post('/contact', [ContactController::class, 'contactPost'])->name('contactPost');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::post('/subscribe', [LogoController::class, 'subscribe', MailController::class, 'sendEmail']);

Route::post('/subscribe', [MailController::class, 'sendEmail']);

Route::get('/send-Mail', [MailController::class, 'sendEmail']);
