<?php

namespace App\Http\Controllers\Index;


use Illuminate\Support\Facades\DB;

class CaseController
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

    /*
     * 成功案例
     */
    public function index()
    {
        return view('index/case');
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
        //热销新闻
        $hot_news = DB::table('news')
            ->select('id', 'title')
            ->limit(6)
            ->orderBy('id', 'desc')
            ->get();
        //最新案例
        $case = DB::table('case')
            ->select('id', 'title', 'thumbnail')
            ->orderBy('id', 'desc')
            ->limit(4)
            ->get();
        //普擎新闻
        $pq_news = DB::table('news')
            ->select('id', 'title', 'input_time')
            ->where([
                ['category_id', '=', 1]
            ])
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get();
        //行业案例检索
        $new_case = DB::table('case')
            ->orderBy('id', 'desc')
            ->limit(15)
            ->get();
        return view('index/case_show', ['list' => $list, 'hot_news' => $hot_news, 'case' => $case, 'pq_news' => $pq_news, 'new_case' => $new_case, 'previous' => $previous, 'next' => $next]);
    }
}
