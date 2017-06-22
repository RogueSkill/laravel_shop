<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
// use Illuminate\Pagination\LengthAwarePaginator;
use DB;
class BackUserController extends BaseController
{

    public function user_list(Request $request)
    {
        $user = User::paginate(5)->all();
//        dd($user);
    	return view('admin/user/index',compact('user'));
    }

    //用户添加
    public function user_add()
    {
    	// echo '编辑的'.$id;

    	return view('admin/user/add');
    }


    //用户添加执行操作
    public function insert(Request $request){
        //表单验证
//        $this->validata($request, [
//            'username'=>'required|min:3|max:10',
//                'pass'=>'required',
//                'phone'=>'required',
//                'email'=>'required'
//        ],[
//                'required'=>':attribute是必填字段',
//                'min'=>':attribute必须大于3个字符',
//                'max'=>':attribute不能大于10个字符',
//            ],[
//                'username'=>'用户名',
//                'pass'=>'密码',
//                'phone'=>'电话号码',
//                'email'=>'电子邮箱',
//            ]
//        );


       $data = $request->only(['username','pass','sex','address','code','phone','email','state','level']);

        if (DB::table('users')->insert($data)) {
            return redirect('/admin/user_list')->with(['success' => '添加成功！！！！！！！']);
        } else {
            return back()->withInput();
        }

    }


    //用户编辑
    public function user_edit($id)
    {
        $data = User::find($id);
//        dd($data);
        return view('admin/user/edit',compact('data'));
    }

    public  function  update(Request $request, $id)
    {
//        dd($id);
        if(User::where('id','=',$id)->update(['username'=>$request->username,
                                                'pass'=>$request->pass,
                                                'sex'=>$request->sex,
                                                'address'=>$request->address,
                                                'code'=>$request->code,
                                                'phone'=>$request->phone,
                                                'email'=>$request->email,
                                                'state'=>$request->state,
                                                'level'=>$request->level
                                               ])
           ){
                return redirect('/admin/user_list');
            }else{
                return back();
                  }
    }

    //用户删除
    public function user_del($id)
    {
//        dd($id);
    	if(User::destroy($id))
    	return redirect('/admin/user_list');
    	// $url = route('del');
    }
}
