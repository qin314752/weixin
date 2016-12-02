<?php

class wechatCallbackapiTest
{
 public function valid()
 {
 $echoStr = $_GET["echostr"];
 
 //valid signature , option
 if($this->checkSignature()){
 echo $echoStr;
 exit;
 }
 }
 
 public function responseMsg()
 {
 //get post data, May be due to the different environments
 $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
 
 //extract post data
 if (!empty($postStr)){
 /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
  the best way is to check the validity of xml by yourself */
 libxml_disable_entity_loader(true);
  $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
 $msgType = $postObj->MsgType;//消息类型

  switch($msgType){
              case 'text':
                $result = $this->responseText($postObj);
                break;
              case 'image':
                $result = $this->responseImg($postObj);
                break;
              //快递扫描事件类型
              case 'event':
                $result = $this->responseEvent($postObj);
                break;
              default:
                   $contentStr = '无法执行';
              break;

          }
          echo $result;

 }else {
 echo "";
 exit;
 }
 }




 public function responseEvent($postObj)
 {
 $fromUsername = $postObj->FromUserName;
 $toUsername = $postObj->ToUserName;
 $time = time();
 $event = $postObj->Event;//时间类型，subscribe（订阅）、unsubscribe（取消订阅）
 
        if ($event=='subscribe') 
        {
         //订阅事件 
      $contentStr = "你好,欢迎关注中皇太发资讯!";

        }
        elseif ($event=='CLICK') 
        {
         //点击事件  
          $EventKey = $postObj->EventKey;
           // $contentStr = $EventKey; 
          //菜单的自定义的key值，可以根据此值判断用户点击了什么内容，从而推送不同信息  
          switch($EventKey)
          {
           case "V1001_TODAY_MUSIC" :
                $this->responseNews($postObj);
            //要返回相关内容
            break;
           case "b001" :
           //要返回相关内容
            break;
           default:
              $contentStr = "对不起,你的内容我会稍后回复";
             break;
           
           }
                     
        }  
      

 // switch ($event) {
 //   case 'subscribe':
 //      $contentStr = "你好,欢迎关注中皇太发资讯!";
 //     break;
 //   case 'CLICK':
 //      $this->responsePicUrl();
 //     break;
 //   default:
 //      $contentStr = "对不起,你的内容我会稍后回复";
 //     break;
 // }
 //  if($event=="subscribe"){
 //  $contentStr = "你好,欢迎关注中皇太发资讯!";
 // }

 $textTpl = "<xml>
  <ToUserName><![CDATA[%s]]></ToUserName>
  <FromUserName><![CDATA[%s]]></FromUserName>
  <CreateTime>%s</CreateTime>
  <MsgType><![CDATA[%s]]></MsgType>
  <Content><![CDATA[%s]]></Content>
  <FuncFlag>0</FuncFlag>
  </xml>"; 
   
 $msgType = "text";
 $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
 return $resultStr;
 }
  
//回复图文
        public function responseNews($postObj)
        {
            $fromUsername = $postObj->FromUserName;//发送帐号（一个OpenID）
            $toUsername = $postObj->ToUserName;//开发者微信号
            $time = time();
            $textTpl = "<xml>
                <ToUserName><![CDATA[%s]]></ToUserName>
                <FromUserName><![CDATA[%s]]></FromUserName>
                <CreateTime>%s</CreateTime>
                <MsgType><![CDATA[news]]></MsgType>
                <ArticleCount>2</ArticleCount>
                <Articles>
                <item>
                    <Title><![CDATA[中皇太发]]></Title> 
                    <Description><![CDATA[中皇太发]]></Description>
                    <PicUrl><![CDATA[http://zhong3.applinzi.com/logo.png]]></PicUrl>
                    <Url><![CDATA[http://www.baidu.com]]></Url>
                </item>
                <item>
                    <Title><![CDATA[中皇太发]]></Title>
                    <Description><![CDATA[中皇太发]]></Description>
                    <PicUrl><![CDATA[http://zhong3.applinzi.com/logo.png]]></PicUrl>
                    <Url><![CDATA[http://www.baidu.com]]></Url>
                </item>
                </Articles>
                </xml>";             
                                
            $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time);
            echo $resultStr;
        }









 private function checkSignature()
 {
 // you must define TOKEN by yourself
 if (!defined("TOKEN")) {
 throw new Exception('TOKEN is not defined!');
 }
  
 $signature = $_GET["signature"];
 $timestamp = $_GET["timestamp"];
 $nonce = $_GET["nonce"];
  
 $token = TOKEN;
 $tmpArr = array($token, $timestamp, $nonce);
 // use SORT_STRING rule
 sort($tmpArr, SORT_STRING);
 $tmpStr = implode( $tmpArr );
 $tmpStr = sha1( $tmpStr );
  
 if( $tmpStr == $signature ){
 return true;
 }else{
 return false;
 }
 }
}
 
 
?>