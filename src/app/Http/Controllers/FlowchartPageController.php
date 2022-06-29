<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class FlowchartPageController extends Controller
{
    public function index(Request $request)
    {
        $projects = DB::select('select * from projects');
        return view('project_list', ['projects' => $projects]);
    }

    public function post(Request $request)
    {
        $projects = DB::select('select * from projects');
        return view('project_list', ['projects' => $projects]);
    }

    public function show($id) {
        // return view('flowchart');
        $project = Project::find($id);

        return view('layouts.base_layouts.fc_base_layout', ['project' => $project]);
    }

    public function new(Request $request)
    {
        $project = DB::select('select * from projects');

        return view('layouts.base_layouts.test', ['project' => $project]);
    }

    public function store(Request $request)
    {
        return view('new_flowchart');
    }

    public function create(Request $request)
    {
        $user_id = Auth::user()->id;

        $param = [
            'user_id' => $user_id,
            'project_title' => $request->project_title,
        ];

        DB::table('projects')->insert($param);

        return redirect('project_list');
    }



    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }
}
