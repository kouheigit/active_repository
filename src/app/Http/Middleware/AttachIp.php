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
        //①プロキシ（VPNやCDNなど）を通過した場合に割り出す処理
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipList = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach($ipList as $ip){
                $ip = trim($ip);
                if(filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_NO_PRIV_RANGE|FILTER_FLAG_NO_RES_RANGE)) {
                    return $ip;
                }
            }
        }
        //①終了

        //現在は滅多に使用されない処理だがIPを割り出す処理
        if (!empty($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }

        return $_SERVER['REMOTE_ADDR'];
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
        $ipAddress = $this->getuserIp();

        //middlewareからControllerへの値の受け渡し
       // $test_value = "テストバリュー";
        $request->merge(['ipAddress' => $ipAddress]);
        return $next($request);
    }
}
