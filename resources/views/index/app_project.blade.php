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
            <li><a href="{{url('app_android')}}" title="安卓 App 开发">安卓 App 开发</a></li>
            <li><a href="{{url('app_solution')}}" title="解决方案" >解决方案</a></li>
            <li><a href="{{url('app_project')}}" title="项目流程" class="hover">项目流程</a></li>
	</ul>
  </div>
  <div class="app_all">
      <div class="list_s list_01" style=" padding:0 50px; width:1040px;">
	      <h2>用户体验设计</h2>
		  <p style=" text-align:center; margin-bottom:50px;">每一项优质服务方案必定是能满足客户和市场多方需求，并且合理可执行的，所以我们在为客户提供服务前会先根据客户要求， 分析技术可行性，进行市场调研和了解市场用户需求，进而再为客户提供包括产品创新策略、用户体验策略、设计策略等多项 内容在内的专业用户体验设计服务。我们的业务覆盖了移动设备、PC互联网、消费电子等平台渠道。</p>
		  <p style=" text-align:center;"><img src="/index/picture/e1.jpg" rel="nofollow"/></p>
	  </div> 
      <div class="list_s list_06" style=" background:url(/index/images/e2.jpg) no-repeat center center; height: 673px;padding-top: 120px;">
	       <div class="list_02s clearfix">
				    <h2>服务项目</h2>					
				   <p> <img src="/index/picture/e3.png" alt="网站建设服务项目" rel="nofollow"/></p>
		   </div>
	  </div>
      <div class="list_s list_01" style=" margin-top:150px; margin-bottom:120px; width:1140px; padding:0px;">
	      <h1 class="nh1">服务流程</h1>
          <p style=" margin-bottom:0px; text-align:center;"><img src="/index/picture/e4.jpg"alt="建设网站服务流程" rel="nofollow"/></p>
	  </div>
	  <div class="list_s list_06" style=" background:url(/index/images/e5.jpg) no-repeat center center; padding-top:160px; height:633px;">
	       <div class="list_02s clearfix">
				    <h2>APP开发标准文档</h2>					
				   <p> <img src="/index/picture/e6.png" alt="App应用开发标准文档"rel="nofollow"/></p>
		   </div>
	  </div>
	  <div class="list_s list_06" style=" height:auto;">
			 <div class="list_02s clearfix">
			   <h2 style=" color:#333;">APP外包流程</h2>					
			   <p> <img src="/index/picture/e7.jpg" alt="APP外包流程图" rel="nofollow"/></p>
		  </div>
	  </div>
	  
  </div>
</div>
@endsection

@section('home')
<script>GetCurStyle("home7");</script>
@endsection