<?php

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
use App\Library;
Route::get('/welcome', function () {
	$datas = Library::all();
    return view('welcome')->with('datas', $datas);
});
Route::get('/', 'UserController@index');
Route::post('/save', 'UserController@save');
Route::get('/search', 'UserController@search');
