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


Route::get('foo', function () {
    return 'Hello World';
});

//后台目录
Route::namespace('Pqadmin')->group(function () {
    //跳转提示页
    Route::resource('prompt','PromptController');
    //登录页
    Route::any('login', 'LoginController@login');
    //登录
    Route::any('passport', 'LoginController@passport');
    //退出登录
    Route::any('loginOut', 'LoginController@loginOut');
    //后台首页
    Route::any('index', 'IndexController@index');
    //网站设置
    Route::any('web_setting','WebController@index');
    //客户信息
    Route::any('customer_lists','CustomerController@customer_lists');
});

