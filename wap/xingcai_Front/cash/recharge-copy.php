<!--//复制程序 flash+js------end-->
<link rel="stylesheet" href="/css/nsc/chong-list.css?v=1.16.11.5" />
<?php
$this->freshSession();
$mBankId=$args[0]['mBankId'];
$sql="select mb.*, b.name bankName, b.logo bankLogo, b.home bankHome from {$this->prename}sysadmin_bank mb, {$this->prename}bank_list b where b.isDelete=0 and mb.id=$mBankId and mb.bankId=b.id";
$memberBank=$this->getRow($sql);
if($memberBank['bankId']==12){
?>
<!--左边栏body-->
<script type="text/javascript">
function test() {
           
			window.open("<?=$this->getCurl($args[0]['rechargeId'],$args[0]['amount']); ?>");
            mDaoJiShi();
}
        //截止倒计时
        function mDaoJiShi() {
            document.getElementById("addmenber").value = "已提交";
            document.getElementById("addmenber").readOnly = true;
            document.getElementById("addmenber").disabled = true;
        }
</script>
<!--    <script language="javascript">-->
<!--      document.getElementById("frm1").submit();-->
<!--    </script>-->
         

<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr class='table_b_th'>

    </tr>
     <tr height=25 class='table_b_tr_b'>
     
      <th scope="col" style="background: #FFFFFF;color: #888;font-size: 15px;border-bottom: 1px dashed #ddd;width: 50%;height: 50px;text-indent: 16px;">充值金额：<?=$args[0]['amount']?></th>
      <th scope="col" style="background: #fff;height:50%;color: #888;border-bottom: 1px dashed #ddd;font-size: 15px;">充值编号 ：<?=$args[0]['rechargeId']?></th>
   
    </tr>
	<tr height=25 class='table_b_tr_h'>
    <td colspan="2" align="right" class="copyss">
	<div id="subContent_bet_re">
	<div class="form_switch_main">
	  <form action="<?=$this->getCurl($args[0]['rechargeId'],$args[0]['amount']); ?>" method="POST" name="a32" target="_blank" id="frm1">
	  
	   
	        <!--td width="72" height="40" valign="middle"-->
			<div class="form_switch_head">
			<div class="form_item clearfix">
	        <div class="switch_choose">
			<input type="radio" name="rbPayMType" id="utype1" value="10001" checked="checked" title="工商银行">
			<label class="bk_l active1" for="utype1">星火支付</label>
			</div>
	</div>
			<div class="form_submit_box">
	<input class="button" id="addmenber" onclick="test()" type="submit" value="进入支付">
	<div class="form_submit_box1">
	<input class="button1" type="reset" onclick="window.location.reload();" value="返回">
	<input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
	<input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
	<input name="Bankco" type="hidden" value="1" />
	<input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
	<p id="linkTip" style="color:#f00; margin-top:5px; position:absolute; top:100px;">*注意：在线充值付款成功后，请等待30s后再关闭充值的窗口，以防资金不到账。若付款后未到账，请联系客服。</p>
</div>
</div>
</form>
</div>

<script type="text/javascript">
		//radio选择样式
        $(".switch_choose input[type=radio]").click(function(){
	        if($(".switch_choose input[type=radio]:checked").val()){
	       		$(this).next('label').addClass('active1').siblings().removeClass('active1');
	       	}
        })
</script>
 <!--左边栏body结束-----------------------支付宝------------------------------------------------------------->
<?
}else if($memberBank['bankId']==2){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
</style>
 <table width="100%" height="55" align="center">
                  <tr>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">1.选择银行并输入金额</th>
                  <th scope="col" style="background: #f5f5f5;height:55px;color: #35aaff;font-size: 15px;border:1px solid #e9e9e9">2.确认充值信息</th>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">3.完成充值</th>

                  </tr>
                  </table>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr height=25 class='table_b_tr_b' >
    
	<th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值类型：<img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" /></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值金额：<?=$args[0]['amount']?></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值编号：<?=$args[0]['rechargeId']?></th>
    </tr>
	<table width="100%" border="0" cellspacing="1" cellpadding="4" class="table_b">    
	<tbody><tr height="25" class="table_b_tr_h">
    <td colspan="2" align="center" class="copyss">
	<form action="/koudai/getway.php" method="post" name="a" target="_blank" > 
	<input name="submit" type="submit" style="margin-top: 50px;" class="button" value="确认支付">
    <input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
    <input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
    <input name="Bankco" type="hidden" value="2" />
    <input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />

    </tr>
    </table>
</form>
</td>
</tr>
</table>
 <!--左边栏body结束-------------------------------------------支付宝结束--------------------------------------------------------->
 
 <!---------------------------------------------财付通--------------------------------------------------------->
<? }else if($memberBank['bankId']==3){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
</style>
 <table width="100%" height="55" align="center">
                  <tr>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">1.选择银行并输入金额</th>
                  <th scope="col" style="background: #f5f5f5;height:55px;color: #35aaff;font-size: 15px;border:1px solid #e9e9e9">2.确认充值信息</th>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">3.完成充值</th>

                  </tr>
                  </table>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr height=25 class='table_b_tr_b' >
    
	<th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值类型：<img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" /></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值金额：<?=$args[0]['amount']?></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值编号：<?=$args[0]['rechargeId']?></th>
    </tr>
	<table width="100%" border="0" cellspacing="1" cellpadding="4" class="table_b">    
	<tbody><tr height="25" class="table_b_tr_h">
    <td colspan="2" align="center" class="copyss">
	<form action="/koudai/getway.php" method="post" name="a" target="_blank" > 
	<input name="submit" type="submit" style="margin-top: 50px;" class="button" value="确认支付">
    <input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
    <input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
    <input name="Bankco" type="hidden" value="3" />
    <input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
    </tr>
    </table>
</form>
</td>
</tr>
</table>
 <!---------------------------------------------财付通结束--------------------------------------------------------->
 <!---------------------------------------------支付宝手动支付--------------------------------------------------------->
 <? }else if($memberBank['bankId']==22){
?>
<style type="text/css">
	img{
		width: 100%;
	}
</style>
<div class="Contentbox">
		<div class="p_con" id="playinfo_0">
<h2>充值类型：<?=$memberBank['bankName']?></h2>
<h2>收款户名：<?=$memberBank["username"]?></h2>
<h2>收款账号：<?=$memberBank["account"]?></h2>
<h2>充值金额：<?=$args[0]['amount']?></h2>
<h2>充值编号：<?=$args[0]['rechargeId']?></h2>
<p>长按以下二维码保存图片进入支付宝扫一扫充值<br>
<br>
&nbsp;<img src="//qr.api.cli.im/qr?data=http%253A%252F%252Fbaidu.com&amp;level=H&amp;transparent=false&amp;bgcolor=%23ffffff&amp;forecolor=%23000000&amp;blockpixel=12&amp;marginblock=1&amp;logourl=&amp;size=280&amp;kid=cliim&amp;key=d44c420220c50c0a9fbbb91ddb1a769e" alt=""></p>

<p>1.每次"充值编号"均不相同,务必将"充值编号"正确复制填写到引号汇款页面的"说明"栏目中;<br>
2.帐号不固定，转帐前请仔细核对该帐号;<br>
3.充值金额与转账金额不符，充值将无法到账;<br>
4.转账后如10分钟未到账，请联系客服，告知您的充值编号和您的充值金额。<br>
5.支付宝，微信，财付通，手动充值可忽略以上几点。</p>
</div>
</div>
<!---------------------------------------------微信手动支付--------------------------------------------------------->
 <? }else if($memberBank['bankId']==21){
?>
<style type="text/css">
	img{
		width: 100%;
	}
</style>
<div class="Contentbox">
		<div class="p_con" id="playinfo_0">
<h2>充值类型：<?=$memberBank['bankName']?></h2>
<h2>收款户名：<?=$memberBank["username"]?></h2>
<h2>收款账号：<?=$memberBank["account"]?></h2>
<h2>充值金额：<?=$args[0]['amount']?></h2>
<h2>充值编号：<?=$args[0]['rechargeId']?></h2>
<p>长按以下二维码保存图片进入微信扫一扫充值<br>
<br>
&nbsp;<img src="//qr.api.cli.im/qr?data=http%253A%252F%252Fbaidu.com&amp;level=H&amp;transparent=false&amp;bgcolor=%23ffffff&amp;forecolor=%23000000&amp;blockpixel=12&amp;marginblock=1&amp;logourl=&amp;size=280&amp;kid=cliim&amp;key=d44c420220c50c0a9fbbb91ddb1a769e" alt=""></p>

<p>1.每次"充值编号"均不相同,务必将"充值编号"正确复制填写到引号汇款页面的"说明"栏目中;<br>
2.帐号不固定，转帐前请仔细核对该帐号;<br>
3.充值金额与转账金额不符，充值将无法到账;<br>
4.转账后如10分钟未到账，请联系客服，告知您的充值编号和您的充值金额。<br>
5.支付宝，微信，财付通，手动充值可忽略以上几点。</p>
</div>
</div>

  <!---------------------------------------------微信支付--------------------------------------------------------->
<? }else if($memberBank['bankId']==20){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
</style>
 <table width="100%" height="55" align="center">
                  <tr>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">1.选择银行并输入金额</th>
                  <th scope="col" style="background: #f5f5f5;height:55px;color: #35aaff;font-size: 15px;border:1px solid #e9e9e9">2.确认充值信息</th>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">3.完成充值</th>

                  </tr>
                  </table>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr height=25 class='table_b_tr_b' >
    
	<th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值类型：<img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" /></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值金额：<?=$args[0]['amount']?></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值编号：<?=$args[0]['rechargeId']?></th>
    </tr>
	<table width="100%" border="0" cellspacing="1" cellpadding="4" class="table_b">    
	<tbody><tr height="25" class="table_b_tr_h">
    <td colspan="2" align="center" class="copyss">
	<form action="/koudai/getway.php" method="post" name="a" target="_blank" >
	<input name="submit" type="submit" style="margin-top: 50px;" class="button" value="确认支付">	
    <input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
    <input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
    <input name="Bankco" type="hidden" value="21" />
    <input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
    </tr>
    </table>
</form>
</td>
</tr>
</table>
 <!---------------------------------------------微信支付结束--------------------------------------------------------->
 
 
 
<? }else{
?>
<!--左边栏body-->
 <table width="100%" height="55" align="center">
                  <tr>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">1.选择银行并输入金额</th>
                  <th scope="col" style="background: #f5f5f5;height:55px;color: #35aaff;font-size: 15px;border:1px solid #e9e9e9">2.确认充值信息</th>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">3.完成充值</th>

                  </tr>
                  </table>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr class='table_b_th'>
      <td align="left" style="font-weight:bold;padding-left:10px;" colspan=2>充值信息</td> 
    </tr>
    
    <tr height=25 class='table_b_tr_b' >
      <td align="right" class="copys">充值银行：</td>
      <td align="left" ><img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" />
            <a id="bank-link" target="_blank" href="<?=$memberBank['bankHome']?>" class="spn11" style="margin-left:50px;">进入银行网站>></a>
      </td> 
    </tr>
	<tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys">收款户名：</td>
      <td align="left" ><input id="bank-username" readonly value="<?=$memberBank["username"]?>" />
	  <div class="btn-a copy" for="bank-username">
	  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="62" height="23" id="copy-bankuser" align="top">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="/skin/js/copy.swf?movieID=copy-bankuser&inputID=bank-username" />
                <param name="quality" value="high" />
				<param name="wmode" value="transparent">
                <param name="bgcolor" value="#ffffff" />
                <param name="scale" value="noscale" /><!-- FLASH原始像素显示-->
                <embed src="/skin/js/copy.swf?movieID=copy-bankuser&inputID=bank-username" width="62" height="23" name="copy-bankuser" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object> 
	  </div></td> 
    </tr>
    <tr height=25 class='table_b_tr_b' >
      <td align="right" class="copys" >收款账号：</td>
      <td align="left" ><input id="bank-account" readonly value="<?=$memberBank["account"]?>" />
	  <div class="btn-a copy" for="bank-account">
	  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="62" height="23" id="copy-account" align="top">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="/skin/js/copy.swf?movieID=copy-account&inputID=bank-account" />
                <param name="quality" value="high" />
				<param name="wmode" value="transparent">
                <param name="bgcolor" value="#ffffff" />
                <param name="scale" value="noscale" /><!-- FLASH原始像素显示-->
                <embed src="/skin/js/copy.swf?movieID=copy-account&inputID=bank-account" width="62" height="23" name="copy-account" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object>
		</div>
	  </td> 
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys">充值金额：</td>
      <td align="left" ><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" />
      <div class="btn-a copy" for="recharg-amount"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="62" height="23" id="copy-recharg" align="top">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="/skin/js/copy.swf?movieID=copy-recharg&inputID=recharg-amount" />
                <param name="quality" value="high" />
				<param name="wmode" value="transparent">
                <param name="bgcolor" value="#ffffff" />
                <param name="scale" value="noscale" /><!-- FLASH原始像素显示-->
                <embed src="/skin/js/copy.swf?movieID=copy-recharg&inputID=recharg-amount" width="62" height="23" name="copy-recharg" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object>
	 </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div class="spn12" style="display:inline;">*网银充值金额必须与网站填写金额一致方能到账！</div>
      </td>
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys">充值编号：</td>
      <td align="left"><input id="username" readonly value="<?=$args[0]['rechargeId']?>" />
         <div class="btn-a copy" for="username">
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="62" height="23" id="copy-username" align="top">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="/skin/js/copy.swf?movieID=copy-username&inputID=username" />
                <param name="quality" value="high" />
				<param name="wmode" value="transparent">
                <param name="bgcolor" value="#ffffff" />
                <param name="scale" value="noscale" /><!-- FLASH原始像素显示-->
                <embed src="/skin/js/copy.swf?movieID=copy-username&inputID=username" width="62" height="23" name="copy-username" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object> 
        </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div class="spn12"  style="display:inline;">*网银充值请务必将此编号填写到汇款“附言”里，每个充值编号仅用于一笔充值，重复使用将不能到账！</div>
	   </td> 
    </tr>
<!--左边栏body结束-->
<?php if($memberBank["rechargeDemo"]){?>
   <tr height=25 class='table_b_tr_b'>
      <td align="right" style="font-weight:bold;"></td>
      <td align="left" > <div class="example">充值图示：<div class="example2" rel="<?=$memberBank["rechargeDemo"]?>">查看</div></div></td> 
  </tr>
<? }?>
<tr>
<div class="tips">
	<dl>
        <dt>充值说明：</dt>
        <dd>1.每次"充值编号"均不相同,务必将"充值编号"正确复制填写到引号汇款页面的"附言"栏目中;</dd>
        <dd>2.帐号不固定，转帐前请仔细核对该帐号;</dd>
        <dd>3.充值金额与网友转账金额不符，充值将无法到账;</dd>
        <dd>4.转账后如10分钟未到账，请联系客服，告知您的充值编号和您的充值金额及你的银行用户姓名。</dd>
    </dl>
</div>
</tr>
</table> 
<?php }?>