<?php
require_once('xingcai_sqlin.php');
$conf['debug']['level']=5;

/*		���ݿ�����		*/
$conf['db']['dsn']='mysql:host=localhost;dbname=xc;charset=utf8';
$dbname='xc';
$dbhost='localhost';
$conf['db']['user']='xc';
$conf['db']['password']='s5N4MfhFxEKFPYjH';
$conf['db']['charset']='utf8';
$conf['db']['prename']='blast_';

$conf['cache']['expire']=0;
$conf['cache']['dir']='_xingcai__buffer/';

$conf['url_modal']=2;

$conf['action']['template']='xingcai_Front/';
$conf['action']['modals']='xingcai_back/';

$conf['member']['sessionTime']=15*60;	// �û���Чʱ��
$conf['node']['access']='http://localhost:8800';	// node���ʻ���·��
error_reporting(E_ERROR & ~E_NOTICE);

ini_set('date.timezone', 'asia/shanghai');

ini_set('display_errors', 'Off');

if(strtotime(date('Y-m-d',time()))>strtotime(date('Y-m-d',time()))){
	$GLOBALS['fromTime']=strtotime(date('Y-m-d',strtotime("-1 day")));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',time()));
}else{
	
	$GLOBALS['fromTime']=strtotime(date('Y-m-d'));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',strtotime("+1 day")));
}
?>
<?php
error_reporting(0);
$config = mysql_connect("127.0.0.1","xc","s5N4MfhFxEKFPYjH")or die("Mysql Connect Error");//�������ݿ�IP���˺ţ�����
mysql_select_db("xc");//���ݿ����
mysql_query("SET NAMES UTF8");
?>