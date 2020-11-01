<?php

namespace App\Http\Service;

/**
 *
 * CURL工具
 *
 * Class Curl
 * Created by Lane.
 * @Author: lane
 * @Mail: lixuan868686@163.com
 * @Date: 14-1-10
 * @Time: 下午4:22
 * Mail: lixuan868686@163.com
 * Website: http://www.lanecn.com
 */
class CurlLogic {

    /**
     * 构造方法，检测相关配置
     */
    public function __construct(){
    }
    private static $_ch;


    public static function callWebServer($queryUrl, $param='', $method='get', $is_json=true, $is_urlcode=true) {

        if (empty($queryUrl)) {
            return false;
        }
        $method = strtolower($method);
        $ret = '';
        $param = empty($param) ? array() : $param;
        self::_init();
        if ($method == 'get') {
            $ret = self::_httpGet($queryUrl, $param);
        } elseif($method == 'post') {
            $ret = self::_httpPost($queryUrl, $param, $is_urlcode);
        }
        if(!empty($ret)){
            if($is_json){
                return json_decode($ret, true);
            }else{
                return $ret;
            }
        }
        return true;
    }
    
    protected static function _init() {
        self::$_ch = curl_init();

        curl_setopt(self::$_ch, CURLOPT_HEADER, true);
        curl_setopt(self::$_ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt(self::$_ch, CURLOPT_FRESH_CONNECT, true);
    }

    public static function setOption($optArray=array()) {
        foreach($optArray as $opt) {
            curl_setopt(self::$_ch, $opt['key'], $opt['value']);
        }
    }

    private static function _close() {
        if (is_resource(self::$_ch)) {
            curl_close(self::$_ch);
        }

        return true;
    }

    private static function _httpGet($url, $query=array()) {

        if (!empty($query)) {
            $url .= (strpos($url, '?') === false) ? '?' : '&';
            $url .= is_array($query) ? http_build_query($query) : $query;
        }
//        dd($url);
        curl_setopt(self::$_ch, CURLOPT_URL, $url);
        curl_setopt(self::$_ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt(self::$_ch, CURLOPT_HEADER, 0);
        curl_setopt(self::$_ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt(self::$_ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt(self::$_ch, CURLOPT_SSLVERSION, 1);

        $ret= self::_execute();
        self::_close();
        return $ret;

    }

    private static function _httpPost($url, $query=array(), $is_urlcode=true) {
        if (is_array($query)) {
            foreach ($query as $key => $val) {
                if($is_urlcode){
                    $encode_key = urlencode($key);
                }else{
                    $encode_key = $key;
                }
                if ($encode_key != $key) {
                    unset($query[$key]);
                }
                if($is_urlcode){
                    $query[$encode_key] = urlencode($val);
                }else{
                    $query[$encode_key] = $val;
                }

            }
        }

        $header[] = "Content-type: application/json";
        curl_setopt(self::$_ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt(self::$_ch, CURLOPT_URL, $url);
        curl_setopt(self::$_ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt(self::$_ch, CURLOPT_HEADER, 0);
        curl_setopt(self::$_ch, CURLOPT_POST, true );
        curl_setopt(self::$_ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt(self::$_ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt(self::$_ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt(self::$_ch, CURLOPT_SSLVERSION, 1);


        $ret = self::_execute();
//        dd($ret );
        self::_close();
        return $ret;
    }

    private static function _put($url, $query = array()) {
        curl_setopt(self::$_ch, CURLOPT_CUSTOMREQUEST, 'PUT');

        return self::_httpPost($url, $query);
    }

    private static function _delete($url, $query = array()) {
        curl_setopt(self::$_ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

        return self::_httpPost($url, $query);
    }

    private static function _head($url, $query = array()) {
        curl_setopt(self::$_ch, CURLOPT_CUSTOMREQUEST, 'HEAD');

        return self::_httpPost($url, $query);
    }

    private static function _execute() {
        $response = curl_exec(self::$_ch);
        $errno = curl_errno(self::$_ch);

        if ($errno > 0) {
            throw new \Exception(curl_error(self::$_ch), $errno);
        }
        return  $response;
    }
}
