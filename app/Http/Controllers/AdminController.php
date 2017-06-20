<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
class AdminController extends BaseController
{
    public function index()
    {

    	return view('admin/index');
    }

    //后台网站设置页面
    public function info()
    {
        return view('admin/info');
    }

    /**
    *
    *********************************************用户模块****************************************
    */
    //用户列表
    public function user_list()
    {

    	return view('admin/user/index');
    }

    //用户添加
    public function user_add()
    {
    	// echo '编辑的'.$id;
    	return view('admin/user/add');
    }
    
    //用户编辑
    public function user_edit()
    {
        return view('admin/user/edit');
    }

    //用户删除
    public function user_del()
    {
    	echo '删除';
    	return view('admin/user/del');
    	// $url = route('del');
    }

    /**
    *
    *********************************************登录模块****************************************
    */
    //登录模块
    public function login()
    {
    	echo '登录';
    	return view('admin/login');
    }
    //提交登录
    public function dologin()
    {

    	return view('admin/dologin');
    }

    /**
    *
    *********************************************商品分类模块****************************************
    */
    //商品分类
    public function cate_list()
    {
        return view('admin/cate/index');
    }

    //商品分类添加
    public function cate_add()
    {
        return view('admin/cate/add');
    }

     //商品分类编辑
    public function cate_edit()
    {
        return view('admin/cate/edit');
    }

    //商品分类删除
    public function cate_del()
    {
        return view('admin/cate/del');
    }

    /**
    *
    *********************************************商品管理模块****************************************
    */

    //商品管理
    public function goods_list()
    {
        return view('admin/goods/index');
    }

    //商品添加
    public function goods_add()
    {
        return view('admin/goods/add');
    }

     //商品编辑
    public function goods_edit()
    {
        return view('admin/goods/edit');
    }

    //商品删除
    public function goods_del()
    {
        return view('admin/goods/del');
    }

    /**
    *
    *********************************************订单模块****************************************
    */

    //订单管理
    public function order_list()
    {
        return view('admin/order/index');
    }

    //订单添加
    public function order_add()
    {
        return view('admin/order/add');
    }

     //订单编辑
    public function order_edit()
    {
        return view('admin/order/edit');
    }

    //订单删除
    public function order_del()
    {
        return view('admin/order/del');
    }

    /**
    *
    *********************************************管理员模块****************************************
    */

    //管理员模块
    public function admin_list()
    {
        return view('admin/admin/index');
    }

    //管理员添加
    public function admin_add()
    {
        return view('admin/admin/add');
    }

     //管理员编辑
    public function admin_edit()
    {
        return view('admin/admin/edit');
    }

    //管理员删除
    public function admin_del()
    {
        return view('admin/admin/del');
    }


}


