<?php

namespace App\Http\Controllers\Index;


use Illuminate\Support\Facades\DB;


class CaseController extends BaseController
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
     * 成功案例
     */
    public function index()
    {
        //聚合数据
        $return_data = [];
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
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
        $return_data['list'] = $list;
        $return_data['previous'] = $previous;
        $return_data['next'] = $next;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        $return_data['hot_news'] = $this->get_hot_news();
        $return_data['new_case'] = $this->get_new_case();
        $return_data['pq_news'] = $this->get_pq_news();
        $return_data['case'] = $this->get_case();
        return view('index/case_show', $return_data);
    }
}
