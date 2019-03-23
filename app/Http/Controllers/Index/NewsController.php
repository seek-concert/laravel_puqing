<?php

namespace App\Http\Controllers\Index;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NewsController extends Controller
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
    public function index($id = 0){
        if($id == 0){
            $id = 1;
        }
        //获取新闻分类
        $news_category_lists = DB::table('news_category')->get();

        //获取改分类下 的新闻
        $news_lists = DB::table('news')->where('category_id','=',$id)->paginate(10);
    
        //获取热推新闻
        $hot_news_lists = DB::table('news')->where('category_id','=',$id)->limit(6)->orderBy('number','desc')->get();

        //获取四条最新案例
        $new_case_lists = DB::table('case')->limit(4)->get();
        //获取4条本站新闻
        $four_news_lists = DB::table('news')->where('category_id','=',1)->limit(4)->get();

        //6条案例
        $six_case_lists = DB::table('case')->limit(6)->get();

        //案例分类
        $case_category_lists = DB::table('case_category')->get();
        $return_data = [];
        $return_data['news_category_lists'] = $news_category_lists;
        $return_data['id'] = $id;
        $return_data['news_lists'] = $news_lists;
        $return_data['hot_news_lists'] = $hot_news_lists;
        $return_data['new_case_lists'] = $new_case_lists;
        $return_data['four_news_lists'] = $four_news_lists;
        $return_data['six_case_lists'] = $six_case_lists;
        $return_data['case_category_lists'] = $case_category_lists;
        return view('index/news',$return_data);
    }
}