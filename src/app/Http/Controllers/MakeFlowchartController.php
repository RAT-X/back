<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeFlowchartController extends Controller
{
    public function show() {
        return view('create_flowchart');
    }
}
