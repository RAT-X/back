<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // return view('flowchart');
        return view('project');
    }

    public function store(Request $request)
    {
        $newpost = new Newpost;
        $newpost->name = request('name');
        $newpost->comment = request('comment');
        $newpost->category_id = request('category_id');
        $newpost->save();
        return redirect()->route('shop.detail', ['id' => $newpost->id]);
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
