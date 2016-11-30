<?php
namespace App\Http\Controllers\admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\controllers\controller;
use App\Http\Requests;
use DB;
use Config;
class configsController extends controller
{
   public function getIndex()
   {
    $arr = DB::table('p2p_configs')->get();
    return view('admin/config/configs',['arr'=>$arr]);
   }

  
   

  public function postUpdate(Request $request)
  {
    $arr = $request->only('webtitle','keywords','description','icp','address','phone','email','logo','weixin_pic','weibo_pic');
      
        foreach ($arr as $key => $value) 
        {
           if(is_object($value))
           {
               $arr[$key] = $this->upload($request,$key);
               if(strstr( $arr[$key],'上传'))
               {
                var_dump($arr[$key]);
                unset($arr[$key]);
               }else{
                $this->DeletePic($key);
               }
            }
            if(empty($value)){
              unset($arr[$key]);
            }
        }

        $str = DB::table('p2p_configs')->update($arr);
          if($str){
           return redirect('/admin/configs/index');
          }else{
           return back()->with('error','修改失败');
          
          }


  }
//图片删除
public function DeletePic($pic)
{
      $sre1 = DB::table('p2p_configs')->get();
      $file = $sre1[0]->$pic;
      $path = base_path($file);
      $src =  explode('/',$path);
      $src[0] = $src[0].'public';
      $unlinkpic = implode('\\',$src);
      unlink($unlinkpic);

}

//图片上传
     public static function upload($request,$pic)
    {
      //文件是否存在外验证上传的文件是否有效
       if ($request->file($pic)->isValid()) {
          // 检测是否有文件上传
          if($request->hasFile($pic)){
              //随机文件名称 加密
              $name = md5(time()+rand(11111,99999));
              // 文件后缀名的获取
              $suffix = $request->file($pic)->getClientOriginalExtension();
              // 判断文件上传的类型
              $arr = ['jpg','png','gif','JPG','PNG','GIF'];
              if(!in_array($suffix,$arr)){
                  return '上传文件格式不符合要求';
              }
              $request->file($pic)->move('./uploads/default/',$name.'.'.$suffix);
              // 将文件路径及文件名称返回
              return '/uploads/default/'.$name.'.'.$suffix;
             }
        }else{
        
        return '上传文件不符合要求(图片要小于2MB)';
      }
    }




}
