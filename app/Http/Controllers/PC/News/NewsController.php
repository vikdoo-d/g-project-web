<?php
/**
 * Created by PhpStorm.
 * User: dongkang
 * Date: 2020/9/7
 * Time: 14:40
 */

namespace App\Http\Controllers\PC\News;
use App\Http\Service\Action\ActionService;
use App\Common\ErrorDefine;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Session,Config;

class NewsController extends Controller
{
    /**
     * @return view
     * Demo页面
     */
    public function index(Request $request)
    {
//        dd($request->input('cate'));
        $where['page'] = 1;
        $where['limit'] = 10;
        $ret = $this->getNewsList($where);
        foreach ($ret['data'] as $k=>&$v){
            $v['year'] = date('Y',strtotime($v['created_at']));
            $v['day_month'] = date('m-d',strtotime($v['created_at']));
            $v['created_at'] = date('Y-m-d H:i',strtotime($v['created_at']));
        }
        $count = count($ret['data']);
//        dd($count);
        switch ($count){
            case $count<=3:

                return view('genews')->with('h_news',$ret['data'])->with('l_news',$ret['data']);

            case $count>3 && $count <=7;
                $h_news = array_slice($ret['data'],0,3);
                $l_news = array_slice($ret['data'],0,5);
                $e_news = array_slice($ret['data'],4,$count-4);
                return view('genews')->with('h_news',$h_news)->with('l_news',$l_news)->with('e_news',$e_news);

            case $count>10:
                $h_news = array_slice($ret['data'],0,3);
                $l_news = array_slice($ret['data'],4,5);
                $e_news = array_slice($ret['data'],8,3);
                return view('genews')->with('h_news',$h_news)->with('l_news',$l_news)->with('e_news',$e_news);

        }


    }

    public function getNewsinfo($cate,$id)
    {
        $where = [
            'cate' => $cate,
            'id' => $id
        ];

        $Action = new ActionService();
        $data = $Action->getNewsInfo($where);

        return view('genews_info')->with('data',$data['data'])->with('list',$data['data']['list']);
    }


    /**
     * @param Request $request
     * @return bool|mixed|string
     * 新闻资讯列表
     */
    public function getNewsList($request)
    {

        if($request['page'])
        {
            $where['page'] = $request['page'];
        }else{
            $where['page'] = 1;
        }
        if($request['limit'])
        {
            $where['limit'] = $request['limit'];
        }else{
            $where['limit'] = 4;
        }

        foreach($where as $key=>$value)
        {
            if($value =='' || $value == 'undefined')
            {
                unset($where[$key]);
            }
        }

        $news = new ActionService();
        $data = $news->getNewsList($where);
        return $data;
    }

    public function getNewsListByCate(Request  $request)
    {

        if($request->has('page'))
        {
            $where['page'] = $request->input('page');
        }else{
            $where['page'] = 1;
        }
        if($request->has('limit'))
        {
            $where['limit'] = $request->input('limit');
        }else{
            $where['limit'] = 4;
        }

        foreach($where as $key=>$value)
        {
            if($value =='' || $value == 'undefined')
            {
                unset($where[$key]);
            }
        }

        $news = new ActionService();
        $data = $news->getNewsList($where);
        return view('News.news_list')->with('c_news',$data['data']);
    }

}
