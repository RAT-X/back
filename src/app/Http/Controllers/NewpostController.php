<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Chart;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;


class NewpostController extends Controller
{
    public function Newpost() {
        return view('newpost');
    }


    public function create(Request $request) {
        // 投稿したプロジェクトを受け取って変数に入れる
        $project_title = $request->input('project_title');
        $comment = $request->input('comment');

        // ログインしているユーザーIDを取得
        $user_id = Auth::id();

        DB::insert([
            "user_id" => $user_id,
            'project_title' => $project_title,
            'comment' => $comment,
        ]

        );

        return view('/');

    }

    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }
}
