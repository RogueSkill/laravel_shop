<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Good;
use App\Type;
use App\Http\Requests;
use DB;


class GoodController extends Controller
{
    //产品列表页
    public function index()
    {

        $goods = DB::table('goods as g')->join('types as t','t.id','=','g.typeid')->select('g.goods_id','g.goods_name','g.sort','cover_img','t.name','g.updated_at');

        $goods = $goods->get();
        // var_dump($goods);
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
        // dump($request->all());

        $this->validate($request, [
            'goods_name' => 'required|min:3|max:30',
            'typeid' => 'required',
            'shop_price'=>'required',
            'created_at' => 'required'
        ],[
            'required' => ':attribute 是必填字段',
            'min' => ':attribute 必须不少于3个字符',
            'max' => ':attribute 必须少于30个字符',
        ],[
            'goods_name' => '商品名称',
            'typeid' => '分类名称',
            'shop_price'=>'商城价格',
            'created_at' => '发布时间',
        ]);

        // dd(1);

        // $messages = $validator->errors();

        // echo $messages->first('goods_name');

        if($request->isMethod('POST')){

            // var_dump($request->except('_token'));
            // exit;
            $goods_name = $request->input('goods_name');
            $typeid = $request->input('typeid');
            $goods_sn = $request->input('goods_sn');
            $shop_price = $request->input('shop_price');
            $mareket_price = $request->input('mareket_price');
            $cost_price = $request->input('cost_price');
            $goods_remake = $request->input('goods_remake');
            $goods_content = $request->input('goods_content');
            $sales_num = $request->input('sales_num');
            $is_on_sale = $request->input('is_on_sale');
            $is_recommend = $request->input('is_recommend');
            $is_new = $request->input('is_new');
            $is_hot = $request->input('is_hot');
            $store_count = $request->input('store_count');
            $click_num = $request->input('click_num');
            $created_at = $request->input('datetime');
            $original_img = $request->File('original_img');

            // $file = $request->File('original_img');
            // var_dump($original_img);

            $fileUrl = array();
            if(count($original_img) > 0){
                
                foreach($original_img as $val){
                    if(empty($val)){
                        continue;
                    }

                    $ext = $val->getClientOriginalExtension();     // 扩展名
                    $fileName = date('Y-m-d_H-i-s').uniqid().'.'.$ext;
                    $val->move('./upload', $fileName);
                    $fileUrl[] = $fileName;   
                }

            }
            $fileUrl = implode(',', $fileUrl);
            $goods = new Good();
            $goods->goods_name = $goods_name;
            $goods->typeid = $typeid;
            $goods->goods_sn = $goods_sn;
            $goods->shop_price = $shop_price;
            $goods->goods_remake = $goods_remake;
            $goods->goods_content = $goods_content;
            $goods->sales_num = $sales_num;
            $goods->is_on_sale = $is_on_sale;
            $goods->is_recommend = $is_recommend;
            $goods->is_new = $is_new;
            $goods->is_hot = $is_hot;
            $goods->store_count = $store_count;
            $goods->click_num = $click_num;
            $goods->created_at = $created_at;
            $goods->original_img = $fileUrl;

            $data_add = $goods->save();
            
            if($data_add){
                echo "<script>alert('添加成功');</script>";
                return redirect('/admin/goods_list');
            }
            
        }

    }

    //产品编辑页面显示
    public function edit($id)
    {
        $goodtypes = DB::table('types')->get();

        $goodsrow = Good::find($id);
        // dd($goodsrow['goods_id']);
        $orimg = explode(',', $goodsrow['original_img']);

        return view('admin/goods/edit', compact('goodtypes','goodsrow','orimg','id'));
    }

    //商品编辑处理页
    public function doEdit(Request $request)
    {
        // var_dump($request->all());
        // exit;
        $data = $request->except('_token');
        $data['cover_img'] = substr($data['cover_img'], 6);
        $id = $data['goods_id'];
        

        if($request->hasFile('file')){

            $ext = $request->file('file')->getClientOriginalExtension();     // 扩展名
            $fileName = date('Y-m-d_H-i-s').uniqid().'.'.$ext;
            $request->file('file')->move('./upload',$fileName);
            
            $original_img = DB::table('goods')->where('goods_id',$id)->pluck('original_img');
            $original_img = $original_img[0];
            $original_img .= ','.$fileName;
            DB::table('goods')->where('goods_id',$id)->update(['original_img'=>$original_img]);
        }
        unset($data['goods_id']);
        unset($data['file']);

        // dd($data);
        $boo = Good::where('goods_id',$id)->update($data);
        if($boo){
            return redirect('/admin/goods_list');
        }
    }

    // 商品编辑添加
    // public function addEditImg(Request $request)
    // {
    //     dump($request->all());
    //     $id = $request->input('id');
    //     $name = $request->input('name');
    //     $file = $request->file($name);
    //     dd($file);

    // }

    //商品编辑删除图片处理
    public function delEditImg(Request $request)
    {   
        // dd($request->all());

        $id = $request->input('id');
        $path = $request->input('path');
        $fileDir = './upload/';
        $fileName = $fileDir.$path;

        $url = DB::table('goods')->where('goods_id',$id)->pluck('original_img');
        $url = $url[0];
        $urlarr = explode(',', $url);
        $key = array_search($path,$urlarr);

            unset($urlarr[$key]);
            $url = implode(',', $urlarr);

            if($fileName){
                unlink($fileName);
            }

            $boo = DB::table('goods')->where('goods_id',$id)->update(['original_img'=>$url]);

        if($boo){
            echo 1;
        }else{
            echo 0;
        }

    }

    //删除商品
    public function del($id)
    {
        $original_img = DB::table('goods')->where('goods_id',$id)->pluck('original_img');
        $original_img = $original_img[0];
        $original = explode(',', $original_img);


        foreach($original as $val){

            unlink('./upload/'.$val);

        }

        $good = Good::find($id); 
        $good->delete();
    }
}
