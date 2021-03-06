<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{isset($title)?$title:Cache('title')}}</title>
<meta name="keywords" content="重庆普擎科技,{{isset($keywords)?$keywords:Cache('keywords')}}">
<meta name="description" content="{{Cache('description')}}">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1,initial-scale=1.0, maximum-scale=1.0,user-scalable=0">
<meta name="applicable-device" content="pc,mobile">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="renderer" content="webkit">
<meta name="format-detection" content="telephone=yes"/>
<meta name="location" content="province=重庆;city=重庆">
<link rel="canonical" href="/"/>
<link rel="shortcut icon" href="/favicon.ico">
<link type="text/css" rel="stylesheet" href="/index/css/style.css" />
<link type="text/css" rel="stylesheet" href="/index/css/css.css" />
<link type="text/css" rel="stylesheet" href="/index/css/validationengine.jquery.css">
<script type="text/javascript" src="/index/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript"src="/index/js/curnavstyle.js"></script>
<script type="text/javascript" src="/index/js/funtion.js"></script>
<script type="text/javascript" src="/index/js/jquery-1.10.1.js"></script>
<script type="text/javascript" src="/index/js/jquery.validationengine-zh_cn.js"></script> 
<script type="text/javascript" src="/index/js/jquery.validationengine.js"></script>
<script>
	(function(){
		var bp = document.createElement('script');
		var curProtocol = window.location.protocol.split(':')[0];
		if (curProtocol === 'https') {
			bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
		}
		else {
			bp.src = 'http://push.zhanzhang.baidu.com/push.js';
		}
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(bp, s);
	})();
</script>
{{--<script src="/index/js/wb.js" type="text/javascript" charset="utf-8"></script>--}}
<style>
.dot{width:161px;position:absolute;left:50%;margin-left:400px;height:395px;}
.dot_bg{width:161px;height:161px;float:left;margin-top:30px;background: transparent url(/index/images/clock-shape.svg) no-repeat;position:relative;}
.center_dot{position: absolute;width: 10px;height: 10px;background: black;left: 50%;;top:50%;border-radius:10px;display:none;left:75.5px;}
.minute{display:none;}
.text{display:none;}
.secend_zhen{position: absolute; background: transparent url(/index/images/clock-sec.svg) no-repeat;width:11px;height:161px;left:75px;}
.minute_zhen{position: absolute;background: transparent url(/index/images/clock-min.svg) no-repeat;width:11px;height:161px;left:75px;}
.hour_zhen{position: absolute;width:11px;height:161px;background: transparent url(/index/images/clock-hour.svg) no-repeat;left:75px;}
</style>
<script type="text/javascript">
$(function(){
	$('#myform').validationEngine(); 
})
</script>
</head>
<body>
	<!--top-->
	<script src="/index/js/jquery.lazyload.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(function () {
			$("img").lazyload({
				effect: "fadeIn",
				failure_limit: 10
			});
		});
	</script>
	<div class="top1">
		<div class="topbox">
			<div class="logo f1"><a href="/" title="{{Cache('name')}}"><img src="{{Cache('logo')}}" id="logo"
						data-original="{{Cache('logo')}}" /></a></div>
			<div class="dh f2">
				<ul class="dh-top f2" style="height:22px;">
					<li class="f2"><span
							style="margin-right:20px;display:inline-block;">销售热线：{{Cache('before_service_phone')}}</span>
						<span>售后专线：{{Cache('after_service_phone')}}</span></li>
				</ul>
				<div class="clear"></div>
				<span class="dh-main">
					<h3 class="nav_h2"><a href="/" id="in01" class="hover" title="首页">首页</a></h3>

					<h3 class="nav_h2"><a href="{{url('/web')}}" id="in02" class="hover" title="网站建设">网站建设</a></h3>


					<h3 class="nav_h2"><a href="{{url('/app')}}" id="in08" class="hover" title="APP开发">APP开发</a>

					</h3>
					<h3 class="nav_h2"><a href="{{url('/case')}}" id="in03" class="hover" title="成功案例">成功案例</a>

					</h3>
					<h3 class="nav_h2"><a href="{{url('/news')}}" id="in04" class="hover" title="网站资讯">网站资讯</a>

					</h3>
					
					<h3 class="nav_h2"><a href="{{url('/contact')}}" id="in06" class="hover" title="联系网站开发">联系普擎</a>

					</h3>
				</span>
			</div>
		</div>
	</div>


	@yield('content')


	<!--footer-->

	<div class="bottom">
			<div class="bottombox">
				<div class="bottom-dh">
					<ul style="width:200px;">
						<h4>产品及解决方案</h4>
						<li><a href="{{ url('/web') }}" title="企业官网建设">企业官网建设</a></li>
						<li><a href="{{ url('/mall_b2b') }}" title="商城网站建设">商城网站建设</a></li>
						<li><a href="{{ url('/app') }}" title="APP开发">APP开发</a></li>
						<li><a href="{{ url('/wechat') }}" title="微信营销">微信营销</a></li>
					</ul>
					<ul>
						<h4>成功案例</h4>
						@foreach ($case_category_lists as $value)
						<li><a href="{{ url('case/'.$value->id) }}" title="{{ $value->name }}">{{ $value->name }}</a></li>
						@endforeach
					</ul>
					<ul>
						<h4>普擎资讯</h4>
						@foreach ( $news_category_lists as $value)
						<li><a href="{{ url('/news/'.$value->id) }}" title="{{ $value->name }}">{{ $value->name }}</a></li>
						@endforeach
					</ul>
					<ul>
						<h4>关于普擎</h4>
						<li><a href="{{ url('/contact') }}" title="普擎概况">普擎概况</a></li>
						<li><a href="{{ url('/contact') }}" title="企业文化">企业文化</a></li>
						<li><a href="{{ url('/contact') }}" title="加入普擎">加入普擎</a></li>
					</ul>
					<ul>
						<h4>联系普擎</h4>
						<li><a href="{{ url('/contact') }}" title="联系方式" rel="nofollow">联系方式</a></li>
						<li><a href="{{ url('/contact') }}#pay" title="付款方式" rel="nofollow">付款方式</a></li>
					</ul>

					<div class="ewm">
						<p><img src="/index/picture/wxewm.jpg" data-original="/index/picture/wxewm.jpg" alt="p7ing.com" width="118" height="118" /></p>
						<span>官方微信</span>
					</div>
				</div>

				<div class="yqlj">
					<p style="color: #FFFFFF">重庆普擎科技提供：<b class="keywords">重庆网站建设开发</b> <b class="keywords">微信小程序开发</b> <b class="keywords">自适应网站外包</b> <b class="keywords">WEB应用设计研发</b> <b class="keywords">电商网站专属定制</b></p>
					<ul>
						<li><a href="https://www.baidu.com/" title="百度搜索" target="_blank">百度搜索</a></li>
						<li><a href="https://www.aliyun.com/" title="阿里云服务器" target="_blank">阿里云服务器</a></li>
						<li><a href="https://www.weibo.com/" title="新浪微博" target="_blank">新浪微博</a></li>
						<li><a href="https://www.google.com/" title="google搜索" target="_blank">google搜索</a></li>
						<li><a href="https://www.west.cn/" title="西部数码" target="_blank">西部数码</a></li>
						<li><a href="https://www.zbj.com/" title="猪八戒网" target="_blank">猪八戒网</a></li>
						<li><a href="http://www.icbc.com.cn" title="中国工商银行" target="_blank">中国工商银行</a></li>
					</ul>
					<div class="clear"></div>
				</div>
			</div>
			<div class="footer">
				<div class="bqxx" style="position:relative;">
					<ul>
						<li class="f1" style="font-family:Arial;">&copy;2019 重庆市普擎科技有限公司 版权所有&nbsp;&nbsp;&nbsp;&nbsp;
						</li>
						<li class="f2"><a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow" style="color:#fff;">渝ICP备19004069号</a>&nbsp;&nbsp;&nbsp;</li>
					</ul>

				</div>
			</div>
		</div>
	<script>
		$(function () {
			$(".fqq").hover(function () {
				$(".foot_qq").css("display", "block");
			}, function () {
				$(".foot_qq").css("display", "none");
			});
			$(".dhm").hover(function () {
				$(".kfdh").css("display", "block");
			}, function () {
				$(".kfdh").css("display", "none");
			});
			$(".gw").hover(function () {
				$(".code-side").css("display", "block");
			}, function () {
				$(".code-side").css("display", "none");
			});
		});
	</script>


	<div class="guide" style="bottom:40px;">
		<div class="guide-warp">
			<ul>

				<li class="fqq">
					<a class="zixun1 zixun" title="qq联系网站建设"></a>
					<div class="foot_qq">
							<a target="_blank" rel="nofollow" title="售前联系" href="http://wpa.qq.com/msgrd?v=3&uin={{Cache('before_service_qq')}}&site=qq&menu=yes">
								<img src="/index/picture/q01.png" alt="p7ing.com" width="25" data-original="/index/images/q01.png" /><span>售前联系</span></a>
							<a target="_blank" rel="nofollow" title="售后联系" href="http://wpa.qq.com/msgrd?v=3&uin={{Cache('after_service_qq')}}&site=qq&menu=yes">
								<img src="/index/picture/q02.png" alt="p7ing.com" width="25" data-original="/index/images/q02.png" /><span>售后联系</span></a>
						</div>
				</li>
				<li class="dhm">
					<a class="zixun2 zixun" title="电话联系普擎科技"></a>
					<div class="kfdh">
						<p><span>售前服务:</span><span
								style="width:110px;font-size:13px;color:#fff;">{{Cache('before_service_phone')}}</span>
						</p>
						<p><span>售后专线:</span><span
								style="width:110px;font-size:13px;color:#fff;">{{Cache('after_service_phone')}}</span>
						</p>
					</div>
				</li>
				<li><a href="Mailto:{{ Cache('company_email') }}" class="zixun3 zixun" title="" target="_blank">
					</a></li>
				<li class="gw">
					<a class="zixun4 zixun" title="扫描二维码联系"></a>
					<div class="code-side">
						<div><img width="118px" src="/index/picture/wxewm.jpg" alt="微信公众号"
								data-original="/index/images/wxewm.jpg" /><span>微信公众号</span></div>
					
					</div>
				</li>
				<li><a class="zixun5 zixun" href="javascript:window.scrollTo(0,0)" class="top1" title="回顶部">
					</a></li>
			</ul>
		</div>
	</div>
	<script type="text/javascript" src="//js.users.51.la/19968729.js"></script>
	@yield('home')
</body>

</html>