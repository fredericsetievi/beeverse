<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AvatarController;

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

// languange
Route::get('/lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::prefix('/')
    ->controller(PageController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home_page');
        Route::get('/search', 'search')->name('search');
        // Route::get('/filter-gender/{gender}', 'filter')->name('filter');
    });

Route::prefix('/')
    ->controller(AuthController::class)
    ->group(function () {
        Route::get('/login', 'indexLogin')->name('login_page');
        Route::post('/login', 'authLogin')->name('login');
        Route::get('/register', 'indexRegister')->name('register_page');
        Route::post('/register', 'authRegister')->name('register');
        Route::post('/logout', 'logout')->name('logout')->middleware('auth');
        Route::get('register/payment/{userId}', 'indexPayment')->name('payment_page');
        Route::post('register/payment/{userId}', 'paymentProcess')->name('payment');
    });

Route::prefix('/user')
    ->controller(UserController::class)
    ->middleware('auth')
    ->group(function () {
        Route::get('/profile', 'indexProfile')->name('profile_page');
        Route::get('/my-avatar', 'indexAvatar')->name('my_avatar_page');
        Route::get('/my-friend', 'indexFriend')->name('my_friend_page');
        Route::get('/edit', 'edit')->name('edit_profile_page');
        Route::put('/edit', 'update')->name('edit_profile');
        Route::post('/add-wishlist/{userId}', 'addWishlist')->name('add_wishlist');
        Route::put('/topup', 'topup')->name('topup_coin');
        Route::post('/deactivate-account', 'deactivateAccount')->name('deactivate_account');
        Route::post('/reactivate-account', 'reactivateAccount')->name('reactivate_account');
    });

Route::prefix('/chat')
    ->controller(ChatController::class)
    ->middleware('auth')
    ->group(function () {
        Route::get('/{userId}', 'index')->name('chat_page');
        Route::post('/{userId}', 'store')->name('send_chat');
        Route::get('/{userId}/message', 'showMessage')->name('show_message');
    });

Route::prefix('/avatar')
    ->controller(AvatarController::class)
    ->group(function () {
        Route::get('/', 'index')->name('avatar_page');
        Route::post('/buy/{avatarId}', 'store')->name('buy_avatar')->middleware('auth');
        Route::get('/send/{avatarId}', 'indexSend')->name('send_avatar_page')->middleware('auth');
        Route::post('/send/{avatarId}', 'send')->name('send_avatar')->middleware('auth');
        Route::get('/{userId}', 'show')->name('show_avatar')->middleware('auth');
    });
