<?php
/*==========【成功案例】===========*/
namespace App\Http\Controllers\Index;
use Illuminate\Support\Facades\DB;


class CaseController extends BaseController
{
    /*==========【标题及关键词】===========*/
    protected $title = '网站开发案例_微信小程序案例_企业官网案例_软件开发案例_电商案例-普擎科技';
    protected $keywords = '网站建设案例,微信小程序案例,企业官网案例,软件开发案例,电商案例';

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 成功案例
     */
    public function index($id = 0)
    {
        //产品分类
        $category_lists = DB::table('case_category')->select('id','name')->get();
        //产品列表
        if($id == 0){
            $lists = DB::table('case')->select('id','thumbnail','title','keywords','description','category_id')->paginate(12);
        }else{
            $lists = DB::table('case')->select('id','thumbnail','title','keywords','description','category_id')->where('category_id','=',$id)->paginate(12);
        }

        //聚合数据
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        $return_data['category_lists'] = $category_lists;
        $return_data['new_case'] = $this->get_new_case();
        $return_data['all_news'] = $this->get_all_news();
        $return_data['case'] = $this->get_case();
        $return_data['lists'] = $lists;
        $return_data['id'] = $id;
        return view('index/case', $return_data);
    }

    /*
     * 成功案例 -- 详情页
     */
    public function show($id)
    {
        //详细内容
        $list = DB::table('case')
            ->select('title', 'content', 'url')
            ->where([
                'id' => $id
            ])
            ->first();
        if (empty($list)) {
            return redirect('/');
        }
        //上下案例
        $previous = DB::table('case')
            ->select('id', 'title')
            ->where([
                ['id', '<', $id]
            ])
            ->orderBy('id', 'desc')
            ->first();
        $next = DB::table('case')
            ->select('id', 'title')
            ->where([
                ['id', '>', $id]
            ])
            ->orderBy('id', 'asc')
            ->first();
        //聚合数据
        $return_data = [];
        $return_data['title'] = isset($list->title)?$list->title.'_重庆网站建设-重庆普擎科技':$this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['list'] = $list;
        $return_data['previous'] = $previous;
        $return_data['next'] = $next;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        $return_data['hot_news'] = $this->get_hot_news();
        $return_data['new_case'] = $this->get_new_case();
        $return_data['all_news'] = $this->get_all_news();
        $return_data['case'] = $this->get_case();
        return view('index/case_show', $return_data);
    }
}
