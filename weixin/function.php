<?php 
	
include './url.class.php';

//封装请求函数
	function get($url){
		//实例化对象
		$curl = new Curl();
		//调用方法
		$res = $curl->get($url);
		//将结果返回
		return $res;
	}

	//post
	function post($url,$data){
		//实例化对象
		$curl = new Curl();
		//调用方法
		$res = $curl->post($url,$data);
		//返回结果
		return $res;
	}




// $url = 'http://www.mi.com';
// $b = get($url);
// echo $b;	



















 ?>