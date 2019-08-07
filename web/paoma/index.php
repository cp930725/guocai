<?php
date_default_timezone_set('PRC');
header('content-type:text/xml;charset=utf8');

$api = 'https://39100.com/Lot/GetLotteryData_DB?rd=0.2279115781124048&p_id=1892&code=paoma';

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
$opencode = "+,".$data['Opencode'];
$opentime = time();
$opentime=date("Y-m-d H:i:s",$opentime);

$expect=str_replace('2019','19',$expect);

$opencode=str_replace(',',',0',$opencode);
$opencode=str_replace(',00',',0',$opencode);
$opencode=str_replace(',010',',10',$opencode);
$opencode=str_replace('+,','',$opencode);
echo '<xml>
<row expect="'.$expect.'" opencode="'.$opencode.'" opentime="'.$opentime.'"/>
</xml>';

?>
