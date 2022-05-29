<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class FrequentlyAskedQuestionsController extends Controller{
   public function show(){
       return view('faq',);
	}
}
