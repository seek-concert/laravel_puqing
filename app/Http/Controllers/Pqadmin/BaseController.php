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
}