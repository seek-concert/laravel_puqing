<?php
/*==========【基础控制器】===========*/
namespace App\Http\Controllers\Index;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /*==========【标题及关键词】===========*/
    protected $title;
    protected $keywords;

    public function __construct(){}

    /*
     * 新闻分类
     */
    public function get_news_category_lists()
    {
        $news_category_lists = DB::table('news_category')->get();
        return $news_category_lists;
    }

    /*
     * 案例分类
     */
    public function get_case_category_lists()
    {
        $case_category_lists = DB::table('case_category')->get();
        return $case_category_lists;
    }

    /*
     * 热销新闻
     */
    public function get_hot_news()
    {
        $hot_news = DB::table('news')
            ->select('id', 'title','input_time')
            ->limit(6)
            ->orderBy('number', 'desc')
            ->get();
        return $hot_news;
    }

    /*
     * 最新案例
     */
    public function get_new_case()
    {
        $new_case = DB::table('case')
            ->select('id', 'title', 'thumbnail')
            ->orderBy('id', 'desc')
            ->limit(4)
            ->get();
        return $new_case;
    }

    /*
     * 普擎新闻（所有新闻）
     */
    public function get_all_news()
    {
        $pq_news = DB::table('news')
            ->select('id', 'title', 'input_time')
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get();
        return $pq_news;
    }

    /*
     * 行业案例检索
     */
    public function get_case()
    {
        $case = DB::table('case')
            ->orderBy('id', 'desc')
            ->limit(15)
            ->get();
        return $case;
    }

}