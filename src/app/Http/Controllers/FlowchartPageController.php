<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlowchartPageController extends Controller
{
    public function show() {
        // return view('flowchart');
        return view('layouts.base_layouts.fc_base_layout');
    }
}
