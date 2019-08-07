<?php $this->display('inc_daohang_lottery.php'); ?>
<link rel="stylesheet" href="/css/nsc/reset.css?v=1.16.11.5" />
<link rel="stylesheet" href="/css/nsc/list.css?v=1.16.11.5" />
<link rel="stylesheet" href="/css/nsc/activity.css?v=1.16.11.5" />
<script type="text/javascript" src="/js/nsc/dialogUI/jquery.dialogUI.js?v=1.16.11.5"></script>
<link href="/css/nsc/plugin/dialogUI/dialogUI.css?v=1.16.11.5" media="all" type="text/css" rel="stylesheet" />
<style type=text/css>#lottery
{
	position:relative;
	z-index:0;
}

#page-body
{
	width:1000px;
	margin:0 auto;
}

.heart
{
	position:absolute;
	width:15px;
	height:19px;
	bottom:20px;
	right:20px;
}

.gray
{
	color:#c6cacf;
}

.red
{
	color:red;
}

.yl_lottery
{
	background:url(./static/img/lottery_bj.jpg) #182035 no-repeat;
	background-position:0 170px;
}

.sh_lottery
{
	background:#1f1a1a;
	margin-top:-98px;
}

.xpj_lottery
{
	margin-top:100px;
	background:#1f1a1a;
}

#lottery #content #page-body .active
{
	background:#3493ff;
}

#lottery #content #page-body .active a
{
	color:#fff;
}

#lottery
{
	width:100%;
	padding:0 0 80px;
}

#lottery .banner-top
{
	position:relative;
	width:100%;
	height:250px;
	background:url(./static/img/lottery.jpg) no-repeat;
	cursor:pointer;
}

#lottery .banner-top-at
{
	background:url(./static/img/at-lottery.jpg) no-repeat;
}

#lottery .banner-top-am,#lottery .banner-top-at
{
	position:relative;
	width:100%;
	height:250px;
	cursor:pointer;
}

#lottery .wrapper
{
	margin-top:20px;
}

#lottery .wrapper #page-body .lottery-category
{
	margin-bottom:10px;
	padding-left:12px;
	line-height:60px;
	height:60px;
	background:#fff;
	border:1px solid #ccc;
}

#lottery .wrapper #page-body .lottery-category .category-container
{
	overflow:hidden;
}

#lottery .wrapper #page-body .lottery-category .category-container li
{
	float:left;
	width:143px;
	font-size:18px;
	height:40px;
	line-height:40px;
	background:transparent;
	border-radius:3px;
	margin-top:10px;
	margin-right:15px;
	cursor:pointer;
}

#lottery .wrapper #page-body .lottery-category .category-container li a
{
	display:inline-block;
	height:40px;
	line-height:40px;
	color:#313133;
	box-sizing:border-box;
	border-bottom:3px solid transparent;
	transition:all .5s;
}

#lottery .wrapper #page-body .lottery-category .category-container li a:hover
{
	border-bottom-color:#3493ff;
	color:#3493ff;
}

#lottery .wrapper .lot-wrapper
{
	overflow:hidden;
	background:#fff;
	min-height:600px;
	padding:4px 5px 0;
}

#lottery .wrapper .lot-wrapper .lottery-card
{
	position:relative;
	float:left;
	overflow:hidden;
	width:320px;
	border:1px solid #c6cacf;
	border-radius:3px;
	box-sizing:border-box;
	transition:all .5s;
	cursor:pointer;
	margin:5px;
}

#lottery .wrapper .lot-wrapper .lottery-card:hover
{
	box-shadow:0 1px 6px rgba(73,158,255,.5);
	border-color:rgba(73,158,255,.5);
}

#lottery .wrapper .lot-wrapper .lottery-card .card-img
{
	display:block;
	float:left;
	width:80px;
	height:auto;
	padding:20px 25px 20px 20px;
}

#lottery .wrapper .lot-wrapper .lottery-card .card-item
{
	float:left;
	text-align:left;
	padding-top:8px;
}

#lottery .wrapper .lot-wrapper .lottery-card .card-item .title
{
	font-size:16px;
	font-weight:700;
	color:#313133;
	margin-bottom:5px;
	text-align:left;
}

#lottery .wrapper .lot-wrapper .lottery-card .card-item .time
{
	font-size:14px;
	font-weight:700;
	color:#313133;
}

#lottery .wrapper .lot-wrapper .lottery-card .card-item .buy
{
	width:80px;
	height:25px;
	text-align:center;
	line-height:25px;
	font-size:12px;
	margin-top:10px;
	color:#3493ff;
	background:#fff;
	border:1px solid #3493ff;
	border-radius:3px;
	transition:all .5s;
}

#lottery .wrapper .lot-wrapper .lottery-card .card-item .buy:hover
{
	color:#fff;
	background:#3493ff;
}

</style>


    <div class="csjcontent">
     <div id="lottery" class="csj_lottery">
      <div id="content" class="wrapper">
       <div id="page-body">
        <div class="lot-wrapper">
		 <a data="L-24" href="/index.php/index/game/20/27/北京PK拾">
         <div class="lottery-card">
          <img src="/v/static/images/public/bjpk10.png" alt="北京赛车" class="card-img" /> 
          <div class="card-item">
           <p class="title">北京赛车</p> 
           <p class="time">营业时间:09:10~23:50</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 <a data="L-19" href="/index.php/index/game/75/59/193/腾讯分分彩">
         <div class="lottery-card">
          <img src="/v/static/images/public/jsssc.png" alt="QQ分分彩" class="card-img" /> 
          <div class="card-item">
           <p class="title">腾讯分分彩</p> 
           <p class="time">营业时间:00:01~24:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 <a data="L-1" href="/index.php/index/game/1/59/193/重庆时时彩">
         <div class="lottery-card">
          <img src="/v/static/images/public/cqssc.png" alt="重庆时时彩" class="card-img" /> 
          <div class="card-item">
           <p class="title">重庆时时彩</p> 
           <p class="time">营业时间:7:10~3:30</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 <a data="L-23" href="/index.php/index/game/80/27/幸运飞艇">
         <div class="lottery-card">
          <img src="/v/static/images/public/mlaft.png" alt="幸运飞艇" class="card-img" /> 
          <div class="card-item">
           <p class="title">幸运飞艇</p> 
           <p class="time">营业时间: 13:05 ~04:04</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		  <a data="L-23" href="/index.php/index/game/66/27/极速PK拾">
         <div class="lottery-card">
          <img src="/v/static/images/public/jspk10.png" alt="极速赛车" class="card-img" /> 
          <div class="card-item">
           <p class="title">极速赛车</p> 
           <p class="time">营业时间: 00:01~24:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 <a data="L-23" href="/index.php/index/game/65/27/3分PK拾">
         <div class="lottery-card">
          <img src="/v/static/images/public/jspk10.png" alt="3分PK拾" class="card-img" /> 
          <div class="card-item">
           <p class="title">3分PK拾</p> 
           <p class="time">营业时间: 00:01~24:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 
		 <a data="L-23" href="/index.php/index/game/82/27/极速飞艇">
         <div class="lottery-card">
          <img src="/v/static/images/public/jsft.png" alt="极速飞艇" class="card-img" /> 
          <div class="card-item">
           <p class="title">极速飞艇</p> 
           <p class="time">营业时间: 00:01~24:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		  <a data="L-15" href="/index.php/index/game/79/江苏快三">
         <div class="lottery-card">
          <img src="/v/static/images/public/jsk3.png" alt="江苏快三" class="card-img" /> 
          <div class="card-item">
           <p class="title">江苏快三</p> 
           <p class="time">营业时间:08:30~22:50</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 <a data="L-12" href="/index.php/index/game/64/极速快三">
         <div class="lottery-card">
          <img src="/v/static/images/public/jisuk3.png" alt="极速快三" class="card-img" /> 
          <div class="card-item">
           <p class="title">极速快三</p> 
           <p class="time">营业时间: 00:01~24:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 
		  <a data="L-23" href="/index.php/index/game/5/59/193/极速分分彩">
         <div class="lottery-card">
          <img src="/v/static/images/public/jsffc.png" alt="极速分分彩" class="card-img" /> 
          <div class="card-item">
           <p class="title">极速分分彩</p> 
           <p class="time">营业时间: 00:01~24:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 
		 <a data="L-23" href="/index.php/index/game/26/59/193/极速2分彩">
         <div class="lottery-card">
          <img src="/v/static/images/public/js2ffc.png" alt="极速2分彩" class="card-img" /> 
          <div class="card-item">
           <p class="title">极速2分彩</p> 
           <p class="time">营业时间: 00:01~24:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 <a data="L-23" href="/index.php/index/game/14/59/193/极速5分彩">
         <div class="lottery-card">
          <img src="/v/static/images/public/js5ffc.png" alt="极速5分彩" class="card-img" /> 
          <div class="card-item">
           <p class="title">极速5分彩</p> 
           <p class="time">营业时间: 00:01~24:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		
		 <a data="L-5" href="/index.php/index/game/68/极速11选5">
         <div class="lottery-card">
          <img src="/v/static/images/public/jisu11x5.png" alt="极速11选5" class="card-img" /> 
          <div class="card-item">
           <p class="title">极速11选5</p> 
           <p class="time">营业时间: 00:01~24:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 <a data="L-12" href="/index.php/index/game/81/广东快乐10">
         <div class="lottery-card">
          <img src="/v/static/images/public/gdklsf.png" alt="广东快乐十分" class="card-img" /> 
          <div class="card-item">
           <p class="title">广东快乐十分</p> 
           <p class="time">营业时间: 09:0~23:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 <a data="L-12" href="/index.php/index/game/78/北京快乐8">
         <div class="lottery-card">
          <img src="/v/static/images/public/gdklsf.png" alt="北京快乐8" class="card-img" /> 
          <div class="card-item">
           <p class="title">北京快乐8</p> 
           <p class="time">营业时间: 09:00~23:55</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 <a data="L-8" href="/index.php/index/game/6/广东11选5">
         <div class="lottery-card">
          <img src="/v/static/images/public/gd11x5.png" alt="广东11选5" class="card-img" /> 
          <div class="card-item">
           <p class="title">广东11选5</p> 
           <p class="time">营业时间: 09:00~23:50</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
       <a data="L-6" href="/index.php/index/game/12/59/193/新疆时时彩">
         <div class="lottery-card">
          <img src="/v/static/images/public/xjssc.png" alt="新疆时时彩" class="card-img" /> 
          <div class="card-item">
           <p class="title">新疆时时彩</p> 
           <p class="time">营业时间: 10:10~02:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
       <a data="L-6" href="/index.php/index/game/60/59/193/天津时时彩">
         <div class="lottery-card">
          <img src="/v/static/images/public/tjssc.png" alt="天津时时彩" class="card-img" /> 
          <div class="card-item">
           <p class="title">天津时时彩</p> 
           <p class="time">营业时间: 10:10~02:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
       <a data="L-8" href="/index.php/index/game/7/山东11选5">
         <div class="lottery-card">
          <img src="/v/static/images/public/sd11x5.png" alt="山东11选5" class="card-img" /> 
          <div class="card-item">
           <p class="title">山东11选5</p> 
           <p class="time">营业时间: 09:00~23:50</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
        <a data="L-7" href="/index.php/index/game/16/江西11选5">
         <div class="lottery-card">
          <img src="/v/static/images/public/jx11x5.png" alt="江西11选5" class="card-img" /> 
          <div class="card-item">
           <p class="title">江西11选5</p> 
           <p class="time">营业时间: 09:10~23:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
       <a data="L-8" href="/index.php/index/game/15/上海11选5">
         <div class="lottery-card">
          <img src="/v/static/images/public/sh11x5.png" alt="上海11选5" class="card-img" /> 
          <div class="card-item">
           <p class="title">上海11选5</p> 
           <p class="time">营业时间: 09:00~23:50</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		<a href="/index.php/index/game/34/香港六合彩" target="_blank">
		 <div class="lottery-card">
          <img src="/v/static/images/public/hk6.png" alt="香港六合彩" class="card-img" /> 
          <div class="card-item">
           <p class="title">香港六合彩</p> 
           <p class="time">&nbsp;</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 <a data="L-13" href="/index.php/index/game/77/极速六合彩">
         <div class="lottery-card">
          <img src="/v/static/images/public/jisuhk6.png" alt="极速六合彩" class="card-img" /> 
          <div class="card-item">
           <p class="title">极速六合彩</p> 
           <p class="time">营业时间: 00:10~24:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
		 <a data="L-13" href="/index.php/index/game/83/香港跑马">
         <div class="lottery-card">
          <img src="/v/static/images/public/paoma.png" alt="福彩3D" class="card-img" /> 
          <div class="card-item">
           <p class="title">香港跑马</p> 
           <p class="time">营业时间: 00:10~24:00</p> 
           <p class="buy">立即投注</p>
          </div>
         </div>
		 </a>
        </div>

       </div>    </div>

<?php $this->display('inc_che.php'); ?>

 </body>
 </html>