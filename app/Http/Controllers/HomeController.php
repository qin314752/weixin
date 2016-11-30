<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\controllers\controller;
use Carbon\Carbon;
use App\Http\Requests;
use DB;
use Config;
use Cache;
class HomeController extends controller
{
    public static function head()
    {
    	$config = DB::table('p2p_configs')->get();
    	return view('lang/head',['config'=>$config]);
    }

    
}
