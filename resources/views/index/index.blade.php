﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{{Cache('title')}}-首页</title>
	<meta name="keywords" content="{{Cache('keywords')}}">
	<meta name="description" content="{{Cache('description')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1,initial-scale=1.0, maximum-scale=1.0,user-scalable=0">
	<meta name="applicable-device" content="pc,mobile">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="renderer" content="webkit">
	<meta name="format-detection" content="telephone=yes"/>
	<link rel="canonical" href="/"/>
	<meta name="location" content="province=重庆;city=重庆">
	<link rel="shortcut icon" href="/favicon.ico">
	<link type="text/css" rel="stylesheet" href="/index/css/style.css" />
	<script type="text/javascript" src="/index/js/jquery-1.8.3.min.js"></script>
	<script src="/index/js/jquery1.js" type="text/javascript"></script>
	<style>
	</style>
	<meta name="baidu-site-verification" content="2KohppFGFx" />
	<meta name="wlhlauth" content="a46c1c8fe737488a5c7202e9d8abec49" />
	<meta name="robots" content="all">
</head>

<body style="background:url(/index/images/1491531510.jpg) no-repeat center top;background-attachment:fixed;">
	<script src="/index/js/jquery.lazyload.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(function () {
			$("img").lazyload({
				effect: "fadeIn",
				failure_limit: 10,

			});
		});
	</script>
	<div class="top" id="top">
		<div class="topbox">
			<div class="logo f1"><a href="/" title="{{Cache('name')}}"><img src="{{Cache('logo')}}" id="logo" data-original="{{Cache('logo')}}" /></a></div>
			<div class="dh f2">
				<ul class="dh-top f2" style="height:22px;">
					<li class="f2"><span style="margin-right:20px;display:inline-block;">售前热线：{{Cache('before_service_phone')}}</span>
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

	<!--banner开始-->
	<div class="flexslider">
		<ul class="slides">
			@foreach ($banner_lists as $value)
			<li style="background:url({{$value->img}}) no-repeat center;"><a href="{{$value->url}}" title="重庆普擎科技">&nbsp;</a></li>
			@endforeach
		</ul>
	</div>
	<!--banner结束-->
	<!--main开始-->
	<div class="main-top">
		<div class="main-topbox">
			<h3>我们是视觉追求者,网站工程师,我们是追梦人<br />
				也是您的用户体验专家</h3>
			<p>
				重庆普擎科技有限公司成立于2019年,公司聚集了一堆充满着活力和激情的年轻人在为梦想拼搏,我们致力于为客户打造心中最完美的产品,覆盖了公司官网定制开发,高端网站建设,电商平台开发,移动互联网产品开发(包括APP,小程序,微信应用开发等)，服务器、网站托管服务,IT信息技术外包服务,公司设计师、员工均为从业3年以上的优秀人才,曾在行业顶尖公司任职,凝聚互联网行业最领先的优势。</p>
			<div class="mp">
				<ul>
					<li class="hover"><a href="{{url('/contact')}}" title="联系网站设计" rel="nofollow">CONTACT US</a></li>
					<li><a href="{{url('/about')}}" title="了解更多网站设计" rel="nofollow">ABOUT US</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="hxyw">
		<div class="hxyw-top">
			<h2>建站核心业务 <span>CORE BUSINESS</span> </h2>
		</div>
		<div class="hxywbox">
			<ul>
				<li class="business-one">
					<p></p>
					<div>
						<h2 style=" width:390px;color: #FFFFFF; padding:25px 20px 10px;font-size: 24px;">电商平台开发</h2>
						<h3 style="width:390px;color: #FFFFFF; padding:0 20px;font-size: 15px; line-height:25px;">B2C网站建设<i>|</i>B2B网站建设<i>|</i>O2O平台开发<i>|</i>电商网站开发<i>|</i>分销平台<i>|</i>app商城开发</h3>
						{{-- <span class="clear" style="width:390px;color:#fff;padding:0px 20px 15px;">
							<a href="http://www.ni8.com/case/show_279.html" title="中柏商城开发">中柏商城</a>
							<a href="http://www.ni8.com/case/show_359.html" title="亚龙眼镜商城网站建设" rel="nofollow">亚龙眼镜商城</a>
							<a href="http://www.ni8.com/case/show_228.html" title="外贸商城网站设计" rel="nofollow">华朗外贸商城</a>
							<a href="http://www.ni8.com/case/show_325.html" title="E导游营销型网站建设" rel="nofollow">E导游商城</a>
							<a href="http://www.ni8.com/case/show_312.html" title="味道湄潭商城建设" rel="nofollow">味道湄潭商城</a>
							<a href="http://www.ni8.com/case/show_319.html" title="创客智汇商城制作" rel="nofollow">创客智汇商城</a>
							<a href="http://www.ni8.com/case/show_393.html" title="开餐厅网官网设计" rel="nofollow">开餐厅网</a>
							<a href="http://www.ni8.com/case/show_394.html" title=" 国坛酒业营销型网站建设" rel="nofollow"> 国坛酒业</a>
							<a href="http://www.ni8.com/case/show_396.html" title=" 鹿嘴山庄电商平台开发" rel="nofollow">鹿嘴山庄电商平台</a>
							<a href="http://www.ni8.com/case/show_397.html" title="领略商城开发" rel="nofollow">领略商城网站开发</a>
						</span> --}}
					</div>
					<img src="/index/picture/logo.jpg" data-original="/index/images/dianshang.jpg" rel="nofollow" width="430" height="430"
					 alt="商城网站建设" class="bimg1">
				</li>
				<li class="business-two">
					<p></p>
					<div>
						<h3 style="color: #FFFFFF; padding:25px 20px 10px;font-size: 24px;">网站建设</h3>
						<h3 style="color: #FFFFFF; padding:0 20px;font-size: 15px; line-height:25px;">营销型网站建设<i>|</i>企业网站建设<i>|</i>高端网站建设<i>|</i>手机网站建设<i>|</i>门户网站建设</h3>
						{{-- <span class="clear" style="color:#fff;padding:0px 20px 15px;">
							<a href="http://www.ni8.com/case/show_257.html" title="名家汇网页设计">名家汇</a>
							<a href="http://www.ni8.com/case/show_327.html" title="瑞和股份网站开发" rel="nofollow">瑞和股份</a>
							<a href="http://www.ni8.com/case/show_268.html" title="永安期货营销型网站建设" rel="nofollow">永安期货</a>
							<a href="http://www.ni8.com/case/show_328.html" title="珠海大象企业网站设计" rel="nofollow">珠海大象</a>
							<a href="http://www.ni8.com/case/show_276.html" title="铭利达网站开发" rel="nofollow">铭利达</a>
							<a href="http://www.ni8.com/case/show_275.html" title="凯秀企业网站建设" rel="nofollow">凯秀科技</a>
							<a href="http://www.ni8.com/case/show_380.html" title="大桥营销型网站建设" rel="nofollow">中山大桥</a>
							<a href="http://www.ni8.com/case/show_381.html" title=" 高巨创新" rel="nofollow"> 高巨创新</a>
							<a href="http://www.ni8.com/case/show_386.html" title="中联广深网站制作" rel="nofollow">中联广深</a>
							<a href="http://www.ni8.com/case/show_387.html" title=" 海通期货官网设计" rel="nofollow">海通期货</a>
							<a href="http://www.ni8.com/case/show_388.html" title=" 国巨通企业网站建设" rel="nofollow">国巨通讯</a>
							<a href="http://www.ni8.com/case/show_389.html" title="瑞珂玛高端网站建设" rel="nofollow">瑞珂玛机电</a>
						</span> --}}
					</div> <img src="/index/picture/logo.jpg" data-original="index/picture/wanzhanjianshe.jpg" width="290" height="290"
					 alt="品牌网站开发案例" class="bimg2">
				</li>
				<li class="business-three" style="margin:0;">
					<p></p>
					<div>
						<h3 style="color: #FFFFFF; padding:25px 20px 10px;font-size: 24px;">系统平台开发</h3>
						<h3 style="color: #FFFFFF; padding:0 20px;font-size: 15px; line-height:25px;">P2P金融平台<i>|</i>产品众筹平台<i>|</i>股权众筹平台<br />应用平台开发<i>|</i>论坛管理系统</h3>
					
					{{-- <span class="clear" style="color:#fff;padding:0px 20px  15px;">
						<a href="http://www.ni8.com/case/show_269.html" title="易保宝H5移动端开发">易保宝</a>
						<a href="http://www.ni8.com/case/show_84.html" title="淘金兄弟移动端网站建设" rel="nofollow">淘金兄弟</a>
						<a href="http://www.ni8.com/case/show_327.html" title="瑞和集采平台站点开发" rel="nofollow">瑞和集采平台</a>
						<a href="http://www.ni8.com/case/show_266.html" title="手机报修平台建站" rel="nofollow">天音手机报修平台</a>
						<a href="http://www.ni8.com/case/show_248.html" title="飞商网移动app开发" rel="nofollow">飞商网</a>
						<a href="http://www.ni8.com/case/show_291.html" title="管理平台开发" rel="nofollow">欧瑞特供应链管理</a>
						<a href="http://www.ni8.com/case/show_392.html" title="摇一摇微信公众号开发" rel="nofollow">摇一摇</a>
						<a href="http://www.ni8.com/case/show_391.html" title=" 兄弟猫共享充电宝手机app开发" rel="nofollow"> 兄弟猫共享充电宝</a>
						<a href="http://www.ni8.com/case/show_398.html" title="E快菜移动端app开发" rel="nofollow">E快菜</a>
						<a href="http://www.ni8.com/case/show_390.html" title=" 龙运通移动端web开发" rel="nofollow">龙运通</a>
						<a href="http://www.ni8.com/case/show_239.html" title="众健供应链网站制作" rel="nofollow">众健供应链</a>
					</span> --}}
					</div>
		 			<img src="/index/picture/logo.jpg" data-original="index/images/appkaifa.jpg" width="440" height="440" alt="服务平台站点开发" class="bimg3">
				</li>
				<li class="business-four">
					<p></p>
					<div>
						<h2 style="color: #FFFFFF; padding:25px 20px 10px;font-size: 24px;">微信应用开发</h2>
						<h3 style="color: #FFFFFF; padding:0 20px;font-size: 15px; line-height:25px;">微官网<i>|</i>微商城<i>|</i>微分销<i>|</i>微活动<i>|</i>微营销<i>|</i>微信小程序</h3>
						{{-- <span class="clear" style="color:#fff;padding:0px 20px 15px;">
							<a href="http://www.ni8.com/case/show_326.html" title="饰尚人生微官网">饰尚人生</a>
							<a href="http://www.ni8.com/case/show_383.html" title="优轲微信建站" rel="nofollow">优轲</a>
							<a href="http://www.ni8.com/case/show_384.html" title="服饰微商城" rel="nofollow">琳达李服饰</a>
							<a href="http://www.ni8.com/case/show_385.html" title="懒虫微商城系统开发" rel="nofollow">懒虫商城</a>
							<a href="http://www.ni8.com/case/show_379.html" title="雄盛业农副产品官网建站" rel="nofollow">雄盛业农副产品</a>
						</span> --}}
					</div> <img src="/index/picture/logo.jpg" data-original="/index/images/weixinimg.jpg" width="430" height="430" alt="微信营销网站开发"
					class="bimg4">
				</li>
				<li class="business-fiv">
					<p></p>
					<div><a title="网站托管服务"><span class="wzt1">网站托管服务</span><br />
							<span class="wzt2">网站托管后普擎科技为该系统提供免费技术支持和维护，包含：内容维护、设计维护、系统维护.</span></a></div> <img src="/index/images/wangzhantuoguan.jpg"
					data-original="/index/images/wangzhantuoguan.jpg" width="285" height="285" alt="网站代运营" class="bimg5">
				</li>
		<li style="position:absolute;right:0;bottom:0;width:700px;height:140px;margin:0;"> <img src="/index/picture/logo.jpg"
			 data-original="index/images/kouhao.jpg" alt="网站托管外包" width="700" height="140" /></li>
		</ul>
	</div>
	</div>
	<div class="swhy" style="background:url(/index/images/1523601722.jpg) no-repeat center center;"></div>
	<div class="zbxw">
		<div class="zbxw_top">
			<h3> 中标新闻 <span>WINING NEWS</span></h3>
		</div>
		<div class="zbxwbox">
			<!--move-->
			<div class="rollBox">
				<div class="LeftBotton" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()"></div>
				<div class="Cont" id="ISL_Cont">
					<div class="ScrCont">
						<div id="List1">
							<!-- 图片列表 begin -->
							@foreach ($news as $value)
							<div class="pic">
									<div class="picImg">
										<a href="{{ url('news_show',$value->id) }}" rel="nofollow" title="">
											<img src="{{ $value->thumbnail }}" data-original="{{ $value->thumbnail }}" alt="{{ $value->title }}" rel="nofollow" width="362" height="238" />
										</a>
									</div>
									<div class="pic_cont">
										<a href="{{ url('news_show',$value->id) }}" rel="nofollow" title="">
											<span class="b1">
													{{ $value->title }}
											</span>
											<span class="b2">
												{{ $value->description }}											
											</span>
										</a>
								</div>
								</div>
							@endforeach
							

							 <!-- 图片列表 end -->
						</div>
						<!--<div id="List2"></div>-->
					</div>
				</div>
				<div class="RightBotton" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()"></div>
			</div>

		</div>
	</div>
	<div class="gld"></div>
	<div class="cgal">
		<div class="cgal-top">
			<h2> 成功案例 <span>SUCCESS CASE</span> </h2>
		</div>
		<div class="cgalbox">
			<div class="cgalbox-top">
				<ul>
					<li class="hover CG1">成功案例</li>
					<li class="CG2">最新上线</li>
				</ul>
			</div>
			<div class="cgal-main ">
				<div class="cgal-mainbox">
					<div class="cgal_fix">
						<ul class="slides">
							<li>
								<div class="cgal_list">
									@foreach($case_lists as $value)
									<div class="cgal_tp">
										<a href="{{url('case_show',[$value->id])}}" title="{{ $value->keywords }}">
											<h4></h4>
											<p></p>
										</a>
										<img src="/index/picture/logo.jpg" data-original="{{$value->thumbnail}}" width="358" height="235" alt="" class="case_img">
									</div>
									@endforeach
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="cgal-mainbox1">
					<div class="cgal_fix1">
						<ul class="slides">
							<li style="width:1140px;">
								<div class="cgal_list">
									@foreach ($new_case_lists as $value)
										<div class="cgal_tp"> <a href="{{url('case_show',[$value->id])}}" title="{{ $value->keywords }}">
												<h4></h4>
												<p></p>
											</a> <img src="/index/picture/logo.jpg" data-original="{{$value->thumbnail}}" width="358" height="235"
											alt="" class="case_img"> </div>
									@endforeach
								</div>
								
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="core">
		<div class="core_tit">
			<h1> 网站建设业务介绍<span>CORE BUSINESS</span> </h1>
		</div>
		<div class="core_list">
			<ul>
				<li>
					<div class="core_img"><a href="javascript:;" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174401.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="javascript:;" title="">企业官网建设</a></div>
				</li>
				<li>
					<div class="core_img"><a href="javascript:;" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174406.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="javascript:;" title="">商城网站建设</a></div>
				</li>
				<li>
					<div class="core_img"><a href="javascript:;" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174408.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="javascript:;" title="">系统平台开发</a></div>
				</li>
				<li>
					<div class="core_img"><a href="javascript:;" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174404.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="javascript:;" title="">微信营销</a></div>
				</li>
				<li>
					<div class="core_img"><a href="javascript:;" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174403.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="javascript:;" title="">SSL证书</a></div>
				</li>
				<li>
					<div class="core_img"><a href="javascript:;" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174402.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="javascript:;" title="">APP开发</a></div>
				</li>
				<li>
					<div class="core_img"><a href="javascript:;" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174410.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="javascript:;" title="">商城/网站装修</a></div>
				</li>
				<li>
					<div class="core_img"><a href="javascript:;" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174407.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="javascript:;" title="">平面设计</a></div>
				</li>
				<li>
					<div class="core_img"><a href="javascript:;" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174405.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="javascript:;" title="">阿里云服务器</a></div>
				</li>
				<li>
					<div class="core_img"><a href="javascript:;" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174409.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="javascript:;" title="">普擎天下邮</a></div>
				</li>
			</ul>
		</div>
	</div>
	<div class="clear"></div>
	<div class="xwzx">
		<div class="xwzx-top">
			<h3 class="hhs"> 新闻中心 <span>NEWS CENTER</span> </h3>
		</div>
		<div class="xwzxbox">
			<div class="xwzxbox-top" style="margin-left:330px;">
				<ul>
					<li id="sjwzzx" class="current">相关资讯</li>
					<li id="wzjszs">学新姿势</li>
					<li id="wlyxtg">互联网安全</li>
				</ul>
			</div>
				<div class="xwzx-main" id="sjwzzxbox" style="display:block;">
						@forelse ($new_zxun as $user)
						<div class="xwlb">
							<ul>
								<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
										<p>{{ date('d',$value->input_time) }}</p>
										<span>{{ date('Y',$value->input_time) }} OCT</span>
								</li>
								<li>
									<h5><a href="{{ url('news_show',$value->id) }}" title="{{ $value->keywords }}">{{ $value->title }}</a></h5>
									<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">{{ $value->description }}</p>
								</li>
							</ul>
						</div>
					@empty

					@endforelse
				</div>
				<div class="xwzx-main" id="wzjszsbox" style="display:none;">
					@forelse ($new_zshi as $value)
						<div class="xwlb">
						
							<ul>
								<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
										<p>{{ date('d',$value->input_time) }}</p>
										<span>{{ date('Y',$value->input_time) }} OCT</span>
								</li>
								<li>
									<h5><a href="{{ url('news_show',[$value->id]) }}" title="{{ $value->keywords }}">{{ $value->title }}</a></h5>
									<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">{{ $value->description }}</p>
								</li>
							</ul>
						</div>
					@empty

					@endforelse
			
			</div>
			<div class="xwzx-main" id="wlyxtgbox" style=" display:none;">
				@forelse ($new_hlwang as $value)
					<div class="xwlb">
						<ul>
							<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
								<p>{{ date('d',$value->input_time) }}</p>
								<span>{{ date('Y',$value->input_time) }} OCT</span>
							</li>
							<li>
								<h5><a href="{{ url('news_show',$value->id) }}" title="{{ $value->keywords }}"> {{ $value->title }}</a></h5>
								<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">
										{{ $value->description }}</p>
							</li>
						</ul>
					</div>
				@empty

				@endforelse
			</div>

		</div>
	</div>
	<div class="wmdkh">
		<div class="wmdkh-top">
			<h3 class="hhs"> 我们的客户 <span>OUR CLIENT</span> </h3>
		</div>
		<div class="wmdkhbox">
			<div class="wmdkh-main">
				<div class="wmdkh-main-left">
					<ul>
						<li><a rel="nofollow" href="" class="a-1" title="创维集团"></a></li>
						<li><a rel="nofollow" href="" class="a-2" title="华为股份"></a></li>
						<li><a rel="nofollow" href="" class="a-3" title="THERAPEDIC"></a></li>
						<li style=" border-right:none;"><a rel="nofollow" href="" class="a-4" title="永安期货"></a></li>
						<li style=" border-bottom:none;"><a rel="nofollow" href="" class="a-5" title="中钢集团"></a></li>
						<li style=" border-bottom:none;"><a rel="nofollow" href="" class="a-6" title="联想集团"></a></li>
						<li style=" border-bottom:none;"><a rel="nofollow" href="" class="a-7" title="洪涛股份"></a></li>
						<li style=" border:none;"><a rel="nofollow" href="" class="a-8" title="瑞和股份"></a></li>

					</ul>
				</div>
				<div class="wmdkh-main-right">
					<ul>
						<li>
							<p>17载，历久而弥新。<br />
								你我携手的身影，曾出现在一次次互联网变迁中。<br />
								从携手共进，到相聚共赢。每一次认可，对我们而言都弥足珍贵。<br />
								<br />
								今天，予新而聚变。<br />
								我们齐肩并歩，再一次为超越梦想而改变。<br />
								从真实行动，到共赢未来。每一次前行，责任都将成为永恒的使命。<br />
								<br />
								2016，普擎与你一起，赢.聚变......</p>
						</li>
						<li style="color:#999999; height:50px; width:155px; line-height:50px; margin-top:45px;">普擎全体同仁</li>
						<li><span></span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--main开始-->

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
					<li><a href="{{ url('/about') }}" title="普擎概况">普擎概况</a></li>
					<li><a href="{{ url('/about/1') }}" title="企业文化">企业文化</a></li>
					<li><a href="{{ url('/about/2') }}" title="发展历程">发展历程</a></li>
					<li><a href="{{ url('/about/3') }}" title="加入普擎">加入普擎</a></li>
				</ul>
				<ul>
					<h4>联系普擎</h4>
					<li><a href="{{ url('/contact') }}" title="联系方式" rel="nofollow">联系方式</a></li>
					<li><a href="{{ url('/pay') }}" title="付款方式" rel="nofollow">付款方式</a></li>
					<li><a href="{{ url('/help') }}" title="网站建设帮助中心">帮助中心</a></li>
				</ul>
			
				<div class="ewm">
					<p><img src="/index/picture/wxewm.jpg" data-original="/index/picture/wxewm.jpg" alt="" width="118" height="118" /></p>
					<span>官方微信</span>
				</div>
			</div>
		
			<div class="yqlj">
				<ul>
					<li><a href="https://www.baidu.com/" title="百度搜索" target="_blank">百度搜索</a></li>
					<li><a href="https://www.aliyun.com/" title="阿里云服务器" target="_blank">阿里云服务器</a></li>
					<li><a href="https://www.weibo.com/" title="新浪微博" target="_blank">新浪微博</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
		<div class="footer">
			<div class="bqxx" style="position:relative;">
				<ul>
					<li class="f1" style="font-family:Arial;">&copy;2019 重庆市普擎科技有限公司 版权所有&nbsp;&nbsp;&nbsp;&nbsp;
					</li>
					<li class="f2"><a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow" style="color:#fff;">粤ICP备05022732号-1</a>&nbsp;&nbsp;&nbsp;粤B2-20050242</li>
				</ul>
				<div style="position:absolute;width:40px;top:16px;text-align:center;left:360px;">
					<script id="ebsgovicon" src="/index/js/govicon.js" type="text/javascript" charset="utf-8"></script>
				</div>
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
							<img src="/index/picture/q01.png" alt="" width="25" data-original="/index/images/q01.png" /><span>售前联系</span></a>
						<a target="_blank" rel="nofollow" title="售后联系" href="http://wpa.qq.com/msgrd?v=3&uin={{Cache('after_service_qq')}}&site=qq&menu=yes">
							<img src="/index/picture/q02.png" alt="" width="25" data-original="/index/images/q02.png" /><span>售后联系</span></a>
					</div>
				</li>
				<li class="dhm">
					<a class="zixun2 zixun" title="电话联系网站建设"></a>
					<div class="kfdh">
						<p><span>销售热线:</span><span style="width:110px;font-size:13px;color:#fff;">{{Cache('before_service_phone')}}</span></p>
						<p><span>服务热线:</span><span style="width:110px;font-size:13px;color:#fff;">{{Cache('after_service_phone')}}</span></p>
					</div>
				</li>
				<li><a href="Mailto:leimon@p7ing.com" class="zixun3 zixun" title="" target="_blank">
					</a></li>
				<li class="gw">
					<a class="zixun4 zixun" title="扫描二维码联系"></a>
					<div class="code-side">
						<div><img src="/index/picture/wxewm.jpg" width="118px" height="118px" alt="官网微信" data-original="/index/picture/wxewm.jpg" /><span>官网微信</span></div>
					</div>
				</li>
				<li><a class="zixun5 zixun" href="javascript:window.scrollTo(0,0)" class="top1" title="回顶部">
					</a></li>
			</ul>
		</div>
	</div>


	<!--js-->
	<script type="text/javascript" src="/index/js/jquery.flexslider-min.js"></script>
	<script src="/index/js/curnavstyle.js" type="text/javascript"></script>
	<script src="/index/js/js.js" type="text/javascript"></script>
	<script>
		GetCurStyle("home");
	</script>
</body>

</html>