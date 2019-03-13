// JavaScript Document

$(function(){
	$('#gsgk').click(function(){
	$('#gsgkbox').css("display","block");
	$('#sjwzzxbox').css("display","none");
	$('#wzjszsbox').css("display","none");
	$('#wlyxtgbox').css("display","none");
		
	});
	$('#sjwzzx').click(function(){
	$('#gsgkbox').css("display","none");
	$('#sjwzzxbox').css("display","block");
	$('#wzjszsbox').css("display","none");
	$('#wlyxtgbox').css("display","none");
		
	});
	$('#wzjszs').click(function(){
	$('#gsgkbox').css("display","none");
	$('#sjwzzxbox').css("display","none");
	$('#wzjszsbox').css("display","block");
	$('#wlyxtgbox').css("display","none");
		
	});
	$('#wlyxtg').click(function(){
	$('#gsgkbox').css("display","none");
	$('#sjwzzxbox').css("display","none");
	$('#wzjszsbox').css("display","none");
	$('#wlyxtgbox').css("display","block");
		
	});
	
	$('.xwzxbox-top ul li').click(function(){
	$(this).addClass("current");
	$(this).siblings().removeClass("current");
		
	});
	$('#cgal').click(function(){
	$('#cgalbox').css("display","block");
	$('#zxsjbox').css("display","none");
		
	});
	$('#zxsj').click(function(){
	$('#cgalbox').css("display","none");
	$('#zxsjbox').css("display","block");
		
	});
	
	$('.cgalbox-top ul li').click(function(){
		var zmax=$(".cgalbox-top ul li").length;
	    var dq=$('.cgalbox-top ul li').index(this);
	    $(this).addClass("hover").siblings().removeClass("hover");
		if ($(this).hasClass('CG1')) {
			$(".cgal-mainbox").show();
			$(".cgal-mainbox1").hide();
		}else{
		   $(".cgal-mainbox").hide();
		   $(".cgal-mainbox1").show();
  	    }
	});

	//hehe 
	$(".pic").hover(function(){
			$(this).children(".pic_sp").stop(true,false).animate({bottom: '0'}, 300);
		},function(){
			$(this).children(".pic_sp").stop(true,false).animate({bottom: '235px'}, 300);
	});
	$(".pic").hover(function(){
			$(this).children(".pic_cont").children("a").addClass("hover");
		},function(){
			$(this).children(".pic_cont").children("a").removeClass("hover");
	});
	
	//首页核心业务
	//$(".hxywbox ul li").hover(function(){
//			$(this).children("p").show();
//			$(this).children("div").show();
//		},function(){
//			$(this).children("p").hide();
//			$(this).children("div").hide();
//	});
	$(".cgal_tp").hover(function(){
			$(this).children("a").show();
		},function(){
			$(this).children("a").hide();
	});
	$(".cgal-tit").hover(function(){
			$(this).children("p").show()
		},function(){
			$(this).children("p").hide()
	});

	//ƽ��
	
	$('#left-an').click(function(){
	$('.cgal-mainbox').css("left","0px");
		
	});
	$('#right-an').click(function(){
	$('.cgal-mainbox').css("left","-1140px");
		
	});
	$(".business-one").each(function(index, element) {
		$w = $(this).children(".bimg1").width();
		$h = $(this).children(".bimg1").height();
		$w1 = $w + 80;
		$h1 = $h + 80;
        $(this).hover(function(){
			 $(this).children(".bimg1").stop().animate({height:$h1,width:$w1,left:"-40px",top:"-100px"},500);
		},function(){
			 $(this).children(".bimg1").stop().animate({height:$h,width:$w,left:"0px",top:"-60px"},500);
		});
    });
	$(".business-two").each(function(index, element) {
		$w2 = $(this).children(".bimg2").width();
		$h2 = $(this).children(".bimg2").height();
		$w02 = $w2 + 40;
		$h02 = $h2 + 40;
        $(this).hover(function(){
			 $(this).children(".bimg2").stop().animate({height:$h02,width:$w02,left:"-22px",top:"-20px"},500);
		},function(){
			 $(this).children(".bimg2").stop().animate({height:$h2,width:$w2,left:"-2px",top:"0px"},500);
		});
    });
	$(".business-three").each(function(index, element) {
		$w3 = $(this).children(".bimg3").width();
		$h3 = $(this).children(".bimg3").height();
		$w03 = $w3 + 80;
		$h03 = $h3 + 80;
        $(this).hover(function(){
			 $(this).children(".bimg3").stop().animate({height:$h03,width:$w03,left:"-62px",top:"-40px"},500);
		},function(){
			 $(this).children(".bimg3").stop().animate({height:$h3,width:$w3,left:"-22px",top:"0px"},500);
		});
    });
	$(".business-four").each(function(index, element) {
		$w4 = $(this).children(".bimg4").width();
		$h4 = $(this).children(".bimg4").height();
		$w04 = $w4 + 80;
		$h04 = $h4 + 80;
        $(this).hover(function(){
			 $(this).children(".bimg4").stop().animate({height:$h04,width:$w04,left:"-40px",top:"-100px"},500);
		},function(){
			 $(this).children(".bimg4").stop().animate({height:$h4,width:$w4,left:"-0px",top:"-60px"},500);
		});
    });
	$(".business-fiv").each(function(index, element) {
		$w5 = $(this).children(".bimg5").width();
		$h5 = $(this).children(".bimg5").height();
		$w05 = $w5 + 30;
		$h05 = $h5 + 30;
        $(this).hover(function(){
			 $(this).children(".bimg5").stop().animate({height:$h05,width:$w05,left:"-15px",top:"-87px"},500);
		},function(){
			 $(this).children(".bimg5").stop().animate({height:$h5,width:$w5,left:"0px",top:"-72px"},500);
		});
    });
	$(".cgal_tp").each(function(index, element) {
		$w6 = $(this).children(".case_img").width();
		$h6 = $(this).children(".case_img").height();
		$w06 = $w6 + 92;
		$h06 = $h6 + 60;
        $(".cgal_tp").hover(function(){
			 $(this).children(".case_img").stop().animate({height:$h06,width:$w06,left:"-46px",top:"-30px"},500);
			 $(this).children("a").show( );					
			 $(this).children("a").children("h4").stop(true,false).animate({left: '135px'}, 400);
			 $(this).children("a").children("p").stop(true,false).animate({right: '135px'}, 400);
		},function(){
			 $(this).children("a").hide( );
			 $(this).children(".case_img").stop().animate({height:$h6,width:$w6,left:"0px",top:"0"},500);
			 $(this).children("a").children("h4").stop(true,false).animate({left: '-88px'}, 400);
			$(this).children("a").children("p").stop(true,false).animate({right: '-88px'}, 400);
		});
    });
   $(".dh-main h2").hover(function(){
			$(this).children(".nav_wrap").show();
		},function(){
			$(this).children(".nav_wrap").hide();
	});

});
$(function(){
	$(".mp ul li").hover(function(){
			$(this).addClass("hover");
			$(this).siblings().removeClass("hover");
	});
	
	$('.dh-main li').hover(function(){
		 var obj   = $(this);
	     var index = obj.index();
	})
	
});

//seo htmljs代码转移
$(function(){
    $('.flexslider').flexslider({
        namespace: "flex-",             //字符串：附着在类的插件生成的每一个元素的前缀字符串
        animation: "slide",              //字符串：选择你的动画类型,   fade  or  slide
        direction: "horizontal",        //字符串：选择滑动方向,   horizontal  or  vertical
        reverse: false,                 //布尔：反转动画方向
        animationLoop: true,            //布尔:是否循环播放? 如果是 false, 动画将会停在两端
        smoothHeight: false,            //布尔:允许高度的滑块在横屏模式下顺利动画
        startAt: 0,                     //整数：幻灯片开始的位置。数组符号（0=第一张幻灯片）
        slideshow: true,                //布尔:动画是否自动
        slideshowSpeed: 5000,           //整数：设置幻灯片循环的速度，单位为毫秒
        animationSpeed: 600,            //整数：设置动画的速度，单位为毫秒
        initDelay: 0,                   //整数：设置一个初始化的延迟，单位为毫
        pauseOnHover: true,            //布尔: 鼠标悬停时是否暂停
        directionNav: true,             //布尔: 是否创建左右切换导航按钮? (true/false)
        controlNav: true,               //布尔: 是否创建分页控制
        prevText: "",           	    //字符串: 设置左导航文本
        nextText: "",                   //字符串: 设置右导航文本
        keyboard: true,                 //布尔:允许滑块通过键盘左/右导航键
        mousewheel: false,              //布尔：允许通过鼠标滚轮滑动导航
        pausePlay: false,               //布尔:创建暂停/播放动态元素
        pauseText: "Pause",             //字符串:设置文本为"Pause"
        playText: "Play"               //字符串:设置文本为"Play"
    });
});
$(function(){
    $('.cgal_fix').flexslider({
        namespace: "flex-",             //字符串：附着在类的插件生成的每一个元素的前缀字符串
        animation: "slide",              //字符串：选择你的动画类型,   fade  or  slide
        direction: "horizontal",        //字符串：选择滑动方向,   horizontal  or  vertical
        reverse: false,                 //布尔：反转动画方向
        animationLoop: true,            //布尔:是否循环播放? 如果是 false, 动画将会停在两端
        smoothHeight: false,            //布尔:允许高度的滑块在横屏模式下顺利动画
        startAt: 0,                     //整数：幻灯片开始的位置。数组符号（0=第一张幻灯片）
        slideshow: false,                //布尔:动画是否自动
        slideshowSpeed: 2000,           //整数：设置幻灯片循环的速度，单位为毫秒
        animationSpeed: 600,            //整数：设置动画的速度，单位为毫秒
        initDelay: 0,                   //整数：设置一个初始化的延迟，单位为毫
        pauseOnHover: true,            //布尔: 鼠标悬停时是否暂停
        directionNav: true,             //布尔: 是否创建左右切换导航按钮? (true/false)
        controlNav: false,               //布尔: 是否创建分页控制
        prevText: "",           	    //字符串: 设置左导航文本
        nextText: "",                   //字符串: 设置右导航文本
        keyboard: true,                 //布尔:允许滑块通过键盘左/右导航键
        mousewheel: false,              //布尔：允许通过鼠标滚轮滑动导航
        pausePlay: false,               //布尔:创建暂停/播放动态元素
        pauseText: "Pause",             //字符串:设置文本为"Pause"
        playText: "Play"               //字符串:设置文本为"Play"
    });
});
$(function(){
    $('.cgal_fix1').flexslider({
        namespace: "f-",             //字符串：附着在类的插件生成的每一个元素的前缀字符串
        animation: "slide",              //字符串：选择你的动画类型,   fade  or  slide
        direction: "horizontal",        //字符串：选择滑动方向,   horizontal  or  vertical
        reverse: false,                 //布尔：反转动画方向
        animationLoop: true,            //布尔:是否循环播放? 如果是 false, 动画将会停在两端
        smoothHeight: false,            //布尔:允许高度的滑块在横屏模式下顺利动画
        startAt: 0,                     //整数：幻灯片开始的位置。数组符号（0=第一张幻灯片）
        slideshow: false,                //布尔:动画是否自动
        slideshowSpeed: 2000,           //整数：设置幻灯片循环的速度，单位为毫秒
        animationSpeed: 600,            //整数：设置动画的速度，单位为毫秒
        initDelay: 0,                   //整数：设置一个初始化的延迟，单位为毫
        pauseOnHover: true,            //布尔: 鼠标悬停时是否暂停
        directionNav: true,             //布尔: 是否创建左右切换导航按钮? (true/false)
        controlNav: false,               //布尔: 是否创建分页控制
        prevText: "",           	    //字符串: 设置左导航文本
        nextText: "",                   //字符串: 设置右导航文本
        keyboard: true,                 //布尔:允许滑块通过键盘左/右导航键
        mousewheel: false,              //布尔：允许通过鼠标滚轮滑动导航
        pausePlay: false,               //布尔:创建暂停/播放动态元素
        pauseText: "Pause",             //字符串:设置文本为"Pause"
        playText: "Play"               //字符串:设置文本为"Play"
    });
});
$(function(){
<!--//--><![CDATA[//><!--
    //图片滚动列表 mengjia 070816
    var Speed = 6; //速度(毫秒)
    var Space = 20; //每次移动(px)
    var PageWidth =388; //翻页宽度
    var fill = 0; //整体移位
    var MoveLock = false;
    var MoveTimeObj;
    var Comp = 0;
    var AutoPlayObj = null;
    GetObj("List2").innerHTML = GetObj("List1").innerHTML;
    GetObj('ISL_Cont').scrollLeft = fill;
    GetObj("ISL_Cont").onmouseover = function(){clearInterval(AutoPlayObj);}
    function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval('document.all.'+objName)}}

    function ISL_GoUp(){ //上翻开始
        if(MoveLock) return;
        clearInterval(AutoPlayObj);
        MoveLock = true;
        MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
    }
    function ISL_StopUp(){ //上翻停止
        clearInterval(MoveTimeObj);
        if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
            Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
            CompScr();
        }else{
            MoveLock = false;
        }
    }
    function ISL_ScrUp(){ //上翻动作
        if(GetObj('ISL_Cont').scrollLeft <= 0){GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft + GetObj('List1').offsetWidth}
        GetObj('ISL_Cont').scrollLeft -= Space ;
    }
    function ISL_GoDown(){ //下翻
        clearInterval(MoveTimeObj);
        if(MoveLock) return;
        clearInterval(AutoPlayObj);
        MoveLock = true;
        ISL_ScrDown();
        MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
    }
    function ISL_StopDown(){ //下翻停止
        clearInterval(MoveTimeObj);
        if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
            Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
            CompScr();
        }else{
            MoveLock = false;
        }
    }
    function ISL_ScrDown(){ //下翻动作
        if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;}
        GetObj('ISL_Cont').scrollLeft += Space ;
    }
    function CompScr(){
        var num;
        if(Comp == 0){MoveLock = false;return;}
        if(Comp < 0){ //上翻
            if(Comp < -Space){
                Comp += Space;
                num = Space;
            }else{
                num = -Comp;
                Comp = 0;
            }
            GetObj('ISL_Cont').scrollLeft -= num;
            setTimeout('CompScr()',Speed);
        }else{ //下翻
            if(Comp > Space){
                Comp -= Space;
                num = Space;
            }else{
                num = Comp;
                Comp = 0;
            }
            GetObj('ISL_Cont').scrollLeft += num;
            setTimeout('CompScr()',Speed);
        }
    }
    //--><!]]>
});
