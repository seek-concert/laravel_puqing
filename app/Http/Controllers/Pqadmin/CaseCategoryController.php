<?php
/**
 * Created by PhpStorm.
 * User: 84934
 * Date: 2019/3/17
 * Time: 15:16
 */

namespace App\Http\Controllers\Pqadmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaseCategoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 案例分类--显示页
     */
    public function index()
    {
        //数据查询
        $list = DB::table('case_category')->get();

        return view('pqadmin.case_category.case_category',['list'=>$list]);
    }

    /*
     * 案例分类--新增
     */
    public function add(Request $request)
    {
        if($request->isMethod('post')){

        }

        return view('pqadmin.case_category.case_category_add');
    }

    /*
     * 案例分类--修改
     */
    public function edit()
    {

    }

    /*
     * 案例分类--删除
     */
    public function del()
    {

    }

}