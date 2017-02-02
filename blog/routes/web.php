<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('test',function(){
	return view('admin/recruit/add');
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'recruit'],function(){
		Route::get('list',['as'=>'admin.recruit.list','uses'=>'RecruitmentController@getList']);
		Route::get('add',['as'=>'admin.recruit.getAdd','uses'=>'RecruitmentController@getAdd']);
		Route::post('add',['as'=>'admin.recruit.postAdd','uses'=>'RecruitmentController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.recruit.getDelete','uses'=>'RecruitmentController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.recruit.getEdit','uses'=>'RecruitmentController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.recruit.postEdit','uses'=>'RecruitmentController@postEdit']);
	});
});
