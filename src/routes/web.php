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

Route::get('/chartman/welcome', 'App\Http\Controllers\EntrancePageController@index')
->name('chartman.welcome');

Route::get('/chartman/new/', function () {
    return view('new_flowchart');
})->name('chartman.new');

Route::post('/chartman/flowchart/new/', 'App\Http\Controllers\FlowchartPageController@getTitle')
->name('project.new');


// FlowchartPageController
<<<<<<< HEAD
Route::get('/chartman/flowcharts', 'App\Http\Controllers\FlowchartPageController@index')
=======
Route::get('chartman/flowcharts', 'App\Http\Controllers\FlowchartPageController@index')
>>>>>>> test-branch
->name('project.list'); // 一覧表示

Route::get('chartman/flowchart', 'App\Http\Controllers\FlowchartPageController@store')->name('project.store');

Route::post('chartman/flowchart', 'App\Http\Controllers\FlowchartPageController@create')
; // 新規作成


Route::get('/chartman/flowchart/{id}/{project_title}', 'App\Http\Controllers\FlowchartPageController@show')
->name('project.detail'); // 詳細ページ
// ここまで

// test用
Route::get('/newpost', 'App\Http\Controllers\NewpostController@store')->name('project.store');

Route::get('/insert', 'App\Http\Controllers\NewpostController@index');
Route::post('/newpost', 'App\Http\Controllers\NewpostController@create');


<<<<<<< HEAD
Route::get('/chartman/new/', function () {
    return view('new_flowchart');
});

Route::post('/chartman/flowchart/new/', 'App\Http\Controllers\FlowchartPageController@getTitle');
=======




// Route::get('/project/new', 'App\Http\Controllers\ProjectController@create')
// ->name('project.new'); // 新規作成




>>>>>>> test-branch

// テスト用ここまで

Auth::routes();

// Route::get('/top', [App\Http\Controllers\TopPageController::class, 'index'])->name('top');
