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
        //上下案例
        $previous = DB::table('case')
            ->select('id', 'title')
            ->where([
                ['id', '<', $id]
            ])
            ->first();
        $next = DB::table('case')
            ->select('id', 'title')
            ->where([
                ['id', '>', $id]
            ])
            ->first();
        //最新案例
        $case = DB::table('case')
            ->select('id', 'title', 'thumbnail')
            ->orderBy('id', 'desc')
            ->limit(4)
            ->get();
        return view('index/case_show', ['list' => $list, 'case' => $case, 'previous' => $previous, 'next' => $next]);
    }
}
