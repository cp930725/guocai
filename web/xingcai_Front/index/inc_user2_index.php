  <link rel="stylesheet" href="/css/layui/css/layui.css"  media="all">
<link href="/css/nsc/reset.css" rel="stylesheet" type="text/css" />
<link href="/css/nsc/warp.css" rel="stylesheet" type="text/css" />
<link href="/css/nsc/foot2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/login_files/global2.css">
    <script type="text/javascript" src="/login_files/global.js"></script>
    <script type="text/javascript" src="/login_files/jquery_json.js"></script>
    <script src="/login_files/EM.tools.js" type="text/javascript"></script>
    <!-- 容器 start -->
    <div class="sc-container">

<!-- 头部 start -->
<div class="sc-header">
   <div class="header-top">
        <div class="sc-layout">
            <div class="latest-notice" style="cursor:pointer;" >            
                <i class="icon icon-horn"></i>
                <div class="notice-content">
                    <div class="marquee-holder">
                        <div id="newsTop1" class="marquee"><marquee style="width:600px"><?=$this->settings['webGG']?></marquee></div>
                    </div>
                </div>
            </div>
            <div class="top-nav">
                <a href="javascript:void(0)" onClick="zxkf();"  target="_blank"><i class="icon icon-os"></i>在线客服</a> 
				<a href="/index.php/down/app" target="_blank"><i class="icon icon-cd"></i>客户端下载</a>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="sc-layout">
            <div class="sc-logo">
                <a href="/"><img src="/images/logo.png"></a>
            </div>
            <!-- 登录前 start -->
            <div id="login" class="top-login" style="display: none;">
                <form action="" method="post">
                <input id="txtUserName" type="text" value="" class="ipt" placeholder="账号">
                <input id="txtUserPass" type="password" value="" class="ipt" placeholder="密码">
                <input id="txtUserCode" type="text" value="" maxlength="4" class="ipt code" placeholder="验证码">
                <img id="imgCode" onClick="_jcms_GetRefreshCode(&#39;imgCode&#39;);" src="/login_files/getcode.aspx" alt="" class="code-pic">
                <input type="button" value="登录" onClick="ajaxLogin()" class="btn btn-login">
                <input type="hidden" id="txtRefer" name="txtRefer" value="1">
                <input type="hidden" id="txtLoginType" name="txtLoginType" value="7">
                </form>
            </div>
            <!-- 登录前 end -->
            <!-- 登录后 start -->
            <div id="Info" class="top-logged" style="display: block;">
                <div class="tl-line tl-top">
                    <span class="tu-menu" style="color:#666">您好，</span><span id="username" class="username"><?=$this->user['username']?></span><span class="sep">
                        </span>
                       
                       
                    <div class="tu-menu">
                       <a href="/index.php/box/receive">消息中心</a> <span class="sep"></span>
                        <a href="/index.php/safe/info">我的账户</a> <span class="sep"></span>
                        <a href="/index.php/record/search">投注记录</a> <span class="sep"></span>
                        <?php if($this->user['type']){ ?><a href="/index.php/team/coinall">代理中心</a> <span class="sep"></span><?php } ?>
                        <!--<a href="/index.php/score/rotate">热门活动</a>-->
                    </div>
                    <a href="javascript:loginout()"  class="exit">[退出]</a>
                </div>
                <div class="tl-line tl-btm">
                    <div class="mybalance">余额:<span id="refff" style="color:#CC2929"><?=$this->user['coin']?></span><a href="javascript:void(0);" onClick="reloadMemberInfo()" id="refreshmoney" class="refresh"><i class="icon icon-refresh"></i></a>
                    </div>
                    <div class="tu-quick">
                        <a  href="javascript:void(0);" onClick="czpay();"><i class="icon icon-ar"></i>充值</a> <a href="javascript:void(0);" onClick="topay();">
                            <i class="icon icon-aw"></i>提现</a> <a href="javascript:void(0)" onClick="emAlert(&#39;该区暂未开放，敬请期待！&#39;);"><i class="icon icon-at">
                            </i>资金转换</a>
                    </div>
                </div>
            </div>
            <!-- 登录后 end -->
        </div>
    </div>
</div>
<!-- 导航 start -->
<div class="sc-nav">
    <div class="sc-layout sc_ylnav">
        <a id="id1"  href="/" class="current"><i class="icon icon-home"></i>首页</a>
		<a href="/index.php/lottery/index" ><i class="icon icon-lot"></i>彩票中心</a> 
		<a href="javascript:void(0)"onclick="emAlert(&#39;该区暂未开放，敬请期待！&#39;);"><i class="icon icon-live"></i>真人娱乐</a> 
		<a href="javascript:void(0)"onclick="emAlert(&#39;该区暂未开放，敬请期待！&#39;);"><i class="icon icon-game"></i>电子游艺</a>  
		<a href="javascript:void(0)"onclick="emAlert(&#39;该区暂未开放，敬请期待！&#39;);"><i class="icon icon-sport"></i>体育赛事</a> 
		<?php if($this->user['type']){ ?><a href="/index.php/team/coinall"><i class="icon icon-poker"></i>代理中心</a><?php } ?> 
		<a href="/index.php/score/rotate"><i class="icon icon-gift"></i>热门活动</a> 
		<a class="notice" href="javascript:void(0)" url="/index.php/notice/info"><i class="icon icon-prom"></i>系统公告</a>
		<a id="id9" href="javascript:void(0)" nmb="/ylser"><i class="icon icon-vip"></i>服务条款</a>
    </div>
    
</div>

