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
            <p><a href="{{url('contact')}}" title=""><img src="/index/picture/icon1.jpg" alt="p7ing.com" width="300" /></a></p>
            <p style="padding-top:20px;"><a href="{{url('case')}}" title=""><img src="/index/picture/icon2.jpg" alt="p7ing.com" width="300" /></a></p>
            <h4>热推新闻</h4>
            <ul>
                @foreach($hot_news as $value)
                <li><a href="{{url('news_show',[$value->id])}}" title="{{$value->title}}">{{$value->title}}<br/><span>{{ date('Y-m-d',$value->input_time) }}</span></a></li>
                @endforeach
            </ul>
            <div class="clear"></div>
            <p style="color:#333;font-weight:bold;font-size:13px;">咨询</p>
            <p style="color:#666;line-height:30px;">电话：{{ Cache('before_service_phone') }}</p>
            <p class="qq"><span>QQ：</span>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={{ Cache('before_service_qq') }}&site=qq&menu=yes">
                    <img src="/index/picture/q1.jpg" alt="p7ing.com" width="25" />
                </a>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={{ Cache('after_service_qq') }}&site=qq&menu=yes">
                    <img src="/index/picture/q2.jpg" alt="p7ing.com" width="25" />
                </a>
            </p>
            <p style="color:#666;line-height:30px;">邮箱：{{ Cache('company_email') }}</p>
        </div>
    </div>
    {{--底部--}}
    <div class="clear"></div>
    <div class="case_tit"><span>最新案例</span><a href="{{url('case')}}" title="">MORE</a></div>
    <div class="case_top">
        <ul>
            @foreach($new_case as $value)
            <li><a href="{{url('case_show',[$value->id])}}" title="{{$value->title}}"><img src="{{$value->thumbnail}}" alt="p7ing.com" width="242" height="160" /><h4>{{$value->title}}</h4></a></li>
            @endforeach
        </ul>
    </div>
    <div class="clear"></div>
    <div class="case_bottom">
        <div class="case_news">
            <div class="case_news_t"><h3>普擎<span>新闻</span></h3><a href="{{url('news')}}" title="">MORE</a></div>
            <ul>
                @foreach($all_news as $value)
                <li><a href="{{url('news_show',[$value->id])}}" title="{{$value->title}}">{{$value->title}}</a><span>{{date('Y-m-d',$value->input_time)}}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="case_trade">
            <div class="case_news_t"><h3>行业案例<span style="color:#ff4817;">检索</span></h3><a href="{{url('case')}}" title="">MORE</a></div>
            <p>
                @foreach($case as $value)
                <a href="{{url('case_show',[$value->id])}}" title="{{$value->title}}">{{$value->title}}</a>
                @endforeach
            </p>
        </div>
    </div>
</div>

@endsection

@section('home')
    <script>GetCurStyle("home2");</script>
@endsection