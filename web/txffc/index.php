<?php
date_default_timezone_set('PRC');
header('content-type:text/xml;charset=utf8');

$api = 'http://77tj.org/api/tencent/onlineim';

$data = file_get_contents($api);
$array = json_decode($data,true);

$key =0;
    $expect= $key;
    $opencode =$array[$key]['onlinenumber'];
    $opentime=$array[$key]['onlinetime'];	



$opencode=implode(',',str_split( $opencode));

$fx_hm=explode(',',$opencode);

$opencode2_1=$fx_hm[0]+$fx_hm[1]+$fx_hm[2]+$fx_hm[3]+$fx_hm[4]+$fx_hm[5]+$fx_hm[6]+$fx_hm[7]+$fx_hm[8];
$opencode2_1=substr($opencode2_1,-1);

$opencode2=$opencode2_1.','.$fx_hm[5].','.$fx_hm[6].','.$fx_hm[7].','.$fx_hm[8];


$expect=floor((strtotime($opentime)-strtotime(date("Y-m-d",time())))/60);
$expect=sprintf("%04d",$expect);
 
echo '<xml>
<row expect="'.date("Ymd").'-'.$expect.'" opencode="'.$opencode2.'" opentime="'.$opentime.'"/>
</xml>';

?>
