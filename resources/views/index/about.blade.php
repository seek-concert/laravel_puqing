@extends('index.header')
@section('content')
 
<!--banner-->
<div class="banner" style="background:url(index/images/1490868939.jpg) no-repeat center center;position:relative;">
  <div class="dot">
    <div class="dot_bg">
      <div class="secend_zhen"></div>
      <div class="minute_zhen"></div>
      <div class="hour_zhen"></div>
      <div class="center_dot"></div>
      <script type="text/javascript">
$(function(){

	var w=75.5;
	$(".secend_zhen").css("left",75);
	$(".minute_zhen").css("left",75);
	$(".hour_zhen").css("left",75);
	$(".center_dot").css("left",w);
	var w1=75.5;
	$(".center_dote").css("left",w1);
	var h=75.5;
	$(".center_dot").css("top",h);
	$(".secend_zhen").css("top",0);
	$(".minute_zhen").css("top",0);
	$(".hour_zhen").css("top",0);
	var h1=75.5;
	$(".center_dote").css("top",h1);

	for(var i=0;i<360;i++){
	
		if(i%6==0){
			var x=Math.round(240*Math.sin(i*Math.PI/180)+w);
			var y=Math.round(240*Math.cos((180+i)*Math.PI/180)+h);
	
		if(i%5==0){
	
			if(i/30<10){
				var time=i/30;
				time="0"+time;
				if(i==0){time=12;}
			}else{
				time=i/30;
			}
			$("body").append("<div class='text' style='left:"+(x-13)+"px; top:"+(y-15)+"px;'>"+time+"</div>");
			}else{
		
			$("body").append("<div class='minute' style='left:"+(x+5)+"px; top:"+(y)+"px;transform: rotate("+i+"deg);'"+"></div>");
			}
		}
	}
	
	
	var s=0;
	var m=0;
	var h=0;
	
	var date=new Date();
	var h1 = date.getHours(); 
	var m1 = date.getMinutes(); 
	var s1 = date.getSeconds(); 
	
	s=s1*6;
	m=m1*6+6*(s1/60);
	if(h1>12){h1=h1-12;}
	h=h1*30+30*(m1/60);
	secend_move();
	minute_move();
	hour_move();
	
	function secend_move(){
		var fd="rotate("+s+"deg)";
		$(".secend_zhen").css("transform",fd);
		s=s+6;
		if(s==360){s=0;}
	}
	function minute_move(){
		var md="rotate("+m+"deg)";
		$(".minute_zhen").css("transform",md);
		m=m+0.1;
		if(m==360){m=0;}
	}
	function hour_move(){
		var hd="rotate("+h+"deg)";
		$(".hour_zhen").css("transform",hd);
		h=h+0.5;
		if(h==360){h=0;}
	}

	setInterval(minute_move,1000);
	setInterval(secend_move,1000);
	setInterval(hour_move,1000*60);

});
</script>
    </div>
  </div>
</div>
<!--main开始-->
<div class="news_wap">
  <div class="news_menu">
  	<a href="/about/index_19.html" title="" class="cur" >网联概况</a><a href="/about/index_72.html" title="" class="" >企业文化</a><a href="/about/index_73.html" title="" class="" >发展历程</a><a href="/about/index_74.html" title="" class="" >加入网联</a>	<a href="/about/qj.html">360全景</a>
  </div>
</div>
<div class="content">
  <div class="about">
  	<p style="color:#666;font-size:28px;margin-top:50px;" align="center">卓越的创意思维、<span style="color:#20b7f4;">为您创造出一流的品牌互联网形象！</span> </p>
    <p style="color:#b4b4b4;line-height:22px;margin-top:30px;text-indent:3em;" align="center">深圳市网联信息科技开发有限公司成立于2003年，公司自成立以来始终致力于为企业提供信息化服务。涵盖品牌策划、<a href="/service/index_20.html" target="_blank"><span style="color:#000000;">高品质网站建设</span></a>、<a href="/service/index_108.html" target="_blank"><span style="color:#000000;">电商平台开发</span></a>、移动互联网业务开发运营（<a href="/service/index_110.html" target="_blank"><span style="color:#000000;">微信二次开发</span></a>、<a href="/service/index_112.html" target="_blank"><span style="color:#000000;">手机网站建设</span></a>、APP开发等）、互联网基础服务、云主机托管及其他IT信息技术外包服务。经过长期的市场培育和技术积累，2万多客户的共同见证，网联科技凝聚了行业领先的业务优势。 </p>
    <p style="color:#b4b4b4;line-height:22px;text-indent:3em;" align="center">基于对中国企业的特点和其信息化需求的深刻理解以及中国经济的迅猛发展和企业信息化的推进，深圳<a href="" target="_blank"><span style="color:#000000;">网联科技</span></a>先后在深圳、广州、惠州、东莞、河源等地设立了分公司，员工总数贰百余人。他们分别是富有创意的前端开发工程师，认真闷骚的后台开发工程师，耐心细致的售后客服人员，业务娴熟的一线销售顾问。无论是哪一位网联人，无一不是对互联网行业有着丰富的经验及饱满的热情。我们奋不顾身，我们锐意进取，我们力争成为您理想的合作伙伴。</p>
    <p style="margin-top:50px;" align="center"><img src="" alt="" border="0" /></p>
    <p style="color:#333;font-size:16px;margin-top:50px;" align="center">开拓创新、锐意进取、不断提高研发能力</p>
    <p style="color:#b4b4b4;line-height:24px;margin-top:30px;" align="center">2004年自主研发产品“网联天下邮”为千万家企业提供全球商务邮件系统服务；<br />
      2005年自主研发“Ni8-shop商城系统”，为新、老客户提供在线商城服务；<br />
      2012年自主研发网联微信通“Ni8-wx CRM”，为企业提供微信定制开发服务；<br />
      2013伴随智能手机全面普及，同年推出自主研发产品 “Ni8-四网合一”，为企业打造全网营销，一站式后台管理。极大的缩短的信息化维护成本！</p>
    <p style="color:#333;font-size:16px;margin-top:30px;" align="center">服务只有起点、满意没有终点、本地化的顾问式服务</p>
    <p style="color:#b4b4b4;line-height:24px;margin-top:30px;" align="center">本地化服务是网联科技信息化运营模式的重要基础之一。网联科技深谙企业客户的需要，将本地化、面对面、持续的顾问式服务作为其帮助企业客户实现信息化的主要服务手段。多年来，网联科技在广东一线城市建立了庞大的专业服务网络，面向客户提供一对一的专业顾问服务，随时了解企业客户在不同发展阶段的个性化需求，为其提供针对性解决方案，伴随企业信息化建设的全过程，成为企业信息化的忠实伙伴。</p>
    <p style="color:#333;font-size:16px;margin-top:30px;" align="center">7×24小时不间断、高品质的运营服务 </p>
    <p style="color:#b4b4b4;line-height:24px;margin-top:30px;" align="center">领先的技术实力和完善的运营服务体系是网联科技信息化运营服务理念的强大支撑。网联科技在广东、深圳等地设立了专业的超大规模数据中心，拥有千兆的独享带宽，数百台高性能服务器，专业的防火墙、防病毒网关等安全设施，并在业内率先推出了7×24小时不间断的运营维护服务，实时响应客户的需求，即时解决用户的问题。 <br />
      <br />
      目前已服务过的企业：创维集团、长城开发、雅兰集团、香港永安期货、TCL集团、南玻集团、中钢集团、裕鑫丰集团、海王集团、名家汇股份、丽都酒店、中环物业、柏纷化妆品、雪姬美素、深科医疗、贝斯达、宝尔爱迪、兴先达、爱迪宝、领亚电子、德盛照明、尤迈医疗、美的连电子、惠隆音响、丽泽实业、三迅光电、安耐凯、希诺金、洪涛装饰、瑞和装饰、维泰斯、家域时尚、奇点道、巴黎世纪经典、白领风彩、秀菲儿、伯立森、普梵思洛、同济人、人人聚财电子商务、安源科技、瑞达集团、力华机械设备、卓乐科技、神视检验、优宝惠、创艺兴帽业、光网视科技、德安泰、大盛光电、英岚通信、卡洛琳化妆品、巴迪奥、爱美在线等...... <br />
      <br />
      一路走来，网联人深知“服务只有起点，满意没有终点，成功源自团队”，并立志将公司打造为中国信息化服务的标杆企业，用IT为客户创造价值，共创辉煌。<br />
      <br />
      <br />
      <br />
      <br />
    </p>
  </div>
</div>

@endsection

@section('home')
<script>GetCurStyle("home6");</script>
@endsection