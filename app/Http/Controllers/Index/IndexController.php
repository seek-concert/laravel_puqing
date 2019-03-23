<?php

namespace App\Http\Controllers\Index;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
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

        //获取案例分类
        $case_category_lists = DB::table('case_category')->get();
        
        //获取新闻分类
        $news_category_lists = DB::table('news_category')->get();

        
        $reutrn_data = [];
        $reutrn_data['banner_lists'] = $banner_lists;
        $reutrn_data['case_lists'] = $case_lists;
        $reutrn_data['case_category_lists'] = $case_category_lists;
        $reutrn_data['news_category_lists'] = $news_category_lists;
        return view('index/index',$reutrn_data);
        
    }
}
