@extends("web.master")
@section("title", "购物车页")
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

    <!-- 购物车订单开始 -->
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-bordered order-table">
                <th><input type="checkbox" name="checkall">全选</th>
                <th>缩略图</th>
                <th>商品名称</th>
                <th>商品属性</th>
                <th>商品价格</th>
                <th>数量</th>
                <th>总计</th>
                <th>操作</th>
                <tr>
                    <td><input type="checkbox" name="check[]"></td>
                    <td class="order-img"><img src="./images/1.jpg" alt="商品缩略图" class="img-rounded"></td>
                    <td>saber模型</td>
                    <td>蓝白色</td>
                    <td class="price">120.12</td>
                    <td>
                        <span class="cart-sub min" >-</span>
                        <input type="text" name="good-num" value="1" class="cart-num">
                        <span class="cart-sub add" >+</span>
                    </td>
                    <td class="order-price">120.12</td>
                    <td><button type="button" class="btn btn-danger">删除</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="check[]"></td>
                    <td class="order-img"><img src="./images/1.jpg" alt="商品缩略图" class="img-rounded"></td>
                    <td>saber模型</td>
                    <td>蓝白色</td>
                    <td class="price">120.12</td>
                    <td>
                        <span class="cart-sub min" >-</span>
                        <input type="text" name="good-num" value="1" class="cart-num">
                        <span class="cart-sub add" >+</span>
                    </td>
                    <td class="order-price">120.12</td>
                    <td><button type="button" class="btn btn-danger">删除</button></td>
                </tr>
            </table>
        </div>

        <div class="order-pay">
            <div class="order-payleft">
                总计:
                <span>0.00元</span>
                <strong>共1件</strong>
            </div>
            <div class="order-payright">
                <button type="button" class="btn btn-primary">购物</button>
                <button type="button" class="btn btn-info">结算</button>
            </div>
        </div>
    </div>
    <!-- end -->
@endsection
@section("javaScript")

    <script src="./js/cart.js"></script>

@endsection