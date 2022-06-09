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
Route::get('/flowchart_users', 'App\Http\Controllers\FlowchartUsersController@show');
Route::get('/newpost', 'App\Http\Controllers\NewpostController@Newpost');

// テスト用ここまで

Auth::routes();

Route::get('/top', [App\Http\Controllers\TopPageController::class, 'index'])->name('top');
