<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {

	// echo config('app.timezone');
	// dd($_ENV);
    // return view('welcome');
// });

//######################前台#################################
Route::get('/', 'HomeController@index');//首页
//Route::get('/Home/res','HomeController@res');//注册页
//Route::post('/Home/res', 'HomeController@res');//注册处理页
Route::get('/login','HomeController@login');//登录页
Route::resource('/bb', 'BbController');
//Route::post('/Home/login','HomeController@login');//登录处理页
//Route::get('/Home/cat', 'HomeController@cat');//分类页
//Route::get('/Home/prolist', 'HomeController@prolist');//产品列表页
//Route::get('/Home/prodetail', 'HomeController@prodetail');//产品详细页
//######################后台#################################
Route::get('/admin', 'AdminController@index');
//登录
Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/login', 'AdminController@login');
//网站设置页
Route::get('/admin/info', 'AdminController@info');
//用户模块
Route::get('/admin/user_list', 'AdminController@user_list');
Route::get('/admin/user_add', 'AdminController@user_add');
Route::get('/admin/user_edit', 'AdminController@user_edit');
Route::get('/admin/user_del', 'AdminController@user_del');
//商品分类模块
Route::get('/admin/cate_list', 'AdminController@cate_list');
Route::get('/admin/cate_add', 'AdminController@cate_add');
Route::get('/admin/cate_edit', 'AdminController@cate_edit');
Route::get('/admin/cate_del', 'AdminController@cate_del');
//商品模块
Route::get('/admin/goods_list', 'AdminController@goods_list');
Route::get('/admin/goods_add', 'AdminController@goods_add');
Route::get('/admin/goods_edit', 'AdminController@goods_edit');
Route::get('/admin/goods_del', 'AdminController@goods_del');
//订单模块
Route::get('/admin/order_list', 'AdminController@order_list');
Route::get('/admin/order_add', 'AdminController@order_add');
Route::get('/admin/order_edit', 'AdminController@order_edit');
Route::get('/admin/order_del', 'AdminController@order_del');

Route::get('/admin/admin_list', 'AdminController@admin_list');
Route::get('/admin/admin_edit', 'AdminController@admin_edit');


// Route::get('/admin', 'AdminController@index');
// Route::get('/admin', 'AdminController@index');
// Route::get('/admin', 'AdminController@index');
// Route::get('/admin', 'AdminController@index');
//Route::get('/Admin/login', 'AdminController@login');//后台登录
//Route::post('/Admin/login', 'AdminController@login');//后台登录处理



// Route::get('/user/{id}', function($id){
// 	dump($id);
// });

// Route::get('/user/{id}/commit/{c_id?}', function($id ,$c_id=null){
// 	return $id."---".$c_id;
// });


// Route::get('/page/{num?}' ,function($num=1){
// 	return $num;
// });

// Route::get('/page/{num?}', function($num=1){

// })->where('num','[0-9]+');

// Route::get('page/{name?}', function($name='type'){

// })->where('name','[a-zA-Z]+');

 // Route::get('pro', 'ProController@index')->name('p');

 // Route::get('/pro/{id}','ProController@index');
//---------------前台
 // Route::get('/home/','HomeController@index');
//---------------后台
 // Route::get('/admin/','AdminController@index');
//添加
 // Route::get('/admin/add','AdminController@add');
//修改
 // Route::get('/admin/edit/{id}',[
 // 		'as'=>'aedit',
 // 		'edit'=>'AdminController@edit'
 // 	]);
//删除
// Route::get('/admin/delete','AdminController@delete');
//登录
// Route::get('/admin/login/','AdminController@login');

//处理登录
// Route::post('/admin/dologin','AdminController@dologin');

// 127.0.0.1   localhost localhost.localdomain localhost4 localhost4.localdomain4
// ::1         localhost localhost.localdomain localhost6 localhost6.localdomain6

// Route::get('/pro','ProController@index');
