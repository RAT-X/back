<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;


class NewpostController extends Controller
{
    public function index(Request $request)
    {
        $projects = DB::select('select * from projects');
        return view('insert', ['projects' => $projects]);
    }

    public function post(Request $request)
    {
        $projects = DB::select('select * from projects');
        return view('insert', ['projects' => $projects]);
    }

    public function store(Request $request)
    {
        return view('newpost');
    }

    public function create(Request $request)
    {
        $user_id = Auth::user()->id;

        $param = [
            'user_id' => $user_id,
            'project_title' => $request->project_title,
            'comment' => $request->comment,
        ];

        DB::table('projects')->insert($param);

        return redirect('/insert');
    }

    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }
}
