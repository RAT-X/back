<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class SampleController extends Controller
{
    // public function sample(Request $request){

    //     $project_title = $request->input('project_title');
    //     return view('new_flowchart', compact('project_title'));
    // }

    // public function showPage(Request $request){
    //     $project_title = $request->input('project_title');
    //     return view('layouts.base_layouts.fc_base_layout', compact('project_title'));
    // }



    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }
}
