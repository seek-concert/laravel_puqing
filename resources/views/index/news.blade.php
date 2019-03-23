@extends('index.header')
@section('content')

<!--banner-->
<div class="banner" style="background:url(/index/images/1490868926.jpg) no-repeat center center;"></div>
<!--main开始-->
<div class="news_wap">
	<div class="news_menu"> 
		@foreach ( $news_category_lists as $value)
			<a href="{{ url('/news',[$value->id]) }}" title="{{ $value->name }}" @if ($id == $value->id) class="cur" @endif >{{ $value->name }}</a> 
		@endforeach
		
 	</div>
</div>
<div class="content">
	<div class="case_show">
		<div class="case_left">
			<div class="news_list">
				<ul>
					@foreach ($news_lists as $value)
						
					<li>
						<div class="news_l"><a href="{{ url('nes_show',$value->id) }}" title="{{ $value->keywords }}"><img
									src="{{ $value->thumbnail }}" alt="{{ $value->keywords }}" width="178" height="117" /></a></div>
						<div class="news_r">
							<h3><a href="{{ url('nes_show',$value->id) }}" title="{{ $value->keywords }}">{{ $value->title }}</a><span>{{ date('Y-m-d',$value->input_time) }}</span></h3>
							<p>{{ $value->description }}</p>
							<h6><a href="{{ url('nes_show',$value->id) }}" title="{{ $value->keywords }}">LEARN MORE</a></h6>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
			{{ $news_lists->links() }}
			
		</div>
		<div class="case_right">
		<p><a href="{{ url('contact') }}" title=""><img src="/index/picture/icon1.jpg" alt="" width="300" /></a></p>
			<p style="padding-top:20px;"><a href="{{ url('case') }}" title=""><img src="/index/picture/icon2.jpg" alt=""
						width="300" /></a></p>
			<h4>热推新闻</h4>
			<ul>
				@foreach ( $hot_news_lists as $value)
					<li><a href="{{ url('nes_show',$value->id) }}" title="{{ $value->keywords }}">{{ $value->title }}<br /><span>{{ date('Y-m-d',$value->input_time) }}</span></a></li>
				@endforeach
			</ul>
			<div class="clear"></div>
			<p style="color:#333;font-weight:bold;font-size:13px;">咨询</p>
			<p style="color:#666;line-height:30px;">电话：0755-83658105</p>
			<p class="qq"><span>QQ：</span>
				<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=983492695&site=qq&menu=yes"><img
						src="/index/picture/q1.jpg" alt="" width="25" /></a><a target="_blank"
					href="http://wpa.qq.com/msgrd?v=3&uin=1014060040&site=qq&menu=yes"><img src="/index/picture/q2.jpg"
						alt="" width="25" /></a><a target="_blank"
					href="http://wpa.qq.com/msgrd?v=3&uin=1014641734&site=qq&menu=yes"><img src="/index/picture/q3.jpg"
						alt="" width="25" /></a><a target="_blank"
					href="http://wpa.qq.com/msgrd?v=3&uin=995338667&site=qq&menu=yes"><img src="/index/picture/q4.jpg"
						alt="" width="25" /></a> </p>
			<p style="color:#666;line-height:30px;">邮箱：web@ni8.com</p>
		</div>
	</div>
	<div class="clear"></div>
	<div class="case_tit"><span>最新案例</span><a href="/case/index.html" title="">MORE</a></div>
	<div class="case_top">
		<ul>
			<li><a href="/case/show_458.html" target="_blank" title=""><img src="/index/picture/1540193174.png" alt=""
						width="242" height="160" />
					<h4>深圳市力驰多汽车技术服务有限公司</h4>
				</a></li>
			<li><a href="/case/show_457.html" target="_blank" title=""><img src="/index/picture/1540192604.jpg" alt=""
						width="242" height="160" />
					<h4>深圳市洲远电子有限公司</h4>
				</a></li>
			<li><a href="/case/show_456.html" target="_blank" title=""><img src="/index/picture/1540192309.png" alt=""
						width="242" height="160" />
					<h4>深圳市通天科技有限公司</h4>
				</a></li>
			<li><a href="/case/show_455.html" target="_blank" title=""><img src="/index/picture/1540191003.jpg" alt=""
						width="242" height="160" />
					<h4>深圳易道济生文化发展有限公司</h4>
				</a></li>
		</ul>
	</div>
	<div class="clear"></div>
	<div class="case_bottom">
		<div class="case_news">
			<div class="case_news_t">
				<h3>普擎<span>新闻</span></h3><a href="/about/news.html" title="">MORE</a>
			</div>
			<ul>
				<li><a href="/about/show_888.html" title="">普擎科技2018年员工聚餐</a><span>2018-08-21</span></li>
				<li><a href="/about/show_887.html" title="">普擎科技温泉漂流2日游</a><span>2018-08-13</span></li>
				<li><a href="/about/show_873.html" title="">普擎科技2018年员工夏季生日会</a><span>2018-07-19</span></li>
				<li><a href="/about/show_849.html" title="">红树林-深圳湾海边徒步活动</a><span>2018-04-10</span></li>
				<li><a href="/about/show_782.html" title="">普擎科技2018年春节放假通知</a><span>2018-02-06</span></li>
				<li><a href="/about/show_566.html" title="">一场属于普擎人的活动日</a><span>2017-03-14</span></li>
			</ul>
		</div>
		<div class="case_trade">
			<div class="case_news_t">
				<h3>行业案例<span style="color:#ff4817;">检索</span></h3><a href="/case/index.html" title="">MORE</a>
			</div>
			<p>
				<a href="/case/index.html/keys/18" title="">全网营销案例</a><a href="/case/index.html/keys/8"
					title="">手机网站建设</a><a href="/case/index.html/keys/4" title="">品牌网站建设</a><a
					href="/case/index.html/keys/3" title="">电子网站建设</a><a href="/case/index.html/keys/1"
					title="">艺术设计网站建设</a><a href="/case/index.html/keys/5" title="">外贸网站建设</a><a
					href="/case/index.html/keys/6" title="">化妆品行业网站建设</a><a href="/case/index.html/keys/7"
					title="">旅游行业网站建设</a><a href="/case/index.html/keys/9" title="">教育行业网站建设</a><a
					href="/case/index.html/keys/10" title="">餐饮行业网站建设</a><a href="/case/index.html/keys/11"
					title="">LED照明网站建设</a><a href="/case/index.html/keys/12" title="">饰品网站建设</a><a
					href="/case/index.html/keys/13" title="">服装行业网站建设</a><a href="/case/index.html/keys/14"
					title="">家居行业网站建设</a><a href="/case/index.html/keys/15" title="">展览公司网站建设</a><a
					href="/case/index.html/keys/16" title="">科技公司网站建设</a><a href="/case/index.html/keys/17"
					title="">制造业网站建设</a><a href="/case/index.html/keys/19" title="">资讯类网站建设</a><a
					href="/case/index.html/keys/20" title="">酒店行业网站建设</a><a href="/case/index.html/keys/21"
					title="">装修网站建设</a><a href="/case/index.html/keys/24" title="">金融行业网站建设</a><a
					href="/case/index.html/keys/25" title="">协会网站建设</a><a href="/case/index.html/keys/26"
					title="">物流行业网站建设</a><a href="/case/index.html/keys/27" title="">订票系统网站案例</a><a
					href="/case/index.html/keys/28" title="">企业网站制作</a><a href="/case/index.html/keys/29"
					title="">交通网站建设</a> </p>
		</div>
	</div>
</div>

@endsection

@section('home')
<script>
	GetCurStyle("home3");
</script>
@endsection