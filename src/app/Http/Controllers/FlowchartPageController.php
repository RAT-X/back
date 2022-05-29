<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlowchartPageController extends Controller
{
    public function show() {
        return view('flowchart');
    }
}
