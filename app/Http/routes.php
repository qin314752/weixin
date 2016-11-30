<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/home/page');
});
//前台
Route::Controller('/home/page','home\HomeController');

//后台登录界面
Route::Controller('/admin/login','admin\LoginController');
Route::group(['middleware' => 'logins'], function(){

//后台用户
Route::Controller('/admin/user','admin\UserController');
//公司介绍
Route::Controller('/admin/gongsi','admin\GongsiController');
//合作机构
Route::Controller('/admin/jigou','admin\JigouController');
//社会公益
Route::Controller('/admin/gongyi','admin\GongyiController');
//新闻
Route::Controller('/admin/xinwen','admin\XwController');
//招聘
Route::Controller('/admin/zhaopin','admin\ZhaopinController');
//市场
Route::Controller('/admin/shichang','admin\ShichangController');
//理财产品
Route::Controller('/admin/licai','admin\LicaiController');
//网站配置
Route::Controller('/admin/config','admin\ConfigController');
//友情链接
Route::Controller('/admin/flink','admin\FlinkController');
//轮播管理
Route::Controller('/admin/lunbo','admin\LunboController');
//网站配置
Route::Controller('/admin/configs','admin\ConfigsController');
   
});
