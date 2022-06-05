<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadFlowchartController extends Controller
{
    public function show() {
        return view('load_flowchart');
    }
}
