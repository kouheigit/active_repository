<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AttachIp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    //後で消す
    /*
    function getUserIpp()
    {
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach ($ipList as $ip) {
                $ip = trim($ip);
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                    return $ip;
                }
            }
        }

        if (!empty($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }

        return $_SERVER['REMOTE_ADDR'];
    }*/

    public function getUserIp()
    {
        $ipList = [];
        if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ipList = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
        }
        return $ipList;
    }
    public function handle(Request $request, Closure $next): Response
    {
        /*
        ユーザーのIPを取得する
        $ip = $_SERVER['REMOTE_ADDR'];
        スマホかPCかを判定するために、ユーザーエージェントを確認
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        ユーザーのIPアドレスが「モバイル回線」なのか「固定回線」なのかを判定する方法として、IPアドレスの範囲やホスト名をチェック
        */
        //$host = gethostbyaddr($ip);
        $ip =

       // $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $userAgent = $this->getUserIp();
        dd($userAgent[0]);

            //middlewareからControllerへの値の受け渡し
        $test_value =  $userAgent;
        $request->merge(['test_value' => $test_value]);
        return $next($request);
    }
}
