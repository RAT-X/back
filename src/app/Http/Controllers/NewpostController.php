<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;


class NewpostController extends Controller
{
    public function Newpost() {
        return view('newpost');
    }

    public function create(Request $request) {
        // 投稿したプロジェクトを受け取って変数に入れる
        $name = $request->input('project_title');
        $comment = $request->input('comment');

        post::insert(["project_title" => $project_title, "comment" => $comment]);
    }

    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }
}
