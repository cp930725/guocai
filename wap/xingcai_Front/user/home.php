<html xmlns="http://www.w3.org/1999/xhtml" style="font-size: 15.525px;"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,user-scalable=no,maximum-scale=1.0">
<title><?=$this->settings['webName']?></title>
<meta name="keywords" content="">
<meta name="format-detection" content="telephone=no">
<meta name="screen-orientation" content="portrait">
<meta name="x5-orientation" content="portrait">
<meta nam="description" content="">

<link rel="stylesheet" type="text/css" href="/images/new/mui.min.css">


<style type="text/css">

.grayLine {
	height: 8px;
	background: #f5f6f7;
}


#Home {
	width: 100%;
	height: 100%;
	background: #fff;
}

#Home .mui-slider-indicator .mui-indicator {
	margin: 1px 3px;
	background: #ccc;
	box-shadow: inherit;
}

#Home .bannerPhotoPathBackground {
	height: 2.9rem;
	background: url(data:image/png;
	);background-size: 100% 100%;
}

#Home .mui-slider-indicator .mui-active.mui-indicator {
	background: #fff;
}

#Home .Marquem-container {
	padding: .12rem .24rem;
}

#Home .Marquem-container .Marquem-bg {
	display: -webkit-box;
	display: -webkit-flex;
	display: flex;
	overflow: hidden;
	width: 100%;
	border-radius: 30px;
	background: #f5f6f7;
}

#Home .Marquem-container .Marquem-bg .Notice {
	-webkit-box-flex: 1;
	-webkit-flex: 1;
	flex: 1;
}

#Home .Marquem-container .Marquem-bg .Notice marquee {
	font-size: 16px;
	-webkit-transform: translate3d(0,2px,0);
	transform: translate3d(0,2px,0);
}

#Home .Marquem-container .Marquem-bg .icon {
	width: .56rem;
	color: #19b4f5;
	line-height: .52rem;
}</style><style type="text/css">

#GameGrid {
	z-index: 10;
}

#Navigation .mui-grid-view.mui-grid-9 {
	border: 0 none;
	background: #fff;
}

#Navigation .mui-grid-view.mui-grid-9 .mui-table-view-cell {
	padding: 4px;

	border: 0 none;
}

#Navigation .mui-table-view.mui-grid-view .mui-table-view-cell .mui-media-body {
	font-size: 14px;
}


.game-item {
	display: block;
	padding: .16rem 0;
}

.img {
	margin: auto;
	width: 50px;
}
</style>





<style type="text/css">

.right-con {
	overflow: hidden;
}

.hot-disc {
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}

.m-title {
	padding: .2rem .24rem;
	vertical-align: middle;
	font-weight: 100;
	font-size: .28rem;
}

.mr-r {
	margin-right: 4px;
	color: #19b4f5;
	font-size: 16px;
}

.hot-container {
	float: left;
	display: inline-block;
	padding: .11rem;
	width: 49.2%;
}

.mui-slider .mui-slider-group .mui-slider-item {
	padding-bottom: .1rem;
	padding-left: .06rem;
}

.slide-tps {
	margin-top: .04rem;
	color: #999;
	font-size: 14px;
}

.tab-item {
	display: -webkit-box;
	display: -webkit-flex;
	display: flex;
	overflow: hidden;
	padding: 16px 10px;
	border-radius: 3px;
	background: #f5f6f7;
}

.tab-item .left-icon {
	display: block;
	width: 50px!important;
	height: 50px;
}

.tab-item .right-con {
	padding-left: 5px;
	-webkit-box-flex: 1;
	-webkit-flex: 1;
	flex: 1;
}

.tab-item .hot-name {
	margin-top: 10px;
	color: #666;
	text-align: left;
	font-weight: 100;
	font-size: 14px;
}


</style>





<style type="text/css">


.m-title {
	padding: 16px 4px;
	vertical-align: middle;
	font-weight: 100;
	font-size: 16px;
}

.mr-r {
	margin-right: 5px;
	color: #19b4f5;
	font-size: 14px;
}

.item-img {
	width: auto;
	height: 100%;
	border-radius: 3px;
}


</style>





<link rel="stylesheet" href="/css/nsc_m/res.css?v=1.16.12.11">
<link rel="stylesheet" href="/css/nsc_m/idangerous.swiper.css?v=1.16.12.11">
<link href="/js/nsc_m/need/layer.css?2.0" type="text/css" rel="styleSheet" id="layermcss">
<script type="text/javascript" src="/js/nsc/jquery-1.7.min.js?v=1.16.12.11"></script>
<script>var TIP=true;</script>
<script type="text/javascript" src="/skin/js/onload.js"></script>

 <script type="text/javascript" src="/js/nsc/common.js?v=1.16.12.11"></script>
<script type="text/javascript" src="/js/nsc_m/layer.js?v=1.16.12.11"></script>

</head>
<script type='text/javascript'>
 function zxkf(){
	<?php if($this->settings['kefuStatus']){ ?>
	var newWin=window.open("<?=$this->settings['kefuGG']?>");
	<?php }else{?>
	xingcai("客服系统维护中");
	<?php }?>
	return false;
 }
</script> 
   <body style="overflow-x: visible;">
	<!-- 代码部分begin -->
	<div id="body" class="">
		<header class="header">
	<a href="/"><img class="logo" src="/images/nsc_m/index/logo.png?v=1.16.12.11"></a>
	<!-- <a class="m-return" href="javascript:checkbackspace();">返回</a> -->
	
	
	<div class="wercom " style="font-size:18px;">
        <a href="/index.php/user/login"><font color="#FFFFFF">登陆</font></a> <?php if($this->settings['regStatus']){ ?> <a  href="/index.php/user/r/<?=$this->settings['regurl']?>"><font color="#FFFFFF">注册</font></a><? } ?>
    </div>
</header>

		<div class="home_b">
			<div class="m_nav_line"></div>
				<a href="">首页</a>
				<a class="one_nav_list retreat_icon" href="javascript:m_loginout()">安全退出</a>
		</div>
		<div class="shady" style="display: none;"></div>		<div class="m-prompt" style="overflow: hidden; display: none;">
			<img src="/images/nsc_m/index/question.png?v=1.16.12.11">
			<a href="javascript:;"></a>
		</div>
		<section class="wraper-page" style="overflow: visible;">
		
		<!-- 轮播 -->
		<div class="swiper-container">
		  <div class="swiper-wrapper" style="width: 3312px; height: 130px; transform: translate3d(-2070px, 0px, 0px); transition-duration: 0.3s;">
		 
		 
		              <div class="swiper-slide swiper-slide-duplicate" >
                         	<a href="/index.php/user/login">
                                <img src="/images/slide/0.jpg">
                            </a>
                      </div>
		                 
					  <div class="swiper-slide" style="width: 414px;>
                         	<a href="/index.php/user/login">
                                <img src="/images/slide/1.jpg">
                            </a>
                      </div>
                     <div class="swiper-slide" style="width: 414px;>
                         	<a href="/index.php/user/login">
                                <img src="/images/slide/2.jpg">
                            </a>
                     </div>
                     
					 <div class="swiper-slide" style="width: 414px;>
                         	<a href="/index.php/user/login">
                                 <img src="/images/slide/3.jpg">
                            </a>
                      </div>
                     
					 <div class="swiper-slide" style="width: 414px;>
                         	<a href=" /?nav=pk10&amp;flaglot=pk10#">
                                <img src="/images/slide/4.jpg">
                            </a>
                        </div>
		  </div>
		<div class="pagination">
		<span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span>
		<span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span>
		<span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span>
		<span class="swiper-pagination-switch"></span>
		</div>
		</div>
		<!-- end轮播 -->

		
<div  class="mui-content">
<div  id="Home" class="child-view">
<div  class="mui-scroll-wrapper">

<div class="Marquem-container"><div  class="Marquem-bg"><span  class="icon iconfont icon-icon-23"></span> 
<div  class="Notice"><marquee  scrollamount="3" scrolldelay="0" direction="left" class="NotContent"><?=$this->settings['webGG'] ?></marquee></div></div></div> 
<div id="Navigation">
<ul class="mui-table-view mui-grid-view mui-grid-9">

<li  class="mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3"> <a  href="/index.php/user/login"  class="game-item"><img  src="/images/new/lottery.png" class="img" > <div class="mui-media-body">彩票游戏</div></a></li>

<li  class="mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3"><a  href="/index.php/user/login"  class="game-item"><img  src="/images/new/livecasino.png" class="img"> <div  class="mui-media-body">真人视讯</div></a></li>

<li  class="mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3"><a  href="/index.php/user/login"  class="game-item"><img  src="/images/new/slot.png" class="img"> <div  class="mui-media-body">电子游艺</div></a></li>

<li  class="mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3"><a  href="<?=$this->settings['kefuGG']?>"  target="_blank"  class="game-item"><img  src="/images/new/sport.png" class="img"> <div  class="mui-media-body">客服中心</div></a></li>

<li  class="mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3"><a  href="/index.php/user/login"   class="game-item"><img  src="/images/new/jspk10.png" class="img"> <div  class="mui-media-body">极速赛车</div></a></li>

<li  class="mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3"><a  href="/index.php/user/login"   class="game-item"><img  src="/images/new/txffc.png" class="img"> <div  class="mui-media-body">腾讯分分彩</div></a></li>

<li  class="mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3"><a  href="/index.php/user/login"   class="game-item"><img  src="/images/new/xyft.png" class="img"> <div  class="mui-media-body">幸运飞艇</div></a></li>

<li  class="mui-table-view-cell mui-media mui-col-xs-3 mui-col-sm-3"><a  href="/index.php/user/login"   class="game-item"><img  src="/images/new/collect.png" class="img"> <div  class="mui-media-body">个人中心</div></a></li>
</ul>
</div>


<div  class="grayLine"></div>
 <div id="GameHot">
 <h2 class="mui-text-left mui-clearfix m-title">
 <span  class="mui-pull-left iconfont icon-icon-25 mr-r"></span>热门游戏
 <span  class="slide-tps mui-pull-right" style="float:right; margin-right:6px"> <a  href="/index.php/user/login">查看更多</a></span>
 </h2> 
			
			
<div id="slider" class="mui-slider" data-slider="10">
<div class="mui-slider-group" style="transform: translate3d(0px, 0px, 0px) translateZ(0px);">

<div class="mui-slider-item mui-slider-item-duplicate mui-clearfix">


<div class="hot-container"><a href="/index.php/user/login" class="tab-item"><img src="/images/new/bjpk10.png"  class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-lef t">北京赛车</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">玩法简单高赔率</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"  class="tab-item"><img src="/images/new/cqssc.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-lef t">重庆时时彩</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">中奖率高开奖快</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"  class="tab-item"><img src="/images/new/xyft.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">幸运飞艇</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">快开5分一期</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"  class="tab-item"><img src="/images/new/jsft.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">极速飞艇</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">极速全天24小时</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"  class="tab-item"><img src="/images/new/jsssc.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">极速时时彩</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">75秒高速开采</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"  class="tab-item"><img src="/images/new/jspk10.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">极速PK10</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">中奖率高开奖快</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"  class="tab-item"><img src="/images/new/xjssc.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">新疆时时彩</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">中奖率高开奖快</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"  class="tab-item"><img src="/images/new/paoma.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">香港跑马</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">中奖率高开奖快</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"  class="tab-item"><img src="/images/new/gdklsf.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">广东快乐10</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">中奖率高开奖快</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"  class="tab-item"><img src="/images/new/cqklsf.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">幸运农场</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">实时直播中大奖</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"  class="tab-item"><img src="/images/new/gd11x5.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">广东11选5</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">中奖率高开奖快</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"  class="tab-item"><img src="/images/new/js11x5.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">极速11选5</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">中奖率高开奖快</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"   class="tab-item"><img src="/images/new/jsk3.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-lef t">江苏快三</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">中奖率高开奖快</p></div></a></div>

<div class="hot-container"><a href="/index.php/user/login"   class="tab-item"><img src="/images/new/jssk3.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-lef t">极速快三</h4> 
<p class="hot-disc mui-text-left mui-ellipsis">中奖率高开奖快</p></div></a></div>




<!--
<div class="hot-container"><a href="javascript:;" class="tab-item"><img src="/images/new/ag_live.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-lef t">AG真人视讯</h4> <p class="hot-disc mui-text-left mui-ellipsis">AV女忧助阵赢钱</p></div></a></div>
						
<div class="hot-container"><a href="javascript:;" class="tab-item"><img src="/images/new/mg_game.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-lef t">MG电子游艺</h4> <p class="hot-disc mui-text-left mui-ellipsis">爆奖夺金赚翻天</p></div></a></div>

<div class="hot-container"><a href="javascript:;" class="tab-item"><img src="/images/new/og_slot.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">OG真人视讯</h4> <p class="hot-disc mui-text-left mui-ellipsis">极致东方游戏</p></div></a></div>

<div class="hot-container"><a href="javascript:;" class="tab-item"><img src="/images/new/pt_slot.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">PT电子游艺</h4> <p class="hot-disc mui-text-left mui-ellipsis">老虎机刮刮卡</p></div></a></div>

<div class="hot-container"><a href="javascript:;" class="tab-item"><img src="/images/new/mw_slot.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">捕鱼达人</h4> <p class="hot-disc mui-text-left mui-ellipsis">电子捕鱼精彩无限</p></div></a></div>

<div class="hot-container"><a href="javascript:;" class="tab-item"><img src="/images/new/ag_slot.png" class="left-icon mr-r"> <div class="right-con"><h4 class="hot-name mui-text-left t">AG电子游艺</h4> <p class="hot-disc mui-text-left mui-ellipsis">精彩的冒险体验</p></div></a></div>

-->

</div></div></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="50px">&nbsp;</td>
  </tr>
</table>

	<div id="footer">
	<footer class="footer">
		<ul>
			<li>
				<a href="javascript:void(0);" onClick="javascript:window.location.href='/'" class="ico_home">首页</a>
			</li>

			<li>
				<a href="javascript:void(0);" onClick="javascript:window.location.href='/index.php/user/login'" class="ico_gc">购彩</a>
			</li>
			
			<li>
				<a href="javascript:void(0);" onClick="javascript:window.location.href='/index.php/user/login'" class="ico_kj">开奖</a>
			</li>
			
			<li>
				<a href="javascript:void(0);" onClick="javascript:window.location.href='/index.php/user/login'" class="ico_zhd">注单</a>
			</li>
			<li>
				<a href="javascript:void(0);" onClick="javascript:window.location.href='/index.php/user/login'" class="ico_u">我的</a>
			</li>
		</ul>
	</footer>
</div>
	
	
	<!--底部导航开始 小柒制作QQ：3230615508-->
<style>
#footer{
    height:50px;padding-top:0px;background:#322E4D;
	z-index: 998;
	position: fixed;
	bottom: 0;
	left: 0;
	width: 100%;
	overflow: visible;
}
.pad_footer{padding-bottom: 70px;}

.footer ul li {
	float: left;
	width: 20%;
	height: 50px;
	
}
.footer ul li a {
	display: block;
	text-align: center;
	color: #000;
	padding-top: 28px;
	font-size: 12px;
	background-image: url(/images/icos.png);
	background-repeat: no-repeat;
	background-position: center -7px;

}
.footer ul li a:hover,.footer ul li a:visited,.footer ul li a:link {
	color: #fff;
}
.footer ul li .ico_home {
	background-position: center -7px;
}

.footer ul li .ico_gc {
	background-position: center -524px;
}

.footer ul li .ico_kj {
	background-position: center -277px;
}
.footer ul li .ico_u {
	background-position: center -210px;
}
.footer ul li .ico_money {
	background-position: center -403px;
}
.footer ul li .ico_kf {
	background-position: center -343px;
}

.footer ul li .ico_zhd {
	background-position: center -463px;
}
</style>
	
	<!-- 代码部分end -->

   	<script type="text/javascript" src="/js/nsc_m/idangerous.swiper.min.js?v=1.16.12.11"></script>
    <script type="text/javascript" src="/js/nsc/main.js?v=1.16.12.11"></script>
    <script type="text/javascript">
	    $(".cz_close").click(function(){
        $(".chongzhi_f_botm").hide();
    })
    	var mySwiper = new Swiper('.swiper-container',{
		    loop: true,
			autoplay: 3000,
			pagination:'.pagination',
			paginationClickable:true
  		});

  		

         //选项卡
        $(".Tab-content").eq(0).show();
        $(".Tab-nav div").click(function(){
	        $(".Tab-content").hide();
	        $(".Tab-nav div").removeClass("cur");
	        $(this).addClass("cur");
	        $(".Tab-content").eq($(this).index()).show()
        });

		
	
	  
    </script>
	
	
</body></html>