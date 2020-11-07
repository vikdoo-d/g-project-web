<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//页面 显示
//Route::get('/', function (){
//    return view('welcome');
//}); //首页
Route::get('/', function (){
    return view('index');
}); //首页
Route::get('/geculture', function (){
    return view('geculture');
}); //企业文化
Route::get('/genews', 'PC\News\NewsController@index'); //房产资讯
Route::get('/geabout', function (){
    return view('geabout');
}); //关于我们
Route::get('/gejobs', function (){
    return view('gejobs');
}); //加入我们
Route::get('/gefocus', function (){
    return view('gefocus');
}); //关注我们
