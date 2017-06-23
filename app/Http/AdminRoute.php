<?php

	//用户模块
Route::get('/admin/user_list', 'BackUserController@user_list');
Route::get('/admin/user_add', 'BackUserController@user_add');
Route::get('/admin/user_edit/{id}', 'BackUserController@user_edit');
Route::post('/admin/update/{id}', 'BackUserController@update');
Route::post('/admin/insert', 'BackUserController@insert');
Route::get('/admin/user_del/{id}', 'BackUserController@user_del');

	//登录
Route::get('/admin/login', 'BackUserController@login');
Route::post('/admin/dologin', 'BackUserController@dologin');

	//退出登录
Route::get('/admin/logout','BackUserController@logout');
