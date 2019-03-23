<?php

namespace App\Http\Controllers\Index;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
    }
    public function get_news_category_lists(){
        $news_category_lists = DB::table('news_category')->get();
        return $news_category_lists;
    }

    public function get_case_category_lists(){
        $case_category_lists = DB::table('case_category')->get();
        return $case_category_lists;
    }

}