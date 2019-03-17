<?php

namespace App\Http\Controllers\Pqadmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

Class BaseController extends Controller
{
    public function __construct()
    {
        $this->request = request();

        // 验证是否登录
        $this->middleware(function ($request, $next) {
            if (!\Session::get('username')) {
                Redirect::to('pqadmin/prompt')->with(['message' => '未登录！请登录后再试！', 'url' => '/pqadmin/login', 'jumpTime' => 3, 'status' => 'error'])->send();
            }
            return $next($request);
        });
    }

    /*
     * 文件上传
     */
    public function upload($img){
        // 获取后缀名
        $ext = $img->extension();
        // 新文件名
        $saveName =time().rand().".".$ext;
        // 存储文件 已经不使用 move 这种方式
        // $img->move('./uploads/'.date('Ymd'),$saveName);
        // 使用 store 存储文件
        $path = $img->store(date('Ymd'));

        return 'uploads/'.$path;
    }
}