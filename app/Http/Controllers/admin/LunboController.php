<?php 
namespace App\Http\Controllers\admin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class LunboController extends BaseController
{
	public function getIndex()
	{
		$arr = DB::table('p2p_lunbo')->get();
		return view('/admin/lunbo/index',['arr'=>$arr]);
	}
	public function postAdd(Request $request)
	{	
        $lpic =  $this->upload($request);
        if($lpic == '上传文件不符合要求'){
        	return back()->with('error','上传文件不符合要求');
        }

        if($lpic=='上传文件不符合要求(图片要小于2MB)'){
          return back()->with('error','上传文件不符合要求(图片要小于2MB)');
        }




        $src = DB::table('p2p_lunbo')->insert(['lpic'=>$lpic]);
        if(!$src){
        return	back()->with('error','图片数据添加失败');
        }
        	return redirect('/admin/lunbo/index');


	}

	public function getDel(Request $request)
	{
		$id = $request->only('id');
    //拼接删除文件public中的文件路径
      $sre1 = DB::table('p2p_lunbo')->where('id',$id)->first();
      $file = $sre1->lpic;
      $path = base_path($file);
      $src =  explode('/',$path);
      $src[0] = $src[0].'public';
      $unlinkpic = implode('\\',$src);
        unlink($unlinkpic);
        $sre = DB::table('p2p_lunbo')->where('id','=',$id)->delete();
		if($sre){
			return 1;
		}else{
			return 2;
		}
	}


//图片上传
     public static function upload(Request $request)
    {
      //文件是否存在外验证上传的文件是否有效
       if ($request->file('pic')->isValid()) {
          // 检测是否有文件上传
          if($request->hasFile('pic')){
              //随机文件名称 加密
              $name = md5(time()+rand(11111,99999));
              // 文件后缀名的获取
              $suffix = $request->file('pic')->getClientOriginalExtension();
              // 判断文件上传的类型
              $arr = ['jpg','png','gif','JPG','PNG','GIF'];
              if(!in_array($suffix,$arr)){
                  return '上传文件格式不符合要求';
              }
              $request->file('pic')->move('./uploads/',$name.'.'.$suffix);
              // 将文件路径及文件名称返回
              return '/uploads/'.$name.'.'.$suffix;
             }
        }else{
        
        return '上传文件不符合要求(图片要小于2MB)';
      }
    }











}
 ?>