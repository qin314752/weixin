<?php

namespace App\Http\Controllers\admin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Hash;
class UserController extends BaseController
{
   public function getIndex()
   {
    $arr = DB::table('p2p_user')->get();
   	return view('admin/user/index',['arr'=>$arr]);
   }

	
    //删除
    public  function getDel(Request $request)
    {
        // $arr = $request->except('_token');
        $arr = $request->all();
        // dd($arr);
        $str = DB::table('p2p_user')->where('id','=',$arr['id'])-> delete();
        if($str){
            return 1;
        }else{
            return 2;
        }
    }
   

	public function getAdd()
	{
		return view('/admin/user/add');
	}

	public function postInsert(Request $request)
	{
		$arr = $request->only('username','password','name','qq','phone','zhu');
		$arr['password']=Hash::make($arr['password']);
		// dd($arr);
        $str = DB::table('p2p_user')->insert($arr);
        if($str){
        	return redirect('/admin/user/index');
        }else{
        	return back()->with('error','添加失败');
        }
		
	}








}
