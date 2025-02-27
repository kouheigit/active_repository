<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FilterComment
{
    /**
     * NGワードリスト
     */
    protected $ngWords = ['badword1', 'badword2', 'spamword']; // ここにNGワードを追加

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // コメントを取得
        $comment = $request->input('comment');

        if ($this->containsNgWord($comment)) {
            return response()->json(['error' => 'Your comment contains prohibited words.'], 403);
        }

        return $next($request);
    }

    /**
     * NGワードが含まれているかをチェック
     */
    protected function containsNgWord($text)
    {
        foreach ($this->ngWords as $ngWord) {
            if (stripos($text, $ngWord) !== false) {
                return true;
            }
        }
        return false;
    }
}
