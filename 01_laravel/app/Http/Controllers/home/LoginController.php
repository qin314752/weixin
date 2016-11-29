<?php
namespace App\Http\Controllers\home;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Hash;

class LoginController extends BaseController
{
   public function getIndex()
   {
   
   	return view('/home/login/login');

   }
   //新用户注册数据就收a

	public function postAdd(Request $request)
   {
   
     $arr = $request->except(['_token']);
      $res = DB::table('p2p_user')->where('phone','=',$arr['phone'])->first();
      if($res!==null){
      	 return back()->with('error','此手机号码已注册过');
      }
     //判断密码是否一致.
     if($arr['pass']!==$arr['password']){
     	return back()->with('error','两次密码不一致');
     }
     
     $arr['password'] = Hash::make($arr['pass']);

     $sre = DB::table('p2p_user')->insert(['username'=>$arr['username'],'phone'=>$arr['phone'],'password'=>$arr['password']]);
	if($sre){
		return view('/home/index',['arr'=>$arr]);
	}else{
		return back()->with('error','注册失败,请联系客服人员');
		
	}

   }
	//with的参数1是一个session变量名，参数2为该session变量值，在视图直接这样获取

   //验证码 
	public function getCode(){
		  	ob_clean();//清除输出缓存区的内容
		    //生成验证码图片的Builder对象，配置相应属性
	        $builder = new CaptchaBuilder;
	        //可以设置图片宽高及字体
	        $builder->build($width = 80, $height = 37, $font = null);
	        //获取验证码的内容
	        $phrase = $builder->getPhrase();
	        // dd($phrase);
	        //把内容存入session
	        session(['code'=>$phrase]);
	        //生成图片
	        header("Cache-Control: no-cache, must-revalidate");
	        header('Content-Type: image/jpeg');
	        $builder->output();
		}



}
