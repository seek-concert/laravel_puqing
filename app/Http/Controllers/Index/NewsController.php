<?php
/*==========【网站资讯】===========*/
namespace App\Http\Controllers\Index;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NewsController extends BaseController
{
    /*==========【标题及关键词】===========*/
    protected $title = '行业新闻/时事资讯/网站建设/技术文章/教程分享-普擎科技';
    protected $keywords = '行业新闻,时事资讯,网站建设,技术文章,教程分享';

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 网站资讯
     */
    public function index($id = 0)
    {
        if ($id == 0) {
            $id = 1;
        }

        //获取该分类下的新闻
        $news_lists = DB::table('news')->where('category_id', '=', $id)->orderBy('id','desc')->paginate(5);

        //聚合数据
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['id'] = (int)$id;
        $return_data['news_lists'] = $news_lists;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        $return_data['hot_news'] = $this->get_hot_news();
        $return_data['new_case'] = $this->get_new_case();
        $return_data['all_news'] = $this->get_all_news();
        $return_data['case'] = $this->get_case();

        return view('index/news', $return_data);
    }

    /*
     * 网站资讯--详情页
     */
    public function show($id)
    {
        //详细内容
        $list = DB::table('news')
            ->select('title', 'content')
            ->where([
                'id' => $id
            ])
            ->first();
        if (empty($list)) {
            return redirect('/');
        }
        //上下新闻
        $previous = DB::table('news')
            ->select('id', 'title')
            ->where([
                ['id', '<', $id]
            ])
            ->orderBy('id', 'desc')
            ->first();
        $next = DB::table('news')
            ->select('id', 'title')
            ->where([
                ['id', '>', $id]
            ])
            ->orderBy('id', 'asc')
            ->first();
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        $return_data['hot_news'] = $this->get_hot_news();
        $return_data['new_case'] = $this->get_new_case();
        $return_data['all_news'] = $this->get_all_news();
        $return_data['case'] = $this->get_case();
        $return_data['list'] = $list;
        $return_data['previous'] = $previous;
        $return_data['next'] = $next;
        return view('index/news_show', $return_data);
    }
}