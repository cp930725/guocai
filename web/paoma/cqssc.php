<?php
date_default_timezone_set('PRC');
header('content-type:text/xml;charset=utf8');

$api = 'https://39100.com/Lot/GetLotteryData_DB?rd=0.8557009990832085&p_id=16&code=cqssc';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5000);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 8_0 like Mac OS X) AppleWebKit/600.1.3 (KHTML, like Gecko) Version/8.0 Mobile/12A4345d Safari/600.1.4'));
        curl_setopt($ch, CURLOPT_URL, $api);
        curl_setopt ($ch,CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $con = curl_exec($ch);
        curl_close($ch);//关闭一打开的会话
		
		
$data=json_decode($con,1);
$expect = $data['Expect'];
$opencode = $data['Opencode'];
$opentime = time();
$opentime=date("Y-m-d H:i",$opentime).":00";

echo '<xml>
<row expect="'.$expect.'" opencode="'.$opencode.'" opentime="'.$opentime.'"/>
</xml>';

?>
