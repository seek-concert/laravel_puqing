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
        $news_lists = DB::table('news')->paginate(1);
    
        $return_data = [];
        $return_data['news_category_lists'] = $news_category_lists;
        $return_data['id'] = $id;
        $return_data['news_lists'] = $news_lists;
        return view('index/news',$return_data);
    }
}