<?php

namespace App\Http\Controllers\Index;



class AppController
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
        return view('index/app_index');
    }

    public function app_html5(){
        return view('index/app_html5');
    }

    public function app_ios(){
        return view('index/app_ios');
    }

    public function app_android(){
        return view('index/app_android');
    }

    public function app_solution(){
        return view('index/app_solution');
    }

    public function app_project(){
        return view('index/app_project');
    }
}
