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

//前台目录
Route::namespace('Index')->group(function () {
    //首页
    Route::any('/', 'IndexController@index');
    //首页
    Route::any('index', 'IndexController@index');
    //APP开发
    Route::any('app', 'AppController@index');
    //网站开发
    Route::any('web', 'WebController@index');
    //成功案例
    Route::any('case', 'CaseController@index');
    //成功案例--详情页
    Route::any('case_show/{id}', 'CaseController@show');
    //联系我们
    Route::any('contact', 'ContactController@index');
    //网站资讯
    Route::any('news/{id?}', 'NewsController@index');
    //网站资讯--详情页
    Route::any('news_show/{id}', 'NewsController@show');
    //关于我们
    Route::any('about', 'AboutController@index');
    //解决方案
    Route::any('solution', 'SolutionController@index');
    //视觉形象网站开发
    Route::any('view_web', 'WebController@view_web');
    //营销网站建设
    Route::any('sale_web', 'WebController@sale_web');
    //响应式网站建设
    Route::any('all_web', 'WebController@all_web');
    //B2B商城
    Route::any('mall_b2b', 'WebController@mall_b2b');
    //B2B2C商城
    Route::any('mall_b2b2c', 'WebController@mall_b2b2c');
    //B2B商城
    Route::any('mall_more', 'WebController@mall_more');
    //微信营销
    Route::any('wechat', 'WebController@wechat');

    //html5app开发
    Route::any('app_html5', 'AppController@app_html5');
    //ios app开发
    Route::any('app_ios', 'AppController@app_ios');
    //android app开发
    Route::any('app_android', 'AppController@app_android');
    //app 解决方案
    Route::any('app_solution', 'AppController@app_solution');
    //app 项目流程
    Route::any('app_project', 'AppController@app_project');

});

