<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlowchartPageController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::with('User')->get();
        return view('project_list', ['projects' => $projects]);
    }

    
    public function show($id) {
        // return view('flowchart');
        $project = Project::find($id);

        return view('layouts.base_layouts.fc_base_layout', ['project' => $project]);
    }
}
