<?php
/**
 * Created by PhpStorm.
 * User: 84934
 * Date: 2019/3/18
 * Time: 9:55
 */

namespace App\Http\Controllers\Pqadmin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaseController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 案例--显示页
     */
    public function index()
    {
        //数据查询
        $list = DB::table('case')->get();
        foreach ($list as $k => $v) {
            $list[$k]->category_name = DB::table('case_category')
                ->where([
                    'id' => $v->category_id
                ])
                ->value('name');
            $list[$k]->input_time = date('Y-m-d H:i:s',$v->input_time);
        }
        return view('pqadmin.case.case', ['list' => $list]);
    }

    /*
     * 案例--新增
     */
    public function add(Request $request)
    {
        //是否post提交
        if ($request->isMethod('post')) {
            //判断是否有文件上传
            if ($request->hasFile('thumbnail')) {
                //缩略图路径
                $thumbnail = $this->upload($request->file('thumbnail'));
            } else {
                $thumbnail = '';
            }
            //新增数据
            $list = DB::table('case')
                ->insert([
                    'thumbnail' => $thumbnail,
                    'title' => $request->title,
                    'keywords' => $request->keywords,
                    'description' => isset($request->description) ? $request->description : '',
                    'category_id' => isset($request->category_id) ? $request->category_id : 0,
                    'content' => isset($request->content) ? $request->content : '',
                    'input_time' => time()
                ]);
            //判断是否新增成功
            if ($list) {
                return redirect('pqadmin/prompt')->with(['message' => '新增成功!', 'url' => '/pqadmin/case', 'jumpTime' => 3, 'status' => 'success']);
            } else {
                return redirect('pqadmin/prompt')->with(['message' => '新增失败!', 'url' => '/pqadmin/case_add', 'jumpTime' => 3, 'status' => 'error']);
            }
        }

        //获取分类
        $list = DB::table('case_category')->get();
        return view('pqadmin.case.case_add', ['list' => $list]);
    }

    /*
     * 案例--修改
     */
    public function edit()
    {

    }

    /*
     * 案例--删除
     */
    public function del()
    {

    }
}