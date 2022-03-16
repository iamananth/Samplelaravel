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
    return view('welcome');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/index', function () {
    return view('index');
});

use App\Http\Controllers\OperationsController;
Route::get('/ops/{id}', [OperationsController::class, 'Ops']);

use App\Http\Controllers\WebtechController;
Route::get('/wt/{id}', [webtechController::class, 'wt']);
