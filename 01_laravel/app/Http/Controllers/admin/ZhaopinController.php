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
class ZhaopinController extends controller
{


    
    //网站配置修改页
    public function getIndex(Request $request)
    {
        $num=$request->input('num',5);

        $find = $request->input('find');
      
        if($find){
             $arr =  DB::table('p2p_zhaopin')->where('name','like','%'.$find.'%')->paginate($num);
        }else{
             $arr = DB::table('p2p_zhaopin')->paginate($num);
        }


        return view('/admin/zhaopin/index',['arr'=>$arr,'num'=>$num,'find'=>$find]);
    }
    //添加界面
    public function getAdd()
    {
        $arr = DB::table('p2p_zhaopin')->get();
        return view('/admin/zhaopin/add',['arr'=>$arr]);
        
    }
    
    // 添加数据处理
    public function postInsert(Request $request)
    {
           
        $arr = $request->except('_token');
       
       
       if(!$arr['address']){
        unset($arr['address']);
       }
        $arr['pic'] =  $this->upload($request);
        if(!$arr['pic']){
        unset($arr['pic']);
       }
        if($arr['content']==null){
            return back()->with('error','添加招聘失败');
        }
       if($arr['name']==null){
            return back()->with('error','添加标题失败');
        }
        $arr['time'] = date('Y-m-d',time());
        $sre = DB::table('p2p_zhaopin')->where('id','=',$arr['pid'])->first();
        if($sre==null){
            $arr['path'] ='@'.'-->'.$arr['name'];
        }else{
             $a =DB::table('p2p_zhaopin')->lists('path');
            $arr['path'] = $sre->path.'-->'.$arr['name'];
            $sree = '';
            foreach ($a as $k => $v) {
                if($v==$arr['path']){
                    $sree = 1;
                }
            }
            if($sree){
                return back()->with('error','此模板已存在');
            }
        }
        $sre1 = DB::table('p2p_zhaopin')->insert($arr);
        if($sre1){
            return redirect('/admin/zhaopin/index')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
        

    }
    //删除
    public  function getDel(Request $request)
    {
        // $arr = $request->except('_token');
        $arr = $request->all();
        // var_dump($arr);
        $a =DB::table('p2p_zhaopin')->lists('path');
        // var_dump($a);
        $sre1 = DB::table('p2p_zhaopin')->where('id',$arr['id'])->first();
        $b = $sre1->path;
        $d = implode(',',$a);
        $e = explode($b,$d);
    
        $num = count($e);
        if($num ==2){
           $file = $sre1->pic;
            if($file){
               //拼接删除文件public中的文件路径
               $path = base_path($file);
               $src =  explode('/',$path);
               $src[0] = $src[0].'public';
               $unlinkpic = implode('\\',$src);
               unlink($unlinkpic);
            }
            $str = DB::table('p2p_zhaopin')->where('id','=',$arr['id'])-> delete();
            if($str){
                return 1;
            }else{
                return 2;
            }
        

        }else{
            return 3;
        }
              
    }
    //修改显示
    public function getUpdate(Request $request)
    {
        $arr = $request->only('id','name','content','pic','time');

         // dd($arr);
        return view('/admin/zhaopin/update',['arr'=>$arr]);
       
    }

    //查看招聘显示内容
    public function getView(Request $request)
    {
        $arr = $request->only('id','name','content','pic','time');
        // dd($arr);
        return view('/admin/zhaopin/content',['arr'=>$arr]);
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
//修改数据插入
    public function postUpload(Request $request)
    {
       $arr = $request->only('id','name','content','pic');
       $arr['time']=date('Y-m-d',time());
       if($arr['pic']){
        $arr['pic'] =  $this->upload($request);
        if($arr['pic'] == '上传文件不符合要求'){
            return back()->with('error','上传文件不符合要求');
        }

        if($arr['pic']=='上传文件不符合要求(图片要小于2MB)'){
          return back()->with('error','上传文件不符合要求(图片要小于2MB)');
        }
        //删除旧的图片
       //拼接删除文件public中的文件路径
        $sre1 = DB::table('p2p_zhaopin')->where('id',$arr['id'])->first();
        $file = $sre1->pic;
        $path = base_path($file);
        $src =  explode('/',$path);
        $src[0] = $src[0].'public';
        $unlinkpic = implode('\\',$src);
        unlink($unlinkpic);

       }else{
        unset($arr['pic']);
       }
       // 修改全部path中的标题名称
       if($arr['name']){
        //获取所有path字段值
        $arr2 =DB::table('p2p_zhaopin')->lists('path');
        // 获取要修改的单条数据
        $sre3 = DB::table('p2p_zhaopin')->where('id',$arr['id'])->first();
        // var_dump($arr2);
        //将获取所有path字段值拼接为字符串
        $arrpath1 = implode(',',$arr2);
        // dd($arrpath1);
        // var_dump($arrpath1);
        //获取当前请求的单条path值
        $path = $sre3->path;

        // dd($path);
        //拼接好的新path路径 $d
        $arrpath = explode('-->',$path);
        array_pop($arrpath);
        array_push($arrpath,$arr['name']);
        $d = implode('-->',$arrpath);
        // var_dump($path);
        if($sre3->name !== $arr['name']){

            //替换所有的要修改的就路径 旧路径 新路径  要替换的字符串
       $srcc = DB::update("update p2p_zhaopin set path=replace(path,'$path','$d')");
        if(!$srcc){
          return back()->with('error','标题修改失败');
        }

        }
       

       }else{
        unset($arr['name']);
       }
       if(!$arr['content']){
        unset($arr['content']);
       }
       
      
       $sre2 = DB::table('p2p_zhaopin')->where('id','=',$arr['id'])->update($arr);
       if($sre2){
        return redirect('/admin/zhaopin/index/add')->with('success','修改成功');
       }else{
        return back()->with('error','修改失败');
       }
    }


}