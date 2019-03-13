<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<title>网联概况_网联科技(ni8.com)</title>
<meta name="keywords" content="网联科技网站建设服务理念。">
<meta name="description" content="网联科技是专业的网站建设公司，提供高品质网站策划,个性化网站建设，13年来锐意进取为2万多家企业本地化的顾问式服务，欢迎电话咨询：0755-83271881
">
<link rel="shortcut icon" href="/Public/images/favicon.ico">
<link type="text/css" rel="stylesheet" href="static/css/style.css" />
<link type="text/css" rel="stylesheet" href="static/css/validationengine.jquery.css">
<script type="text/javascript" src="static/js/jquery-1.8.3.min.js"></script>
<script src="static/js/curnavstyle.js" type="text/javascript"></script>
<script type="text/javascript" src="static/js/funtion.js"></script>
<script type="text/javascript" src="static/js/jquery-1.10.1.js"></script>
<script type="text/javascript" src="static/js/jquery.validationengine-zh_cn.js"></script> 
<script type="text/javascript" src="static/js/jquery.validationengine.js"></script>
<script src="static/js/wb.js" type="text/javascript" charset="utf-8"></script>
<style>
.dot{width:161px;position:absolute;left:50%;margin-left:400px;height:395px;}
.dot_bg{width:161px;height:161px;float:left;margin-top:30px;background: transparent url(static/images/clock-shape.svg) no-repeat;position:relative;}
.center_dot{position: absolute;width: 10px;height: 10px;background: black;left: 50%;;top:50%;border-radius:10px;display:none;left:75.5px;}
.minute{display:none;}
.text{display:none;}
.secend_zhen{position: absolute; background: transparent url(static/images/clock-sec.svg) no-repeat;width:11px;height:161px;left:75px;}
.minute_zhen{position: absolute;background: transparent url(static/images/clock-min.svg) no-repeat;width:11px;height:161px;left:75px;}
.hour_zhen{position: absolute;width:11px;height:161px;background: transparent url(static/images/clock-hour.svg) no-repeat;left:75px;}
</style>
<script type="text/javascript">
$(function(){
	$('#myform').validationEngine(); 
})
</script>
</head>
<body>
<!--top-->
<script src="static/js/jquery.lazyload.js"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
     $("img").lazyload({
         effect : "fadeIn",
         failure_limit : 10
     });
  });
</script>
<div class="top1">
  <div class="topbox">
    <div class="logo f1"><a href="/" title="网联科技"><img src="/index/static/picture/logo1.png" id="logo" data-original="/Public/images/logo1.png"/></a></div>
    <div class="dh f2">
      <ul class="dh-top f2" style="height:22px;">
        <li class="f2"><span style="margin-right:20px;display:inline-block;">销售：0755-83271919、83271881</span> <span>服务：0755-83271606、83658105</span></li>
      </ul>
      <div class="clear"></div>
      <span class="dh-main">
      <h3 class="nav_h2"><a href="/" id="in01" class="hover" title="首页">首页</a></h3>
      <h3 class="nav_h2"><a href="/service/index.html" id="in02" class="hover" title="网站建设">网站建设</a></h3>


	  <h3 class="nav_h2"><a href="http://www.ni8.com/service/index_112.html" id="in08" class="hover" title="APP开发">APP开发</a>

      </h3>
	  <h3 class="nav_h2"><a href="/solution/index.html" id="in07" class="hover" title="解决方案">解决方案</a>

      </h3>
      <h3 class="nav_h2"><a href="/case/index.html" id="in03" class="hover" title="成功案例">成功案例</a>

      </h3>
      <h3 class="nav_h2"><a href="/about/news.html" id="in04" class="hover" title="网站资讯">网站资讯</a>

      </h3>
      <h3 class="nav_h2"><a href="/about/index.html" id="in05" class="hover" title="关于网联网站开发" rel="nofollow">关于网联</a>

      </h3>
      <h3 class="nav_h2"><a href="/contact/index.html" id="in06" class="hover" title="联系网站开发">联系网联</a>

      </h3>
      </span> </div>
  </div>
</div>


<!--banner-->
<div class="banner" style="background:url(static/images/1490868939.jpg) no-repeat center center;position:relative;">
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
    <p style="margin-top:50px;" align="center"><img src="/index/static/picture/20160325100344_65123.jpg" alt="" border="0" /></p>
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
<!--footer-->
<div class="bbottom" ><div class="bottomTop"></div></div>
<div class="bottom">
  <div class="bottombox">
    <div class="bottom-dh">
      <ul style="width:200px;">
        <h4>产品及解决方案</h4>
        <li><a href="/service/index_20.html" title="企业官网建设">企业官网建设</a></li><li><a href="/service/index_108.html" title="商城网站建设">商城网站建设</a></li><li><a href="/service/index_109.html" title="系统平台开发">系统平台开发</a></li><li><a href="/service/index_110.html" title="微信营销">微信营销</a></li><li><a href="/service/index_111.html" title="SSL证书">SSL证书</a></li>      </ul>
      <ul>
        <h4>成功案例</h4>
        <li><a href="/case/index_17_1.html" title="电子商务平台开发">电子商务平台开发</a></li><li><a href="/case/index_19_1.html" title="视觉形象官网">视觉形象官网</a></li><li><a href="/case/index_11_1.html" title="营销型网站">营销型网站</a></li><li><a href="/case/index_12_1.html" title="商城/分销商城">商城/分销商城</a></li><li><a href="/case/index_22_1.html" title="短视频">短视频</a></li>      </ul>
      <ul>
        <h4>网联资讯</h4>
        <li><a href="/about/news.html" title="网联新闻">网联新闻</a></li>
        <li><a href="/about/newss_10.html" title="手机网站资讯">手机网站资讯</a></li>
        <li><a href="/service/seo.html" title="网站建设知识">网站建设知识</a></li>
        <li><a href="/about/newss_9.html" title="网站营销推广知识">网站营销推广知识</a></li>
        <li><a href="/about/newss_12.html" title="中标新闻">中标新闻</a></li>
      </ul>
      <ul>
        <h4>关于网联</h4>
        <li><a href="/about/index_19.html" title="网联概况">网联概况</a></li><li><a href="/about/index_72.html" title="企业文化">企业文化</a></li><li><a href="/about/index_73.html" title="发展历程">发展历程</a></li><li><a href="/about/index_74.html" title="加入网联">加入网联</a></li>      </ul>
      <ul>
        <h4>联系网联</h4>
        <li><a href="/contact/index.html" title="联系方式" rel="nofollow">联系方式</a></li>
        <li><a href="/contact/pay.html" title="付款方式" rel="nofollow">付款方式</a></li>
        <li><a href="/contact/download.html" title="网站建设文档下载" rel="nofollow">常用文档下载</a></li>
        <li><a href="/contact/help.html" title="网站建设帮助中心">帮助中心</a></li>
      </ul>
      <div class="ewm" style=" margin-right:16px;">
        <p><img src="/index/static/picture/sjewm.jpg" data-original="/Public/images/sjewm.jpg" alt="" width="118" height="118"/></p>
        <span>手机官网</span> </div>
      <div class="ewm">
        <p><img src="/index/static/picture/wxewm.jpg" data-original="/Public/images/wxewm.jpg" alt="" width="118" height="118"/></p>
        <span>官方微信</span> </div>
    </div>
    <div class="fx">
      <ul class="fx-2" style="width:100%;">
        <li style="background:url(static/images/sindex.png)  -196px -194px no-repeat; width:240px;">投诉/Suggest：13823188098</li>
		<li style="background:url(static/images/sindex.png) -196px -271px no-repeat; width:240px;">电话/Tel：0755-83271881</li>
        <li style="background:url(static/images/sindex.png) -196px -220px no-repeat; width:240px;">邮箱/Mail：web@ni8.com</li>
        <li style="background:url(static/images/sindex.png)  -196px -245px no-repeat;">地址/Add：深圳市福田区华强南路机械大厦6楼</li>
      </ul>
    </div>
	  </div>
  <div class="footer">
    <div class="bqxx" style="position:relative;">
      <ul>
        <li class="f1" style="font-family:Arial;">&copy;2016 深圳市网联信息科技开发有限公司 版权所有&nbsp;&nbsp;&nbsp;&nbsp;<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_3140605'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/stat.php%3Fid%3D3140605%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript"> var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F7eaaa90f118c6a7255012073291e21ee' type='text/javascript'%3E%3C/script%3E")) </script>
</li>
        <li class="f2"><a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow" style="color:#fff;">粤ICP备05022732号-1</a>&nbsp;&nbsp;&nbsp;粤B2-20050242</li>
      </ul>
	  <div style="position:absolute;width:40px;top:16px;text-align:center;left:360px;"><script id="ebsgovicon" src="index/static/js/govicon.js" type="text/javascript" charset="utf-8"></script></div>
    </div>
  </div>
</div>
<script>
$(function(){
   $(".fqq").hover(function(){
			$(".foot_qq").css("display","block");
		},function(){
		  $(".foot_qq").css("display","none");
   });
   $(".dhm").hover(function(){
			$(".kfdh").css("display","block");
		},function(){
		  $(".kfdh").css("display","none");
   });
   $(".gw").hover(function(){
			$(".code-side").css("display","block");
		},function(){
		  $(".code-side").css("display","none");
   });
});
</script>


<div class="guide" style="bottom:40px;">
  <div class="guide-warp">
    <ul>

	  <li class="fqq">
          <a class="zixun1 zixun"title="qq联系网站建设"></a>
	    <div class="foot_qq">
        <a target="_blank" rel="nofollow" title="业务经理" href="http://wpa.qq.com/msgrd?v=3&uin=983492695&site=qq&menu=yes"><img src="/index/static/picture/q01.png" alt="" width="25" data-original="/Public/images/q01.png"/><span>业务经理</span></a><a target="_blank" rel="nofollow" title="业务经理" href="http://wpa.qq.com/msgrd?v=3&uin=1014060040&site=qq&menu=yes"><img src="/index/static/picture/q02.png" alt="" width="25" data-original="/Public/images/q02.png"/><span>业务经理</span></a><a target="_blank" rel="nofollow" title="售后客服" href="http://wpa.qq.com/msgrd?v=3&uin=1014641734&site=qq&menu=yes"><img src="/index/static/picture/q03.png" alt="" width="25" data-original="/Public/images/q03.png"/><span>售后客服</span></a><a target="_blank" rel="nofollow" title="售后客服" href="http://wpa.qq.com/msgrd?v=3&uin=995338667&site=qq&menu=yes"><img src="/index/static/picture/q04.png" alt="" width="25" data-original="/Public/images/q00.png"/><span>售后客服</span></a><a target="_blank" rel="nofollow" title="技术支持" href="http://wpa.qq.com/msgrd?v=3&uin=441579876&site=qq&menu=yes"><img src="/index/static/picture/q01.png" alt="" width="25" data-original="/Public/images/q01.png"/><span>技术支持</span></a>        </div>
	  </li>
	  <li class="dhm">
          <a class="zixun2 zixun"title="电话联系网站建设" ></a>
	    <div class="kfdh">
		  <p><span>销售热线:</span><span style="width:110px;font-size:13px;color:#fff;">0755-83271919<br/>0755-83271881</span></p>
		  <p><span>服务热线:</span><span style="width:110px;font-size:13px;color:#fff;">0755-83271606<br/>0755-83658105</span></p>
		</div>
	  </li>
	  <li><a href="Mailto:dzn@ni8.com" class="zixun3 zixun"title=""target="_blank">
      </a></li>
	  <li class="gw">
          <a class="zixun4 zixun"title="扫描二维码联系"></a>
	    <div class="code-side">
		  <div><img src="/index/static/picture/sjewm.jpg" alt="手机官网" data-original="/Public/images/sjewm.jpg"/><span>手机官网</span></div>
		  <div><img src="/index/static/picture/wxewm.jpg" alt="官网微信" data-original="/Public/images/wxewm.jpg"/><span>官网微信</span></div>
		</div>
	  </li>
	  <li><a class="zixun5 zixun" href="javascript:window.scrollTo(0,0)" class="top1" title="回顶部">
      </a></li>
	</ul>
  </div>
</div>


<script>GetCurStyle("home4");</script>
</body>
</html>