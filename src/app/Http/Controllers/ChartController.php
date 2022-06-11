<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $charts = Chart::all();
        return view('project_list', ['charts' => $charts]);
    }

    // public function store(Request $request)
    // {
    //     $newpost = new Newpost;
    //     $newpost->name = request('name');
    //     $newpost->comment = request('comment');
    //     $newpost->category_id = request('category_id');
    //     $newpost->save();
    //     return redirect()->route('shop.detail', ['id' => $newpost->id]);
    // }
}
