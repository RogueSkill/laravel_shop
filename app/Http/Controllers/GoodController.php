<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Good;
use App\Type;
use App\Http\Requests;
use DB;


class GoodController extends Controller
{
    //产品列表页
    public function index()
    {


        $goods = DB::table('goods as g')->join('types as t','t.id','=','g.typeid')->select('g.goods_id','g.goods_name','g.sort','original_img','t.name','g.updated_at');

        $goods = $goods->get();

    	return view('admin/goods/index', compact('goods'));
    }

    //产品页面显示
    public function add()
    {
        $goodtypes = DB::table('types')->get();
        // var_dump($goodtypes);
    	return view('admin/goods/add' ,compact('goodtypes'));
    }

    //产品处理页面
    public function doAdd(Request $request)
    {

        if($request->isMethod('POST')){

            var_dump($request->except('_token'));
            
            $file = $request->File('pic');
            // dd($file);
            if(count($file) > 0){

                foreach($file as $val){
                    if(empty($val)){
                        continue;
                    }

                    $ext = $val->getClientOriginalExtension();     // 扩展名
                    $fileName = date('Y-m-d_H-i-s').uniqid().'.'.$ext;
                    $val->move('./upload', $fileName);
                }

            }

        }


          // var_dump($img->getClientOriginalName());
        // echo count($request->hasFile('pic'));

        // if(count($request->hasFile('pic')) > 0){


          
        //     foreach($request->file('pic') as $val){

        //         $val->move('./upload', time().rand(0,999).'.jpg');    
        //     }
            
        // }



    }

}
