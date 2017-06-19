@extends('home.layout.master')

@section('cssjs')
<link href="{{ asset('/AmazeUI-2.4.2/assets/css/amazeui.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{asset('AmazeUI-2.4.2/assets/css/admin.css')}}" rel="stylesheet" type="text/css" />
		<!-- {{asset('/AmazeUI-2.4.2/assets/js/amazeui.min.js')}} -->
		<link href="{{asset('/basic/css/demo.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('/css/hmstyle.css')}}" rel="stylesheet" type="text/css"/>
		<link href="{{asset('/css/skin.css')}}" rel="stylesheet" type="text/css" />
		<script src="{{asset('/AmazeUI-2.4.2/assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('/AmazeUI-2.4.2/assets/js/amazeui.min.js')}}"></script>
@endsection

@section('title','网站首页')

@section('top_nav')
<div>
	@{{$name}}
	<ul>
		@if($data)
		@foreach($data as $v)
			<li>{{$v['name']}}</li>
		@endforeach
		@else
			<div>没有数据</div>
		@endif
	</ul>
</div>
<ul class="message-l">
					<div class="topMessage">
						<div class="menu-hd">
							<a href="#" target="_top" class="h">亲，请登录</a>
							<a href="#" target="_top">免费注册</a>
						</div>
					</div>
				</ul>
				<ul class="message-r">
					<div class="topMessage home">
						<div class="menu-hd"><a href="#" target="_top" class="h">商城首页</a></div>
					</div>
					<div class="topMessage my-shangcheng">
						<div class="menu-hd MyShangcheng"><a href="#" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
					</div>
					<div class="topMessage mini-cart">
						<div class="menu-hd"><a id="mc-menu-hd" href="#" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
					</div>
					<div class="topMessage favorite">
						<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
				</ul>
				</div>
				<!--悬浮搜索框-->
				<div class="nav white">
					<div class="logo"><img src="{{asset('./images/logo.png')}}" /></div>
					<div class="logoBig">
						<li><img src="{{asset('./images/logobig.png')}}" /></li>
					</div>

					<div class="search-bar pr">
						<a name="index_none_header_sysc" href="#"></a>
						<form>
							<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
							<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
						</form>
					</div>
				</div>

				<div class="clear"></div>
@endsection

@section('banner')

                      <!--轮播 -->
						<div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
							<ul class="am-slides">
								<li class="banner1"><a href="introduction.html"><img src="{{asset('./images/ad1.jpg')}}" /></a></li>
								<li class="banner2"><a><img src="{{asset('./images/ad2.jpg')}}" /></a></li>
								<li class="banner3"><a><img src="{{asset('./images/ad3.jpg')}}" /></a></li>
								<li class="banner4"><a><img src="{{asset('./images/ad4.jpg')}}" /></a></li>
							</ul>
						</div>
						<div class="clear"></div>	
@endsection

@section('small_nav')
<div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="#">首页</a></li>
                                <li class="qc"><a href="#">闪购</a></li>
                                <li class="qc"><a href="#">限时抢</a></li>
                                <li class="qc"><a href="#">团购</a></li>
                                <li class="qc last"><a href="#">大包装</a></li>
							</ul>
						    <div class="nav-extra">
						    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
						    </div>
						</div>		
@endsection
