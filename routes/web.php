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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'danh-muc'],function(){
        Route::get("them",[
            'as'=>'themdanhmuc',
            'uses'=>'CategoryController@getAddCategory'
        ]);
        Route::get("them",[
            'as'=>'themdanhmuc',
            'uses'=>'CategoryController@postAddCategory'
        ]);
        Route::get("danh-sach",[
            'as'=>'listdanhmuc',
            'uses'=>'CategoryController@getListCategory'
        ]);
    });
});
