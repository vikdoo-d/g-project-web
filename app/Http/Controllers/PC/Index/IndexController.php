<?php
namespace App\Http\Controllers\PC\Index;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Config;

class IndexController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'PC.index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index()
    {
        return view($this->redirectTo);
    }


    static function getErshoufangList(){

    }

    //获取地图渲染
    public function map(Request $request)
    {
        if($request->input('id')){
            return view('PC.Layout.bd-map-2');
        }else{
            return view('PC.Layout.baidu_map');
        }
    }
}
