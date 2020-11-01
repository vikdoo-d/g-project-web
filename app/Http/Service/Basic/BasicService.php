<?php
namespace App\Http\Service\Basic;


use App\Http\Service\CurlLogic;

class BasicService{

    // http 客户端
    protected $curlLogic;

    //构造函数
    function __construct(){
        $this->curlLogic = new CurlLogic();
    }

}
