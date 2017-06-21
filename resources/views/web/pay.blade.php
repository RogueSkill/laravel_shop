@extends("web.master")
@section("title", "支付页")
@section("content")
    <div style="display: block; margin-top:52px;"></div>
    <!-- 路径导航 -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">首页</a></li>
            <li class="active">家电</li>
        </ol>
    </div>
    <!-- end -->

    <!-- 地址列表 -->
    <div class="container">
        <div class="address-list">
            <div class="address-bg">地址列表</div>
            <div class="address-add">
                <!-- 添加地址开始 -->
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <a id="modal-770114" href="#modal-container-770114" role="button" class="btn" data-toggle="modal" style="padding:0px;"><button type="button" class="btn btn-success">添加地址</button></a>

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
                    </div>
                </div>
                <!-- end -->
            </div>
            <div class="address-display">
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
    <!-- end -->

    <!-- 支付方式 -->
    <div class="container">
        <div class="pay-list">
            <div class="pay-bg">支付方式</div>
            <div class="pay-add">
                <table>
                    <tr>
                        <td>请选择支付方式</td>
                        <td>
                            <select class="form-control" name="province" id="province" style="margin-left:10px; width:200px;">
                                <option>--请选择支付方式--</option>
                                <option>支付宝</option>
                                <option>微信</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- 配送方式 -->
    <div class="container">
        <div class="pay-list">
            <div class="pay-bg">配送方式</div>
            <div class="pay-add">
                <table>
                    <tr>
                        <td>请选择配送方式</td>
                        <td>
                            <select class="form-control" name="province" id="province" style="margin-left:10px; width:200px;">
                                <option>--请选择配送方式--</option>
                                <option>顺丰</option>
                                <option>邮政</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- 商品列表 -->
    <div class="container">
        <div class="pay-list">
            <div class="pay-bg">商品列表</div>
            <div class="pay-add">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered order-table">
                        <th>缩略图</th>
                        <th>商品名称</th>
                        <th>商品属性</th>
                        <th>商品价格</th>
                        <th>数量</th>
                        <th>总计</th>
                        <tr>
                            <td class="order-img"><img src="./images/1.jpg" alt="商品缩略图" class="img-rounded"></td>
                            <td>saber模型</td>
                            <td>蓝白色</td>
                            <td>120.00</td>
                            <td>1</td>
                            <td class="order-price">120.00</td>
                        </tr>
                    </table>
                </div>
                <!-- start -->
                <div class="pay-pay">
                    <div class="pay-left">
                        <span>商品价格:</span>
                        <strong>120.00</strong>
                        <span>+</span>
                        <span>运费:</span>
                        <strong>0</strong>
                        <span>=</span>
                        <strong>120.00元</strong>
                    </div>
                    <div class="order-payright">
                        <button type="button" class="btn btn-info">确认下单</button>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- end -->
@endsection