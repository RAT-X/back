<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopPageController extends Controller
{
    // public function index(Request $request)
    // {
    //     $user = Auth::user();
    //     $sort = $request->sort;
    //     $items = Person::orderBy($sort, 'asc')
    //         ->simplePaginate(5);
    //     $param = ['items' => $items, 'sort' => $sort,
    //         'user' => $user];
    //     return view('top', $param);
    // }

        public function index() {
            return view('top');
        }

}
