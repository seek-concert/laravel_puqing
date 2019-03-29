@extends('index.header')
@section('content')

<!--banner-->
<div class="banner" style="background:url(/index/images/1490869376.jpg) no-repeat center center;"></div>
<!--main开始-->
{{-- <div class="pro_wap">
	<div class="pro_menu">
		<ul>
			<li class="cur"><a href="/contact/index.html" title="普擎网站建设联系方式" class="phover"><img
						src="/index/picture/cont1.png" alt="普擎网站建设联系方式" rel="nofollow" width="23" height="27"
						class="pr01" /><br /><span>联系方式</span></a></li>
			<li><a href="/contact/pay.html" title="普擎付款方式" class="phover" rel="nofollow"><img
						src="/index/picture/cont2.png" alt="普擎付款方式" rel="nofollow" width="23" height="27"
						class="pr02" /><br /><span>付款方式</span></a></li>
			<li><a href="/contact/download.html" title="网站建设文档下载" class="phover" rel="nofollow"><img
						src="/index/picture/cont3.png" alt="网站建设文档下载" rel="nofollow" width="28" height="27"
						class="pr03" /><br /><span>常用文档下载</span></a></li>
			<li><a href="/contact/help.html" title="网站建设帮助中心" class="phover" rel="nofollow"><img
						src="/index/picture/cont4.png" alt="网站建设帮助中心" rel="nofollow" width="24" height="27"
						class="pr04" /><br /><span>帮助中心</span></a></li>
		</ul>
	</div>
</div> --}}
<div class="content">
	<div class="contact">
		<div class="contact_l">
			<h3>重庆普擎科技有限公司</h3>
			<p><span class="cc" style="letter-spacing:28px;">地址</span><span>：&nbsp;&nbsp;&nbsp;重庆市渝北区仙桃数据谷中路107号</span>
			</p>
			<p><span class="cc" style="letter-spacing:28px;">邮编</span><span>：&nbsp;&nbsp;&nbsp;400000</span></p>
			<p><span class="cc" style="letter-spacing:28px;">售前</span><span>：&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
				</span><span style="line-height:1.5;">{{Cache('before_service_phone')}}</span></p>
			<p><span class="cc" style="line-height:1.5;letter-spacing:7px;">售后 &nbsp;</span><span
					style="line-height:1.5;">：&nbsp;&nbsp;{{Cache('after_service_phone')}}</span></p>
			<p><span class="cc"
					style="letter-spacing:28px;">邮箱</span><span>：&nbsp;&nbsp;&nbsp;{{ Cache('company_email') }}</span>
			</p>
			<p><span class="cc" style="letter-spacing:28px;">网址</span><span>：&nbsp;&nbsp;&nbsp;www.p7ing.com</span></p>
			<a target="_blank"
				href="http://wpa.qq.com/msgrd?v=3&uin={{Cache('before_service_qq')}}&site=qq&menu=yes"><img
					src="/index/picture/qqtx.jpg" rel="nofollow" width="35" height="35" /></a>
			<a target="_blank"
				href="http://wpa.qq.com/msgrd?v=3&uin={{Cache('after_service_qq')}}&site=qq&menu=yes"><img
					src="/index/picture/qqtx.jpg" rel="nofollow" width="35" height="35" /></a>
			
		</div>

		<div class="contact_r">
			<p>重庆普擎科技成立于2019年,由4位对生活的充满激情,对工作充满经验的年轻人创建,
				公司秉承着用最好的态度给客户最好的服务理念,将客户的问题作为自己的目标,把每一位
				客户心中所想的构架进行组建成他们心中最理想的大厦，我们拥有经验丰厚的网站视觉设计师,从业
				工作5年以上,经历过社会的毒打,成就了他今日打造视觉盛宴的资本,我们拥有优秀的网站开发团队,人均从业3年以上,
				他们分别从事过小程序开发,商城开发,定制专题网站开发,以及无数公司官网开发,他们确信着细节决定成败,
				因此会成为客户心中理想大厦的坚实地基。
				<br>
				普擎科技,质量决定信誉
			</p>


		</div>
		<div id="pay" style="float: left; width: 100%; margin-top: 35px; padding-top: 39px;">
				<h3 style="    font-size: 22px;">付款方式</h3>
				<div class="payTab" style="width: 100%; border: 1px solid #f3f3f3; margin-top: 16px;">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<tr>
								<td width="300" align="center"><img src="/index/images/icbc.png"
										alt="" border="0"></td>
								<td>
									<p style="font-size:18px;color:#666;line-height:40px;"><span
											style="color:#a7a4a4;">公司名称：</span>重庆市普擎科技有限公司<br>
										<span style="color:#a7a4a4;">开&nbsp;户&nbsp;行：</span>渝北龙溪支行<br>
										<span style="color:#a7a4a4;">账&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</span>
										<span style="color:#f42020;font-size:24px;">8888 8888 8888 888</span></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
		</div>

		<div class="clear"></div>

	</div>
</div>

@endsection

@section('home')
<script>
	GetCurStyle("home5");
</script>
@endsection