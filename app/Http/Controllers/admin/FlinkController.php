<?php
namespace App\Http\Controllers\admin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class FlinkController extends BaseController
{ 

 	//友情链接数据查询
     public function getIndex(Request $request)
    {
    	 $num=$request->input('num',5);
        $find = $request->input('find');
        if($find){
             $arr =  DB::table('p2p_flink')->where('name','like','%'.$find.'%')->paginate($num);
        }else{
             $arr = DB::table('p2p_flink')->paginate($num);
        }
        return view('/admin/flink/index',['arr'=>$arr,'num'=>$num,'find'=>$find]);

    }

	//友情链接提交接值处理
	public function postInsert(Request $request){
		$arr = $request->only(['name','url']);
		$arr['pic'] =  $this->upload($request);
		if($arr['pic']  == '上传文件不符合要求'){
        	return back()->with('error','上传文件不符合要求');
        }

        if($arr['pic'] =='上传文件不符合要求(图片要小于2MB)'){
          return back()->with('error','上传文件不符合要求(图片要小于2MB)');
        }
		if($arr['pic']==null){
			return back()->with('error','图片上传失败' );
		}
		$src = DB::table('p2p_flink')->insert($arr);
		if($src){
			return redirect(url("admin/flink/index"));
		}else{
			return back()->with('error','添加失败');
		}

	}

	//友情链接数据删除
	public  function getDelete(Request $request)	
	{
		$id = $request->only('id');
		 //删除旧的图片
       //拼接删除文件public中的文件路径
        $sre1 = DB::table('p2p_flink')->where('id',$id['id'])->first();
        $file = $sre1->pic;
        if($file){
	        $path = base_path($file);
	        $src =  explode('/',$path);
	        $src[0] = $src[0].'public';
	        $unlinkpic = implode('\\',$src);
	        unlink($unlinkpic);
        }

		$str = DB::table('p2p_flink')->where('id', '=', $id)->delete();
	 
		if($str){
			echo 1;
		}else{
			echo 0;
		}		
	}

	


	//友情链接添加跳转页面
	public  function getAdd()
	{
		
		return view('admin/flink/add');
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
