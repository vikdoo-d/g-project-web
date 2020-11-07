<?php

namespace App\Http\Controllers\PC\Careers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Service\Action\ActionService;
use App\Http\Requests;
use Session;
use Config;

class CareersController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'PC.Careers.careers';

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
        $where['limit'] = 4;
        $Jobs = new ActionService();
        $ret = $Jobs->getJobsList($where);
        foreach ($ret['data'] as $k=>&$v){

            $v['created_at'] = date('Y-m-d',strtotime($v['created_at']));

        }
//        dd($ret['data'] );
        return view($this->redirectTo)->with('jobs',$ret['data']);
    }

    /**
     * 岗位详情
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getJobInfo($id)
    {
         $where = [
            'id' => $id
        ];

        $Action = new ActionService();
        $data = $Action->getJobInfo($where);
        return view('PC.Careers.job_info')->with('data',$data['data'])->with('list',$data['data']['list']);
    }

}
