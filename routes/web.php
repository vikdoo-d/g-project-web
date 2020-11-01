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
