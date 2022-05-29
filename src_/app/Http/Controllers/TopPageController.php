<?php

namespace App\Http\Controllers;

#use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopPageController extends Controller
{
    public function show()
    {
        return view('top');
    }
}
