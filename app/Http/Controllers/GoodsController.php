<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goods;
use App\Http\Requests;

class GoodsController extends Controller
{
    //产品列表页
    public function index()
    {

    	// $goods = Goods::find(1);
    	$goods = Goods::find(1);

    	dd($goods->Types);
    	return view('admin/goods/index');
    }

    public function add()
    {
    	return view('admin/goods/add');
    }

}
