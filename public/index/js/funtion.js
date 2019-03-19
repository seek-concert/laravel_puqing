
$(function(){
	$(".pro_menu ul li").hover(function(){
			$(this).addClass("hover");
			$(this).siblings().removeClass("hover");		
			$(this).children(".plist").show();
			$(this).siblings().children(".plist").hide();
			$(this).children().children(".pr1").attr("src","../index/images/picon01.png");
            $(this).children().children(".pr2").attr("src","../index/images/picon02.png");
			$(this).children().children(".pr3").attr("src","../index/images/picon03.png");
			$(this).children().children(".pr4").attr("src","../index/images/picon04.png");
			$(this).children().children(".pr5").attr("src","../index/images/picon05.png");
			$(this).children().children(".pr6").attr("src","../index/images/picon06.png");
			$(this).children().children(".pr7").attr("src","../index/images/picon07.png");
			$(this).children().children(".pr8").attr("src","../index/images/picon08.png");
			$(this).children().children(".pr9").attr("src","../index/images/picon09.png");
			$(this).children().children(".pr10").attr("src","../index/images/picon010.png");
			$(this).children().children(".pr11").attr("src","../index/images/picon011.png");
			$(this).children().children(".pr01").attr("src","../index/images/cont01.png");
            $(this).children().children(".pr02").attr("src","../index/images/cont02.png");
			$(this).children().children(".pr03").attr("src","../index/images/cont03.png");
			$(this).children().children(".pr04").attr("src","../index/images/cont04.png");
		},function(){
			$(this).removeClass("hover");
			$(this).children(".plist").hide();
			if ($(this).hasClass('cur')) {
			       $(this).children().children(".pr1").attr("src","../index/images/picon01.png");
                   $(this).children().children(".pr2").attr("src","../index/images/picon02.png");
		       	   $(this).children().children(".pr3").attr("src","../index/images/picon03.png");
			       $(this).children().children(".pr4").attr("src","../index/images/picon04.png");
			       $(this).children().children(".pr5").attr("src","../index/images/picon05.png");
			       $(this).children().children(".pr6").attr("src","../index/images/picon06.png");
			       $(this).children().children(".pr7").attr("src","../index/images/picon07.png");
			       $(this).children().children(".pr8").attr("src","../index/images/picon08.png");
			       $(this).children().children(".pr9").attr("src","../index/images/picon09.png");
			       $(this).children().children(".pr10").attr("src","../index/images/picon010.png");
			       $(this).children().children(".pr11").attr("src","../index/images/picon011.png");
			       $(this).children().children(".pr01").attr("src","../index/images/cont01.png");
                   $(this).children().children(".pr02").attr("src","../index/images/cont02.png");
			       $(this).children().children(".pr03").attr("src","../index/images/cont03.png");
			       $(this).children().children(".pr04").attr("src","../index/images/cont04.png");
			   }else{  
				 	$(this).children().children(".pr1").attr("src","../index/picture/picon1.png");
                    $(this).children().children(".pr2").attr("src","../index/picture/picon2.png");
			        $(this).children().children(".pr3").attr("src","../index/picture/picon3.png");
			        $(this).children().children(".pr4").attr("src","../index/picture/picon4.png");
			        $(this).children().children(".pr5").attr("src","../index/picture/picon5.png");
			        $(this).children().children(".pr6").attr("src","../index/images/picon6.png");
			        $(this).children().children(".pr7").attr("src","../index/images/picon7.png");
			        $(this).children().children(".pr8").attr("src","../index/images/picon8.png");
			        $(this).children().children(".pr9").attr("src","../index/images/picon9.png");
			        $(this).children().children(".pr10").attr("src","../index/images/picon10.png");
			        $(this).children().children(".pr11").attr("src","../index/images/picon11.png");
			        $(this).children().children(".pr01").attr("src","../index/images/cont1.png");
                    $(this).children().children(".pr02").attr("src","../index/images/cont2.png");
			        $(this).children().children(".pr03").attr("src","../index/images/cont3.png");
			        $(this).children().children(".pr04").attr("src","../index/images/cont4.png");
	        }
	});
	$(".case ul li").hover(function(){
			$(this).addClass("hover");
			$(this).siblings().removeClass("hover");
	});
	$(".news_list ul li").hover(function(){
			$(this).addClass("hover");
			$(this).siblings().removeClass("hover");
	});
	$(".news_menu a").hover(function(){
			$(this).addClass("hover");
			$(this).siblings().removeClass("hover");
	});
	   $(".dh-main h2").hover(function(){
			$(this).children(".nav_wrap").show();
		},function(){
			$(this).children(".nav_wrap").hide();
	});
});

$(document).ready(function(){
            if ($(".pr1").parent().parent().hasClass('cur')) {
			        $(".pr1").attr("src","../index/images/picon01.png");
	        }
			if ($(".pr2").parent().parent().hasClass('cur')) {
			        $(".pr2").attr("src","../index/images/picon02.png");
	        }
			if ($(".pr3").parent().parent().hasClass('cur')) {
			        $(".pr3").attr("src","../index/images/picon03.png");
	        }
			if ($(".pr4").parent().parent().hasClass('cur')) {
			        $(".pr4").attr("src","../index/images/picon04.png");
	        }
			if ($(".pr5").parent().parent().hasClass('cur')) {
			        $(".pr5").attr("src","../index/images/picon05.png");
	        } 
	        if ($(".pr6").parent().parent().hasClass('cur')) {
			        $(".pr6").attr("src","../index/images/picon06.png");
	        } 
	        if ($(".pr7").parent().parent().hasClass('cur')) {
			        $(".pr7").attr("src","../index/images/picon07.png");
	        } 
	        if ($(".pr8").parent().parent().hasClass('cur')) {
			        $(".pr8").attr("src","../index/images/picon08.png");
	        } 
	        if ($(".pr9").parent().parent().hasClass('cur')) {
			        $(".pr9").attr("src","../index/images/picon09.png");
	        } 
	        if ($(".pr10").parent().parent().hasClass('cur')) {
			        $(".pr10").attr("src","../index/images/picon010.png");
	        } 
	        if ($(".pr11").parent().parent().hasClass('cur')) {
			        $(".pr11").attr("src","../index/images/picon011.png");
	        } 
			if ($(".pr01").parent().parent().hasClass('cur')) {
			        $(".pr01").attr("src","../index/images/cont01.png");
	        }
			if ($(".pr02").parent().parent().hasClass('cur')) {
			        $(".pr02").attr("src","../index/images/cont02.png");
	        }
			if ($(".pr03").parent().parent().hasClass('cur')) {
			        $(".pr03").attr("src","../index/images/cont03.png");
	        }
			if ($(".pr04").parent().parent().hasClass('cur')) {
			        $(".pr04").attr("src","../index/images/cont04.png");
	        }
		   
});		   
$(function(){
	//��Ʒ��ʾ��ϸ��Ϣ
	$(".case ul li").hover(function(){
			$(this).children(".cimg").children("a").show( );
			$(this).siblings().children(".cimg").children("a").hide( );						
			$(this).children(".cimg").children().children("h4").stop(true,false).animate({left: '116px'}, 400);
			$(this).children(".cimg").children().children("p").stop(true,false).animate({right: '116px'}, 400);
		},function(){
			$(this).children(".cimg").children("a").hide( );
			$(this).children(".cimg").children().children("h4").stop(true,false).animate({left: '-88px'}, 400);
			$(this).children(".cimg").children().children("p").stop(true,false).animate({right: '-88px'}, 400);
	});
});
//$(function(){
//    $('.pro_list ul li').click(function(){ 
//    var zmax=$(".pro_list ul li").length;
//    var dq=$('.pro_list ul li').index(this);
//    $(".pro_option .pro_box").eq(dq).show().siblings().hide();
//    $(this).addClass("hover").siblings().removeClass(); 
//    });
//});