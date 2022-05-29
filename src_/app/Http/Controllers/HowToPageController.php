<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HowToPageController extends Controller{
   public function show(){
       return view('howto');
	}
}
