<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
// use Illuminate\Http\Request\CreatePostRequest;
// use Illuminate\Pagination\LengthAwarePaginator;
use DB;
class AdminController extends BaseController
{
    public function index()
    {

        $data = DB::table('users')->get();
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



//     public function user_list(Request $request)
//     {
//         $user = User::paginate(5)->all();
// //        dd($user);
//     	return view('admin/user/index',compact('user'));
//     }

//     //用户添加
//     public function user_add()
//     {
//     	// echo '编辑的'.$id;

//     	return view('admin/user/add');
//     }


//     //用户添加执行操作
//     public function insert(Request $request){
//         //表单验证
// //        $this->validata($request, [
// //            'username'=>'required|min:3|max:10',
// //                'pass'=>'required',
// //                'phone'=>'required',
// //                'email'=>'required'
// //        ],[
// //                'required'=>':attribute是必填字段',
// //                'min'=>':attribute必须大于3个字符',
// //                'max'=>':attribute不能大于10个字符',
// //            ],[
// //                'username'=>'用户名',
// //                'pass'=>'密码',
// //                'phone'=>'电话号码',
// //                'email'=>'电子邮箱',
// //            ]
// //        );


//        $data = $request->only(['username','pass','sex','address','code','phone','email','state','level']);

//         if (DB::table('users')->insert($data)) {
//             return redirect('/admin/user_list')->with(['success' => '添加成功！！！！！！！']);
//         } else {
//             return back()->withInput();
//         }

//     }


//     //用户编辑
//     public function user_edit($id)
//     {
//         $data = User::find($id);
// //        dd($data);
//         return view('admin/user/edit',compact('data'));
//     }

//     public  function  update(Request $request, $id)
//     {
// //        dd($id);
//         if(User::where('id','=',$id)->update(['username'=>$request->username,
//                                                 'pass'=>$request->pass,
//                                                 'sex'=>$request->sex,
//                                                 'address'=>$request->address,
//                                                 'code'=>$request->code,
//                                                 'phone'=>$request->phone,
//                                                 'email'=>$request->email,
//                                                 'state'=>$request->state,
//                                                 'level'=>$request->level
//                                                ])
//            ){
//                 return redirect('/admin/user_list');
//             }else{
//                 return back();
//                   }
//     }

//     //用户删除
//     public function user_del($id)
//     {
// //        dd($id);
//     	if(User::destroy($id))
//     	return redirect('/admin/user_list');
//     	// $url = route('del');
//     }

//     /**
//     *
//     *********************************************登录模块****************************************
//     */
//     //登录模块
//     public function login()
//     {
//     	echo '登录';
//     	return view('admin/login');
//     }
//     //提交登录
//     public function dologin()
//     {

//     	return view('admin/dologin');
//     }

    /**
    *
    *********************************************商品分类模块****************************************
    */
    //商品分类
    public function cate_list()
    {
        $types_page = DB::table('types')->paginate(10);

        $types_data = DB::table('types')->paginate(10);

        return view('admin/cate/index', compact('types_data','types_page'));
    }

    //商品分类添加显示
    public function cate_add()
    {
        $types = DB::table('types')->get();
        return view('admin/cate/add',compact('types'));
    }

    //商品分类添加
    public function doCateAdd(Request\CreatePostRequest $request)
    {

        $this->validate($request, [
            'title' => 'required|min:3|max:30',
            // 'content' => 'required',
            // 'published_at' => 'required'
        ],[
            'required' => ':attribute 是必填字段',
            'min' => ':attribute 必须不少于3个字符',
            'max' => ':attribute 必须少于30个字符',
        ],[
            'title' => '文章标题',
            // 'content' => '文章内容',
            // 'published_at' => '发布时间',
        ]);
        
      //判断是不是传递过来的值
      if(!$request->has('id') || !$request->has('title')){
        return back();
      }

      $id = 0;
      $path = '0,';

      if($request->input('id') !=0){
            $id = $request->input('id');
            $path = DB::table('types')->where('id',$id)->pluck('path');
            $path = $path[0].$id.',';
      }

      $name = $request->input('title');
      $created_at = date("Y-m-d H:i:s");
            

      $type_add = DB::table('types')->insert(['name'=>$name,'pid'=>$id,'path'=>$path,'created_at'=>$created_at]);
      // if($type_add){
      //    echo "<script>alert('添加成功')</script>";
      //    return view('/admin/cate_list');
      //    return redirect('/admin/cate_list');
      // }
       //1. 使用 请求 Request $request->all()
        // $post = $request->all();
//        dd($post);
        if ($type_add) {
            return redirect('/admin/cate_list')->with(['success' => '添加成功！！！！！！！']);
        } else {
            return back()->withInput();
        }

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
        $user_admin = DB::table('users')->where('level','<=','3')->paginate(10);

        $users_page = DB::table('users')->paginate(10);
        // dump($user_admin);
        return view('admin/admin/index',compact('user_admin','users_page'));
    }

    //管理员添加
    public function admin_add()
    {

        return view('admin/admin/add');
    }

    public function doAdminAdd()
    {
        $add_user['username'] = $_POST['username'];
        $add_user['pass'] = $_POST['pass'];
        $add_user['level'] = $_POST['level'];
        $bloon = DB::table('users')->insert($add_user);
        if($bloon){
            echo "<script>alert('添加成功')</script>"; 
            return view('admin/admin/add');
  
        }
        return view('admin/admin/add');
    }

     //管理员编辑
    public function admin_edit($id)
    {
        $user_data = DB::table('users')->where('id',$id)->get();
        $user_data = $user_data[0];
        // dd($user_data);
        return view('admin/admin/edit',compact('user_data'));
    }

    public function doAdminEdit()
    {
        $id = $_POST['id'];
        $edit_user['username'] = $_POST['username'];
        $edit_user['pass'] = $_POST['pass'];
        $edit_user['level'] = $_POST['level'];
        $booln = DB::table('users')->where('id',$id)->update(['username'=>$_POST['username'],'pass'=>$_POST['pass'],'level'=>$_POST['level']]);
        if($booln){
            echo "<script>alert('修改成功')</script>"; 
            return redirect('/admin/admin_list/');
        }


    }
    //管理员删除
    public function admin_del($id)
    {

        $userid = DB::table('users')->where('id',$id)->delete();
        if($userid){
             echo "<script>alert('删除成功')</script>"; 

            return redirect('/admin/admin_list/');
        }
        
    }


}


