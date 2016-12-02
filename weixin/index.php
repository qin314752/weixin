<?php 

	header('content-type:text');
	define("TOKEN", "zhong");
	
	// header('Content-Type: text/html');
	include './wx_sample.php';

	$wechatObj = new wechatCallbackapiTest();
	// $wechatObj->valid();
	$wechatObj->responseMsg();

	// if(!isset($_GET["echostr"])){
	//      $wechatObj->responseMsg();
	// }else{
	//  $wechatObj->valid();
	// }












 ?>