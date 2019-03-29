<?php

namespace App\Http\Controllers\Index;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class NewsController extends BaseController
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
        parent::__construct();
    }


    /*
     * 网站资讯
     */
    public function index($id = 0){
        if($id == 0){
            $id = 1;
        }
        //获取改分类下的新闻
        $news_lists = DB::table('news')->where('category_id','=',$id)->paginate(5);
        //聚合数据
        $return_data = [];
        $return_data['id'] = (int)$id;
        $return_data['news_lists'] = $news_lists;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        $return_data['hot_news'] = $this->get_hot_news();
        $return_data['new_case'] = $this->get_new_case();
        $return_data['pq_news'] = $this->get_pq_news();
        $return_data['case'] = $this->get_case();
        
        return view('index/news',$return_data);
    }

    /*
     * 网站资讯--详情页
     */
    public function show($id){
        //详细内容
        $list = DB::table('news')
            ->select('title', 'content')
            ->where([
                'id' => $id
            ])
            ->first();
        if(empty($list)){
            return redirect('/');
        }
        //上下新闻
        $previous = DB::table('news')
            ->select('id', 'title')
            ->where([
                ['id', '<', $id]
            ])
            ->orderBy('id','desc')
            ->first();
        $next = DB::table('news')
            ->select('id', 'title')
            ->where([
                ['id', '>', $id]
            ])
            ->orderBy('id','asc')
            ->first();
        //最新案例
        $case = DB::table('case')
            ->select('id', 'title', 'thumbnail')
            ->orderBy('id', 'desc')
            ->limit(4)
            ->get();
            $return_data =  [];
            $return_data['news_category_lists'] = $this->get_news_category_lists();
            $return_data['case_category_lists'] = $this->get_case_category_lists();
            $return_data['hot_news'] = $this->get_hot_news();
            $return_data['new_case'] = $this->get_new_case();
            $return_data['pq_news'] = $this->get_pq_news();
            $return_data['case'] = $this->get_case();
            $return_data['list'] = $list;
            $return_data['case'] = $case;
            $return_data['previous'] = $previous;
            $return_data['next'] = $next;

        return view('index/news_show', $return_data);
    }
}