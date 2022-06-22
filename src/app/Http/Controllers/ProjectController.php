<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{

    // public function store(Request $request)
    // {
    //     $newpost = new Newpost;
    //     $newpost->name = request('name');
    //     $newpost->comment = request('comment');
    //     $newpost->category_id = request('category_id');
    //     $newpost->save();
    //     return redirect()->route('shop.detail', ['id' => $newpost->id]);
    // }

    public function index(Request $request)
    {
        $projects = Project::with('User')->get();
        return view('project_list', ['projects' => $projects]);
    }

    // public function index()
    // {
    //     $projects = \App\Models\Project::all();

    //     return view('project_list', compact('projects'));
    // }

    public function show($id, $project_title)
    {
        $project = Project::find($id);

        return view('user_project', ['project' => $project]);
    }


    public function create()
    {
        //
    }

    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }
}
