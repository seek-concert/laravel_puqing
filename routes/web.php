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


Route::get('/', function () {
    return view('welcome');
});


//个人信息设置

Route::namespace('Index')->group(function () {
    Route::any('/', 'IndexController@index');
    Route::any('index', 'IndexController@index');
    Route::any('app', 'AppController@index');
    Route::any('web', 'WebController@index');
    Route::any('case', 'CaseController@index');
    Route::any('contact', 'ContactController@index');
    Route::any('news', 'NewsController@index');
    Route::any('about', 'AboutController@index');
    Route::any('solution', 'SolutionController@index');
});
