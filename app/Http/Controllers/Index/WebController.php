<?php

namespace App\Http\Controllers\Index;



class WebController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $return_data = [];
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/web_index',$return_data);
    }

    public function view_web(){
        $return_data = [];
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/view_web',$return_data);
    }

    public function sale_web(){
        $return_data = [];
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/sale_web',$return_data);
    }

    public function all_web(){
        $return_data = [];
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/all_web',$return_data);
    }

    public function mall_b2b(){
        $return_data = [];
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/mall_b2b',$return_data);
    }


    public function mall_b2b2c(){
        $return_data = [];
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/mall_b2b2c',$return_data);
    }


    public function mall_more(){
        $return_data = [];
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/mall_more',$return_data);
    }



    public function wechat(){
        $return_data = [];
        $return_data['news_category_lists'] = $this->get_news_category_lists();
        $return_data['case_category_lists'] = $this->get_case_category_lists();
        return view('index/wechat',$return_data);
    }
}
