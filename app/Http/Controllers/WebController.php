<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Pic;
use App\Type;
use App\Http\Requests;
use DB;

class WebController extends Controller
{
    //首页
    public function index(Request $request)
    {
        //前台广告
        $banner = DB::table('pics')->pluck('name');
        //右侧栏分类
        $typelist = DB::table('types')->where('pid',0)->limit(10)->get();
        foreach($typelist as $key=>$val){
            $typelist[$key]['child'] = DB::table('types')->where('pid',$val['id'])->get();
        }
       foreach ($typelist as $key => $val) {

            foreach($val['child'] as $k=>$v){
                $typelist[$key]['child'][$k]['son'] = DB::table('types')->where('pid',$val['child'][$k]['id'])->get();
            }

       }
       //推荐
       $recommend = DB::table('goods')->select('goods_id','goods_name','goods_remake','cover_img')->where('is_recommend',1)->orderBy('updated_at', 'desc')->limit(3)->get();

        return view('web/lar_index', compact('banner','typelist','recommend'));
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
    public function goods($id)
    {

           // dd($id);

        // $info = Good::find($id);
        // dd($info);
        // return view('web/goods',compact('info'));
        return view("web/lar_introduction");

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
        // return view("web/list");
        return view("web/lar_list");

    }

    //订单页
    public function order()
    {
        return view("web/order");
    }

//用户中心页
    public function ucenter(Request $request)
    {

        if(!$request->session()->has("webusername")) {
            echo "<script>alert('请先登录!');window.location.href='login';</script>";
        }
        $name =  $request->session()->get("webusername");

        $id = $name;

        $user_datas = DB::table('members')->where('username','=',$id)->get();

        $user_datas = $user_datas[0];

        return view('web/center')->with('user_datas',$user_datas);

    }

    //用户组中心修改
    public function ucenteradd()
    {
        $uname = $_POST['uname'];

        $add = DB::table('members')->where('username',$uname)->update(['pname'=>$_POST['pname'],'name'=>$_POST['name'],'sex'=>$_POST['sex'],'address'=>$_POST['address'],'code'=>$_POST['code'],'email'=>$_POST['uemail'],'phone'=>$_POST['uphone']]);

        if($add>0)
        {

            exit("<script>alert('资料修改成功');window.location.href='center'</script>");

        }else{

            exit("<script>alert('修改资料失败，请修改资料后在提交');window.location.href='center'</script>");

        }
    }

    //地址删除设置默认
    public function addres(Request $request)
    {
        if(!$request->session()->has("webusername")) {

            echo "<script>alert('请先登录!');window.location.href='login';</script>";

        }

        $uid =  $request->session()->get("webid");

        $addres_data = DB::table('addresses')->where('userid',$uid)->paginate(10);
//        dd($uid);
        if (isset($_GET['id']) == true && $_GET['perform'] == 'delete')
        {
            $delete = DB::table('addresses')->where('id',$_GET['id'])->delete();

            if ($delete > 0)
            {

                exit("<script>alert('删除成功');window.location.href='addres'</script>");

            }else{

                exit("<script>alert('删除失败');window.location.href='addres'</script>");

            }
        }

        if (isset($_GET['id']) == true && isset($_GET['perform']) == true)
        {
            DB::table('addresses')->where('userid',$_GET['perform'])->update(['status'=>0]);
            $status = DB::table('addresses')->where('id',$_GET['id'])->update(['status'=>1]);

            if ($status > 0)
            {

                exit("<script>alert('设置默认成功');window.location.href='addres'</script>");

            }else{

                exit("<script>alert('设置默认失败');window.location.href='addres'</script>");

            }
        }
//        dd($addres_data);
        return view("web/addres",compact('addres_data'));

    }

    //地址添加修改
    public function addresadd(Request $request)
    {
        $uid =  $request->session()->get("webid");

        if (isset($_POST['created_at']) == true)
        {
            $add = DB::table('addresses')->insert(['userid'=>$uid,'created_at'=>$_POST['created_at'],'province'=>$_POST['province'],'city'=>$_POST['city'],'county'=>$_POST['county'],'detailed_address'=>$_POST['uaddress'],'consignee'=>$_POST['uname'],'phone'=>$_POST['uphone'],'code'=>$_POST['code']]);

            if ($add)
            {

                exit("<script>alert('添加地址成功');window.location.href='addres'</script>");

            }else{

                exit("<script>alert('添加地址失败');window.location.href='addres'</script>");

            }
        }

    }

    //地址修改页输出
    public function addresedit($id,Request $request)
    {
        if(!$request->session()->has("webusername")) {

            echo "<script>alert('请先登录!');window.location.href='login';</script>";

        }

        $addres_data = DB::table('addresses')->where('id',$id)->paginate(10);

        $addres_data = $addres_data[0];

        return view("web/addresedat",compact('addres_data'));

    }

    //修改页提交
    public function addreseditadd()
    {
        $time = date('y-m-d h:i:s',time());

        $update = DB::table('addresses')->where('id',$_POST['addresid'])->update(['updated_at'=>$time,'province'=>$_POST['province'],'city'=>$_POST['city'],'county'=>$_POST['county'],'detailed_address'=>$_POST['uaddress'],'consignee'=>$_POST['uname'],'phone'=>$_POST['uphone'],'code'=>$_POST['code']]);

        if ($update > 0)
        {

            exit("<script>alert('修改地址成功');window.location.href='addres'</script>");

        }else{

            exit("<script>alert('修改地址失败');window.location.href='addres'</script>");

        }

    }



    //注册页Ajax请求处理
    public function registerAjax()
    {

        if(isset($_POST['email']) == false && isset($_POST['pass']) == false) {

            $username = $_POST['username'];

            $data = DB::table("members")->where("username","=",$username)->get();

            echo count($data);

        } else {

            $data = DB::table("members")->insert([

                "username"=>$_POST['username'],
                "email"=>$_POST['email'],
                "pass"=>password_hash($_POST['pass'],PASSWORD_DEFAULT)

            ]);
            echo $data;
        }

    }

    //登录页Ajax请求处理
    public function loginAjax(Request $request)
    {
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        //查询用户名是否存在
        $data = DB::table('members')->where('username', '=', $username)->get();

        $bool =  count($data);

        //大于0则存在
        if($bool > 0) {

          $data = DB::table('members')->where('username', '=', $username)->get();

            foreach($data as $val) {

               $password = $val['pass'];

               $bool =  password_verify($pass,$password);

               $id = $val['id'];
            }

        }

        if($bool){

            echo "1";
            $request->session()->put("webusername", $username);
            $request->session()->put("webid", $id);
        }else {

            echo "0";
        }


    }

    //用户退出
    public function quit(Request $request)
    {
        $request->session()->pull("webusername");
        $request->session()->pull("webid");
        echo "<script>alert(' 退出成功!');window.location.href='index';</script>";
    }

    //评论页输出
    public function message(Request $request)
    {
        if(!$request->session()->has("webusername")) {

            echo "<script>alert('请先登录!');window.location.href='login';</script>";

        }

        $uid =  $request->session()->get("webid");

        $page = DB::table('goods_comments')->where('userid',$uid)->join('goods','goods_comments.goodsid','=','goods.goods_id')->paginate(10);
//        dd($page);

        $data = DB::table('goods_comments')->where('userid',$uid)->join('goods','goods_comments.goodsid','=','goods.goods_id')->paginate(10);

        return view("web/message",compact('data','page'));
    }

    //评论页修改
    public function messageadd()
    {

        $update = DB::table('goods_comments')->where('id', $_POST['messageid'])->update(['message'=>$_POST['messageadd']]);

        if ($update > 0)
        {
            $time = date('y-m-d h:i:s',time());
            DB::table('goods_comments')->where('id', $_POST['messageid'])->update(['updated_at'=>$time,'content'=>0]);

            exit("<script>alert('修改评论成功');window.location.href='message'</script>");

        }else{

            exit("<script>alert('修改评论失败');window.location.href='message'</script>");

        }

    }
}


