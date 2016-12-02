<?php 
	include './function.php';
    include './token.class.php';
	
	$token = Token::gettoken();
	// http请求方式：POST（请使用https协议） 
	$url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$token;



    $data = ' {
     "button":[
      {
           "name":"中皇动态",
           "sub_button":[
           {    
               "type": "click",
               "name":"迁址公告",
               "key": "V1001_TODAY_MUSIC", 
                "sub_button": [ ]
            },
            {
               "type":"view",
               "name":"中皇官网",
               "url":"http://www.zhonghuangtaifa.cn"
            }
            ]
       }, 
       {
           "name":"融资平台",
           "sub_button":[
           {    
               "type":"view",
               "name":"我要融资",
               "url":"http://form.mikecrm.com/DEQIm1"
            },
            {
               "type":"view",
               "name":"我要投资",
               "url":"http://form.mikecrm.com/xnKORq"
            },{
               "type":"view",
               "name":"我要合作",
               "url":"http://form.mikecrm.com/5K6OR6"
            }]
       }]
 }

';
$res = post($url,$data);
var_dump($res);















 ?>