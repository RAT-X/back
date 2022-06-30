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

Route::get('/', function() {
    return redirect('/chartman/top');
});

Route::get('/chartman/top', 'App\Http\Controllers\TopPageController@index')->name('chartman.top');

Route::get('/chartman/welcome', 'App\Http\Controllers\EntrancePageController@index');

Route::get('/load_flowchart', 'App\Http\Controllers\LoadFlowchartController@show');

// FlowchartPageController
Route::get('/flowcharts', 'App\Http\Controllers\FlowchartPageController@index')
->name('project.list'); // 一覧表示

Route::get('/flowchart', 'App\Http\Controllers\FlowchartPageController@store')->name('project.store');

Route::post('/flowchart', 'App\Http\Controllers\FlowchartPageController@create')
->name('project.new'); // 新規作成


Route::get('/flowchart/{id}/{project_title}', 'App\Http\Controllers\FlowchartPageController@show')
->name('project.detail'); // 詳細ページ
// ここまで

// test用
Route::get('/newpost', 'App\Http\Controllers\NewpostController@store')->name('project.store');

Route::get('/insert', 'App\Http\Controllers\NewpostController@index');
Route::post('/newpost', 'App\Http\Controllers\NewpostController@create');






// Route::get('/project/new', 'App\Http\Controllers\ProjectController@create')
// ->name('project.new'); // 新規作成



Route::get('/chartman/new/', function () {
    return view('new_flowchart');
});

Route::post('/flowchart/new/', 'App\Http\Controllers\FlowchartPageController@getTitle');

// テスト用ここまで

Auth::routes();

// Route::get('/top', [App\Http\Controllers\TopPageController::class, 'index'])->name('top');
