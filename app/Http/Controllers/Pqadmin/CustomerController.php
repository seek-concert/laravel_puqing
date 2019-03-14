<?php

namespace App\Http\Controllers\Pqadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Class CustomerController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | 客户管理控制器
    |--------------------------------------------------------------------------
    |
    | 用户管理客户信息
    | function customer_lists     查看所有客户
    | function customer_add       添加新客户
    |
    | Author:1285653363@qq.com    Leimon  
    */
    public function __construct()
    {
        parent::__construct();
    }


    /*
    *   客户列表
    *   Date：2019/3/14
    *   param page int 页码
    *   
    */
    public function customer_lists(Request $request)
    {   
       
        $param = $request->all();
        $page = isset($param['page'])?(int)$param['page']:1;
        //数据查询
        $list = DB::table('customer')->get();
        
        return view('pqadmin.customer_lists',['list'=>$list]);
    }
}