@extends('index.header')
@section('content')

<!--banner-->
<div class="banner" style="background:url(/index/images/1490868907.jpg) no-repeat center center;"></div>
<!--main开始-->
<div class="content">
	<div class="case_menu">
		<ul>
			<li><a href="/case/index.html" title="网站建设案例" @if($id == 0) class="hover" @endif>精选</a></li>
			@foreach ($category_lists as $value)
				<li><a href="{{ url('case',[$value->id]) }}" @if($id == $value->id) class="hover" @endif title="{{ $value->name }}">{{ $value->name }}</a></li>
			@endforeach
			
		
		</ul>
	</div>
	<div class="case">
		<ul>
			@foreach ($lists as $value)
				<li>
					<div class="cimg">
						<img src="/index/picture/logo.jpg" data-original="{{ $value->thumbnail }}" rel="nofollow" alt="网站制作案例" width="320" height="210" />
						<a href="{{ url('case_show',[$value->id]) }}" title="{{ $value->title }}">
							<h4></h4>
							<p></p>
						</a>
					</div>
					<div class="ctext"><a title="{{ $value->title }}" href="{{ url('case_show',[$value->id]) }}"><span
								class="c1">{{ $value->title }}</span><br /><span
								class="c2">{{ $value->description }}...</span><br />
								</a></div>
				</li>
			@endforeach
		</ul>
	</div>
	<div class="clear"></div>
	{{ $lists->links() }}
	<div class="clear"></div>
	<div class="case_tit"><span>最新案例</span><a href="/case/index.html" title="最新网站建设案例">MORE</a></div>
	<div class="case_top">
		<ul>
			@foreach($new_case as $value)
				
				<li><a href="{{url('case_show',[$value->id])}}" title="{{$value->title}}"><img src="{{$value->thumbnail}}" alt="" width="242" height="160" /><h4>{{$value->title}}</h4></a></li>
			@endforeach
		</ul>
	</div>
	<div class="clear"></div>
	<div class="case_bottom">
		<div class="case_news">
			<div class="case_news_t">
				<h3>普擎<span>新闻</span></h3><a href="/about/news.html" title="">MORE</a>
			</div>
			<ul>
					@foreach($pq_news as $value)
						<li><a href="{{url('news_show',[$value->id])}}" title="{{$value->title}}">{{$value->title}}</a><span>{{date('Y-m-d',$value->input_time)}}</span></li>
					@endforeach
				</ul>
		</div>
		<div class="case_trade">
			<div class="case_news_t">
				<h3>行业案例<span style="color:#ff4817;">检索</span></h3><a href="/case/index.html" title="">MORE</a>
			</div>
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
<script>
	GetCurStyle("home2");
</script>
@endsection