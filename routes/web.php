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
    return view('home');
});


Route::get('/myticket', 'UserTicketController@index')->name('myticket');
Route::get('/mytransaction', 'UserTransactionController@index')->name('mytransaction');
Route::get('/myprofile', 'UserProfileController@index')->name('myprofile');
Route::get('/event', 'EventController@index')->name('event');

/* buat coba liat tampilan login regis aja git ini apus aja ntar */
Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/signup', function () {
    return view('auth/signup');
});

/* buat coba liat tampilan login regis aja git ini apus aja ntar */

Route::get('/detailticket', function () {
    return view('detailticket');
});

Route::get('/detailevent', function () {
    return view('detailevent');
});

Route::get('/signup-org', function () {
    return view('auth/signup-org');
});
