<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{{Cache('title')}}-首页</title>
	<meta name="description" content="{{Cache('description')}}">
	<meta name="keywords" content="{{Cache('keywords')}}">
	<link rel="shortcut icon" href="/index/images/favicon.ico">
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
					<h3 class="nav_h2"><a href="{{url('/solution')}}" id="in07" class="hover" title="解决方案">解决方案</a>

					</h3>
					<h3 class="nav_h2"><a href="{{url('/case')}}" id="in03" class="hover" title="成功案例">成功案例</a>

					</h3>
					<h3 class="nav_h2"><a href="{{url('/news')}}" id="in04" class="hover" title="网站资讯">网站资讯</a>

					</h3>
					<h3 class="nav_h2"><a href="{{url('/about')}}" id="in05" class="hover" title="关于普擎网站开发" rel="nofollow">关于普擎</a>

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
					data-original="asp_bin/photo/1459317057.jpg" width="285" height="285" alt="网站代运营" class="bimg5">
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
							<div class="pic">
								<div class="picImg"><a href="/about/show_714.html" rel="nofollow" title=""><img src="/index/picture/1510820276.jpg"
										 data-original="/asp_bin/newimg/1510820276.jpg" alt="深圳网站外包业务" rel="nofollow" width="362" height="238" /></a></div>
								<div class="pic_cont"><a href="/about/show_714.html" rel="nofollow" title=""><span class="b1">总监三千平台开发
											B2B2C平台开发</span><span class="b2">重庆普擎科技有限公司有幸为总监三千（深圳文化投资有限公司）服务，提供b2b2c商城建设解决方案，“总监三千”平台是总监三千（深圳文化投资有限公司）集结全球顶级创意设计人士的互动、创业创收的平台。开创总监经济人模式，专注服务高品质企业对品牌策划设计推广需求。</span></a></div>
							</div>
							<div class="pic">
								<div class="picImg"><a href="/about/show_701.html" rel="nofollow" title=""><img src="/index/picture/1505977886.jpg"
										 data-original="/asp_bin/newimg/1505977886.jpg" alt="深圳网站外包业务" rel="nofollow" width="362" height="238" /></a></div>
								<div class="pic_cont"><a href="/about/show_701.html" rel="nofollow" title=""><span class="b1">普擎科技中标研祥智能科技股份有限公司商城建设项目</span><span
										 class="b2">随着数字经济时代的到来，我们看到全球制造业正在发生着深刻的变革。传统的大批量、少批次的生产方式已经不能满足当今消费者对个性化的追求，而小批量、定制化的柔性生产正在成为制造业中的时尚。</span></a></div>
							</div>
							<div class="pic">
								<div class="picImg"><a href="/about/show_615.html" rel="nofollow" title=""><img src="/index/picture/1492830255.jpg"
										 data-original="/asp_bin/newimg/1492830255.jpg" alt="深圳网站外包业务" rel="nofollow" width="362" height="238" /></a></div>
								<div class="pic_cont"><a href="/about/show_615.html" rel="nofollow" title=""><span class="b1">普擎科技中标B2C深圳鹿嘴旅游平台网站建设项目</span><span
										 class="b2">深圳鹿嘴山庄是一家 型度假村，位于大鹏半岛杨梅坑片区，深圳
											东端，面朝大亚湾，背倚深圳第二高峰七娘山。充满诗情画意的月夜钓螃蟹；游艇出海捕鱼；快艇冲浪；海钓、露营、烧烤；骑行鹿嘴观海大道；外岛浮潜窥探五光十色海底世界；迎接深圳
											缕阳光；喜欢挑战的来一场攀崖比赛更是不错的选择；还可以包一栋海边别墅举行生日PARTY或朋友聚会；不管你是否学过摄影，只需你拿起相机，按下快门，都是一幅精美
											伦的画面……。或伫立山崖或游走于海岸边，听着海浪击石的声音，心底一片轻灵、空明。”</span></a></div>
							</div>
							<div class="pic">
								<div class="picImg"><a href="/about/show_543.html" rel="nofollow" title=""><img src="/index/picture/1487574894.jpg"
										 data-original="/asp_bin/newimg/1487574894.jpg" alt="深圳网站外包业务" rel="nofollow" width="362" height="238" /></a></div>
								<div class="pic_cont"><a href="/about/show_543.html" rel="nofollow" title=""><span class="b1">普擎科技中标大桥化工官方商城网站建设项目</span><span
										 class="b2">中山大桥化工有限公司成立于1985年3月，总部位于伟人孙中山先生的故乡——广东省中山市，是集研发、生产和销售于一体的中港合资高新技术企业。2008年3月，正式组建成立了中山大桥化工企业集团（简称“大桥化工集团”）。
											　　经过多年发展，大桥化工集团实力不断增强，同时，旗下拥有众多子公司和控股公司，并先后在中山市、重庆市、上海市、合肥市、韶关市等地兴建了现代化的生产基地。公司生产和经营的各类高性能专用涂料系列产品，包括汽车涂料、工程机械涂料、大中巴涂料、摩托车涂料、电子电器涂料、机车涂料、重防腐涂料、粉末涂料、电泳涂料等，产品性能优越，具有很高的市场知名度和强大的客户基础，在行业内拥有良好的口碑，部分产品进入国际市场。
										</span></a></div>
							</div>
							<div class="pic">
								<div class="picImg"><a href="/about/show_405.html" rel="nofollow" title=""><img src="/index/picture/1483063842.jpg"
										 data-original="/asp_bin/newimg/1483063842.jpg" alt="深圳网站外包业务" rel="nofollow" width="362" height="238" /></a></div>
								<div class="pic_cont"><a href="/about/show_405.html" rel="nofollow" title=""><span class="b1">普擎科技中标中联广深集团公司官网建设项目</span><span
										 class="b2">中联广深医药（集团）有限公司成立于一九八三年，是由全国医药行业几十家企业与本集团公司职工共同持有股份的混合所有制企业。公司坚持人才战略、创新机制，现已发展成为以医药为主，集科、工、贸为一体，具有一定实力和知名度的大型企业集团。</span></a></div>
							</div> <!-- 图片列表 end -->
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
									<div class="cgal_tp"> <a href="{{url('case_show',[$value->id])}}" title="建站案例">
											<h4></h4>
											<p></p>
										</a> <img src="/index/picture/logo.jpg" data-original="{{$value->thumbnail}}" width="358" height="235"
										 alt="" class="case_img"> 
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
									<div class="cgal_tp"> <a href="/case/show_328.html" title="">
											<h4></h4>
											<p></p>
										</a> <img src="/index/picture/logo.jpg" data-original="/asp_bin/newimg/1482402400.jpg" width="358" height="235"
										 alt="" class="case_img"> </div>
									<div class="cgal_tp"> <a href="/case/show_417.html" title="">
											<h4></h4>
											<p></p>
										</a> <img src="/index/picture/logo.jpg" data-original="/" width="358" height="235" alt="" class="case_img">
									</div>
									<div class="cgal_tp"> <a href="/case/show_407.html" title="">
											<h4></h4>
											<p></p>
										</a> <img src="/index/picture/logo.jpg" data-original="/asp_bin/newimg/1512109113.jpg" width="358" height="235"
										 alt="" class="case_img"> </div>
									<div class="cgal_tp"> <a href="/case/show_405.html" title="">
											<h4></h4>
											<p></p>
										</a> <img src="/index/picture/logo.jpg" data-original="/asp_bin/newimg/1511235726.jpg" width="358" height="235"
										 alt="" class="case_img"> </div>
									<div class="cgal_tp"> <a href="/case/show_291.html" title="">
											<h4></h4>
											<p></p>
										</a> <img src="/index/picture/logo.jpg" data-original="/asp_bin/newimg/1468036253.jpg" width="358" height="235"
										 alt="" class="case_img"> </div>
									<div class="cgal_tp"> <a href="/case/show_319.html" title="">
											<h4></h4>
											<p></p>
										</a> <img src="/index/picture/logo.jpg" data-original="/asp_bin/newimg/1474947530.jpg" width="358" height="235"
										 alt="" class="case_img"> </div>
								</div>
							</li>
							<li style="width:1140px;">
								<div class="cgal_list">
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
					<div class="core_img"><a href="/service/index_20.html" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174401.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="/service/index_20.html" title="">企业官网建设</a></div>
				</li>
				<li>
					<div class="core_img"><a href="/service/index_108.html" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174406.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="/service/index_108.html" title="">商城网站建设</a></div>
				</li>
				<li>
					<div class="core_img"><a href="/service/index_109.html" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174408.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="/service/index_109.html" title="">系统平台开发</a></div>
				</li>
				<li>
					<div class="core_img"><a href="/service/index_110.html" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174404.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="/service/index_110.html" title="">微信营销</a></div>
				</li>
				<li>
					<div class="core_img"><a href="/ssl/ssl.html" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174403.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="/ssl/ssl.html" title="">SSL证书</a></div>
				</li>
				<li>
					<div class="core_img"><a href="/service/index_112.html" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174402.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="/service/index_112.html" title="">APP开发</a></div>
				</li>
				<li>
					<div class="core_img"><a href="/service/index_113.html" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174410.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="/service/index_113.html" title="">商城/网站装修</a></div>
				</li>
				<li>
					<div class="core_img"><a href="/service/index_114.html" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174407.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="/service/2019321174407.html" title="">平面设计</a></div>
				</li>
				<li>
					<div class="core_img"><a href="/service/index_115.html" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174405.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="/service/index_115.html" title="">阿里云服务器</a></div>
				</li>
				<li>
					<div class="core_img"><a href="/service/index_116.html" title=""><img src="/index/picture/logo.jpg" rel="nofollow"
							 data-original="/index/images/2019321174409.png" alt="" width="100%" height="100%" /></a> </div>
					<div class="core_h"><a href="/service/index_116.html" title="">普擎天下邮</a></div>
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
					<li id="sjwzzx" class="current">建站咨讯</li>
					<li id="wzjszs">网站建设知识</li>
					<li id="wlyxtg">网站营销推广知识</li>
				</ul>
			</div>
			<div class="xwzx-main" id="sjwzzxbox" style="display:block;">
				<div class="xwlb">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>10</p>
							<span>2018 NOV</span>
						</li>
						<li>
							<h5><a href="/about/show_953.html" title="网站建设相关资讯">5G网络资费标准曝光，和4g相比差太远！</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">随着互联网和科技的不断更新换代与快速崛起，人们对于智能化和快网速的需求越来越大，早已成熟和普及度较高的4G时代远远不能满...</p>
						</li>
					</ul>
				</div>
				<div class="xwlb" style="margin-right:0px;">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>08</p>
							<span>2018 OCT</span>
						</li>
						<li>
							<h5><a href="/about/show_920.html" title="网站建设相关资讯">脸书数据泄露的罪魁祸首——网站漏洞</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">近日，美国社交媒体巨头“脸书”又一次遭遇了大规模用户数据泄露，近5000万用户的账户可能遭遇入侵、甚至盗用。</p>
						</li>
					</ul>
				</div>
				<div class="xwlb">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>20</p>
							<span>2018 SEP</span>
						</li>
						<li>
							<h5><a href="/about/show_907.html" title="网站建设相关资讯">深圳做软件开发的外包公司有哪些？ </a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">要数IT领域近来搜索热度最高的词汇，“软件外包”当之无愧。当企业想要开启一个新项目时，常常会陷入没有专门的技术人员开发项...</p>
						</li>
					</ul>
				</div>
				<div class="xwlb" style="margin-right:0px;">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>19</p>
							<span>2018 SEP</span>
						</li>
						<li>
							<h5><a href="/about/show_906.html" title="网站建设相关资讯">微信生态服务商黑马——微赞</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">近期，微信的“三儿子”微赞获得4500万的A轮融资，资方为钜鑫资本。</p>
						</li>
					</ul>
				</div>
				<div class="xwlb">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>14</p>
							<span>2018 SEP</span>
						</li>
						<li>
							<h5><a href="/about/show_903.html" title="网站建设相关资讯">支付宝都进军小程序了，你还在等什么？</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">小程序从17年开始就火爆整个市场，小编今天来跟大家说说小程序近日又有什么大动作！</p>
						</li>
					</ul>
				</div>
				<div class="xwlb" style="margin-right:0px;">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>18</p>
							<span>2018 APR</span>
						</li>
						<li>
							<h5><a href="/about/show_859.html" title="网站建设相关资讯">短网址只有前世，没有今生</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">短网址服务在中国的互联网火了很多年，新浪微博和腾讯微博都先后推出过自己的短网址服务，在今天短网址的发展却并不乐观。</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="xwzx-main" id="wzjszsbox" style="display:none;">
				<div class="xwlb">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>05</p>
							<span>2018 NOV</span>
						</li>
						<li>
							<h5><a href="/about/show_947.html" title="网站建站知识">手机网站制作的重要性</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">移动端的发展越来越快，小编今天给大家好好介绍手机端网址的重要性。</p>
						</li>
					</ul>
				</div>
				<div class="xwlb" style="margin-right:0px;">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>22</p>
							<span>2018 OCT</span>
						</li>
						<li>
							<h5><a href="/about/show_939.html" title="网站建站知识">商城网站建设需要注意哪些</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">现如今传统零售业在电商的猛烈冲击下生意越来越才惨淡，可见做一个电子商城网站的重要性，普擎科技的小编今天和大家谈谈做一个商...</p>
						</li>
					</ul>
				</div>
				<div class="xwlb">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>30</p>
							<span>2018 SEP</span>
						</li>
						<li>
							<h5><a href="/about/show_918.html" title="网站建站知识">深圳做网站公司--------首选普擎科技</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">普擎公司诞生于1999年，是电子商务网站的先驱者，2003年改名为深圳市普擎科技有限公司发展至今已经有十八九年的历史了,...</p>
						</li>
					</ul>
				</div>
				<div class="xwlb" style="margin-right:0px;">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>25</p>
							<span>2018 SEP</span>
						</li>
						<li>
							<h5><a href="/about/show_910.html" title="网站建站知识">2018年最值得学习的前端技术</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">如果问你2018年最值得学习的前端技术是什么，你可能立马会去问度娘或者自己身边当程序员的朋友或者同学，我觉得这样都不太准...</p>
						</li>
					</ul>
				</div>
				<div class="xwlb">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>26</p>
							<span>2017 AUG</span>
						</li>
						<li>
							<h5><a href="/about/show_681.html" title="网站建站知识">为什么做网站必须选择做响应式网站</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">普擎科技专业做PC+微站+手机+APP四网合一站,满意度99%.
								html5响应式深圳网站建设公司,提供响应式深圳网站设...</p>
						</li>
					</ul>
				</div>
				<div class="xwlb" style="margin-right:0px;">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>04</p>
							<span>2017 AUG</span>
						</li>
						<li>
							<h5><a href="/about/show_675.html" title="网站建站知识">深圳网站建设哪家好</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">深圳网站建设哪家好？在深圳，网站建设有上千家，而网站建设行业也没有统一的标准对每一家建站公司进行评分，而且网站建设行业也...</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="xwzx-main" id="wlyxtgbox" style=" display:none;">
				<div class="xwlb">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>10</p>
							<span>2018 OCT</span>
						</li>
						<li>
							<h5><a href="/about/show_921.html" title="网站营销推广"> SEO优化之怎么换取高质量的友链</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">
								小编在学习网站优化的这些天，看到最多的一句话就是“内容为皇，友链为王”，可见交换高质量的友链的重要性，一条好的友链...</p>
						</li>
					</ul>
				</div>
				<div class="xwlb" style="margin-right:0px;">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>28</p>
							<span>2018 SEP</span>
						</li>
						<li>
							<h5><a href="/about/show_916.html" title="网站营销推广">网站权重与SEO优化的瓜葛</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">网站权重是指网站在搜索引擎当中所占的高低，或是说成重要程度（权重是一个相对的概念），一般来说网站的权重越高则网站的排名越...</p>
						</li>
					</ul>
				</div>
				<div class="xwlb">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>16</p>
							<span>2018 MAR</span>
						</li>
						<li>
							<h5><a href="/about/show_820.html" title="网站营销推广">什么样的网站能够得到搜索引擎的认可</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">作为企业老板或seo工作人员的你，肯能会为自己的网站排名二苦恼。怎样做才能让你的网站被搜索引擎青睐？</p>
						</li>
					</ul>
				</div>
				<div class="xwlb" style="margin-right:0px;">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>15</p>
							<span>2018 JAN</span>
						</li>
						<li>
							<h5><a href="/about/show_758.html" title="网站营销推广">微信营销系统开发</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">什么是微信营销系统开发,怎样用微信营销系统带动微商城微分销？
							</p>
						</li>
					</ul>
				</div>
				<div class="xwlb">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>10</p>
							<span>2018 JAN</span>
						</li>
						<li>
							<h5><a href="/about/show_755.html" title="网站营销推广">你需要开发一款app</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">在互联网时代，随着企业的发展，不可避免的会有开发的需求。那么你为什么会钟情于一款APP网站开发，而不是什么微信小程序，公...</p>
						</li>
					</ul>
				</div>
				<div class="xwlb" style="margin-right:0px;">
					<ul>
						<li style="width:82px; background:#00adef; color:#FFFFFF; text-align:center; margin-right:14px;">
							<p>24</p>
							<span>2017 NOV</span>
						</li>
						<li>
							<h5><a href="/about/show_721.html" title="网站营销推广">浅谈网站优化</a></h5>
							<p style=" font-size:12px; font-family:'宋体'; color:#999999; line-height:20px;">不管你是什么公司,有自己的网站，网站优化就是一个必不可少的工作，网站如何优化值得每一位seo不懈探索</p>
						</li>
					</ul>
				</div>
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
					<li><a href="{{ url('/news') }}" title="普擎新闻">普擎新闻</a></li>
					<li><a href="/about/newss_10.html" title="手机网站资讯">手机网站资讯</a></li>
					<li><a href="/service/seo.html" title="网站建设知识">网站建设知识</a></li>
					<li><a href="/about/newss_9.html" title="网站营销推广知识">网站营销推广知识</a></li>
					<li><a href="/about/newss_12.html" title="中标新闻">中标新闻</a></li>
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
					<p><img src="/index/picture/wxewm.jpg" data-original="/index/images/wxewm.jpg" alt="" width="118" height="118" /></p>
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
						<a target="_blank" rel="nofollow" title="业务经理" href="http://wpa.qq.com/msgrd?v=3&uin=983492695&site=qq&menu=yes"><img
							 src="/index/picture/q01.png" alt="" width="25" data-original="/index/images/q01.png" /><span>业务经理</span></a><a
						 target="_blank" rel="nofollow" title="业务经理" href="http://wpa.qq.com/msgrd?v=3&uin=1014060040&site=qq&menu=yes"><img
							 src="/index/picture/q02.png" alt="" width="25" data-original="/index/images/q02.png" /><span>业务经理</span></a><a
						 target="_blank" rel="nofollow" title="售后客服" href="http://wpa.qq.com/msgrd?v=3&uin=1014641734&site=qq&menu=yes"><img
							 src="/index/picture/q03.png" alt="" width="25" data-original="/index/images/q03.png" /><span>售后客服</span></a><a
						 target="_blank" rel="nofollow" title="售后客服" href="http://wpa.qq.com/msgrd?v=3&uin=995338667&site=qq&menu=yes"><img
							 src="/index/picture/q04.png" alt="" width="25" data-original="/index/images/q00.png" /><span>售后客服</span></a><a
						 target="_blank" rel="nofollow" title="技术支持" href="http://wpa.qq.com/msgrd?v=3&uin=441579876&site=qq&menu=yes"><img
							 src="/index/picture/q01.png" alt="" width="25" data-original="/index/images/q01.png" /><span>技术支持</span></a>
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
						<div><img src="/index/picture/wxewm.jpg" width="118px" height="118px" alt="官网微信" data-original="/index/images/wxewm.jpg" /><span>官网微信</span></div>
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