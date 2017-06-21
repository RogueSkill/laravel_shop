@extends("web.master")
@section("title", "用户中心页")
@section("content")

    <div style="display: block; margin-top:52px;"></div>

    <!-- 路径导航 -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">首页</a></li>
            <li class="active">用户中心</li>
        </ol>
    </div>
    <!-- end -->

    <!-- 用户信息 -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4>用户中心</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active">
                                <a href="#">
                                    <span class="glyphicon glyphicon-user"></span>
                                    我的资料
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-flag"></span>
                                    地址管理
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                    站内信息
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-tags"></span>
                                    我的标签
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-comment"></span>
                                    我的留言
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-duplicate"></span>
                                    我的订单
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-retweet"></span>
                                    我的退货单
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-heart"></span>
                                    我的收藏
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-yen"></span>
                                    资金管理
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-lock"></span>
                                    退出
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p class="tit">用户基本信息</p>
                        <table class="table table-striped table-hover table-bordered order-tab">
                            <tbody>
                            <tr>
                                <th class="col-md-3">用户名称</th>
                                <td>啊啊</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">会员等级</th>
                                <td>VIP1</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">电子邮件</th>
                                <td>a@0oo.ren</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">手机号码</th>
                                <td>18888888888</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">生日</th>
                                <td>1999-09-09</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">身份证</th>
                                <td>123456789123456321</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">消费积分</th>
                                <td>998</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">等级积分</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">注册IP</th>
                                <td>127.0.0.1</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">登录IP</th>
                                <td>127.0.0.1</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">注册时间</th>
                                <td>2017/06/20</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">上次登录时间</th>
                                <td>2017/06/20</td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- 手风琴 -->
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <!-- <input type="radio" name="address-radio[]"> -->
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-937561" href="#panel-element-1">
					                   	<span class="edit-user-profile btn btn-success">
											<span class="glyphicon glyphicon-pencil" >
												编辑资料
											</span>
										</span>
                                        </a>
                                    </div>
                                    <div id="panel-element-1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="address-panel">
                                                <form class="form-horizontal" method="post">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">用户名称</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="uname" placeholder="啊啊" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">电子邮件</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" name="uemail" placeholder="电子邮件">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">手机号码</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="uphone" placeholder="手机号码"  onkeyup="value=value.replace(/[^\d]/g,'') " ng-pattern="/[^a-zA-Z]/">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">生日</label>
                                                        <div class="col-sm-10">
                                                            <input type="birthday" class="form-control" name="birthday" placeholder="生日">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">身份证</label>
                                                        <div class="col-sm-10">
                                                            <input type="idnumber" class="form-control" name="idnumber" placeholder="身份证">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="button" class="btn btn-success">确认修改</button>
                                                            <button type="button" class="btn btn-danger">删除</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 手风琴结束 -->


                </div>
            </div>
            </div>
        </div>
    <!-- end -->

@endsection