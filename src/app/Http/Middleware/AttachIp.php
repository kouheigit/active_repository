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
    public function handle(Request $request, Closure $next): Response
    {
        //ユーザーのIPを取得する
        $ip = $_SERVER['REMOTE_ADDR'];
        //スマホかPCかを判定するために、ユーザーエージェントを確認
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        //ユーザーのIPアドレスが「モバイル回線」なのか「固定回線」なのかを判定する方法として、IPアドレスの範囲やホスト名をチェック
        $host = gethostbyaddr($ip);

        //middlewareからControllerへの値の受け渡し
        $test_value = "テストバリューの成功です";
        $request->merge(['test_value' => $test_value]);




        return $next($request);
    }
}
