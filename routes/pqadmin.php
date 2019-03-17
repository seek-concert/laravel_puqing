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
	//网站设置修改
    Route::any('web_save','WebController@save');
    //案例分类
    Route::any('case_category','WebController@index');
    //案例分类新增
    Route::any('case_category_add','WebController@add');
    //案例分类修改
    Route::any('case_category_edit','WebController@edit');
    //案例分类删除
    Route::any('case_category_del','WebController@del');
    //客户信息
    Route::any('customer_lists','CustomerController@customer_lists');
    //添加新客户
    Route::any('customer_add','CustomerController@customer_add');
    //修改客户信息
    Route::any('customer_edit/{id?}','CustomerController@customer_edit');
    //查看客户详情
    Route::any('customer_detail/{id?}','CustomerController@customer_detail');
    //删除客户详情
    Route::any('customer_del/{id?}','CustomerController@customer_del');
});

