<?php 


/*http请求方式: GET
https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APPID&secret=APPSECRET

*/

	
class Token
{
	//静态成员属性
	static public $tokenfile =  'token.txt';
	static public $tokentime = 7200;

	//获取token
	static public function gettoken()
	{

		//如果本地token存在并且没有过期,就在本地读取后反回
		if(self::checkTokenFile()&&self::checkTime()){
			return self::readToken();
		}else{

		//如果本地没有token或过期,重新请求获取token 并且缓存
			$res = self::requestToken();
			//写入新token
			self::writeToken($res);
			//返回token
			return $res;
			
		}


	}

	// 通过接口去请求新token 
	static function requestToken()
	{
		// http请求方式: GET
		$url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx6a996f24e2586ac4&secret=e394ac1e1602b1d74c98e535a4b0ee88';
		$res = get($url);
		// {"access_token":"ACCESS_TOKEN","expires_in":7200}
		// {"errcode":40013,"errmsg":"invalid appid"}
		$data = json_decode($res,true);
		if(empty($data['access_token'])){
			return false;
		}else{
			return $data['access_token'];
		}
	}

	//获取新的token缓存到文件中
	static public function writeToken($res)
	{

		//写入token
		file_put_contents(self::$tokenfile,$res);

	}

	//检测缓存文件中的token是否存在
	static function checkTokenFile()
	{
		return file_exists(self::$tokenfile);

	}
	//检测缓存文件是否过期
	static function checkTime()
	{
		//文件最后修改时间 + 缓存时间 
			// 123 + 100 = 223 > 250
		return filemtime(self::$tokenfile)+self::$tokentime > time();

	}



	//读取本地缓存文件中的token
	static public function readToken()
	{
		//读取
		return file_get_contents(self::$tokenfile);
	}






}

// include './function.php';
	
// 	$token = Token::gettoken();
// var_dump($token);
 ?>