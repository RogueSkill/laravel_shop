<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Pic;
use App\Http\Requests;
use DB;

class WebController extends Controller
{
    //首页
    public function index(Request $request)
    {

        //轮播图
        $pic = Pic::paginate(3);

        //最新商品
        $user = Good::where('is_on_sale','1')->paginate(8);

        //热卖商品
        $hotsale = Good::where('is_hot','1')->paginate(8);


        return view('web/index',compact('pic','user','hotsale'));




        // return view('web/index',compact('hotsale'));
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

        $info = Good::find($id);
        // dd($info);
        return view('web/goods',compact('info'));
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
    public function loginAjax()
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
            }

        }

        if($bool){

            echo "1";
        }else {

            echo "0";
        }


    }

}
