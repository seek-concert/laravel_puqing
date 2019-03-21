<?php

namespace App\Http\Controllers\Index;
use Illuminate\Support\Facades\DB;


class IndexController
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
        //获取banner图
        $banner_lists = DB::table('banner')->get();
        
        //获取部分案例
        $case_lists = DB::table('case')->limit(4)->get();
        
        return view('index/index',['banner_lists'=>$banner_lists,'case_lists'=>$case_lists]);
        
    }
}
