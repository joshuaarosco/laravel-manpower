<?php

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

Route::get('/',['as' => "index",'uses' => "PageController@index"]);

Route::group(['as' => "workforce.", 'prefix' => "workforce"], function(){
    Route::get('/',['as' => "index", 'uses' => "WorkforceController@index"]);
    Route::get('view/{id}',['as' => "view", 'uses' => "WorkforceController@view"]);
});

Route::group(['as' => "jobs.", 'prefix' => "jobs"], function(){
    Route::get('/',['as' => "index", 'uses' => "JobsController@index"]);
    Route::get('view/{id}',['as' => "view", 'uses' => "JobsController@view"]);
});