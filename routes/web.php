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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

=======
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('foo', function () {
//     return 'Hello World';
// });
//个人信息设置

Route::namespace('Index')->group(function () {
    Route::any('index', 'IndexController@index');
});
>>>>>>> 6e19c6937c6aa08c4b94fb434f716ff0269c01c4
