@extends('index.header')
@section('content')

<!--banner-->
<div class="banner" style="background:url(/index/images/apbanner.jpg) no-repeat center center;"></div>
<!--main开始-->
<div class="content">
  <div class="pro_list">
    <ul>
            <li><a href="{{url('app_html5')}}" title="HTML5" >HTML5</a></li>
            <li><a href="{{url('app_ios')}}" title="IOS App 开发" >IOS App 开发</a></li>
            <li><a href="{{url('app_android')}}" title="安卓 App 开发" class="hover">安卓 App 开发</a></li>
            <li><a href="{{url('app_solution')}}" title="解决方案" >解决方案</a></li>
            <li><a href="{{url('app_project')}}" title="项目流程">项目流程</a></li>
	</ul>
  </div>
  <div class="app_all" style=" margin:80px 0 -118px;">
      <div class="list_s list_01" style=" padding:0 50px; width:1040px;">
	      <h2>一、安卓软件开发概述</h2>
		  <p style=" text-align:center;">AndroidAPP是一种手机应用软件，是使用在安卓手机上或者是Android系统的第三方应用程序。APP的英文Application的简称，通常是指iphone，安卓等手机应用软件，现在的APP多指智能手机的第三方应用程序。<br /><br />
目前国内的Android APP商店众多，最新的十大安卓应用市场排名：360手机助手、百度手机助手、应用宝、豌豆荚、小米商店、安卓市场、91市场、淘宝手机助手、安智市场、移动MM市场。<br /><br />
普擎科技安卓软件开发团队熟练掌握安卓应用开发技术，以及包括：c# .NET wince/windows mobile、Java、C++三大语言在安卓操作系统下的应用程序开发，VC++和C#在多媒体和GIS应用系统开发，Delphi,aspx,php 在电子商务应用中的开发。</p>
	  </div> 
      <div class="listss list_b list_02" style=" background:url(/index/images/c1.jpg) no-repeat center center; height:747px;">
	       <div class="list_02s clearfix">
		        <div class="app_l">
				    <h2 style=" margin-top:245px;">二、企业为何开发安卓应用软件</h2>
					<p>1、Android是增长最迅速的移动平台。<br />
2、Android手机操作系统是基于Linux内核和多线程的开发平台，开发成本低。<br />
3、Android是一个开源平台，提供种类繁多的函数库和有用的工具，可以用来开发最有创意和  先进的移动应用程序，满足客户的各种需求。<br />
4、Android操作系统支持基于Flash和HTML5 Web的本地应用程序。
					</p>
				</div>
				<div class="app_r">
				    <img style=" margin-left:60px; margin-top:230px;" src="/index/picture/c1s.png" />
				</div>
		   </div>
	  </div>
      <div class="list_s list_01" style=" margin-top:150px;">
	      <h2>三、安卓软件开发优势</h2>
		  <p><span>1、Android是用户量最多的移动操作系统</span><br />
最新中国智能手机市场报告, 2015年第一季度中国智能手机出货量同比增长了17%,总计达到1.1亿部。庞大的手机用户量为开发提供了良好的发展前景。<br /><br />
<span>2、Android APP 推广相对容易</span><br />
相较于苹果手机用户，安卓用户的下载就相对容易非常多，用户不仅可以通过应用商店下载您的应用，同时运营商能够通过二维码推广为用户提供推广途径，吸引更多用户下载。<br /><br />
<span>3、Android 系统开放性高</span><br />
相对苹果系统的全封闭式，安卓系统的高度开放，给了开发者相当高的开发自由度，您的应用可以更加接近您所想所要的。<br /><br />
<span>4、Androidapp开发语言</span><br />
安卓应用软件开发语言有C语言和其他语言，但是主流的开发语言是Java语言，使接口到功能，都有层出不穷的变化。提高了软件的交互的可能性是Java最大的特性，可以说安卓手机几乎所有的应用程序都是利用Java语言来进行编写的。使用Java语言开发的软件的程序库、数据库、运行库都是Android手机软件的一大特点。Java语言自身的优点也有很多，所以安卓应用软件的开发应用到了Java的核心类的知识量，这也让使用Java语言开发的安卓软件具备优势。<br />
①Java语言是发展最快的程序语言，具有面向对象的特点，比较通俗易懂；<br />
②Java语言的显著特点就是简单，继承了C++语言的先进精华，是计算机程序语言发展的一大进步；<br />
③Java语言拥有独立的体系结构，可以不受限制，随意在任何系统当中运行，所以体系结构的中立决定了Java语言可以在不同的计算机结构中得以运行。使用Java语言开发的不同程序在不同结构的计算机显示的语言位数却是统一的。</p>
          <p style=" margin-bottom:0px;text-align:center;"><img src="/index/picture/c2s.jpg" /></p>
	  </div>
	  <div class="list_s list_06" style=" background:url(/index/images/c3.jpg) no-repeat center center; padding-top:160px; height:633px;">
	       <div class="list_02s clearfix">
				    <h2>四、Androidapp开发工具</h2>
					<p><span>1、eclipse工具是开发java必备，也是android开发必备。（当然前提是先安装JDK1.6）</span><br />
					   <span>2、下载android的SDK和ADT。这是android的开发必须的工具，adb、ddms、mksdcard、aapt，debug 必备</span><br />
					   <span>3、安装完eclipse开发工具后，通过help=〉install new software 。把ADT安装好；B、然后window=>preference设置好SDK的路径即可，如果用到C开发的话，可以安装一下啊CDT。</span><br />
					  现在可以通过AVD manager安装一下你想在哪个平台下的api，比如：android2.3.4，就可以建一个2.3.4的emulator，把模拟器跑起来。通过adb ddms 等工具察看、开发了。为了方便，把adb的路径加到环境变量里。
					</p>
				   <p style=" text-align:center;"> <img src="/index/picture/c3s.png" /></p>
		   </div>
	  </div>
	  <div class="list_s list_01" style=" margin-top:150px;">
	      <h2>五、开发一个Android APP需要多少钱</h2>
		  <p>开发APP应用软件所需要的费用主要受到多方面的因素影响，其中最重要的还是要看安卓软件开发的功能复杂程度和所需要投入的人员数量有多少来计算所需要的APP开发价格。<br /><br />
<span>1、独立Android 软件开发技术程序的价格</span><br />
如果是需要开发一个独立的安卓APP应用程序的话，客户可以自己找专业APP开发公司进行合作，自己提供产品设计和UI设计的话，仅仅需要APP公司提供技术程序服务的话，就小编所了解的Android APP的价格会在十几万以上。这个属于普通文件管理器的独立APP开发，具备齐全的功能，分两期完成开发，历时两个月，投入一个程序开发人员。<br /><br />
<span>2、简单功能的展示类Android 软件开发费用</span><br />
就一个新闻类的安卓APP开发来说，需要简单的功能，并且只是在APP开发上需要新闻列表、新闻页、图片查看和基本设置项，APP开发比较简单，所以在安卓APP开发费用上也只是需要投入一名开发技术人员，UI设计是由客户自己提供的，这样的一个简单功能的新闻类APP开发，其APP开发费用也需要到上万块。
<br /><br />
因此，综上可知Android应用软件开发的价钱受到众多因素影响，最重要的还是要看客户需要什么功能的APP开发软件，开发复杂程度如何，需要投入多少的人手，这些都是每一块钱的详细投入。并且以上所描述的例子也只是单单需要投入开发技术人员的价格，如果加上UI设计人员的价钱的话，估计Android APP开发所需要的费用会更高。但是总而言之，APP开发的价格区间会在几万到几十万以上。</p>
	  </div>
	  <div class="list_s list_06" style=" background:url(/index/images/c5.jpg) no-repeat center center; padding-top:120px; height:673px;">
			 <div class="list_02s clearfix">
			  <h2>六、普擎科技开发安卓APP能给企业/个人带来什么</h2>
			  <p>普擎科技的安卓应用软件开发人员都有着5年以上的Java开发经验，能够完成任何复杂的Android应用程序。对于酷蜂来说，Android软件开发仅仅是整个开发流程的一部分，在这里我们使用行业标准的Android软件测试方法和流程，以最大限度地提高软件的质量、性能和可用性，以确保它能够快速部署到安卓市场（google market）上。<br />
UI设计：符合Google官方UI设计建议，新颖时尚，美观大方。<br />
研发：采用原生程序，符合Android软件研发规范和流程，程序经多种优化，内存控制良好，运行流畅。<br />
测试：分别就系统版本，分辨率，硬件匹配进行全方位测试。<br />
推广：快速发布于Google Play（原Android Market）和国内大型第三方应用市场，审核通过率高。<br />
服务：终身免费Bug修复服务，确保软件终身正常运行。</p>
		  </div>
	  </div>
	  
  </div>
</div>
@endsection

@section('home')
<script>GetCurStyle("home7");</script>
@endsection