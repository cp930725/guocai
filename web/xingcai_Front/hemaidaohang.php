<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $this->display('inc_skin.php'); ?>
<meta name="keywords" content="" />
<meta nam ="description" content="" />
<meta name="renderer" content="webkit">
<link rel="stylesheet" href="/css/nsc/home/reset.css?v=1.16.11.5">
<link rel="stylesheet" href="/css/nsc/home/theme.css?v=1.16.11.5">
<link href="/css/nsc/plugin/dialogUI/dialogUI.css?v=1.16.11.5" media="all" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/js/nsc/dialogUI/jquery.dialogUI.js?v=1.16.11.5"></script>

<meta name="renderer" content="webkit">
</head>
    <body>

<div id="v-dalog" class="v-dalog">
	<div class="v-bg"></div>
	<span class="v-cn">近期开放，敬请期待
	</span>
</div>

<script type="text/javascript">
$(document).ready(function(){
    //没有开放导航弹窗提示
    var NoDagin = true;
    $(".v-NoDagin").click(function(){
   		if(NoDagin){
	    	NoDagin = false;
	    	$("#v-dalog").fadeIn(200,function(){
	    	}).delay(2000).fadeOut(200,function(){
	    		NoDagin = true;
	    	});
    	}
    });
 
});
</script>