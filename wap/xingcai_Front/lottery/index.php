<?php $this->display('inc_daohang.php'); ?>
<style type="text/css">
.child-view,.child-view {
position:absolute;
width:100%;
top:0;
bottom:0;
left:0;
right:0;
background:#f5f6f7;
-webkit-backface-visibility:hidden;
-webkit-transform-style:preserve-3d;
z-index:10;
}

.game-list {
display:flex;
-webkit-flex-wrap:wrap;
flex-wrap:wrap;
padding:50px 4px;
}

.item-img {
border-radius:3px 3px 0 0;
background:#fff url() no-repeat -20px;
background-size:cover;
padding:4px 0;
}

.item-img img {
float:left;
display:inline-block;
height:50px;
width:50px;
margin-left:4px;
}

.icon-xin {
color:red;
}

.item-title {

border-radius:0 0 3px 3px;
position:relative;
display:flex;
-webkit-box-flex:1;
-webkit-flex:1;
flex:1;
-webkit-box-orient:vertical;
-webkit-box-direction:normal;
-webkit-flex-direction:column;
flex-direction:column;
margin-left:64px;
}

.item-title p {
font-size:14px;
-webkit-box-flex:1;
-webkit-flex:1;
flex:1;
text-align:left;
color:#666;
}

.item-title .scBtn {
position:absolute;
right:-14px;
top:-10px;
width:20px;
height:100%;
padding-top:.14rem;
text-align:center;
font-size:16px;
}

.mui-item {
-webkit-box-flex:0;
-webkit-flex:0 0 47%;
flex:0 0 47%;
background-color:#fff;
margin:6px auto;
}


</style>

<script type="text/javascript" src="/js/nsc_m/res.js?v=1.16.12.4"></script>
<script type="text/javascript">
function recordSearch(err, data){
	if(err){
		xingcai(err);
	}else{
		$('.biao-cont').html(data);
	}
}
</script>
<section class="wraper-page">

<div  class="grayLine"></div>
			
<div  class="child-view">

<div  class="mui-scroll-wrapper" >
<div  class="mui-scroll" style="transform: translate3d(0px, 0px, 0px) translateZ(0px); transition-duration: 0ms;">
<ul  class="mui-clearfix game-list">

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/20/27/北京PK拾" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/bjpk10.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">北京赛车</p> <p  class="lastp">09:07 ~ 23:57</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/66/27/极速PK拾" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/jspk10.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">极速赛车</p> <p  class="lastp">09:07 ~ 23:57</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/65/27/3分PK拾" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/jspk10.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">3分PK拾</p> <p  class="lastp">09:07 ~ 23:57</p></div></a></li>


<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/1/2/12/重庆时时彩" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/cqssc.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">重庆时时彩</p> <p  class="lastp">10:00 ~ 01:55</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/12/2/12/新疆时时彩" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/xjssc.png"></div>
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">新疆时时彩</p> <p  class="lastp">10:10 ~ 02:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/60/2/12/天津时时彩"class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/tjssc.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">天津时时彩</p> <p  class="lastp">10:00 ~ 01:55</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/75/59/193/腾讯分分彩" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/jsssc.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">腾讯分分彩</p> <p  class="lastp">00:01 ~ 24:00</p></div></a></li>


<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/14/59/193/极速5分彩" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/jsssc.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">极速5分彩</p> <p  class="lastp">00:01 ~ 24:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/26/59/193/极速2分彩" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/jsssc.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">极速2分彩</p> <p  class="lastp">00:01 ~ 24:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/5/59/193/极速分分彩" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/jsssc.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">极速分分彩</p> <p  class="lastp">00:01 ~ 24:00</p></div></a></li>


<li  class="mui-pull-left mui-item"><a  href="/index.php/index/game/79/江苏快三" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/jsk3.png"></div>
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">江苏快三</p> <p  class="lastp">08:40 ~ 22:10</p></div></a></li>

<li  class="mui-pull-left mui-item"><a  href="/index.php/index/game/64/极速快三" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/jssk3.png"></div>
 <div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">极速快三</p> <p  class="lastp">00:01 ~ 24:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a  href="/index.php/index/game/78/北京快乐8" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/jsk3.png"></div>
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">北京快乐8</p> <p  class="lastp">08:40 ~ 22:10</p></div></a></li>

<li  class="mui-pull-left mui-item"><a  href="/index.php/index/game/73/极速快乐8" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/jssk3.png"></div>
 <div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">极速快乐8</p> <p  class="lastp">00:01 ~ 24:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a  href="/index.php/index/game/6/广东11选5" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/gd11x5.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">广东11选5</p> <p  class="lastp">00:01 ~ 24:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/68/极速11选5" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/js11x5.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">极速11选5</p> <p  class="lastp">00:01 ~ 24:00</p></div></a></li>


<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/15/上海11选5" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/js11x5.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">上海11选5</p> <p  class="lastp">00:01 ~ 24:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/16/江西11选5" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/js11x5.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">江西11选5</p> <p  class="lastp">00:01 ~ 24:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/7/山东11选5" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/js11x5.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">山东11选5</p> <p  class="lastp">00:01 ~ 24:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/81/广东快乐10" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/gdklsf.png"></div> 
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">广东快乐十分</p> <p  class="lastp">09:10 ~ 23:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/72/极速幸运农场" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/cqklsf.png"></div>
 <div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">极速幸运农场</p> <p  class="lastp">10:03 ~ 02:03</p></div></a></li>


<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/77/极速六合彩" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/jslhc.png"></div>
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">极速六合彩</p> <p  class="lastp">00:05 ~ 24:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/34/香港六合彩"  class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/hk6.png"></div>
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">香港六合彩</p> <p  class="lastp">365天不打烊</p></div></a></li> 

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/10/排列3"  class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/pl3.png"></div>
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">排列3</p> <p  class="lastp">365天不打烊</p></div></a></li> 

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/9/3D福彩" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/3d.png"></div>
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">3D福彩</p> <p  class="lastp">00:05 ~ 24:00</p></div></a></li>

<li  class="mui-pull-left mui-item"><a href="/index.php/index/game/70/极速3D" class="inline-block handleClickItem"><div  class="item-img"><img  src="/images/new/3d.png"></div>
<div  class="item-title mui-clearfix"><p  class="mui-pull-left mt mui-ellipsis">极速3D</p> <p  class="lastp">00:05 ~ 24:00</p></div></a></li>




	
						
</ul></div><div class="mui-scrollbar mui-scrollbar-vertical"><div class="mui-scrollbar-indicator" style="transition-duration: 0ms; display: block; height: 0px; transform: translate3d(0px, 0px, 0px) translateZ(0px);"></div></div></div></div>
	
	<div class="last-div" style="height:0px">	
    </div>
	<div id="footer">
	<footer class="footer">
		<ul>
			<li>
				<a href="javascript:void(0);" onClick="javascript:window.location.href='/'" class="ico_home">首页</a>
			</li>

			<li>
				<a href="javascript:void(0);" onClick="javascript:window.location.href='/index.php/lottery/index'" class="ico_gc">购彩</a>
			</li>
			
			<li>
				<a href="javascript:void(0);" onClick="javascript:window.location.href='/index.php/lottery/draw'" class="ico_kj">开奖</a>
			</li>
			
			<li>
				<a href="javascript:void(0);" onClick="javascript:window.location.href='/index.php/record/search'" class="ico_zhd">注单</a>
			</li>
			<li>
				<a href="javascript:void(0);" onClick="javascript:window.location.href='/index.php/safe/Personal'" class="ico_u">我的</a>
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
	
</body></html>