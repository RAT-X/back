<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

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

    public function index()
    {
        $projects = \App\Models\Project::all();

        return view('project_list', compact('projects'));
    }

    public function show($project_number)
    {
        // $project = \App\Models\Project::find($project_number);
        $project_number = $request->project_number;
        return view('user_project', compact('project_number'));
    }

    public function create()
    {

    }

    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }
}
