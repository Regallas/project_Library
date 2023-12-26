<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;



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
Route::group(['middleware' => 'guest'], function(){
Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::post(
    '/registration',
    'App\Http\Controllers\AuthController@registration'
)->name('registration-form');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post(
    '/login',
    'App\Http\Controllers\AuthController@login'
)->name('login-form');

Route::get('/vk/auth', 'App\Http\Controllers\SocialController@index')->name('vk.auth');
Route::get('/vk/auth/callback', 'App\Http\Controllers\SocialController@callback');
});

Route::get(
    'forget-password',
    'App\Http\Controllers\AuthController@showForgetPasswordForm'
)->name('forget.password.get');

Route::post(
    'forget-password',
    'App\Http\Controllers\AuthController@submitForgetPasswordForm'
)->name('forget.password.post');

Route::get(
    'reset-password/{token}',
    'App\Http\Controllers\AuthController@showResetPasswordForm'
)->name('reset.password.get');

Route::post(
    'reset-password',
    'App\Http\Controllers\AuthController@submitResetPasswordForm'
)->name('reset.password.post');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('hall');
    })->name('hall');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/addBook', function () {
        return view('addBook');
    })->name('addBook');

    Route::get(
        'logout',
        'App\Http\Controllers\AuthController@logout'
    )->name('logout');

    Route::get(
        '/book/all/{id}',
        'App\Http\Controllers\BookController@showOneBook'
    )->name('book-getBook-one');

    Route::get(
        '/book/all',
        'App\Http\Controllers\BookController@allBook'
    )->name('book-getBook');

    Route::get(
        '/book/all/{id}/update',
        'App\Http\Controllers\BookController@bookUpdate'
    )->name('book-update');

    Route::post(
        '/book/all/{id}/update',
        'App\Http\Controllers\BookController@bookUpdateSubmit'
    )->name('book-update-submit');

    Route::get(
        '/book/all/{id}/delete',
        'App\Http\Controllers\BookController@bookDelete'
    )->name('book-delete');

    Route::post(
        '/addBook/submit',
        'App\Http\Controllers\BookController@submit'
    )->name('addBook-form');
});
