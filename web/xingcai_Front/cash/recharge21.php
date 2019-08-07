<?php

    $vars = [
        'transId'   => 'SMARTCLOUD_ALIPAY_H5_PAY',
        'serialNo'   => time(),
        'merNo'   => '88882018041410001204',
        'merKey'   => 'c95f4d1dbde34e02a43c5e36507ee57d',
        'orderNo'   => date('YmdHis'),
        'transAmt'   => isset($_POST['transAmt'])? $_POST['transAmt'] : '1.00',
        'orderDesc'   => 'test',
        'transDate'   => date('Ymd'),
        'transTime'   => date('YmdHis'),
        'notifyUrl'   => 'test.abc.com',
    ];
    $tmp = $vars;
    ksort($vars);
    
    $paySecret = '032b86535d584f73940d760aba1a7cbd';
    $urlStr = http_build_query($vars) . '&paySecret=' . $paySecret;
    $sign = strtoupper(md5($urlStr));
    $vars['sign'] = $sign;
    
    $url = 'http://101.200.38.184:8008/gateway/transaction/request';
    $tmp['sign'] = $sign;
  
         $ch = curl_init();
        $params[CURLOPT_URL] = $url;    //请求url地址
        $params[CURLOPT_HEADER] = false; //是否返回响应头信息
        $params[CURLOPT_RETURNTRANSFER] = true; //是否将结果返回
        $params[CURLOPT_FOLLOWLOCATION] = true; //是否重定向
        $params[CURLOPT_USERAGENT] = 'Mozilla/5.0 (Windows NT 5.1; rv:9.0.1) Gecko/20100101 Firefox/9.0.1';
    
        $postfields = '';
        foreach ($vars as $key => $value){
            $postfields .= urlencode($key) . '=' . urlencode($value) . '&';  
        }
        
        $params[CURLOPT_POST] = true;
        $params[CURLOPT_POSTFIELDS] = $postfields;
        

        curl_setopt_array($ch, $params); //传入curl参数
        $content = curl_exec($ch); //执行
        curl_close($ch); //关闭连接
        $arr = json_decode($content,true); //输出登录结果
        require_once 'phpqrcode/phpqrcode.php'; //引入类库
        $text = $arr['authCode'];//要生成二维码的文本
      
        QRcode::png($text,false,'H',4,2,false);//输出到浏览器或者生成文件

        
   
    
    function curlRequest($url, $data = '') {
        $ch = curl_init();
        $params[CURLOPT_URL] = $url;    //请求url地址
        $params[CURLOPT_HEADER] = false; //是否返回响应头信息
        $params[CURLOPT_RETURNTRANSFER] = true; //是否将结果返回
        $params[CURLOPT_FOLLOWLOCATION] = true; //是否重定向
        $params[CURLOPT_TIMEOUT] = 30; //超时时间
        if (!empty($data)) {
            $params[CURLOPT_POST] = true;
            $params[CURLOPT_POSTFIELDS] = $data;
        }
        $params[CURLOPT_SSL_VERIFYPEER] = false; //请求https时设置,还有其他解决方案
        $params[CURLOPT_SSL_VERIFYHOST] = false; //请求https时,其他方案查看其他博文
        curl_setopt_array($ch, $params); //传入curl参数
        $content = curl_exec($ch); //执行
        curl_close($ch); //关闭连接
        return $content;
   }
   echo 123;
   exit;
?>