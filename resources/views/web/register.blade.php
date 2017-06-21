@extends("web.master")
@section("title", "注册页")
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

    <!-- 注册表单 -->
    <div class="container">
        <div class="register-box">
            <div class="register">
                <div class="register-font">用户注册</div>
                <div class="register-form">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">邮箱:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="邮箱">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">密码:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="密码">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">注册</button>
                                <br>
                                <br>
                                <p><a href="{{url('login')}}">已有账号?马上登录</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
@endsection