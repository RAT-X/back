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
Route::get('/flowchart', 'App\Http\Controllers\FlowchartPageController@show');

// test用
Route::get('/newpost', 'App\Http\Controllers\NewpostController@Newpost');

Route::get('/projects', 'App\Http\Controllers\ProjectController@index')
->name('project.list'); // 一覧表示

Route::get('/project/{id}/{project_title}', 'App\Http\Controllers\ProjectController@show')
->name('project.detail'); // 作成済みプロジェクトを開く(詳細ページ)


Route::get('/project/new', 'App\Http\Controllers\ProjectController@create')
->name('project.new'); // 新規作成
// Route::get('/project', 'App\Http\Controllers\ProjectController@store')
// ->name('project.store'); // 保存



// Route::get('/', function() {
//     return redirect('/projects');
// });
// テスト用ここまで

Auth::routes();

Route::get('/top', [App\Http\Controllers\TopPageController::class, 'index'])->name('top');
