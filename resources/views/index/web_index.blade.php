@extends('index.header')
@section('content')
<style>
	.dot {
		width: 161px;
		position: absolute;
		left: 50%;
		margin-left: 400px;
		height: 395px;
	}

	.dot_bg {
		width: 161px;
		height: 161px;
		float: left;
		margin-top: 30px;
		background: transparent url(/index/images/clock-shape.svg) no-repeat;
		position: relative;
	}

	.center_dot {
		position: absolute;
		width: 10px;
		height: 10px;
		background: black;
		left: 50%;
		;
		top: 50%;
		border-radius: 10px;
		display: none;
		left: 75.5px;
	}

	.minute {
		display: none;
	}

	.text {
		display: none;
	}

	.secend_zhen {
		position: absolute;
		background: transparent url(/index/images/clock-sec.svg) no-repeat;
		width: 11px;
		height: 161px;
		left: 75px;
	}

	.minute_zhen {
		position: absolute;
		background: transparent url(/index/images/clock-min.svg) no-repeat;
		width: 11px;
		height: 161px;
		left: 75px;
	}

	.hour_zhen {
		position: absolute;
		width: 11px;
		height: 161px;
		background: transparent url(/index/images/clock-hour.svg) no-repeat;
		left: 75px;
	}
</style>
<!--banner-->
<div class="banner" style="background:url(/index/images/1490869083.jpg) no-repeat center center;"></div>
<!--main开始-->
<div class="pro_wap" id="pro_wap">
	<div class="pro_menu">
		<ul style="margin-left: 322px;width: 620px;">
			<li class="cur"><a href="{{url('/web')}}#pro_wap" title="" class="phover"><img src="/index/picture/picon1.png" alt="" width="22" height="22" class="pr1" /><br /><span>高品质网站建设</span></a></li>
			<li><a href="{{url('/mall_b2b')}}#pro_wap" title="" class="phover"><img src="/index/picture/picon2.png" alt="" width="22" height="22" class="pr2" /><br /><span>商城网站建设</span></a></li>
			<li><a href="{{url('/mall_b2b')}}#wechat" title="" class="phover"><img src="/index/picture/picon4.png" alt="" width="26" height="22" class="pr4" /><br /><span>微信营销</span></a></li>
		</ul>
	</div>
</div>
<div class="pro_item">
	<div class="pro_list">
		<ul>
			<li><a class="hover" href="{{url('/web')}}#pro_wap" target="_self">企业官网建设</a></li>
			<li><a title="视觉形象展示官网" href="{{url('/view_web')}}#pro_wap">视觉形象展示官网</a></li>
			<li><a href="{{url('/sale_web')}}#pro_wap">营销型网站建设 </a>&nbsp;</li>
			<li><a title="响应式官网" href="{{url('/all_web')}}#pro_wap">响应式官网</a></li>
		</ul>
	</div>
	<div class="pro_option">
		<div class="pro_box" style="display:block;">
			<div class="pro_con" style="padding:155px 0px;"> 
				<span style="width:528px;float:left;">
					<img src="/index/picture/pimg1.png" width="528" height="412" alt="" border="0" />
				</span> 
				<span style="width:467px;margin-top:50px;float:right;">
					<font color="#333333"><span style="font-size:32px;line-height:48px;">企业官网建设</span></font><br />
					<br />
					<br />
					<p style="color:#7a7a7a;line-height:35px;">
						我们和客户探讨,针对客户需求,为客户设计优秀企业官网视觉效果,针对客户特殊性，进行定制型开发，完整确保客户的需求完美体现,开发过程全程与客户实时沟通进程与开发实际效果，做到随时看,随时改，让每一位客户都能将官网作为可以在互联网海洋翱翔的平台实现将公司宣称最大化，公司收益最大化
						</p>
				</span>
				<div class="clear"></div>
			</div>
			<div class="wl_banner1">
				<h3>我们的优势<span>SUPERIORITY</span></h3>
				<div>
					<p class="ban1">经验丰富的设计团队<span>专业的网页设计为您提供整站视觉设计；</span></p>
					<p class="ban2">量身定制的服务<span>经验丰富的网站开发人员为您提供完美的定制服务；</span></p>
					<p class="ban3">个性化的服务<span>专业设计人员为您提供个性化风格，满足您的个性化的需求；</span></p>
					<p class="ban4">值得信赖的服务<span>团队均为3年以上设计/开发经验成员,称为您最坚实的后盾；</span></p>
				</div>
			</div>
			<div class="pro_con" style="padding:90px 0px;">
				<h3 style="text-align:center;color:#333333;font-size:32px;font-weight:500;">我们的能力</h3>
				<p style="padding:30px 0px;text-align:center;color:#999999;line-height:26px;font-size:14px;"><a href="/" target="_blank"><span
						 style="color:#000000;">普擎科技</span></a>帮助客户策划,整理,设计,开发整套网站,涵盖UI设计,公司官网,单用户电子商城,多用户电子商城,小程序商城,服务器主机托管,网站托管,网站二次开发,网站定制,以长达3年的设计,开发经验,为您提供最优质的的服务</p>
				<p> <span style="width:330px;text-align:center;float:left;display:block;"><img alt="" src="/index/picture/pf1.jpg"
						 data-original="/index/images/pf1.jpg" height="114" width="114" /></span> <span style="width:344px;text-align:center;float:left;display:block;"><img
						 alt="" src="/index/picture/pf2.jpg" data-original="/index/images/pf2.jpg" height="114" width="114" /></span>
					<span style="width:330px;text-align:center;float:left;display:block;"><img alt="" src="/index/picture/20160301010331_10565.jpg"
						 data-original="/asp_bin/UploadFile/20160301010331_10565.jpg" border="0" /></span> </p>
				<p> <span style="width:330px;text-align:center;color:#cccccc;font-family:'宋体';float:left;display:block;"><span
						 style="color:#666666;font-family:arial;margin-top:10px;display:inline-table;">PROFESSIONALS</span><br />
						专业</span> <span style="width:344px;text-align:center;color:#cccccc;font-family:'宋体';float:left;display:block;"><span
						 style="color:#666666;font-family:arial;margin-top:10px;display:inline-table;">EXPERIENCE</span><br />
						经验</span> <span style="width:330px;text-align:center;color:#cccccc;font-family:'宋体';float:left;display:block;"><span
						 style="color:#666666;font-family:arial;margin-top:10px;display:inline-table;">CREATIVE</span><br />
						创意</span> </p>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	</if>
</div>

@endsection

@section('home')
<script>
	GetCurStyle("home1");
</script>
@endsection