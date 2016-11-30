<?php
namespace App\Http\Controllers\admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\controllers\controller;
use App\Http\Requests;
// use Illuminate\Pagination\LengthAwarePaginator;
use DB;
use Config;
class ConfigController extends controller
{
    //网站配置修改页
    public function getIndex()
    {
    	
    	//获取所有网站配置信息
    	$webtitle = Config::get('app.WEBTITLE');  //网站标题
    	$keywords = Config::get('app.HTTP_KEYWORDS');   //网站关键字
    	$description = Config::get('app.HTTP_DESCRIPTION'); //网站描述
    	$copy = Config::get('app.HTTP_COPY'); //网站版权
    	$logo = Config::get('app.HTTP_LOGO'); //网站logo
    

    	// dd($webtitle,$keywords,$description,$copy,$logo);
    	//解析模板
    	return view('admin/config/config',['webtitle'=>$webtitle,'keywords'=>$keywords,'description'=>$description,'copy'=>$copy,'logo'=>$logo]);	
    }
   
    //执行修改
    public function postUpdate(Request $request)
    {	
        
        // dd($request->all());
        // die;
    	$data = $request->except(['_token','logo']);
    	//处理logo修改
		$data['logo'] = $this->upload($request);
        if($data['logo']==null){
          
           $data['logo'] = '/uploads/default/logo.png';
        }
       
        // dd($data);


		//将配置文件中内容读出
		$str=file_get_contents('../config/app.php');


		//获取原来配置文件信息
		$webtitle = Config::get('app.WEBTITLE');  //网站标题
    	$keywords = Config::get('app.HTTP_KEYWORDS');   //网站关键字
    	$description = Config::get('app.HTTP_DESCRIPTION'); //网站描述
    	$copy = Config::get('app.HTTP_COPY'); //网站版权
    	$logo = Config::get('app.HTTP_LOGO'); //网站logo

		$zz = ['WEBTITLE'=>$webtitle,'HTTP_KEYWORDS'=>$keywords,'HTTP_DESCRIPTION'=>$description,'HTTP_COPY'=>$copy,'HTTP_LOGO'=>$logo ];
		// dd($zz);
		$rep = [];
		$keys =[];
		$vals = [];
    	foreach($zz as $key=>$val){
    		$keys[] = rtrim($key,',');
    		$vals[] = $val;
        }  
		$rep = array_combine($keys,$vals);
		$rep['logo'] = $request->input('HTTP_LOGO');
       
        // dd($keys,$vals);
        // dd($rep,$data);


        //替换配置文件里信息
        $str=str_replace($rep,$data,$str);
        // dd($str);
        // 将修改后的文件重新写入到配置文件中
        if(file_put_contents('../config/app.php',$str)){
               return redirect('/admin/config/index')->with('success','修改成功');
          } 


    	
    }



//图片上传
	 public static function upload(Request $request)
    {

    	// 检测是否有文件上传
    	if($request->hasFile('logo')){
    		// return 1;
            //随机文件名称 加密
            $name = md5(time()+rand(11111,99999));
            // 文件后缀名的获取
            $suffix = $request->file('logo')->getClientOriginalExtension();
            // 判断文件上传的类型
            $arr = ['jpg','png','gif','JPG','PNG','GIF'];
            if(!in_array($suffix,$arr)){
                echo '上传文件不符合要求';die;
            }
            $request->file('logo')->move('./uploads/',$name.'.'.$suffix);
            // 将文件路径及文件名称返回
            return '/uploads/'.$name.'.'.$suffix;
       }


    }





	
}