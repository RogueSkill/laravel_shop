@extends("web.master")
@section("title", "地址管理页")
@section("content")

    <div style="display: block; margin-top:52px;"></div>

    <!-- 路径导航 -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{url('index')}}">首页</a></li>
            <li class="active">用户中心</li>
        </ol>
    </div>
    <!-- end -->

    <!-- 地址管理 -->
    <div class="container">
        <div class="row">
            <!-- 菜单栏 -->
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4>用户中心</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-user"></span>
                                    我的资料
                                </a>
                            </li>
                            <li class="active">
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

            <!-- 内容栏 -->
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>
                            <span class="glyphicon glyphicon-th-list"></span>
                            地址列表
                        </h5>
                    </div>
                    <div class="panel-body">
					<span class="btn btn-success add-address-btn" id="modal-770114" href="#modal-container-770114" data-toggle="modal">
						<span class="glyphicon glyphicon-plus"></span>
						添加地址
					</span>
                        <!-- 遮罩体 -->
                        <div class="modal fade" id="modal-container-770114" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            添加地址
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="address-panel">
                                            <form class="form-horizontal" method="post">
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">地区选择</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name="province" id="province" style="margin-left:0px;">
                                                            <option>--请选择省份--</option>
                                                            <option>广东省</option>
                                                            <option>山东省</option>
                                                            <option>湖南省</option>
                                                        </select>
                                                        <select class="form-control" name="city" id="city">
                                                            <option value="">--请选择城市--</option>
                                                            <option value="">市</option>
                                                        </select>
                                                        <select class="form-control" name="county" id="county">
                                                            <option value="">--请选择所在县--</option>
                                                            <option value="">县</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">收货人姓名</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="uname" placeholder="收货人姓名">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">电子邮件</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" name="uemail" placeholder="电子邮件">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">地址</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="uaddress" placeholder="地址">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">手机</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" name="uphone" placeholder="手机">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <button type="button" class="btn btn-primary">添加</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box box-element ui-draggable" style="display: block; margin-top:10px;"></div>

                        <!-- 手风琴 -->
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <input type="radio" name="address-radio[]">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-937561" href="#panel-element-1">广州天河兄弟连</a>
                                    </div>
                                    <div id="panel-element-1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="address-panel">
                                                <form class="form-horizontal" method="post">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">地区选择</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" name="province" id="province" style="margin-left:0px;">
                                                                <option>--请选择省份--</option>
                                                                <option>广东省</option>
                                                                <option>山东省</option>
                                                                <option>湖南省</option>
                                                            </select>
                                                            <select class="form-control" name="city" id="city">
                                                                <option value="">--请选择城市--</option>
                                                                <option value="">市</option>
                                                            </select>
                                                            <select class="form-control" name="county" id="county">
                                                                <option value="">--请选择所在县--</option>
                                                                <option value="">县</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">收货人姓名</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="uname" placeholder="收货人姓名">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">电子邮件</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" name="uemail" placeholder="电子邮件">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">地址</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="uaddress" placeholder="地址">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">手机</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" class="form-control" name="uphone" placeholder="手机">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="button" class="btn btn-success">确认编辑</button>
                                                            <button type="button" class="btn btn-danger">删除</button>
                                                            <button type="button" class="btn btn-info">设置为默认地址</button>
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