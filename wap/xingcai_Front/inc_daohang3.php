<?php $this->display('inc_skin_lr.php'); ?>
<body>
	<div id="body">
		<header class="header">
	<!-- <a href="/index.php"><img class="logo" src="/images/nsc_m/index/logo.png?v=1.16.11.16"></a> -->
	<a class="m-return" onClick="checkbackspace();">返回</a>
	<span class="btn-slide-bar"></span>
	<div class="wercom">欢迎您,<b class="username"> <?=$this->user['username']?></b>
	<a href="/?controller=user&amp;action=main&amp;tag=messages" class="ui_message">
          <!--      <i></i> -->
               <i class="ui_msgnum" style="display:none">0</i>
           </a> </div>
	<!-- <h1 class="page-title">header</h1> -->
</header>
<!--侧导航 -->
		<section class="slide-bar" style="display: none;">
			<ul class="tree">
				<li class="tree_list"><h3 class="one_nav_list home"><a href="/?index.php">首页</a></h3>
					<div class="m_nav_line"></div>
				</li>
				<li class="tree_list">
	                <h3 class="one_nav_list uc_icon_r"><a href="/index.php/safe/Personal">用户中心</a></h3>
	                <div class="m_nav_line"></div>
				</li>
				<li class="tree_box tree_list">
					<h3 class="one_nav_list  game_icon tree_box">彩票游戏<i class="lnstruction-top"></i></h3>
					<ul class="tree_one" style="display:block">
						<li class="lotter_list_game">
						<div class="m_nav_line"></div>
							<dl>
																<dt>高频彩</dt>
								<dd>
							<ul class="lot_list">	
								<li><a href="/index.php/index/game/1/2/12/重庆时时彩">重庆时时彩</a> </li>
								<li><a href="/index.php/index/game/14/59/193/极速5分彩">极速5分彩</a> </li>
                                <li><a href="/index.php/index/game/12/2/12/新疆时时彩">新疆时时彩</a> </li>
								<li><a href="/index.php/index/game/26/59/193/极速2分彩">极速2分彩</a> </li>
                                <li><a href="/index.php/index/game/60/2/12/天津时时彩">天津时时彩</a> </li>
								<!--<li><a href="/index.php/index/game/61/59/193/澳门时时彩">澳门时时彩</a> </li>
								<li><a href="/index.php/index/game/62/59/193/极速时时彩">极速时时彩</a> </li>-->
                                <li><a href="/index.php/index/game/5/59/193/极速分分彩">极速分分彩</a> </li>
                                <!--<dd><a data="L-25" href="/index.php/index/game/76/59/193/极速1.5分彩">极速1.5分彩<span style="margin-left: 10px;" class="new"></span></a> </li>-->
								<!--<li><a href="/index.php/index/game/69/澳门3D">澳门3D</a> </li>-->
								<li><a href="/index.php/index/game/77/极速六合彩">极速六合彩</a> </li>
								<li><a href="/index.php/index/game/75/59/193/腾讯分分彩">腾讯分分彩</a> </li>
								<li><a href="/index.php/index/game/70/极速3D">极速3D</a> </li>
								<li><a href="/index.php/index/game/34/香港六合彩">香港六合彩</a> </li>
										
										<!-- comingsoon();  如果需要禁用用这个函数即可--> 
									</ul>
								</dd>
							</dl>
							<dl>
							<dt>飞艇</dt>
								<dd>
								<ul class="lot_list">
								<li><a href="/index.php/index/game/80/幸运飞艇">幸运飞艇</a> </li>
								<li><a href="/index.php/index/game/82/极速飞艇">极速飞艇</a> </li>
									</ul>
								</dd>
							</dl>
							<dl>
							<dt>PK拾-快乐8</dt>
								<dd>
									<ul class="lot_list">
								<li><a href="/index.php/index/game/78/北京快乐8">北京快乐8</a> </li>
								<li><a href="/index.php/index/game/20/27/北京PK拾">北京PK拾</a> </li>
								<li><a href="/index.php/index/game/73/极速快乐8">极速快乐8</a> </li>
								<!--<dd><a data="L-9" href="/index.php/index/game/74/韩国快乐8">韩国快乐8</a> </li>-->
								<li><a href="/index.php/index/game/66/27/极速PK拾">极速PK拾</a> </li>
								<li><a href="/index.php/index/game/65/27/3分PK拾">3分PK拾</a> </li>
									</ul>
								</dd>
							</dl>
							<dl>
							<dt>快3</dt>
								<dd>
								<ul class="lot_list">
								<li><a href="/index.php/index/game/79/江苏快三">江苏快三</a> </li>
                                <!--<dd><a data="L-11" href="/index.php/index/game/63/澳门快三">澳门快三</a> </li>-->
                                <li><a href="/index.php/index/game/64/极速快三">极速快三</a> </li>
								<!--<li><a href="/index.php/index/game/71/澳门幸运农场">澳门幸运农场</a> </li>-->
								<li><a href="/index.php/index/game/72/极速幸运农场">极速幸运农场</a> </li>
								<li><a href="/index.php/index/game/81/广东快乐10">广东快乐10</a> </li>
									</ul>
								</dd>
							</dl>
							<dl>
							<dt>11选5</dt>
								<dd>
									<ul class="lot_list">
								<li><a href="/index.php/index/game/15/上海11选5">上海11选5</a> </li>
                                <li><a href="/index.php/index/game/6/广东11选5">广东11选5</a> </li>
                                <li><a href="/index.php/index/game/16/江西11选5">江西11选5</a> </li>
                                <li><a href="/index.php/index/game/7/山东11选5">山东11选5</a> </li>
								<!--<dd><a data="L-5" href="/index.php/index/game/67/澳门11选5">澳门11选5</a> </li>-->
								<li><a href="/index.php/index/game/68/极速11选5">极速11选5</a> </li>
									</ul>
								</dd>
							</dl>
							<dl>
								<dt>3D-排列3</dt>
								<dd>
									<ul class="lot_list">
                                <li><a href="/index.php/index/game/9/3D福彩">3D福彩</a> </li>
                                <li><a href="/index.php/index/game/10/排列3">排列3</a> </li>
									</ul>
								</dd>
							</dl>
						</li> 
					</ul>
					<div class="m_nav_line"></div>
				</li>
				
				<li class="tree_box tree_list">
					<h3 class="one_nav_list account_icon">账户管理<i class="lnstruction-top"></i></h3>
					<ul class="tree_one">
						<li class="lotter_list_game">
							<div class="m_nav_line"></div>
								<dl class="lnstruction">
									<dd>
										<ul class="lot_list">
											<li class="tree_list"> <a href="/index.php/record/search">投注记录</a></li>
											<li class="tree_list"> <a href="/index.php/report/coin">帐变记录</a></li>
											<li class="tree_list"> <a href="/index.php/report/count">盈亏报表</a></li>
											<li class="tree_list"><a href="/index.php/safe/info">绑定卡号 </a></li>
											<li class="tree_list"><a href="/index.php/safe/loginpasswd">登入密码</a></li>
											<li class="tree_list"><a href="/index.php/safe/passwd">提款密码</a></li>
											<li class="tree_list"><a href="/index.php/event/index">合买中心</a></li>
											<li class="tree_list"><a href="/index.php/cash/card">卡密充值</a></li>
											<li class="tree_list"><a class="notice" href="/index.php/notice/info">系统公告</a></li>
										</ul>
									</dd>
								</dl>
						</li>
					</ul>
					<div class="m_nav_line"></div>
				</li>
				<?php if($this->user['type']){?>
				<li class="tree_box tree_list">
					<h3 class="one_nav_list team_icon">团队管理<i class="lnstruction-top"></i></h3>
					<ul class="tree_one">
						<li class="lotter_list_game">
								<div class="m_nav_line"></div>
							<dl class="lnstruction">
								<dd>
									<ul class="lot_list">
										<li class="tree_list"><a href="/index.php/team/gameRecord">团队记录</a></li>
										<li class="tree_list"><a href="/index.php/team/coin">团队帐变</a></li>
										<li class="tree_list"><a href="/index.php/team/report">团队盈亏</a></li>
										<li class="tree_list"><a href="/index.php/team/memberList">用户列表</a></li>
										<li class="tree_list"><a href="/index.php/team/addMember">注册管理</a></li>
										<li class="tree_list"><a href="/index.php/team/addlink">推广设定</a></li>
										<li class="tree_list"><a href="/index.php/team/linkList">链接管理</a></li>
										<li class="tree_list"><a href="/index.php/team/coinall">团队统计</a></li>
									</ul>
								</dd>
							</dl>
						</li>
					</ul>
					<div class="m_nav_line"></div>
				</li>
				<?}?>
				<li class="tree_box tree_list">
					<h3 class="one_nav_list account_icon">充值提现<i class="lnstruction-top"></i></h3>
					<ul class="tree_one">
						<li class="lotter_list_game">
							<div class="m_nav_line"></div>
								<dl class="lnstruction">
									<dd>
										<ul class="lot_list">
											<li class="tree_list"> <a href="/index.php/cash/recharge">充值</a></li>
											<li class="tree_list"> <a href="/index.php/cash/toCash">提现</a></li>
											<li class="tree_list"> <a href="/index.php/cash/rechargeLog">充值记录</a></li>
											<li class="tree_list"><a href="/index.php/cash/toCashLog">提现记录 </a></li>
										</ul>
									</dd>
								</dl>
						</li>
					</ul>
					<div class="m_nav_line"></div>
				</li>
				<li class="tree_box tree_list">
					<h3 class="one_nav_list activity_icon">优惠活动<i class="lnstruction-top"></i></h3>
					<ul class="tree_one">
						<li class="lotter_list_game">
							<div class="m_nav_line"></div>
								<dl class="lnstruction">
									<dd>
										<ul class="lot_list">
											<li class="tree_list"><a href="/index.php/event/index">充值福利</a></li>
											<li class="tree_list"><a href="/index.php/score/yongjin">佣金领取</a></li>
											<li class="tree_list"><a href="/index.php/score/dodzyh">投资理财</a></li>
											<li class="tree_list"><a href="/index.php/score/goods/current">积分兑换</a></li>
											<li class="tree_list"><a href="/index.php/score/chuangguan">幸运闯关</a></li>
										</ul>
									</dd>
								</dl>
						</li>
					</ul>
					<div class="m_nav_line"></div>
				</li>			
			</ul>
		</section>
		<div class="home_b">
			<div class="m_nav_line"></div>
				<a href="">首页</a>
				<a class="one_nav_list retreat_icon" href="javascript:m_loginout()">安全退出</a>
		</div>
		<div class="shady"></div>	