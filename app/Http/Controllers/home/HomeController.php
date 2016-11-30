<?php
namespace App\Http\Controllers\home;


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
class HomeController extends controller
{
	public function getIndex()
	{
		$arr['flink'] = DB::table('p2p_flink')->get();
		$ar= DB::select('select * from p2p_xinwen  where pid = (select id from p2p_xinwen where pid = 0)');
		$arr['xinwen'] = DB::select('select * from p2p_xinwen  where pid = '.$ar[0]->id.' order By id desc limit 0,4');
		$arr['xinwen'][4] = $ar[0];
		
		
		$licai = DB::table('p2p_licai')->where('pid','=','0')->first();
		$arr['licai'] = DB::select('select * from p2p_licai  where pid = '.$licai->id.' order By id desc limit 0,3');
		$arr['licai'][4] =$licai ;

		$shichang = DB::table('p2p_shichang')->where('pid','=','0')->get();
		$arr['shichang'] = DB::select('select * from p2p_shichang  where pid = '.$shichang[0]->id.' order By id desc limit 0,6');
		$arr['shichang'][5] = $shichang[1];
		$arr['shichang'][6] = $shichang[0];

// dd($arr['xinwen']);
		//新闻
		$a = [];
		foreach ($arr['xinwen'] as $k => $v) {
			$content = $v->content;
			if(strlen($content)>220){
	 		$v->content = mb_substr($content,0,70).'....';
			}
			$a[$k]=$v;

		}
		$arr['xinwen']=$a;


		//市场
		$b = [];
		foreach ($arr['shichang'] as $k => $v) {
			$content = $v->content;
			$name = $v->name;
			if(strlen($name)>48){
			$v->name = mb_substr($name,0,16).'...';
			}

			if(strlen($content)>423){
	 		$v->content = mb_substr($content,0,123).'...';
	 		}
			$b[$k]=$v;
		$arr['shichang']=$b;
		}


		//理财
		$c = [];
		foreach ($arr['licai'] as $k => $v) {
			$content = $v->content;
			$name = $v->name;
			if(strlen($name)>63){
			$v->name = mb_substr($name,0,20).'...';
			}
			$c[$k]=$v;

		}
		$arr['licai']=$c;





// var_dump($arr['shichang']);
// dd($arr);
		return view('home/index',['arr'=>$arr]);

	}

	//新闻
	public function getXinwen(Request $request)
	{
		$id = $request->only('id')['id'];
		$ar = DB::table('p2p_xinwen')->where('id',$id)->get();
		$arr = DB::table('p2p_xinwen')->where('pid',$id)->get();

		return view('/home/news',['arr'=>$arr,'ar'=>$ar]);




	}

	//市场
	public function getShichang(Request $request)
	{
		$id = $request->only('id')['id'];
		$ar = DB::table('p2p_shichang')->where('id',$id)->get();
		$arr = DB::table('p2p_shichang')->where('pid',$id)->get();
		// dd($arr);
		return view('/home/news',['arr'=>$arr,'ar'=>$ar]);


	}

//理财
	public function getLicai(Request $request)
	{
		$id = $request->only('id')['id'];
		$ar = DB::table('p2p_licai')->where('id',$id)->get();
		$arr = DB::table('p2p_licai')->where('pid',$id)->get();
		// dd($arr);


	}

	public function getHangye()
	{
		$arr = DB::select('select id,pid,name,content,pic,time from p2p_licai where pid=(select id from p2p_licai where pid=0) order By id desc limit 0,8');
		$a = [];
		foreach ($arr as $k => $v) {
			$content = $v->content;
			if(strlen($content)>220){
	 		$v->content = mb_substr($content,0,70).'....';
			}
			$a[$k]=$v;

		}
		$arr=$a;
	// dd($arr);
		return view('/home/industry',['arr'=>$arr]);
	}

//导航
	public function getDaoheng(Request $request)
	{
		$id =$request->only('id') ;
		// dd($id);
		switch($id['id']){
			case 'licai':
				$arr = DB::select('select id,pid,name,content,pic,time from p2p_licai where pid=(select id from p2p_licai where pid=0) order By id desc limit 0,8');
// dd($arr);
				return view('/home/hangye',['arr'=>$arr]);
				break;
			case 'zhaopin':
				$arr = DB::table('p2p_zhaopin')-> orderBy('id','desc') ->paginate(11);
				// dd($arr);
				return view('/home/zhaopin',['arr'=>$arr]);
				break;
			case 'gongyi':
             $arr = DB::table('p2p_gongyi')-> orderBy('id','desc') ->paginate(8);
				// dd($arr);	
				return view('/home/gongyi',['arr'=>$arr]);
				break;
			case 'gongsi':
				$arr = DB::table('p2p_gongsi')->where('pid','0')->where('name','关于我们')->get();
				$arr[4] = DB::select("select id,pid,name,content,pic,time from p2p_gongsi where pid=(select id from p2p_gongsi where name = '创始团队')");
				// dd($arr);
				return view('/home/gongsi',['arr'=>$arr]);
				break;
			case 'jigou':
				$arr = DB::table('p2p_jigou')->get();
				return view('/home/jigou',['arr'=>$arr]);
			break;

		}






	}



}