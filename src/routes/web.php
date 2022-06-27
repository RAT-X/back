<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'App\Http\Controllers\TopPageController@index')->name('top');
Route::get('/top', 'App\Http\Controllers\TopPageController@index');

Route::get('/welcome', 'App\Http\Controllers\WelcomeController@show');
Route::get('/create_flowchart', 'App\Http\Controllers\MakeFlowchartController@show');
Route::get('/load_flowchart', 'App\Http\Controllers\LoadFlowchartController@show');


Route::get('/flowcharts', 'App\Http\Controllers\FlowchartPageController@index')
->name('project.list'); // 一覧表示

Route::get('/flowchart/{id}/{project_title}', 'App\Http\Controllers\FlowchartPageController@show')
->name('project.detail');

// test用
Route::get('/newpost', 'App\Http\Controllers\NewpostController@store')->name('project.store');

Route::get('/insert', 'App\Http\Controllers\NewpostController@index');
Route::post('/newpost', 'App\Http\Controllers\NewpostController@create');



Route::get('/project/new', 'App\Http\Controllers\ProjectController@create')
->name('project.new'); // 新規作成



Route::get('/project/new', 'App\Http\Controllers\ProjectController@create')
->name('project.new'); // 新規作成




// Route::get('/', function() {
//     return redirect('/projects');
// });
// テスト用ここまで

Auth::routes();

Route::get('/top', [App\Http\Controllers\TopPageController::class, 'index'])->name('top');
