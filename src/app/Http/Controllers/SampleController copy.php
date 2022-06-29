<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class SampleController extends Controller
{
    public function sample(Request $request){
        $sample = $request->input('sample');
        return view('sample', compact('sample'));
    }

    public function showPage(Request $request){
        $userName = $request->input('user_name');
        $age = $request->input('age');
        return view('sampletransition', compact('userName', 'age'));
    }



    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }
}
