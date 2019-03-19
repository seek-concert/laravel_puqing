@extends('index.header')
@section('content')

<!--banner-->
<div class="banner" style="background:url(/index/images/1490869083.jpg) no-repeat center center;"></div>
<!--main开始-->
<div class="pro_wap" id="pro_wap">
  <div class="pro_menu">
    <ul style="margin-left: 322px;width: 620px;">
        <li ><a href="{{url('/web')}}#pro_wap" title="" class="phover"><img src="/index/picture/picon1.png" alt="" width="22" height="22" class="pr1" /><br /><span>高品质网站建设</span></a></li>
        <li class="cur"><a href="{{url('/mall_b2b')}}#pro_wap" title="" class="phover"><img src="/index/picture/picon2.png" alt="" width="22" height="22" class="pr2" /><br /><span>商城网站建设</span></a></li>
        <li><a href="{{url('/wechat')}}#pro_wap" title="" class="phover"><img src="/index/picture/picon4.png" alt="" width="26" height="22" class="pr4" /><br /><span>微信营销</span></a></li>
      <!-- <li> ><a href="/service/index_112.html" title="" class="phover"><img src="/index/picture/picon6.png" alt="" width="22" height="22" class="pr6"/><br/><span>APP开发</span></a></li>-->
    </ul>
  </div>
</div>
<div class="pro_item">
  <div class="pro_list">
    <ul>
        <li><a title="B2B商城" href="{{url('/mall_b2b')}}#pro_wap">B2B商城</a></li>
        <li><a title="B2B2C商城"  class="hover" href="{{url('/mall_b2b2c')}}#pro_wap">B2B2C商城</a></li>
        <li><a title="分销商城" href="{{url('/mall_more')}}#pro_wap">分销商城</a></li>
    </ul>
  </div>
  <div class="pro_option">
    <div class="pro_box" style="display:block;">
      <div class="pro_con" style="height:493px;">
        <div class="sen01_l"><img alt="" src="/index/picture/20160323100336_65469.jpg" border="0" data-original="/asp_bin/UploadFile/20160323100336_65469.jpg" /></div>
        <div class="sen01_r">
          <h3>B2B2C解决方案优势</h3>
          <p>B2B2C解决方案是指适合大规模、企业型网络运营商进行多元化电子商务服务支持的电子商务平台解决方案。整个解决方案中，不仅包含传统电子商务平台的建设部分，还扩展包含了ERP（CRM）、ERP（RFID会员卡号）、ERP（OMS）等多元化的电子商务辅助管理系统，真正帮助电商平台运营商打通供应商、平台商、分销商、消费者链条化商业管道，获得电子商务平台的纵深式持续化发展。</p>
        </div>
      </div>
      <div class="ser04_m" style="background:url(/index/images/n02.jpg) no-repeat center center;">
        <p style="width:1004px;margin:0 auto;color:#48e21f;font-size:32px;padding-top:120px;">B2B2C是网上商城的多商户平台</p>
        <p style="width:1004px;margin:0 auto;height:62px;padding:30px 0;"><span class="circle">供应商入驻模式</span><span
            class="circle">买卖家分离模式</span><span class="circle">佣金结算模式</span><span class="circle">售后服务系统</span></p>
        <p style="width:1004px;margin:0 auto;font-size:12px;color:#ccc;line-height:26px;font-family:'宋体';">B2B2C是网上商城的多商户平台，类似于淘宝、拍拍等第三方平台，允许众多商家在平台上<br />
          开设自己的店铺，从而参与网上零售交易。它是由B2B、B2C模式演变和完善而来，把B2B<br />
          和B2C完美的结合起来，通过B2B2C模式的电子商务企业构建自己的物流供应链系统，提供<br />
          统一的服务。 </p>
      </div>
      <div class="pro_con" style="height:584px;">
        <div class="sen01_l"><img alt="" src="/index/picture/20160323100351_54508.jpg" border="0" data-original="/asp_bin/UploadFile/20160323100351_54508.jpg" /></div>
        <div class="sen01_r">
          <h3 style="height:74px;">B2B2C模式适用的客户</h3>
          <div class="sen">具有线下货源、物流、仓储或相关资源的大型企业客户。</div>
          <div class="sen">国企、媒体或专业服务于企业并具有独特资源的大型客户。</div>
          <div class="sen">大型门户、社区论坛等现有网络运营商。</div>
          <div class="sen">大型传统<a href="/service/index_108.html" target="_blank"><span style="color:#767173;">B2C电商平台</span></a>运营企业或淘品牌大客户。</div>
          <div class="sen">适用于拥有大量消费者资源,想要把消费者价值最大化的企业，具有平台运营能力的企业。</div>
        </div>
      </div>
      <div class="ser04_m" style="background:url(/index/images/n04.jpg) no-repeat center center;height:547px;">
        <p style="width:1004px;margin:0 auto;color:#000;font-size:32px;padding-top:170px;">B2B2C平台模式<br />
          与线下的购物中心类似</p>
        <p style="width:1004px;margin:0 auto;font-size:12px;color:#666;line-height:26px;font-family:'宋体';padding-top:36px;">购物中心给品牌商、零售商提供营业场所，本质上做的是商业物业租赁。
          <br />
          B2B2C平台在网络空间中营造了一个虚拟购物中心，供商家进行经营活动。</p>
      </div>
      <div class="ser08">
        <h3>B2B2C业务概述</h3>
        <p>平台职能：商家招募及有效管控 / 为消费者提供可靠的优质产品及服务 / 为商家提供开展电子商务所需服务 <br />
          远景及规划：打造专业平台，稳步提升利润 / 充分利用线下运营经验，制定可行的发展计划 / 建立行业内更高的品牌形象 <br />
          线上线下：线上线下业务互补 / 利用线上业务有效推动线下业务加速发展 <br />
          融入电商：电子商务势不可挡，必须更加深刻的了解电子商务给传统行业带来的冲击和机会</p>
        <p><img alt="" src="/index/picture/20160323110309_28286.jpg" border="0" data-original="/asp_bin/UploadFile/20160323110309_28286.jpg" /></p>
      </div>
      <div class="pro_con" style="height:472px;">
        <div class="sen01_l"><img alt="" src="/index/picture/20160323110324_76849.jpg" border="0" data-original="/asp_bin/UploadFile/20160323110324_76849.jpg" /></div>
        <div class="sen01_r">
          <h3 style="color:#000000;">B2B2C平台为<br />
            商家和消费者提供价值</h3>
          <p>客户资源/展示空间/IT资源/支付方式/物流/仓储/数据统计/等基础服务<br />
            一站式购物体验/优质产品保障 </p>
        </div>
      </div>
      <div class="ser04" style="background:url(/index/images/n07.jpg) no-repeat center center;">
        <p style="width:1004px;margin:0 auto;color:#000;font-size:32px;padding-top:135px;text-align:center;">订单支付及结算</p>
        <p style="width:1004px;margin:0 auto;color:#333;font-size:14px;padding-top:15px;text-align:center;">为提高消费者购物体验以及方便运营商获取交易抽水，平台提供了统一支付入口及统一结算体系</p>
      </div>
      <div class="pro_con" style="height:447px;">
        <div class="sen01_l" style="width:320px;">
          <p style="color:#000;font-size:32px;margin-top:180px;">物流及仓储</p>
          <p style="color:#666;font-size:14px;line-height:26px;margin-top:20px;">通过订单处理模块以及对接第三方WMS系统实现供应商共同参与的订单分派及发货流程</p>
        </div>
        <div class="sen01_r" style="text-align:right;width:640px;"><img src="/index/picture/20160323110342_92485.jpg"
            alt="" border="0" data-original="/asp_bin/UploadFile/20160323110342_92485.jpg" /></div>
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