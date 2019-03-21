@extends('index.header')
@section('content')

<!--banner-->
<div class="banner" style="background:url(/index/images/1490868907.jpg) no-repeat center center;"></div>
<!--main开始-->
<div class="content">
    <div class="case_show">
        <div class="case_left">
            <div class="case_show_t"><h4>{{$list->title}}</h4></div>
            <div class="case_show_txt">
                {!! $list->content !!}
            </div>
            <div style="width:100%;height:24px;line-height:24px;font-size:12px;color:#666;">案例网址:<a href="{{$list->url}}" target="_blank" rel="nofollow">{{$list->url}}</a></div>
            <div class="clist"><a href="{{url('case')}}" title="">返回案例列表</a></div>

            <div class="case_page">
                @if(!empty($previous))
                    <a href="{{url('case_show',[$previous->id])}}">上一个案例：{{$previous->title}}</a>
                @else
                    上一个案例：无
                @endif
                @if(!empty($next))
                    <a href="{{url('case_show',[$next->id])}}">下一个案例：{{$next->title}}</a>
                @else
                    下一个案例：无
                @endif
            </div>
        </div>
        {{--右侧--}}
        <div class="case_right">
            <p><a href="{{url('contact')}}" title=""><img src="/index/picture/icon1.jpg" alt="" width="300" /></a></p>
            <p style="padding-top:20px;"><a href="{{url('case')}}" title=""><img src="/index/picture/icon2.jpg" alt="" width="300" /></a></p>
            <h4>网站建设知识</h4>
            <ul>
                <li><a href="/about/show_947.html" title="手机网站制作的重要性">手机网站制作的重要性<br/><span>2018-11-05</span></a></li>
            </ul>
            <div class="clear"></div>
            <p style="color:#333;font-weight:bold;font-size:13px;">咨询</p>
            <p style="color:#666;line-height:30px;">电话：0755-83271919</p>
            <p style="color:#666;line-height:30px;text-indent:35px;">0755-83271881</p>
            <p style="color:#666;line-height:30px;text-indent:35px;">0755-83271606</p>
            <p style="color:#666;line-height:30px;text-indent:35px;">0755-83658105</p>
            <p class="qq"><span>QQ：</span>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=983492695&site=qq&menu=yes"><img src="/index/picture/q1.jpg" alt="" width="25" /></a>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1014060040&site=qq&menu=yes"><img src="/index/picture/q2.jpg" alt="" width="25" /></a>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1014641734&site=qq&menu=yes"><img src="/index/picture/q3.jpg" alt="" width="25" /></a>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=995338667&site=qq&menu=yes"><img src="/index/picture/q4.jpg" alt="" width="25" /></a>
            </p>
            <p style="color:#666;line-height:30px;">邮箱：web@ni8.com</p>
        </div>
    </div>
    {{--底部--}}
    <div class="clear"></div>
    <div class="case_tit"><span>最新案例</span><a href="{{url('case')}}" title="">MORE</a></div>
    <div class="case_top">
        <ul>
            @foreach($case as $value)
            <li><a href="{{url('case_show',[$value->id])}}" title="{{$value->title}}"><img src="../{{$value->thumbnail}}" alt="" width="242" height="160" /><h4>{{$value->title}}</h4></a></li>
            @endforeach
        </ul>
    </div>
    <div class="clear"></div>
    <div class="case_bottom">
        <div class="case_news">
            <div class="case_news_t"><h3>网联<span>新闻</span></h3><a href="/about/news.html" title="">MORE</a></div>
            <ul>
                <li><a href="/about/show_888.html" title="网联科技2018年员工聚餐">网联科技2018年员工聚餐</a><span>2018-08-21</span></li><li><a href="/about/show_887.html" title="网联科技温泉漂流2日游">网联科技温泉漂流2日游</a><span>2018-08-13</span></li><li><a href="/about/show_873.html" title="网联科技2018年员工夏季生日会">网联科技2018年员工夏季生日会</a><span>2018-07-19</span></li><li><a href="/about/show_849.html" title="红树林-深圳湾海边徒步活动">红树林-深圳湾海边徒步活动</a><span>2018-04-10</span></li><li><a href="/about/show_782.html" title="网联科技2018年春节放假通知">网联科技2018年春节放假通知</a><span>2018-02-06</span></li><li><a href="/about/show_566.html" title="一场属于网联人的活动日">一场属于网联人的活动日</a><span>2017-03-14</span></li>	  </ul>
        </div>
        <div class="case_trade">
            <div class="case_news_t"><h3>行业案例<span style="color:#ff4817;">检索</span></h3><a href="/case/index.html" title="">MORE</a></div>
            <p>
                <a href="/case/index.html/keys/18" title="全网营销案例">全网营销案例</a><a href="/case/index.html/keys/8" title="手机网站建设">手机网站建设</a><a href="/case/index.html/keys/4" title="品牌网站建设">品牌网站建设</a><a href="/case/index.html/keys/3" title="电子网站建设">电子网站建设</a><a href="/case/index.html/keys/1" title="艺术设计网站建设">艺术设计网站建设</a><a href="/case/index.html/keys/5" title="外贸网站建设">外贸网站建设</a><a href="/case/index.html/keys/6" title="化妆品行业网站建设">化妆品行业网站建设</a><a href="/case/index.html/keys/7" title="旅游行业网站建设">旅游行业网站建设</a><a href="/case/index.html/keys/9" title="教育行业网站建设">教育行业网站建设</a><a href="/case/index.html/keys/10" title="餐饮行业网站建设">餐饮行业网站建设</a><a href="/case/index.html/keys/11" title="LED照明网站建设">LED照明网站建设</a><a href="/case/index.html/keys/12" title="饰品网站建设">饰品网站建设</a><a href="/case/index.html/keys/13" title="服装行业网站建设">服装行业网站建设</a><a href="/case/index.html/keys/14" title="家居行业网站建设">家居行业网站建设</a><a href="/case/index.html/keys/15" title="展览公司网站建设">展览公司网站建设</a><a href="/case/index.html/keys/16" title="科技公司网站建设">科技公司网站建设</a><a href="/case/index.html/keys/17" title="制造业网站建设">制造业网站建设</a><a href="/case/index.html/keys/19" title="资讯类网站建设">资讯类网站建设</a><a href="/case/index.html/keys/20" title="酒店行业网站建设">酒店行业网站建设</a><a href="/case/index.html/keys/21" title="装修网站建设">装修网站建设</a><a href="/case/index.html/keys/24" title="金融行业网站建设">金融行业网站建设</a><a href="/case/index.html/keys/25" title="协会网站建设">协会网站建设</a><a href="/case/index.html/keys/26" title="物流行业网站建设">物流行业网站建设</a><a href="/case/index.html/keys/27" title="订票系统网站案例">订票系统网站案例</a><a href="/case/index.html/keys/28" title="企业网站制作">企业网站制作</a><a href="/case/index.html/keys/29" title="交通网站建设">交通网站建设</a>	  </p>
        </div>
    </div>
</div>

@endsection

@section('home')
    <script>GetCurStyle("home2");</script>
@endsection