<!DOCTYPE html>
<html>
<head>
	<base id="base_path" href="/">
	
	<meta http-equiv=Content-Type content="text/html;charset=utf-8">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport" />
    <meta name=format-detection content="telphone=no" />
    <meta name=apple-mobile-web-app-capable content=yes />
    
    <title><?=$this->settings['webName']. ''?></title>
    
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="uploadimg/wapicon/icon-57.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="uploadimg/wapicon/icon-72.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="uploadimg/wapicon/icon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="uploadimg/wapicon/icon-144.png">
    
    <link rel="stylesheet" href="assets/statics/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/statics/css/global.css" type="text/css">
    
    <script type="text/javascript">
    	if(('standalone' in window.navigator)&&window.navigator.standalone){
	        var noddy,remotes=false;
	        document.addEventListener('click',function(event){
	                noddy=event.target;
	                while(noddy.nodeName!=='A'&&noddy.nodeName!=='HTML') noddy=noddy.parentNode;
	                if('href' in noddy&&noddy.href.indexOf('http')!==-1&&(noddy.href.indexOf(document.location.host)!==-1||remotes)){
	                        event.preventDefault();
	                        document.location.href=noddy.href;
	                }
	        },false);
		}
    </script>
</head>

<style>
	.lot-num-list i.lot, i.lot-blue, .two-ball i {
	    width: 20px;
	    height: 20px;
	    line-height: 20px;
	    text-align: center;
	    display: block;
	    float: left;
	}
	.lot-num-list i.lot, i.lot-blue, .two-ball i {
	    margin: 0px 8px 0 0;
	}
	.lottery-info ul li, .lott-list ul li.list-k3, .lott-list ul li.lott-k3-list {
	    padding: 0;
	}
	
	.lott-list-tit span {
	    padding-left: 10px;
	}
</style>

<body class="login-bg">
	<div class="lot-content">
        <div class="head">
            <div class="headerTop">
                <div class="toolbar-left">
                    <button id="reveal-left2" onClick=""></button>
                </div>
                <h1 class="betting-title" style="top:0px;">
                    <div class="bett-top-box" style="font-size:16px"><?=$args[0]['title']?></div>
                </h1>
                <div class="ui-bett-right">
	                <a class="bett-head" href="javascript:;"></a>
	            </div>
            </div>
            
            <div class="beet-rig" style="display: none;right: 5px;width: 70px; height: 120px; background-size: 70px 120px;">
			    <ul>
			    	<li><a class="draw-head" data-id="0" href="javascript:;">今天</a></li>
			    	<li><a class="draw-head" data-id="-1" href="javascript:;">昨天</a></li>
			    	<li><a class="draw-head" data-id="-2" href="javascript:;">前天</a></li>
			    </ul>
			</div>
            
            <div class="bet-tips" style="display: none;">
            </div>
        </div>
    </div>
    
    <div id="wrapper_2" class="scorllmain-content top_bar bottom_bar">
        <div class="sub_ScorllCont">
            <div class="lott-list">
                <ul id="draw_list">
                    <li class="list-k3">
                        <div class="lott-list-tit">
                            <div class="two-ball" style="text-align: center;">
                                正在加载...
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="gameId" value="<?=$args[0]['id']?>" />
    
    

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

    
    <script src="assets/js/require.js"></script>
    <script src="assets/js/require.config.js"></script>
    <script type="text/javascript">
	    requirejs(["jquery", "layer", "common"], function($,layer) {
	    	$(".draw-head").on("click", function() {
	    		$(".beet-rig").hide();
	    		getDrawList($(this).data('id'));
	        });
	    	
	        $("#reveal-left2").on("click", function(e) {
	    		if(/common\/hall/g.test(document.referrer)
	    				|| /lotteryDraw/g.test(document.referrer)) {
	    			history.go(-1);
	    		} else {
	    			location.href='index.php/lottery/draw';
	    		}
	        });
	        
	        getDrawList(0);
	        function getDrawList(dayType) {
	        	var index = layer.open({
		            type: 2,
		            shadeClose: false
		        });
	        	
	        	$.ajax({
		            url: 'index.php/lottery/getDrawLists',
		            type: 'POST',
		            dataType: 'json',
		            data: {
		                'gameId': $('#gameId').val(),
		                'dayType': dayType
		            },
		            timeout: 30000,
		            success: function(results) {
		                layer.close(index);
		                if (results.status == "200") {
		                    var data = results.data;
		                    var txtHtml = '';
		                    var ksgame = ',10,11,16,17,';
		                    var txtOpen = '正在开奖';
		                    for(var i = 0; i < data.length; i++) {
		                        var numArr = data[i].data;
		                        numArr = (numArr != undefined && numArr != '') ? numArr.split(',') : [];
		                        var numHtml = '';
		                        var tmpHtml = '';
		                        
		                        var total = 0;
	                            numHtml = '<div class="two-ball">';
	                            numHtml += '<span style="float:left;">'+data[i].number + '期:</span>';
	                            for(var j = 0; j < numArr.length; j++) {
	                            	total += parseInt(numArr[j]);
	                                tmpHtml += '<i>' + numArr[j] + '</i>';
	                            }
	                            
	                            if(tmpHtml == '') {
	                                tmpHtml = txtOpen + '<br>';
	                                txtOpen = '';
	                            } else {
	                            	var num1 = parseInt(numArr[0]);
			                        var num5 = parseInt(numArr[4]);
	                            	tmpHtml += '<span style="padding-left: 0px;">'+(total>=23?'总:大':'总:小') +'</span>';
		                            tmpHtml += '<span style="padding-left: 0px;">'+(total%2==0?'双':'单') +'</span>';
		                            tmpHtml += '<span style="padding-left: 0px;">'+(num1>num5?'龙':(num1<num5?'虎':'和')) +'</span>';
	                            }
	                            numHtml += tmpHtml + '</div>';
		
		                        txtHtml += '<li class="list-k3" style="padding-left:5px;padding-bottom:2px;">' + '<div class="lott-list-tit">' + numHtml + '</div>' + '</li>';
		                    }
		                    txtHtml = '<span>'+results.time + '开奖：</span>' + txtHtml;
		                    
		                    $('ul#draw_list').html(txtHtml);
		                }else{
                            $('.two-ball').html(results.msg)
                        }
		            }
		        });
	        }
	    });
    </script>
</body>

</html>