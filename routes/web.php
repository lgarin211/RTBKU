<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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
    return view('Home');
});
Route::get('/About', function () {
    return view('About');
});
Route::get('/Service', function () {
    return view('Service');
});
Route::get('/Activity', function () {
    return view('Activity');
});
Route::get('/News', function () {
    return view('News');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
