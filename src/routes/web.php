<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/flowchart', 'App\Http\Controllers\FlowchartPageController@show');

// test用
Route::get('/user_project_list', 'App\Http\Controllers\UserProjectListController@show');
Route::get('/newpost', 'App\Http\Controllers\NewpostController@Newpost');

Route::get('/projects', 'App\Http\Controllers\ProjectController@index')
->name('/project.list'); // 一覧表示
Route::get('/project/new', 'App\Http\Controllers\ProjectController@create')
->name('project.new'); // 新規作成
Route::get('/project', 'App\Http\Controllers\ProjectController@store')
->name('project.store'); // 保存

Route::get('/flowchart_user/{id}/{project_title}', 'App\Http\Controllers\ProjectController@show')
->name('project.detail'); // 作成済みプロジェクトを開く(詳細ページ)
// テスト用ここまで

Auth::routes();

Route::get('/top', [App\Http\Controllers\TopPageController::class, 'index'])->name('top');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// 後で消す
Route::get('/posttester', function(){
    return view('json_post_tester');
});
Route::post('/posttester', function(){
    return view('json_post_tester');
});
