<?php
/*==========【网站建设】===========*/
namespace App\Http\Controllers\Index;

class WebController extends BaseController
{
    /*==========【标题及关键词】===========*/
    protected $title = '网站定制开发_企业官网_重庆网站制作_重庆网站开发_重庆网站建设-普擎科技';
    protected $keywords = '网站定制开发,企业官网,重庆网站制作,重庆网站开发,重庆网站建设';

    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/web_index',$return_data);
    }

    public function view_web(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/view_web',$return_data);
    }

    public function sale_web(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/sale_web',$return_data);
    }

    public function all_web(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/all_web',$return_data);
    }

    public function mall_b2b(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/mall_b2b',$return_data);
    }


    public function mall_b2b2c(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/mall_b2b2c',$return_data);
    }


    public function mall_more(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/mall_more',$return_data);
    }



    public function wechat(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/wechat',$return_data);
    }
}
