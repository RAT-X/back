<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrancePageController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function titleSend(Request $request){

        $project_title = $request->input('project_title');
        return view('new_flowchart', compact('project_title'));
    }





    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }
}
