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
    return view('main');
})->name('main');

Route::get('/forChildren', function () {
    return view('forChildren');
})->name('forChildren');

Route::get('/forAdults', function () {
    return view('forAdults');
})->name('forAdults');

Route::get('/forTeens', function () {
    return view('forTeens');
})->name('forTeens');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/sertificat', function () {
    return view('sertificat');
})->name('sertificat');

Route::get('/west', function () {
    return view('west');
})->name('west');

Route::get('/jumanji', function () {
    return view('jumanji');
})->name('jumanji');

Route::get('/potter', function () {
    return view('potter');
})->name('potter');

Route::get('/avatar', function () {
    return view('avatar');
})->name('avatar');

Route::get('/party', function () {
    return view('party');
})->name('party');

Route::get('/alice', function () {
    return view('alice');
})->name('alice');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/form/add', 'App\Http\Controllers\Vse@add')->name('add');
Route::get('/form/addNum', 'App\Http\Controllers\Vse@addNum')->name('addNum');
