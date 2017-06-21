@extends("web.master")
@section("title", "登录页")
@section("content")
    <div style="display: block; margin-top:52px;"></div>
    <!-- 路径导航 -->
    <div class="container">
    <ol class="breadcrumb">
    <li><a href="#">首页</a></li>
    <li class="active">登录</li>
    </ol>
    </div>
    <!-- end -->

    <!-- 登录表单 -->
    <div class="container">
        <div class="login-box">
            <div class="login">
                <div class="login-font">用户登录</div>
                <div class="login-form">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">邮箱:</label>
                            <div class="col-sm-10">
                                <input type="email" name="uname"  class="form-control" id="inputEmail3" placeholder="邮箱">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">密码:</label>
                            <div class="col-sm-10">
                                <input type="password" name="upass" data-tip="请输入长度大于6的密码" class="form-control" id="inputPassword3" placeholder="密码">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success submit">登录</button>
                                <br>
                                <br>
                                <p><a href="{{url('login')}}">还没有账号?马上注册</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
@endsection