<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewpostController extends Controller
{
    public function Newpost() {
        return view('newpost');
    }
}
