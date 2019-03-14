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

    public function index()
    {
        return view('pqadmin.web_setting');
    }

    public function save(Request $request)
    {
        if(!$request->hasFile('logo')){
            return redirect('pqadmin/prompt')->with(['message'=>'文件不存在','url' =>'/pqadmin/web_setting', 'jumpTime'=>3,'status'=>'error']);
        }
        //logo路径
        $logo = $this->upload($request->file('logo'));

        $list = DB::table('web')->insert([
            'logo' => $logo,
            'name' => $request->name,
            'title' => $request->title,
            'keywords' => $request->keywords,
            'description' => $request->description,
            'copyrights' => $request->copyrights,
            'statistical' => $request->statistical,
            'copyright' => $request->copyright,
            'update_time' => time()
        ]);
        if($list){
            return redirect('pqadmin/prompt')->with(['message'=>'修改成功!','url' =>'/pqadmin/web_setting', 'jumpTime'=>3,'status'=>'success']);
        }else{
            return redirect('pqadmin/prompt')->with(['message'=>'修改失败!','url' =>'/pqadmin/web_setting', 'jumpTime'=>3,'status'=>'error']);
        }
    }
}