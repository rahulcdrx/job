<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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
    return view('jobhome');
});
Route::get('/user', function () {
    return view('user');
});

Route::get('/job', function () {
    return view('job');
});
Route::get('/private', function () {
    return view('private');
});
Route::get('/govt', function () {
    return view('govt');
});
Route::get('/govtlist', function () {
    return view('govtlist');
});
Route::get('/pvtlist', function () {
    return view('pvtlist');
});
Route::get('/stdlist', function () {
    return view('stdlist');
});
 
Route::resource('register', RegisterController::class);