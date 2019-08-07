<?php
   $returnArray = array( // 返回字段
            "memberid" => $_REQUEST["memberid"], // 商户ID
            "orderid" =>  $_REQUEST["orderid"], // 订单号
            "amount" =>  $_REQUEST["amount"], // 交易金额
            "datetime" =>  $_REQUEST["datetime"], // 交易时间
            "transaction_id" =>  $_REQUEST["transaction_id"], // 支付流水号
            "returncode" => $_REQUEST["returncode"],
        );
        $md5key = "b340o76shsu60ur870knnlk6vvr9x2am";
        ksort($returnArray);
        reset($returnArray);
        $md5str = "";
        foreach ($returnArray as $key => $val) {
            $md5str = $md5str . $key . "=" . $val . "&";
        }
        $sign = strtoupper(md5($md5str . "key=" . $md5key));
        if ($sign == $_REQUEST["sign"]) {
            if ($_REQUEST["returncode"] == "00") {
			
			
			
	$dbname = 'cp006-2';
	$dbhost = 'localhost';
	$conf['db']['user'] = 'root';
	$conf['db']['password'] = 'root';
	$conf['db']['charset'] = 'utf8';
	$conn = mysql_connect($dbhost, $conf['db']['user'], $conf['db']['password']);
	
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db('cp006-2',$conn);
	mysql_query("SET NAMES UTF8");
	
	
	$orderId = $_REQUEST["orderid"];
	$amount = $_REQUEST["amount"];


	$chaxun = mysql_query("SELECT username FROM blast_member_recharge where rechargeid = '" . $orderId . "'");
	$username = mysql_result($chaxun, 0);
	$chaxun2 = mysql_query("select actionIP from blast_member_recharge where rechargeid= '" . $orderId . "'");
	$actionIP = mysql_result($chaxun2, 0);
	$chaxun3 = mysql_query("select id from blast_member_recharge where rechargeid= '" . $orderId . "'");
	$id = mysql_result($chaxun3, 0);
	$chaxun4 = mysql_query("select uid from blast_member_recharge where rechargeid= '" . $orderId . "'");
	$uid = mysql_result($chaxun4, 0);
	$chaxun5 = mysql_query("select coin from blast_members where uid= '" . $uid . "'");
	$coin = mysql_result($chaxun5, 0);
	$chaxun6 = mysql_query("select value from blast_params where name='czzs'");
	$czzs = mysql_result($chaxun6, 0);

	if ($czzs) {
		$r3_Amt = $r3_Amt * (1 + number_format($czzs / 100, 2, '.', ''));
	}
	$inserts = "insert into blast_coin_log (uid,type,playedId,coin,userCoin,fcoin,liqType,actionUID,actionTime,actionIP,info,extfield0,extfield1) values ('" . $uid . "',0,0,'" . $payMoney . "','" . $coin . "'+'" . $payMoney . "',0,1,0,UNIX_TIMESTAMP(),'" . $actionIP . "','在线支付自动到账','" . $id . "','" . $uid . "')";
	$update1 = "UPDATE blast_member_recharge SET state = 1 WHERE rechargeid = '" . $orderId . "'";
	$update2 = "UPDATE blast_members SET coin = coin+'" . $amount . "' WHERE username = '" . $username . "'";
	$update3 = "update blast_member_recharge set rechargeTime=UNIX_TIMESTAMP(),rechargeAmount='" . $amount . "',coin='" . $coin . "', info='在线支付自动到账' where rechargeid='" . $orderId . "'";
	$sql = "SELECT * FROM blast_member_recharge where rechargeid = '" . $orderId . "' and state=0";
	$banduan = mysql_query($sql);
	$row2 = mysql_fetch_array($banduan);
	if (mysql_query($update1, $conn)) {
		mysql_query($update2, $conn);
		mysql_query($update3, $conn);
		mysql_query($inserts, $conn);
	}
	
			
			
			
			
                   $str = "交易成功！订单号：".$_REQUEST["orderid"];
                   file_put_contents("success.txt",$str."\n", FILE_APPEND);
				   
				   
				   
				   
                   exit("OK");
            }
        }
?>