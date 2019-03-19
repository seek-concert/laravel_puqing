<?php

namespace App\Http\Controllers\Index;



class WebController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function index(){
        return view('index/web_index');
    }

    public function view_web(){
        return view('index/view_web');
    }

    public function sale_web(){
        return view('index/sale_web');
    }

    public function all_web(){
        return view('index/all_web');
    }

    public function mall_b2b(){
        return view('index/mall_b2b');
    }


    public function mall_b2b2c(){
        return view('index/mall_b2b2c');
    }


    public function mall_more(){
        return view('index/mall_more');
    }



    public function wechat(){
        return view('index/wechat');
    }
}
