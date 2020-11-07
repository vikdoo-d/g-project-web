<?php

namespace App\Http\Controllers\PC\About;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PC\News\NewsController as News;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Config;

class AboutController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'PC.About.about';

    private $limit;
    private $page;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->page=0;
        $this->limit=4;
    }


    public function index()
    {
        $where['page'] = 1;
        $where['limit'] = 10;
        $news = new News();
        $ret = $news->getNewsList($where);
        foreach ($ret['data'] as $k=>&$v){
            $v['year'] = date('Y',strtotime($v['created_at']));
            $v['day_month'] = date('m-d',strtotime($v['created_at']));
            $v['created_at'] = date('Y-m-d H:i',strtotime($v['created_at']));
        }
        $l_news = [];
        $c_news = [];
        //这里把简直转成了数字的，方便同意处理
        foreach ($ret['data'] as $key => $value) {

            if($value['type'] == 1){
                array_push($l_news, $value);
            }else{

                array_push($c_news, $value);
            }

        }


        return view('PC.About.about')->with('news',$ret['data'])->with('l_news',$l_news)->with('c_news',$c_news);
    }

}
