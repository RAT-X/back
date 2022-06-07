<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProjectListController extends Controller
{
    public function show() {
        return view('user_project_list');
    }
}
