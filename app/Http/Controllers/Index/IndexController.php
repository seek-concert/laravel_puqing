<?php
/*==========【首页】===========*/
namespace App\Http\Controllers\Index;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        //获取banner图
        $banner_lists = DB::table('banner')->get();
        
        //获取部分案例
        $case_lists = DB::table('case')->limit(4)->get();

        //获取案例分类
        $case_category_lists = DB::table('case_category')->get();
        
        //获取新闻分类
        $news_category_lists = DB::table('news_category')->get();

        //中标新闻
        $news = DB::table('news')->limit(4)->select('id','thumbnail','title','keywords','description')->where('category_id','=',4)->get();


        //相关资讯6条
        $new_zxun = DB::table('news')->limit(6)->select('id','title','description','input_time','keywords')->where('category_id','=',2)->get();
        
        //学新姿势6条
        $new_zshi = DB::table('news')->limit(6)->select('id','title','description','input_time','keywords')->where('category_id','=',3)->get();
       
        //互联网安全6条
        $new_hlwang = DB::table('news')->limit(6)->select('id','title','description','input_time','keywords')->where('category_id','=',6)->get();
      
        //最新案例
        $new_case_lists =  DB::table('case')->limit(6)->orderby('input_time','desc')->get();
       
        $return_data = [];
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        $reutrn_data['banner_lists'] = $banner_lists;
        $reutrn_data['case_lists'] = $case_lists;
        $reutrn_data['case_category_lists'] = $case_category_lists;
        $reutrn_data['news_category_lists'] = $news_category_lists;
        $reutrn_data['news'] = $news;
        $reutrn_data['new_zxun'] = $new_zxun;
        $reutrn_data['new_zshi'] = $new_zshi;
        $reutrn_data['new_hlwang'] = $new_hlwang;
        $reutrn_data['new_case_lists'] = $new_case_lists;
        return view('index/index',$reutrn_data);
        
    }
}
