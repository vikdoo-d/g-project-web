<?php
namespace App\Http\Service\Action;


use App\Http\Service\Basic\BasicService;
use Config;

class ActionService extends BasicService
{

    //构造函数
    function __construct()
    {

        parent::__construct();
    }

/***************新闻资讯*****************/
    //新闻列表
    public function getNewsList($where)
    {
//        dd(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.get_news_list'), $where, 'get');
        return $this->curlLogic->callWebServer(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.get_news_list'), $where, 'get');
    }
    public function getNewsInfo($where)
    {
//        dd(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.get_news_list'), $where, 'get');
        return $this->curlLogic->callWebServer(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.get_news_info'), $where, 'get');
    }

/*************招聘信息**************/

    public function getJobsList($where)
    {
        return $this->curlLogic->callWebServer(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.get_jobs_list'),$where,'get');
    }
    public function getJobInfo($where)
    {
        return $this->curlLogic->callWebServer(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.get_jobs_info'),$where,'get');
    }
    /*************客户反馈**************/
    //客户反馈列表
    public function getFeedbackList($where)
    {
//        dd(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.get_fb_list'), json_encode($where,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'post');
        return $this->curlLogic->callWebServer(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.get_fb_list'), json_encode($where, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'post');
    }
/****************房源操作*****************/
    public function doErshoufangAdd($where)
    {
//        dd(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.ershoufang_add'),$where);
        return $this->curlLogic->callWebServer(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.ershoufang_add'), json_encode($where, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'post');
    }

    public function doErshoufangUpdate($where)
    {
        return $this->curlLogic->callWebServer(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.ershoufang_update'),json_encode($where, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'post');
    }

    public function getPeopertyList($where)
    {
//        dd(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.get_fb_list'), json_encode($where,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'post');
        return $this->curlLogic->callWebServer(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.get_ppy_list'), json_encode($where, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'post');
    }

    //软删除
    public function doPpySoftDelete($where)
    {
        return $this->curlLogic->callWebServer(Config::get('custom.setting.BASE_API_PATH') .Config::get('custom.api.ppy_soft_del'), json_encode($where, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'post');
    }
    public function checkPpyUuid($where)
    {
//        dd(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.check_ppy_num'),$where);
        return $this->curlLogic->callWebServer(Config::get('custom.setting.BASE_API_PATH') . Config::get('custom.api.check_ppy_num'), json_encode($where, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'post');
    }
}
