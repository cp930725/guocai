<?php
$link=mysqli_connect('localhost','root','root','cp006-2');
mysqli_query($link,'set names utf8');

if(mysqli_connect_errno())
{
    echo mysqli_connect_error();
}

$type=$_GET['type'];


$sqlfx="select * from blast_data_time where type=$type order by id asc";
$resuse= mysqli_query($link,$sqlfx);
if(mysqli_num_rows($resuse)>0){ 

while($row = mysqli_fetch_array($resuse))
  {

$id=$row['id'];

$dateString=date('Y-m-d ');

if($type==1){
	$actionNo=date('Ymd-', strtotime($row['actionTime'])).substr($row['actionNo']+1000,1);
	if($row['actionNo']==120) $actionNo=date('Ymd-', strtotime($row['actionTime'])-24*3600).substr($row['actionNo']+1000,1);
}else if($type==12){//新疆时时彩
	$actionNo=date('Ymd-', strtotime($row['actionTime'])).substr($row['actionNo']+100,1);
}else if($type==60){//天津时时彩
	$actionNo=date('ymd', strtotime($row['actionTime'])).substr($row['actionNo']+1000,1);
}else if($type==61 || $type==62 || $type==76){//系统时时彩
	$actionNo=date('Ymd-', strtotime($row['actionTime'])).substr($row['actionNo']+1000,1);
	

}else if($type==88){//系统时时彩
	$actionNo=date('Ymd', strtotime($row['actionTime'])).substr($row['actionNo']+1000,1);
	

}else if($type==25){
	$actionNo=date('md', strtotime($row['actionTime'])).substr($row['actionNo']+100,1);
	
}else if($type==5 || $type==75 ){//分分彩
	$actionNo=date('Ymd-', strtotime($row['actionTime'])).substr($row['actionNo']+10000,1);	
}else if($type==14 || $type==26){//2分彩 5分彩
	$actionNo=date('Ymd-', strtotime($row['actionTime'])).substr($row['actionNo']+1000,1);

}else if($type==6){//广东11选5
	$actionNo=date('ymd', strtotime($row['actionTime'])).substr($row['actionNo']+100,1);
}else if($type==7){//山东11选5
	$actionNo=date('ymd', strtotime($row['actionTime'])).substr($row['actionNo']+100,1);	
}else if($type==15){//上海11选5
	$actionNo=date('ymd', strtotime($row['actionTime'])).substr($row['actionNo']+100,1);	
}else if($type==16){//江西11选5
	$actionNo=date('Ymd-', strtotime($row['actionTime'])).substr($row['actionNo']+100,1);
}else if($type==67 || $type==68){//系统11选5
	$actionNo=date('Ymd-', strtotime($row['actionTime'])).substr($row['actionNo']+1000,1);

}else if($type==9 || $type==10){// 福彩3D 排列3
	$actionNo=date('Yz', $this->time)-7;
	$actionNo=substr($actionNo,0,4).substr(substr($actionNo,4)+1000,1);

}else if($type==79){//江苏快3
	$actionNo=date('Ymd', strtotime($row['actionTime'])).substr($row['actionNo']+100,1);
}else if($type==63 || $type==64){//系统快3
	$actionNo=date('Ymd-', strtotime($row['actionTime'])).substr($row['actionNo']+1000,1);
	
}else if($type==20){//北京PK10
	$actionNo = 44*(strtotime(date('Y-m-d', strtotime($row['actionTime'])))-strtotime('2019-02-11'))/3600/24+$row['actionNo']+729391;
}else if($type==66){//台湾PK10
	$actionNo = 288*(strtotime(date('Y-m-d', strtotime($row['actionTime'])))-strtotime('2007-11-11'))/3600/24+$row['actionNo']-4321;	
}else if($type==65){//澳门PK10
	$actionNo = 288*(strtotime(date('Y-m-d', strtotime($row['actionTime'])))-strtotime('2007-11-11'))/3600/24+$row['actionNo']-6789;	
}else if($type==82){//极速飞艇
	$actionNo = 1152*(strtotime(date('Y-m-d', strtotime($row['actionTime'])))-strtotime('2017-11-11'))/3600/24+$row['actionNo']-4321;
	
}else if($type==78){//北京快乐8
	$actionNo = 44*(strtotime(date('Y-m-d', strtotime($row['actionTime'])))-strtotime('2019-02-11'))/3600/24+$row['actionNo']+935387;	
}else if($type==73){//澳门快乐8
	$actionNo = 288*(strtotime(date('Y-m-d', strtotime($row['actionTime'])))-strtotime('2004-09-19'))/3600/24+$row['actionNo']-1234;	
}else if($type==74){//韩国快乐8
	$actionNo = 288*(strtotime(date('Y-m-d', strtotime($row['actionTime'])))-strtotime('2004-09-19'))/3600/24+$row['actionNo']-4567;	
	
}else if($type==71 || $type==72){//系统快乐十分
	$actionNo=date('ymd', strtotime($row['actionTime'])).substr($row['actionNo']+1000,1);
	
}else if($type==77){//系统六合彩
	$actionNo=date('Ymd-', strtotime($row['actionTime'])).substr($row['actionNo']+1000,1);
}


$actionTime=$dateString.$row['actionTime'];
$st_actionTime=strtotime($actionTime);




$id1=array('1','5','12','14','26','60','61','62','75','76','80');//SSC

$id2=array('64'); //K3

$id3=array('68');//11x5

$id4=array('70');//3D

$id5=array('65','66');//PK10

$id6=array('72');//KLSF

$id7=array('77');//jslhc

if(in_array($type,$id1)){
$opencode =randKeys1(5);
}

if(in_array($type,$id2)){
$opencode =randKeys2(3);
}

if(in_array($type,$id3)){
$opencode =randKeys3(5);
}

if(in_array($type,$id4)){
$opencode =randKeys4(3);
}

if(in_array($type,$id5)){
$opencode =randKeys5(10);
}

if(in_array($type,$id6)){
$opencode =randKeys6(8);
}

if(in_array($type,$id7)){
$opencode =randKeys7(7);
}


if($st_actionTime>=time()){

$sqlys="select * from blast_data_admin where type=$type and number= '".$actionNo."' limit 1";
$resuseys= mysqli_query($link,$sqlys);
if(mysqli_num_rows($resuseys)==0){ 
mysqli_query($link,"insert into blast_data_admin (type,time,number,data) VALUES($type,$st_actionTime,'$actionNo','$opencode')"); //执行添加记
echo $actionNo;
echo "++++++"; 
echo $actionTime;
echo "++++++"; 
echo $opencode;
echo "<br>"; 

}else{

$roww = mysqli_fetch_array($resuseys);
$idd=$roww['id'];

mysqli_query($link,"update blast_data_admin set data='".$opencode."'  where id=$idd"); //执行添加记
echo $actionNo;
echo "----"; 
echo $actionTime;
echo "----"; 
echo $opencode;
echo "<br>"; 

}
}
}   
}                                 


function randKeys1($len){
	$rand='';
	for($x=0;$x<$len;$x++){
		srand((double)microtime()*1000000);
		$rand.=($rand!=''?',':'').mt_rand(0,9);
	}
	return $rand;
}


function randKeys2($len){
	$rand='';
	for($x=0;$x<$len;$x++){
		srand((double)microtime()*1000000);
		$rand.=($rand!=''?',':'').mt_rand(1,6);
	}
	return $rand;
}



function randKeys3($len){
    $array=array("01","02","03","04","05","06","07","08","09","10","11");
	$charsLen = count($array) - 1; 
    shuffle($array);
    $output = ""; 
  //  for ($i=0; $i<$len; $i++){ 
		
    $a= $array[mt_rand(0, $charsLen)];
		$b= $array[mt_rand(0, $charsLen)];
		while($a==$b)
		{
     $b= $array[mt_rand(0, $charsLen)];
		}
		$c=$array[mt_rand(0, $charsLen)];
		while($c==$a||$c==$b)
		{
      $c= $array[mt_rand(0, $charsLen)];
		}

		$d= $array[mt_rand(0, $charsLen)];
		while($d==$a||$d==$b||$d==$c)
		{
			$d= $array[mt_rand(0, $charsLen)];
		}
		$e= $array[mt_rand(0, $charsLen)];
		while($e==$a||$e==$b||$e==$c||$e==$d)
		{
			$e= $array[mt_rand(0, $charsLen)];
		}
       //$output .= $array[mt_rand(0, $charsLen)].",";
  //  }  
	 return $outpuet=$a.','.$b.','.$c.','.$d.','.$e;
   // return rtrim($output, ',');
}


function randKeys4($len=3){
	$str='6038519724';
	$rand='';
	for($x=0;$x<$len;$x++){
		$rand.=($rand!=''?',':'').substr($str,rand(0,strlen($str)-1),1);
	}
	return $rand;
}

function randKeys5($len){
    $array=array("01","02","03","04","05","06","07","08","09","10");
	$charsLen = count($array) - 1; 
    shuffle($array);
    $output = ""; 
  //  for ($i=0; $i<$len; $i++){ 
		
    $a= $array[mt_rand(0, $charsLen)];
		$b= $array[mt_rand(0, $charsLen)];
		while($a==$b)
		{
     $b= $array[mt_rand(0, $charsLen)];
		}
		$c=$array[mt_rand(0, $charsLen)];
		while($c==$a||$c==$b)
		{
      $c= $array[mt_rand(0, $charsLen)];
		}

		$d= $array[mt_rand(0, $charsLen)];
		while($d==$a||$d==$b||$d==$c)
		{
			$d= $array[mt_rand(0, $charsLen)];
		}
		$e= $array[mt_rand(0, $charsLen)];
		while($e==$a||$e==$b||$e==$c||$e==$d)
		{
			$e= $array[mt_rand(0, $charsLen)];
		}
				$f= $array[mt_rand(0, $charsLen)];
		while($f==$a||$f==$b||$f==$c||$f==$d||$f==$e)
		{
			$f= $array[mt_rand(0, $charsLen)];
		}
				$g= $array[mt_rand(0, $charsLen)];
		while($g==$a||$g==$b||$g==$c||$g==$d||$g==$e||$g==$f)
		{
			$g= $array[mt_rand(0, $charsLen)];
		}
			  $h= $array[mt_rand(0, $charsLen)];
		while($h==$a||$h==$b||$h==$c||$h==$d||$h==$e||$h==$f||$h==$g)
		{
			$h= $array[mt_rand(0, $charsLen)];
		}
			 $i= $array[mt_rand(0, $charsLen)];
		while($i==$a||$i==$b||$i==$c||$i==$d||$i==$e||$i==$f||$i==$g||$i==$h)
		{
			$i= $array[mt_rand(0, $charsLen)];
		}
					 $j= $array[mt_rand(0, $charsLen)];
		while($j==$a||$j==$b||$j==$c||$j==$d||$j==$e||$j==$f||$j==$g||$j==$h||$j==$i)
		{
			$j= $array[mt_rand(0, $charsLen)];
		}
       //$output .= $array[mt_rand(0, $charsLen)].",";  
  //  }  
	 return $outpuet=$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h.','.$i.','.$j;
   // return rtrim($output, ',');
}


function randKeys6($len){
    $array=array("01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20");
	$charsLen = count($array) - 1; 
    shuffle($array);
    $output = ""; 
  //  for ($i=0; $i<$len; $i++){ 
		
    $a= $array[mt_rand(0, $charsLen)];
		$b= $array[mt_rand(0, $charsLen)];
		while($a==$b)
		{
     $b= $array[mt_rand(0, $charsLen)];
		}
		$c=$array[mt_rand(0, $charsLen)];
		while($c==$a||$c==$b)
		{
      $c= $array[mt_rand(0, $charsLen)];
		}

		$d= $array[mt_rand(0, $charsLen)];
		while($d==$a||$d==$b||$d==$c)
		{
			$d= $array[mt_rand(0, $charsLen)];
		}
		$e= $array[mt_rand(0, $charsLen)];
		while($e==$a||$e==$b||$e==$c||$e==$d)
		{
			$e= $array[mt_rand(0, $charsLen)];
		}
				$f= $array[mt_rand(0, $charsLen)];
		while($f==$a||$f==$b||$f==$c||$f==$d||$f==$e)
		{
			$f= $array[mt_rand(0, $charsLen)];
		}
				$g= $array[mt_rand(0, $charsLen)];
		while($g==$a||$g==$b||$g==$c||$g==$d||$g==$e||$g==$f)
		{
			$g= $array[mt_rand(0, $charsLen)];
		}
			  $h= $array[mt_rand(0, $charsLen)];
		while($h==$a||$h==$b||$h==$c||$h==$d||$h==$e||$h==$f||$h==$g)
		{
			$h= $array[mt_rand(0, $charsLen)];
		}
		
			 $i= $array[mt_rand(0, $charsLen)];
		while($i==$a||$i==$b||$i==$c||$i==$d||$i==$e||$i==$f||$i==$g||$i==$h)
		{
			$i= $array[mt_rand(0, $charsLen)];
		}
		
					 $j= $array[mt_rand(0, $charsLen)];
		while($j==$a||$j==$b||$j==$c||$j==$d||$j==$e||$j==$f||$j==$g||$j==$h||$j==$i)  
		{
			$j= $array[mt_rand(0, $charsLen)];
		}
		
					 $k= $array[mt_rand(0, $charsLen)];
		while($k==$a||$k==$b||$k==$c||$k==$d||$k==$e||$k==$f||$k==$g||$k==$h||$k==$i||$k==$j)
		{
			$k= $array[mt_rand(0, $charsLen)];
		}
		
					 $l= $array[mt_rand(0, $charsLen)];
		while($l==$a||$l==$b||$l==$c||$l==$d||$l==$e||$l==$f||$l==$g||$l==$h||$l==$i||$l==$j||$l==$k)
		{
			$l= $array[mt_rand(0, $charsLen)];
		}
		
					 $m= $array[mt_rand(0, $charsLen)];
		while($m==$a||$m==$b||$m==$c||$m==$d||$m==$e||$m==$f||$m==$g||$m==$h||$m==$i||$m==$j||$m==$k||$m==$l)
		{
			$m= $array[mt_rand(0, $charsLen)];
		}
		
					 $n= $array[mt_rand(0, $charsLen)];
		while($n==$a||$n==$b||$n==$c||$n==$d||$n==$e||$n==$f||$n==$g||$n==$h||$n==$i||$n==$j||$n==$k||$n==$l||$n==$m)
		{
			$n= $array[mt_rand(0, $charsLen)];
		}
		
					 $o= $array[mt_rand(0, $charsLen)];
		while($o==$a||$o==$b||$o==$c||$o==$d||$o==$e||$o==$f||$o==$g||$o==$h||$o==$i||$o==$j||$o==$k||$o==$l||$o==$m||$o==$n)
		{
			$o= $array[mt_rand(0, $charsLen)];
		}
		
					 $p= $array[mt_rand(0, $charsLen)];
		while($p==$a||$p==$b||$p==$c||$p==$d||$p==$e||$p==$f||$p==$g||$p==$h||$p==$i||$p==$j||$p==$k||$p==$l||$p==$m||$p==$n||$p==$o)
		{
			$p= $array[mt_rand(0, $charsLen)];
		}
		
					 $q= $array[mt_rand(0, $charsLen)];
		while($q==$a||$q==$b||$q==$c||$q==$d||$q==$e||$q==$f||$q==$g||$q==$h||$q==$i||$q==$j||$q==$k||$q==$l||$q==$m||$q==$n||$q==$o||$q==$p)
		{
			$q= $array[mt_rand(0, $charsLen)];
		}
		
					 $r= $array[mt_rand(0, $charsLen)];
		while($r==$a||$r==$b||$r==$c||$r==$d||$r==$e||$r==$f||$r==$g||$r==$h||$r==$i||$r==$j||$r==$k||$r==$l||$r==$m||$r==$n||$r==$o||$r==$p||$r==$q)
		{
			$r= $array[mt_rand(0, $charsLen)];
		}
		
					 $s= $array[mt_rand(0, $charsLen)];
		while($s==$a||$s==$b||$s==$c||$s==$d||$s==$e||$s==$f||$s==$g||$s==$h||$s==$i||$s==$j||$s==$k||$s==$l||$s==$m||$s==$n||$s==$o||$s==$p||$s==$q||$s==$r)
		{
			$s= $array[mt_rand(0, $charsLen)];
		}
		
					 $t= $array[mt_rand(0, $charsLen)];
		while($t==$a||$t==$b||$t==$c||$t==$d||$t==$e||$t==$f||$t==$g||$t==$h||$t==$i||$t==$j||$t==$k||$t==$l||$t==$m||$t==$n||$t==$o||$t==$p||$t==$q||$t==$r||$t==$s)
		{
			$t= $array[mt_rand(0, $charsLen)];
		}
		
       //$output .= $array[mt_rand(0, $charsLen)].",";  客服QQ:113438373
  //  }  
	 return $outpuet=$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h;
   // return rtrim($output, ',');
}


function randKeys7($len)
{
    $array    = array(
        "01",
        "02",
        "03",
        "04",
        "05",
        "06",
        "07",
        "08",
        "09",
        "10",
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "18",
        "19",
        "20",
        "21",
        "22",
        "23",
        "24",
        "25",
        "26",
        "27",
        "28",
        "29",
        "30",
        "31",
        "32",
        "33",
        "34",
        "35",
        "36",
        "37",
        "38",
        "39",
        "40",
        "41",
        "42",
        "43",
        "44",
        "45",
        "46",
        "47",
        "48",
        "49"
    );
    $charsLen = count($array) - 1;
    shuffle($array);
    $output = "";
  for ($i=0; $i<$len; $i++){
	  
       $output .= $array[$i].",";
    }  
    return rtrim($output, ',');
}

?>