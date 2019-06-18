<?php
/*==========【APP开发】===========*/
namespace App\Http\Controllers\Index;

class AppController extends BaseController
{
    /*==========【标题及关键词】===========*/
    protected $title = 'APP定制开发_软件开发流程_软件怎么开发_软件开发多少钱-普擎科技';
    protected $keywords = 'APP定制开发,软件开发流程,软件怎么开发,软件开发多少钱';

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
        return view('index/app_index',$return_data);
    }

    public function app_html5(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/app_html5',$return_data);
    }

    public function app_ios(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/app_ios',$return_data);
    }

    public function app_android(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/app_android',$return_data);
    }

    public function app_solution(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/app_solution',$return_data);
    }

    public function app_project(){
        $return_data = [];
        $return_data['title'] = $this->title;
        $return_data['keywords'] = $this->keywords;
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/app_project',$return_data);
    }
}
