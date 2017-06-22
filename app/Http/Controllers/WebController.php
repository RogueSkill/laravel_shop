<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebController extends Controller
{
    //首页
    public function index()
    {
        return view("web/index");
    }

    //登录页
    public function login()
    {
        return view("web/login");
    }

    //注册页
    public function register()
    {
        return view("web/register");
    }

    //商品详情页
    public function goods()
    {
        return view("web/goods");
    }

    //购物车页
    public function cart()
    {
        return view("web/cart");
    }

    //结算页
    public function pay()
    {
        return view("web/pay");
    }

    //结算成功页
    public function paysucceed()
    {
        return view("web/paysucceed");
    }

    //列表页
    public function lister()
    {
        return view("web/list");
    }

    //订单页
    public function order()
    {
        return view("web/order");
    }

    //用户中心页
    public function ucenter()
    {
        return view("web/center");
    }

    //地址管理页
    public function addres()
    {
        return view("web/addres");
    }
}
