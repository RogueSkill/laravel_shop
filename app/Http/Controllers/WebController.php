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
        //判断username是否存在session中,存在则赋值到首页
        $bool =  $request->session()->has("webusername");

        if($bool) {
            $username =  $request->session()->get("webusername");

            return view('web/lar_index', compact('username'));
        } else {

            return view('web/lar_index');
        }


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
    public function goods(Request $request, $id)
    {
        //查询商品表拿到商品详细信息
        $data = DB::table('goods')->where("goods_id", $id)->get();

        //返回的是二维数组所以得转成一维数组赋值到首页
        $data = $data[0];

        //判断username是否存在session中,存在则赋值到首页
        $bool =  $request->session()->has("username");

        if($bool) {
            $username =  $request->session()->get("username");

            return view('web/lar_introduction', compact('username', 'data'));
        } else {

            return view('web/lar_introduction', compact('data'));
        }


    }

    //购物车页
    public function cart()
    {
        return view("web/cart");
    }

    //结算页
    public function pay(Request $request, $id)
    {
        if(!$request->session()->has("webusername")) {
            echo "<script>alert('请先登录!');window.location.href='http://localhost/Laravel/ShopCenter/public/login'</script>";

        }

        //商品数据
        $data = DB::table('goods')->where('goods_id', $id)->get();

        //拿到当前用户的ID
       $userid =  $request->session()->get("webid");

        //地址数据
        $addressData = DB::table("addresses")->where("userid", $userid)->get();

        return view("web/pay", compact("data", "addressData"));



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
        $name =  $request->session()->get("id");
        $uid = $name;

        $addres_data = DB::table('addresses')->where('id',$uid)->paginate(10);

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

        return view("web/addres",compact('addres_data'));

    }

    //地址添加修改
    public function addresadd(Request $request)
    {
        $name =  $request->session()->get("id");
        $uid = $name;

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

        if (isset($_POST['updated_at']) == true && isset($_POST['addresid']) == true) {

            $update = DB::table('addresses')->where('id',$_POST['addresid'])->update(['updated_at'=>$_POST['updated_at'],'province'=>$_POST['province'],'city'=>$_POST['city'],'county'=>$_POST['county'],'detailed_address'=>$_POST['uaddress'],'consignee'=>$_POST['uname'],'phone'=>$_POST['uphone'],'code'=>$_POST['code']]);

            if ($update > 0)
            {

                exit("<script>alert('修改地址成功');window.location.href='addres'</script>");

            }else{

                exit("<script>alert('修改地址失败');window.location.href='addres'</script>");

            }
        }


    }

    //注册页Ajax请求处理
    public function registerAjax()
    {

        if(isset($_POST['email']) == false && isset($_POST['pass']) == false) {

            $username = $_POST['username'];

            $data = DB::table("members")->where("username","=",$username)->get();

            echo count($data);

        }else if(isset($_POST['pass']) == false) {

            $email = $_POST['email'];

            $data = DB::table('members')->where('email',$email)->get();

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

        $name =  $request->session()->get("id");

        $id = $name;

        $page = DB::table('goods_comments')->where('userid',$id)->join('goods','goods_comments.goodsid','=','goods.goods_id')->paginate(10);
//        dd($page);

        $data = DB::table('goods_comments')->where('userid',$id)->join('goods','goods_comments.goodsid','=','goods.goods_id')->paginate(10);

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

    //城市三级联动
    public function cityModel()
    {
        $upid = $_GET['upid'];

        $data = DB::table('district')->where('upid', $upid)->get();

        echo json_encode($data);
    }

    //支付页添加地址
    public function payAddress(Request $request)
    {
       $consignee = $_POST['consignee'];
       $phone = $_POST['phone'];
       $province = $_POST['province'];
       $city = $_POST['city'];
       $county = $_POST['county'];
       $detailed_address = $_POST['detailed_address'];
       $code = $_POST['code'];

       //拿到存在session里面的用户id
       $userid =  $request->session()->get("webid");

       //判断收货人,用户ID,收货地址,手机号码,地区是否存在,存在则不添加(禁止添加同样的数据)
        $formerly = DB::table("addresses")->where([
            "userid"=>$userid,
            "consignee"=>$consignee,
            "phone"=>$phone,
            "province"=>$province,
            "city"=>$city,
            "county"=>$county,
            "detailed_address"=>$detailed_address
            ])->get();

        if(count($formerly) > 0) {

            echo "2";
        } else {

            //写入数据库
            $data = DB::table("addresses")->insert([

                "userid"=>$userid,
                "consignee"=>$consignee,
                "phone"=>$phone,
                "province"=>$province,
                "city"=>$city,
                "county"=>$county,
                "detailed_address"=>$detailed_address,
                "code"=>$code,
                "status"=>0
            ]);
            echo $data;
        }


    }

}


