<?php
/*==========【联系普擎】===========*/
namespace App\Http\Controllers\Index;

class ContactController extends BaseController
{
    /*==========【标题及关键词】===========*/
    protected $title = '公司简介/团队信息/联系方式/付款方式/站点地图-普擎科技';
    protected $keywords = '公司简介，团队信息，联系方式，付款方式，站点地图';

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
        return view('index/contact',$return_data);
    }
}
