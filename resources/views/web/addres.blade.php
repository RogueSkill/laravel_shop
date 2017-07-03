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
                                <a href="center">
                                    <span class="glyphicon glyphicon-user"></span>
                                    我的资料
                                </a>
                            </li>
                            <li class="active">
                                <a href="addres">
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
                                <a href="message">
                                    <span class="glyphicon glyphicon-comment"></span>
                                    我的评论
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
                                <a href="{{url('quit')}}">
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
                                            <form class="form-horizontal" name="addresaddFrom" onsubmit="return addresaddFrom();" action="{{url("addres")}}"  method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="created_at" value="{{date('y-m-d h:i:s',time())}}">
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
                                                            <option>--请选择城市--</option>
                                                            <option>市</option>
                                                        </select>
                                                        <select class="form-control" name="county" id="county">
                                                            <option>--请选择所在县--</option>
                                                            <option>县</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">详细地址</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="uaddress" placeholder="详细地址" id="uaddress_1">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">收货人</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="uname" placeholder="收货人" id="uname_1">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">手机</label>
                                                    <div class="col-sm-10">
                                                        <input type="uphone" class="form-control" name="uphone" placeholder="手机" onkeyup="value=value.replace(/[^\d]/g,'')" id="uphone_1">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">邮编</label>
                                                    <div class="col-sm-10">
                                                        <input type="code" class="form-control" name="code" placeholder="邮编" onkeyup="value=value.replace(/[^\d]/g,'')" id="code_1">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                        <button type="submit" class="btn btn-success" id="button_1">添加</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="box box-element ui-draggable" style="display: block; margin-top:10px;"></div>
                        @foreach ($addres_data as $addres)
                        <!-- 手风琴 -->
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        @if($addres['status'] == 1)
                                            <input type="radio" name="address-radio[]" checked="checked">
                                        @else
                                            <input type="radio" name="address-radio[]">
                                        @endif
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-937561" href="#panel-element-{{$addres['id']}}">{{$addres['province'].'省 '.$addres['city'].'市 '.$addres['county'].'县/区 '.$addres['detailed_address']}}</a>
                                    </div>
                                    <div id="panel-element-{{$addres['id']}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="address-panel">
                                                <form class="form-horizontal" method="post">
                                                    <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="updated_at" value="{{date('y-m-d h:i:s',time())}}">
                                                        <input type="hidden" name="addresid" value="{{$addres['id']}}">
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
                                                                <option value="">--请选择所在县--</option>-*
                                                                <option value="">县</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">详细地址</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="uaddress" value="{{$addres['detailed_address']}}" id="uaddress_2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">收货人姓名</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="uname" value="{{$addres['consignee']}}" id="uname_2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">手机</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="uphone" value="{{$addres['phone']}}" onkeyup="value=value.replace(/[^\d]/g,'')" id="uphone_2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">邮编</label>
                                                        <div class="col-sm-10">
                                                            <input type="code" class="form-control" name="code" value="{{$addres['code']}}" onkeyup="value=value.replace(/[^\d]/g,'')" id="code_2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-success" id="button_2">确认编辑</button>
                                                            <a href="addres?id={{$addres['id']}}&perform=delete"><button type="button" class="btn btn-danger">删除</button></a>
                                                            <a href="addres?id={{$addres['id']}}&perform={{$addres['userid']}}"><button type="button" class="btn btn-info">设置为默认地址</button></a>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                    <!-- 手风琴结束 -->

                </div>
            </div>
        </div>
    </div>
    <!-- end -->

    <script>
            var button_1 = document.getElementById('button_1');
            button_1.onclick = function () {

                var button_1 = document.getElementById('uaddress_1').value;
                var uname_1 = document.getElementById('uname_1').value;
                var uphone_1 = document.getElementById('uphone_1').value;
                var code_1 = document.getElementById('code_1').value;

                if (button_1 == null || button_1 == "") {
                    alert("详细地址不能为空");
                    return false;
                }

                if (uname_1 == null || uname_1 == "") {
                    alert("收件人不能为空");
                    return false;
                }

                if (uphone_1 == null || uphone_1 == "") {
                    alert("手机号码不能为空");
                    return false;
                }

                if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(uphone_1))) {
                    alert("不是完整的11位手机号或者正确的手机号");
                    return false;
                }

                if (code_1 == null || code_1 == "") {
                    alert("邮编不能为空");
                    return false;
                }
                if (!(/^\d{6}$/.test(code_1))) {
                    alert("请输入正确的邮政编码");
                    return false;
                }
            }

    </script>
