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
    //banner图
    Route::any('banner','BannerController@index');
    //banner图新增
    Route::any('banner_add','BannerController@add');
    //banner图修改
    Route::any('banner_edit/{id}','BannerController@edit');
    //banner图删除
    Route::any('banner_del/{id}','BannerController@del');
    //解决方案
    Route::any('solution','SolutionController@index');
    //解决方案新增
    Route::any('solution_add','SolutionController@add');
    //解决方案修改
    Route::any('solution_edit','SolutionController@edit');
    //解决方案查看
    Route::any('solution_detail','SolutionController@detail');
    //解决方案删除
    Route::any('solution_del','SolutionController@del');
    //案例分类
    Route::any('case_category','CaseCategoryController@index');
    //案例分类新增
    Route::any('case_category_add','CaseCategoryController@add');
    //案例分类修改
    Route::any('case_category_edit/{id}','CaseCategoryController@edit');
    //案例分类删除
    Route::any('case_category_del/{id}','CaseCategoryController@del');
    //案例
    Route::any('case','CaseController@index');
    //案例新增
    Route::any('case_add','CaseController@add');
    //案例修改
    Route::any('case_edit/{id}','CaseController@edit');
    //查看案例详情
    Route::any('case_detail/{id}','CaseController@detail');
    //案例删除
    Route::any('case_del/{id}','CaseController@del');
    //新闻分类
    Route::any('news_category','NewsCategoryController@index');
    //新闻分类新增
    Route::any('news_category_add','NewsCategoryController@add');
    //新闻分类修改
    Route::any('news_category_edit','NewsCategoryController@edit');
    //新闻分类删除
    Route::any('news_category_del','NewsCategoryController@del');
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
    //设置网站联系方式
    Route::any('contact_setting','ContactController@contact_setting');
    //更新缓存
    Route::any('get_cache','CacheController@get_cache');
});

