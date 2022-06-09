<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show() {
        // return view('flowchart');
        return view('layouts.base_layouts.fc_base_layout');
    }

    public function create() {

    }

    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }
}
