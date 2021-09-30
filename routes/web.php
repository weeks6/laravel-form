<?php

use Illuminate\Http\Request;
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

// создал новый путь метода get
// по ссылке /test и контроллером TestController@test
Route::get('/test', 'TestController@test');

// продублировал обработчик, но уже для метода post
Route::post('/test', 'TestController@test');
