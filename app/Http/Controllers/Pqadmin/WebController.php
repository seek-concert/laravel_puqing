<?php

namespace App\Http\Controllers\Pqadmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Class WebController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 网站设置--显示页
     */
    public function index()
    {
        //数据查询
        $list = DB::table('web')
            ->where([
                'id' => 1
            ])
            ->first();
        //页面展示
        return view('pqadmin.web_setting.web_setting', ['list'=>$list]);
    }

    /*
     * 网站设置--修改
     */
    public function save(Request $request)
    {
        //接收前台提交数据
        $data = $request->all();
        //判断是否有文件上传
        if ($request->hasFile('logo')) {
            //logo路径
            $logo = $this->upload($request->file('logo'));
            $data['logo'] = $logo;
        }
        //数据修改
        $list = DB::table('web')
            ->where([
                'id' => 1
            ])
            ->update([
                'logo' => $data['logo'],
                'name' => $data['name'],
                'title' => $data['title'],
                'keywords' => $data['keywords'],
                'description' => $data['description'],
                'copyrights' => $data['copyrights'],
                'statistical' => $data['statistical'],
                'copyright' => $data['copyright'],
                'update_time' => time()
            ]);
        //修改是否成功
        if ($list) {
            return redirect('pqadmin/prompt')->with(['message' => '修改成功!', 'url' => '/pqadmin/web_setting', 'jumpTime' => 3, 'status' => 'success']);
        } else {
            return redirect('pqadmin/prompt')->with(['message' => '修改失败!', 'url' => '/pqadmin/web_setting', 'jumpTime' => 3, 'status' => 'error']);
        }
    }
}