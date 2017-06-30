<?php

/*
 * 前台路由
 */

//首页
Route::get("/","WebController@index");

//登录页
Route::get("login", "WebController@login");

//注册页
Route::get("register", "WebController@register");

//商品详情页
Route::get("goods/{goods_id}", "WebController@goods");

//购物车页
Route::get("cart", "WebController@cart");

//结算页
Route::get("pay", "WebController@pay");

//结算成功页
Route::get("paysucceed", "WebController@paysucceed");

//列表页
Route::get("list", "WebController@lister");

//订单页
Route::get("order", "WebController@order");

//用户中心页
Route::get("center", "WebController@ucenter");

//地址管理页
Route::get("addres", "WebController@addres");

//注册页ajax请求地址
Route::post("registerAjax", "WebController@registerAjax");

//登录页ajax请求地址
Route::post("loginAjax", "WebController@loginAjax");
