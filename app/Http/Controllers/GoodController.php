<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Http\Requests;

class GoodController extends Controller
{
    //产品列表页
    public function index()
    {

    	// $goods = Goods::find(1);
    	$good = Good::find(1);
        $goods = $good->Type;
    	dump($good->Type);
        // foreach($good as $val){
        //     echo $val['username'];
        // }
    	return view('admin/goods/index', compact('goods'));
    }

    public function add()
    {
    	return view('admin/goods/add');
    }

}
