@extends("web.lar_index_master")

@section("head")
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link href="web_style/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
	<link href="web_style/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

	<link href="web_style/basic/css/demo.css" rel="stylesheet" type="text/css" />

	<link href="web_style/css/hmstyle.css" rel="stylesheet" type="text/css" />
	<script src="web_style/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
	<script src="web_style/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>
@endsection

<!-- 顶部导航 -->
@section("top_nav")
<div class="am-container header">
				<ul class="message-l">
					<div class="topMessage">
						<div class="menu-hd">
							<a href="{{url('/list')}}" target="_top" class="h">亲，请登录</a>
							<a href="{{url('/list')}}" target="_top">免费注册</a>
						</div>
					</div>
				</ul>
				<ul class="message-r">
					<div class="topMessage home">
						<div class="menu-hd"><a href="{{url('/list')}}" target="_top" class="h">商城首页</a></div>
					</div>
					<div class="topMessage my-shangcheng">
						<div class="menu-hd MyShangcheng"><a href="{{url('/list')}}" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
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
					<div class="logo"><img src="web_style/images/logo.png" /></div>
					<div class="logoBig">
						<li><img src="web_style/images/logobig.png" /></li>
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
			</div>
@endsection

<!-- banner -->
@section('banner')
<div class="banner">
<!--轮播 -->
<div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
	<ul class="am-slides">
		@if($banner)
			@foreach($banner as $val)
				<li class="banner1"><a><img src="./upload/{{$val}}" /></a></li>
			@endforeach
		@endif
	</ul>
</div>
<div class="clear"></div>	
</div>

<!--轮播 -->
<script type="text/javascript">
	(function() {
		$('.am-slider').flexslider();
	});
	$(document).ready(function() {
		$("li").hover(function() {
			$(".category-content .category-list li.first .menu-in").css("display", "none");
			$(".category-content .category-list li.first").removeClass("hover");
			$(this).addClass("hover");
			$(this).children("div.menu-in").css("display", "block")
		}, function() {
			$(this).removeClass("hover")
			$(this).children("div.menu-in").css("display", "none")
		});
	})
</script>
@endsection

<!-- 中部导航 -->
@section('mid_nav')
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


@section('left_nav')
<div id="nav" class="navfull">
	<div class="area clearfix">
	<div class="category-content" id="guide_2">
		
		<div class="category">
			<ul class="category-list" id="js_climit_li">
				@foreach($typelist as $key=>$value)
				<li class="appliance js_toggle relative first">
					<div class="category-info">
						<h3 class="category-name b-category-name"><i><img src="web_style/images/cake.png"></i><a class="ml-22" title="<?php echo $value['name'] ?>">{{$value['name']}}</a></h3>
						<em>&gt;</em>
					</div>
					<div class="menu-item menu-in top">
						<div class="area-in">
							<div class="area-bg">
								<div class="menu-srot">
									<div class="sort-side">
										@foreach($value['child'] as $val)
										<dl class="dl-sort">
											<dt>
												<span title="{{$val['name']}}">{{$val['name']}}
												</span>
											</dt>
											@foreach($val['son'] as $v)
											<dd><a title="{{$v['name']}}" href="list/{{$v['pid']}}"><span>{{$v['name']}}</span></a></dd>
											@endforeach
										</dl>
										@endforeach
									</div>
									<!-- <div class="brand-side">
										<dl class="dl-sort"><dt><span>实力商家</span></dt>
											<dd><a rel="nofollow" title="呵官方旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >呵官方旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="格瑞旗舰店" target="_blank" href="#" rel="nofollow"><span >格瑞旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="飞彦大厂直供" target="_blank" href="#" rel="nofollow"><span  class="red" >飞彦大厂直供</span></a></dd>
											<dd><a rel="nofollow" title="红e·艾菲妮" target="_blank" href="#" rel="nofollow"><span >红e·艾菲妮</span></a></dd>
											<dd><a rel="nofollow" title="本真旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >本真旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="杭派女装批发网" target="_blank" href="#" rel="nofollow"><span  class="red" >杭派女装批发网</span></a></dd>
										</dl>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				<b class="arrow"></b>	
				</li>
				@endforeach
				<!-- <li class="appliance js_toggle relative">
					<div class="category-info">
						<h3 class="category-name b-category-name"><i><img src="web_style/images/cookies.png"></i><a class="ml-22" title="饼干、膨化">饼干/膨化</a></h3>
						<em>&gt;</em></div>
					<div class="menu-item menu-in top">
						<div class="area-in">
							<div class="area-bg">
								<div class="menu-srot">
									<div class="sort-side">
										<dl class="dl-sort">
											<dt><span title="饼干">饼干</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="薯片">薯片</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="蛋糕">虾条</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
									</div>
									<div class="brand-side">
										<dl class="dl-sort"><dt><span>实力商家</span></dt>
											<dd><a rel="nofollow" title="YYKCLOT" target="_blank" href="#" rel="nofollow"><span  class ="red" >YYKCLOT</span></a></dd>
											<dd><a rel="nofollow" title="池氏品牌男装" target="_blank" href="#" rel="nofollow"><span  class ="red" >池氏品牌男装</span></a></dd>
											<dd><a rel="nofollow" title="男装日志" target="_blank" href="#" rel="nofollow"><span >男装日志</span></a></dd>
											<dd><a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="#" rel="nofollow"><span >索比诺官方旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="onTTno傲徒" target="_blank" href="#" rel="nofollow"><span  class ="red" >onTTno傲徒</span></a></dd>
											<dd><a rel="nofollow" title="玛狮路男装旗舰店" target="_blank" href="#" rel="nofollow"><span >玛狮路男装旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="劳威特品牌男装" target="_blank" href="#" rel="nofollow"><span >劳威特品牌男装</span></a></dd>
											<dd><a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="#" rel="nofollow"><span  class ="red" >卡斯郎世家批发城</span></a></dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</div>
	             <b class="arrow"></b>
				</li>

				<li class="appliance js_toggle relative">
					<div class="category-info">
						<h3 class="category-name b-category-name"><i><img src="web_style/images/meat.png"></i><a class="ml-22" title="熟食、肉类">熟食/肉类</a></h3>
						<em>&gt;</em></div>
					<div class="menu-item menu-in top">
						<div class="area-in">
							<div class="area-bg">
								<div class="menu-srot">
									<div class="sort-side">
										<dl class="dl-sort">
											<dt><span title="猪肉脯">猪肉脯</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="牛肉丝">牛肉丝</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="小香肠">小香肠</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
									</div>
									<div class="brand-side">
										<dl class="dl-sort"><dt><span>实力商家</span></dt>
											<dd><a rel="nofollow" title="花颜巧语 " target="_blank" href="#" rel="nofollow"><span  class="red" >花颜巧语 </span></a></dd>
											<dd><a rel="nofollow" title="糖衣小屋" target="_blank" href="#" rel="nofollow"><span >糖衣小屋</span></a></dd>
											<dd><a rel="nofollow" title="卡拉迪克  " target="_blank" href="#" rel="nofollow"><span  class="red" >卡拉迪克  </span></a></dd>
											<dd><a rel="nofollow" title="暖春童话 " target="_blank" href="#" rel="nofollow"><span >暖春童话 </span></a></dd>
											<dd><a rel="nofollow" title="华盛童装批发行 " target="_blank" href="#" rel="nofollow"><span >华盛童装批发行 </span></a></dd>
											<dd><a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="#" rel="nofollow"><span >奈仕华童装旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="#" rel="nofollow"><span  class="red" >斑蒂尼BONDYNI</span></a></dd>
											<dd><a rel="nofollow" title="猫儿朵朵 " target="_blank" href="#" rel="nofollow"><span >猫儿朵朵 </span></a></dd>
											<dd><a rel="nofollow" title="童衣阁" target="_blank" href="#" rel="nofollow"><span  class="red" >童衣阁</span></a></dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</div>
	            <b class="arrow"></b>
				</li>

				<li class="appliance js_toggle relative">
					<div class="category-info">
						<h3 class="category-name b-category-name"><i><img src="web_style/images/bamboo.png"></i><a class="ml-22" title="素食、卤味">素食/卤味</a></h3>
						<em>&gt;</em></div>
					<div class="menu-item menu-in top">
						<div class="area-in">
							<div class="area-bg">
								<div class="menu-srot">
									<div class="sort-side">
										<dl class="dl-sort">
											<dt><span title="豆干">豆干</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="干笋">干笋</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="鸭脖">鸭脖</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
									</div>
									<div class="brand-side">
										<dl class="dl-sort"><dt><span>实力商家</span></dt>
											<dd><a rel="nofollow" title="歌芙品牌旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >歌芙品牌旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="爱丝蓝内衣厂" target="_blank" href="#" rel="nofollow"><span >爱丝蓝内衣厂</span></a></dd>
											<dd><a rel="nofollow" title="香港优蓓尔防辐射" target="_blank" href="#" rel="nofollow"><span >香港优蓓尔防辐射</span></a></dd>
											<dd><a rel="nofollow" title="蓉莉娜内衣批发" target="_blank" href="#" rel="nofollow"><span >蓉莉娜内衣批发</span></a></dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</div>
	             <b class="arrow"></b>
				</li>

				<li class="appliance js_toggle relative">
					<div class="category-info">
						<h3 class="category-name b-category-name"><i><img src="web_style/images/nut.png"></i><a class="ml-22" title="坚果、炒货">坚果/炒货</a></h3>
						<em>&gt;</em></div>
					<div class="menu-item menu-in top">
						<div class="area-in">
							<div class="area-bg">
								<div class="menu-srot">
									<div class="sort-side">
										<dl class="dl-sort">
											<dt><span title="蛋糕">坚果</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="蛋糕">锅巴</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
									</div>
									<div class="brand-side">
										<dl class="dl-sort"><dt><span>实力商家</span></dt>
											<dd><a rel="nofollow" title="呵呵嘿官方旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >呵呵嘿官方旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="格瑞旗舰店" target="_blank" href="#" rel="nofollow"><span >格瑞旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="飞彦大厂直供" target="_blank" href="#" rel="nofollow"><span  class="red" >飞彦大厂直供</span></a></dd>
											<dd><a rel="nofollow" title="红e·艾菲妮" target="_blank" href="#" rel="nofollow"><span >红e·艾菲妮</span></a></dd>
											<dd><a rel="nofollow" title="本真旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >本真旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="杭派女装批发网" target="_blank" href="#" rel="nofollow"><span  class="red" >杭派女装批发网</span></a></dd>
											<dd><a rel="nofollow" title="华伊阁旗舰店" target="_blank" href="#" rel="nofollow"><span >华伊阁旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="独家折扣旗舰店" target="_blank" href="#" rel="nofollow"><span >独家折扣旗舰店</span></a></dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</div>
					<b class="arrow"></b>
				</li>

				<li class="appliance js_toggle relative">
					<div class="category-info">
						<h3 class="category-name b-category-name"><i><img src="web_style/images/candy.png"></i><a class="ml-22" title="糖果、蜜饯">糖果/蜜饯</a></h3>
						<em>&gt;</em></div>
					<div class="menu-item menu-in top">
						<div class="area-in">
							<div class="area-bg">
								<div class="menu-srot">
									<div class="sort-side">
										<dl class="dl-sort">
											<dt><span title="糖果">糖果</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="蜜饯">蜜饯</span></dt>
											<dd><a title="猕猴桃干" href="#"><span>猕猴桃干</span></a></dd>
											<dd><a title="糖樱桃" href="#"><span>糖樱桃</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
									</div>
									<div class="brand-side">
										<dl class="dl-sort"><dt><span>实力商家</span></dt>
											<dd><a rel="nofollow" title="YYKCLOT" target="_blank" href="#" rel="nofollow"><span  class ="red" >YYKCLOT</span></a></dd>
											<dd><a rel="nofollow" title="池氏品牌男装" target="_blank" href="#" rel="nofollow"><span  class ="red" >池氏品牌男装</span></a></dd>
											<dd><a rel="nofollow" title="男装日志" target="_blank" href="#" rel="nofollow"><span >男装日志</span></a></dd>
											<dd><a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="#" rel="nofollow"><span >索比诺官方旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="onTTno傲徒" target="_blank" href="#" rel="nofollow"><span  class ="red" >onTTno傲徒</span></a></dd>
											<dd><a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="#" rel="nofollow"><span  class ="red" >卡斯郎世家批发城</span></a></dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</div>
	            <b class="arrow"></b>
				</li>

				<li class="appliance js_toggle relative">
					<div class="category-info">
						<h3 class="category-name b-category-name"><i><img src="web_style/images/chocolate.png"></i><a class="ml-22" title="巧克力">巧克力</a></h3>
						<em>&gt;</em></div>
					<div class="menu-item menu-in top">
						<div class="area-in">
							<div class="area-bg">
								<div class="menu-srot">
									<div class="sort-side">
										<dl class="dl-sort">
											<dt><span title="蛋糕">巧克力</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="蛋糕">果冻</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
									</div>
									<div class="brand-side">
										<dl class="dl-sort"><dt><span>实力商家</span></dt>
											<dd><a rel="nofollow" title="花颜巧语 " target="_blank" href="#" rel="nofollow"><span  class="red" >花颜巧语 </span></a></dd>
											<dd><a rel="nofollow" title="糖衣小屋" target="_blank" href="#" rel="nofollow"><span >糖衣小屋</span></a></dd>
											<dd><a rel="nofollow" title="卡拉迪克  " target="_blank" href="#" rel="nofollow"><span  class="red" >卡拉迪克  </span></a></dd>
											<dd><a rel="nofollow" title="暖春童话 " target="_blank" href="#" rel="nofollow"><span >暖春童话 </span></a></dd>
											<dd><a rel="nofollow" title="华盛童装批发行 " target="_blank" href="#" rel="nofollow"><span >华盛童装批发行 </span></a></dd>
											<dd><a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="#" rel="nofollow"><span >奈仕华童装旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="#" rel="nofollow"><span  class="red" >斑蒂尼BONDYNI</span></a></dd>
											<dd><a rel="nofollow" title="童衣阁" target="_blank" href="#" rel="nofollow"><span  class="red" >童衣阁</span></a></dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</div>
					<b class="arrow"></b>
				</li>

				<li class="appliance js_toggle relative">
					<div class="category-info">
						<h3 class="category-name b-category-name"><i><img src="web_style/images/fish.png"></i><a class="ml-22" title="海味、河鲜">海味/河鲜</a></h3>
						<em>&gt;</em></div>
					<div class="menu-item menu-in top">
						<div class="area-in">
							<div class="area-bg">
								<div class="menu-srot">
									<div class="sort-side">
										<dl class="dl-sort">
											<dt><span title="海带丝">海带丝</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="小鱼干">小鱼干</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="鱿鱼丝">鱿鱼丝</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
										</dl>
									</div>
									<div class="brand-side">
										<dl class="dl-sort"><dt><span>实力商家</span></dt>
											<dd><a rel="nofollow" title="歌芙品牌旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >歌芙品牌旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="爱丝蓝内衣厂" target="_blank" href="#" rel="nofollow"><span >爱丝蓝内衣厂</span></a></dd>
											<dd><a rel="nofollow" title="炫点服饰" target="_blank" href="#" rel="nofollow"><span >炫点服饰</span></a></dd>
											<dd><a rel="nofollow" title="雪茵美内衣厂批发" target="_blank" href="#" rel="nofollow"><span >雪茵美内衣厂批发</span></a></dd>
											<dd><a rel="nofollow" title="金钻夫人" target="_blank" href="#" rel="nofollow"><span >金钻夫人</span></a></dd>
											<dd><a rel="nofollow" title="伊美莎内衣" target="_blank" href="#" rel="nofollow"><span  class="red" >伊美莎内衣</span></a></dd>
											<dd><a rel="nofollow" title="粉客内衣旗舰店" target="_blank" href="#" rel="nofollow"><span >粉客内衣旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="泽芳行旗舰店" target="_blank" href="#" rel="nofollow"><span >泽芳行旗舰店</span></a></dd>
											<dd><a rel="nofollow" title="彩婷" target="_blank" href="#" rel="nofollow"><span  class="red" >彩婷</span></a></dd>
											<dd><a rel="nofollow" title="黛兰希" target="_blank" href="#" rel="nofollow"><span >黛兰希</span></a></dd>
											<dd><a rel="nofollow" title="香港优蓓尔防辐射" target="_blank" href="#" rel="nofollow"><span >香港优蓓尔防辐射</span></a></dd>
											<dd><a rel="nofollow" title="蓉莉娜内衣批发" target="_blank" href="#" rel="nofollow"><span >蓉莉娜内衣批发</span></a></dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</div>
	             <b class="arrow"></b>
				</li>

				<li class="appliance js_toggle relative">
					<div class="category-info">
						<h3 class="category-name b-category-name"><i><img src="web_style/images/tea.png"></i><a class="ml-22" title="花茶、果茶">花茶/果茶</a></h3>
						<em>&gt;</em></div>
					<div class="menu-item menu-in top">
						<div class="area-in">
							<div class="area-bg">
								<div class="menu-srot">
									<div class="sort-side">
										<dl class="dl-sort">
											<dt><span title="蛋糕">蛋糕</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="蛋糕">点心</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
									</div>
									<div class="brand-side">
										<dl class="dl-sort"><dt><span>实力商家</span></dt>
											<dd><a title="今生只围你" target="_blank" href="#" rel="nofollow"><span >今生只围你</span></a></dd>
											<dd><a title="忆佳人" target="_blank" href="#" rel="nofollow"><span  class="red" >忆佳人</span></a></dd>
											<dd><a title="斐洱普斯" target="_blank" href="#" rel="nofollow"><span  class="red" >斐洱普斯</span></a></dd>
											<dd><a title="聚百坊" target="_blank" href="#" rel="nofollow"><span  class="red" >聚百坊</span></a></dd>
											<dd><a title="朵朵棉织直营店" target="_blank" href="#" rel="nofollow"><span >朵朵棉织直营店</span></a></dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</div>
					<b class="arrow"></b>
				</li>

				<li class="appliance js_toggle relative last">
					<div class="category-info">
						<h3 class="category-name b-category-name"><i><img src="web_style/images/package.png"></i><a class="ml-22" title="品牌、礼包">品牌/礼包</a></h3>
						<em>&gt;</em></div>
					<div class="menu-item menu-in top">
						<div class="area-in">
							<div class="area-bg">
								<div class="menu-srot">
									<div class="sort-side">
										<dl class="dl-sort">
											<dt><span title="大包装">大包装</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
										<dl class="dl-sort">
											<dt><span title="两件套">两件套</span></dt>
											<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
											<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
											<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
											<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
											<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
											<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
											<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
											<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
											<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
										</dl>
									</div>
									<div class="brand-side">
										<dl class="dl-sort"><dt><span>实力商家</span></dt>
											<dd><a title="琳琅鞋业" target="_blank" href="#" rel="nofollow"><span >琳琅鞋业</span></a></dd>
											<dd><a title="宏利鞋业" target="_blank" href="#" rel="nofollow"><span >宏利鞋业</span></a></dd>
											<dd><a title="比爱靓点鞋业" target="_blank" href="#" rel="nofollow"><span >比爱靓点鞋业</span></a></dd>
											<dd><a title="浪人怪怪" target="_blank" href="#" rel="nofollow"><span >浪人怪怪</span></a></dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li> -->
			</ul>
		</div>
	</div>

	</div>
</div>
@endsection

@section('right_box')
<div class="marqueen">
						<span class="marqueen-title">商城头条</span>
						<div class="demo">

							<ul>
								<li class="title-first"><a target="_blank" href="#">
									<img src="web_style/images/TJ2.jpg"></img>
									<span>[特惠]</span>商城爆品1分秒								
								</a></li>
								<li class="title-first"><a target="_blank" href="#">
									<span>[公告]</span>商城与广州市签署战略合作协议
								     <img src="web_style/images/TJ.jpg"></img>
								     <p>XXXXXXXXXXXXXXXXXX</p>
							    </a></li>
							    
						<div class="mod-vip">
							<div class="m-baseinfo">
								<a href="web_style/person/index.html">
									<img src="web_style/images/getAvatar.do.jpg">
								</a>
								<em>
									Hi,<span class="s-name">小叮当</span>
									<a href="#"><p>点击更多优惠活动</p></a>									
								</em>
							</div>
							<div class="member-logout">
								<a class="am-btn-warning btn" href="login.html">登录</a>
								<a class="am-btn-warning btn" href="register.html">注册</a>
							</div>
							<div class="member-login">
								<a href="#"><strong>0</strong>待收货</a>
								<a href="#"><strong>0</strong>待发货</a>
								<a href="#"><strong>0</strong>待付款</a>
								<a href="#"><strong>0</strong>待评价</a>
							</div>
							<div class="clear"></div>	
						</div>																	    
							    
								<li><a target="_blank" href="#"><span>[特惠]</span>洋河年末大促，低至两件五折</a></li>
								<li><a target="_blank" href="#"><span>[公告]</span>华北、华中部分地区配送延迟</a></li>
								<li><a target="_blank" href="#"><span>[特惠]</span>家电狂欢千亿礼券 买1送1！</a></li>
								
							</ul>
                        <div class="advTip"><img src="web_styleimages/advTip.jpg"/></div>
						</div>
</div>
					<div class="clear"></div>
				</div>
				<script type="text/javascript">
					if ($(window).width() < 640) {
						function autoScroll(obj) {
							$(obj).find("ul").animate({
								marginTop: "-39px"
							}, 500, function() {
								$(this).css({
									marginTop: "0px"
								}).find("li:first").appendTo(this);
							})
						}
						$(function() {
							setInterval('autoScroll(".demo")', 3000);
						})
					}
				</script>
@endsection


@section('recommend')
<div class="am-g am-g-fixed recommendation">
						<div class="clock am-u-sm-3">
							<img src="web_style/images/2016.png"></img>
							<p>今日<br>推荐</p>
						</div>
						@if($recommend)
							@foreach($recommend as $val)
							<a href="/detail/{{$val['goods_id']}}">
							<div class="am-u-sm-4 am-u-lg-3 ">
								<div class="info ">
									<h3>{{$val['goods_name']}}</h3>
									<h4>{!! $val['goods_remake'] !!}</h4>
								</div>
								<div class="recommendationMain ">
									<img src="../{{$val['cover_img']}}"></img>
								</div>
							</div>
							</a>
							@endforeach						
						@endif
</div>
<div class="clear "></div>
@endsection


@section('hot')
<div class="am-container activity ">
						<div class="shopTitle ">
							<h4>活动</h4>
							<h3>每期活动 优惠享不停 </h3>
							<!-- <span class="more ">
                              <a class="more-link " href="">全部活动</a>
                            </span> -->
						</div>
					
					  <div class="am-g am-g-fixed ">
					    @if($hot)
						  	@foreach($hot as $val)
						  		<a href="detail/{{$val['goods_id']}}">
								<div class="am-u-sm-3 ">
									<div class="icon-sale tree "></div>	
										<h4>秒杀</h4>							
									<div class="activityMain ">
										<img src="../{{$val['cover_img']}}"></img>
									</div>
									<div class="info ">
										<h3>{{$val['goods_name']}}</h3>
									</div>														
								</div>
							@endforeach
						@endif
						<!-- <div class="am-u-sm-3 ">
						  <div class="icon-sale two "></div>	
							<h4>特惠</h4>
							<div class="activityMain ">
								<img src="web_style/images/activity2.jpg "></img>
							</div>
							<div class="info ">
								<h3>春节送礼优选</h3>								
							</div>							
						</div>						
						
						<div class="am-u-sm-3 ">
							<div class="icon-sale three "></div>
							<h4>团购</h4>
							<div class="activityMain ">
								<img src="web_style/images/activity3.jpg "></img>
							</div>
							<div class="info ">
								<h3>春节送礼优选</h3>
							</div>							
						</div>						

						<div class="am-u-sm-3 last ">
							<div class="icon-sale "></div>
							<h4>超值</h4>
							<div class="activityMain ">
								<img src="web_style/images/activity.jpg "></img>
							</div>
							<div class="info ">
								<h3>春节送礼优选</h3>
							</div>													
						</div> -->

					  </div>
</div>
<div class="clear "></div>
@endsection

@section('cat_one')
	<div class="am-container ">
		<div class="shopTitle ">
			<h4>{{$candylist['name']}}</h4>
			<h3>每一道甜品都有一个故事</h3>
			<div class="today-brands ">
				@foreach($candylist['child'] as $val)
				<a href="list/{{$val['id']}}">{{$val['name']}}</a>
				@endforeach
			</div>
			<span class="more ">
    <a class="more-link " href="list/{{$candylist['id']}}">更多美味</a>
        </span>
		</div>
	</div>
	
	<div class="am-g am-g-fixed floodOne ">
		<div class="am-u-sm-5 am-u-md-3 am-u-lg-4 text-one ">
			@if($candylist['one'])	
					<a href="# ">
						<div class="outer-con ">
							<div class="title ">
								{{$candylist['one']['goods_name']}}
							</div>					
							<div class="sub-title ">
								{!! $candylist['one']['goods_remake'] !!}
							</div>
						</div>
		                  <img src="../{{$candylist['one']['cover_img']}}" />
					</a>
			@endif
		</div>

		<div class="am-u-sm-7 am-u-md-5 am-u-lg-4">
			@if($candylist['two'])
				@foreach($candylist['two'] as $val)
					<div class="text-two">
						<div class="outer-con ">
							<div class="title ">
								{{$val['goods_name']}}
							</div>									
							<div class="sub-title ">
								仅售：¥{{$val['shop_price']}}
							</div>
							
						</div>
						<a href="# "><img src="../{{$val['cover_img']}}" /></a>
					</div>
				@endforeach
			@endif
		</div>
     <div class="am-u-sm-12 am-u-md-4 ">
     	@if($candylist['four'])
     		@foreach($candylist['four'] as $val)
				<div class="am-u-sm-3 am-u-md-6 text-three">
					<div class="outer-con ">
						<div class="title ">
							{{$val['goods_name']}}
						</div>
						
						<div class="sub-title ">
							尝鲜价：¥{{$val['shop_price']}}
						</div>
					</div>
					<a href="# "><img src="../{{$val['cover_img']}}" /></a>
				</div>
			@endforeach
		@endif
		<!-- <div class="am-u-sm-3 am-u-md-6 text-three">
			<div class="outer-con ">
				<div class="title ">
					小优布丁
				</div>
				
				<div class="sub-title ">
					尝鲜价：¥4.8
				</div>
			</div>
			<a href="# "><img src="web_style/images/act3.png " /></a>
		</div>

		<div class="am-u-sm-3 am-u-md-6 text-three">
			<div class="outer-con ">
				<div class="title ">
					小优布丁
				</div>
				
				<div class="sub-title ">
					尝鲜价：¥4.8
				</div>
			</div>
			<a href="# "><img src="web_style/images/act3.png " /></a>
		</div>

		<div class="am-u-sm-3 am-u-md-6 text-three last ">
			<div class="outer-con ">
				<div class="title ">
					小优布丁
				</div>
				
				<div class="sub-title ">
					尝鲜价：¥4.8
				</div>
			</div>
			<a href="# "><img src="web_style/images/act3.png " /></a>
		</div> -->
	</div>

	</div>
 <div class="clear "></div>
@endsection

@section('cat_two')
<div class="am-container ">
	<div class="shopTitle ">
		<h4>坚果</h4>
		<h3>酥酥脆脆，回味无穷</h3>
		<div class="today-brands ">
			<a href="# ">腰果</a>
			<a href="# ">松子</a>
			<a href="# ">夏威夷果 </a>
			<a href="# ">碧根果</a>
			<a href="# ">开心果</a>
			<a href="# ">核桃仁</a>
		</div>
		<span class="more ">
<a class="more-link " href="# ">更多美味</a>
    </span>
	</div>
</div>
<div class="am-g am-g-fixed floodTwo ">
	
	
	<div class="am-u-sm-5 am-u-md-4 text-one ">
		<a href="# ">
			<img src="web_style/images/act1.png " />
			<div class="outer-con ">
				<div class="title ">
					零食大礼包开抢啦
				</div>
				<div class="sub-title ">
					当小鱼儿恋上软豆腐
				</div>
				
			</div>
		</a>
	</div>

	<div class="am-u-sm-7 am-u-md-4 am-u-lg-2 text-two">
			<div class="outer-con ">
				<div class="title ">
					雪之恋和风大福
				</div>
				
				<div class="sub-title ">
					仅售：¥13.8
				</div>
			</div>
			<a href="# "><img src="web_style/images/5.jpg " /></a>						
	</div>
	
	<div class="am-u-md-4 am-u-lg-2 text-three">
		<div class="outer-con ">
			<div class="title ">
				小优布丁@@
			</div>
			
			<div class="sub-title ">
				尝鲜价：¥4.8
			</div>
		</div>
		<a href="# "><img src="web_style/images/act3.png " /></a>
	</div>
	<div class="am-u-md-4 am-u-lg-2 text-three">
		<div class="outer-con ">
			<div class="title ">
				小优布丁
			</div>
			
			<div class="sub-title ">
				尝鲜价：¥4.8
			</div>
		</div>
		<a href="# "><img src="web_style/images/act3.png " /></a>
	</div>
	<div class="am-u-sm-6 am-u-md-4 am-u-lg-2 text-two ">
			<div class="outer-con ">
				<div class="title ">
					雪之恋和风大福
				</div>
				
				<div class="sub-title ">
					仅售：¥13.8
				</div>
			</div>
			<a href="# "><img src="web_style/images/5.jpg " /></a>						
	</div>						
	<div class="am-u-sm-6 am-u-md-3 am-u-lg-2 text-four ">
			<div class="outer-con ">
				<div class="title ">
					雪之恋和风大福
				</div>
				
				<div class="sub-title ">
					仅售：¥13.8
				</div>
			</div>
			<a href="# "><img src="web_style/images/5.jpg " /></a>						
	</div>				
	<div class="am-u-sm-4 am-u-md-3 am-u-lg-4 text-five">
		<div class="outer-con ">
			<div class="title ">
				小优布丁
			</div>								
			<div class="sub-title ">
				尝鲜价：¥4.8
			</div>
			
		</div>
		<a href="# "><img src="web_style/images/act2.png " /></a>
	</div>	
	<div class="am-u-sm-4 am-u-md-3 am-u-lg-2 text-six">
		<div class="outer-con ">
			<div class="title ">
				小优布丁
			</div>
			
			<div class="sub-title ">
				尝鲜价：¥4.8
			</div>
		</div>
		<a href="# "><img src="web_style/images/act3.png " /></a>
	</div>	
	<div class="am-u-sm-4 am-u-md-3 am-u-lg-4 text-five">
		<div class="outer-con ">
			<div class="title ">
				小优布丁
			</div>
			<div class="sub-title ">
				尝鲜价：¥4.8
			</div>
			
		</div>
		<a href="# "><img src="web_style/images/act2.png " /></a>
	</div>							
</div>

<div class="clear "></div>
@endsection

@section('cat_tree')
<div class="am-container ">
	<div class="shopTitle ">
		<h4>海味</h4>
		<h3>你是我的优乐美么？不，我是你小鱼干</h3>
		<div class="today-brands ">
			<a href="# ">小鱼干</a>
			<a href="# ">海苔</a>
			<a href="# ">鱿鱼丝</a>
			<a href="# ">海带丝</a>
		</div>
		<span class="more ">
<a class="more-link " href="# ">更多美味</a>
    </span>
	</div>
</div>
<div class="am-g am-g-fixed flood method3 ">
	<ul class="am-thumbnails ">
		<li>
			<div class="list ">
				<a href="# ">
					<img src="web_style/images/cp.jpg " />
					<div class="pro-title ">萨拉米 1+1小鸡腿</div>
					<span class="e-price ">￥29.90</span>
				</a>
			</div>
		</li>
		<li>
			<div class="list ">
				<a href="# ">
					<img src="web_style/images/cp2.jpg " />
					<div class="pro-title ">ZEK 原味海苔</div>
					<span class="e-price ">￥8.90</span>
				</a>
			</div>
		</li>
		<li>
			<div class="list ">
				<a href="# ">
					<img src="web_style/images/cp.jpg " />
					<div class="pro-title ">萨拉米 1+1小鸡腿</div>
					<span class="e-price ">￥29.90</span>
				</a>
			</div>
		</li>
		<li>
			<div class="list ">
				<a href="# ">
					<img src="web_style/images/cp2.jpg " />
					<div class="pro-title ">ZEK 原味海苔</div>
					<span class="e-price ">￥8.90</span>
				</a>
			</div>
		</li>
		<li>
			<div class="list ">
				<a href="# ">
					<img src="web_style/images/cp.jpg " />
					<div class="pro-title ">萨拉米 1+1小鸡腿</div>
					<span class="e-price ">￥29.90</span>
				</a>
			</div>
		</li>
		<li>
			<div class="list ">
				<a href="# ">
					<img src="web_style/images/cp2.jpg " />
					<div class="pro-title ">ZEK 原味海苔</div>
					<span class="e-price ">￥8.90</span>
				</a>
			</div>
		</li>
		<li>
			<div class="list ">
				<a href="# ">
					<img src="web_style/images/cp.jpg " />
					<div class="pro-title ">萨拉米 1+1小鸡腿</div>
					<span class="e-price ">￥29.90</span>
				</a>
			</div>
		</li>
		<li>
			<div class="list ">
				<a href="# ">
					<img src="web_style/images/cp2.jpg " />
					<div class="pro-title ">ZEK 原味海苔</div>
					<span class="e-price ">￥8.90</span>
				</a>
			</div>
		</li>
		<li>
			<div class="list ">
				<a href="# ">
					<img src="web_style/images/cp.jpg " />
					<div class="pro-title ">萨拉米 1+1小鸡腿</div>
					<span class="e-price ">￥29.90</span>
				</a>
			</div>
		</li>
		<li>
			<div class="list ">
				<a href="# ">
					<img src="web_style/images/cp2.jpg " />
					<div class="pro-title ">ZEK 原味海苔</div>
					<span class="e-price ">￥8.90</span>
				</a>
			</div>
		</li>

	</ul>
</div>
@endsection

@section('footer')
<div class="footer ">
	<div class="footer-hd ">
		<p>
			<a href="# ">恒望科技</a>
			<b>|</b>
			<a href="# ">商城首页</a>
			<b>|</b>
			<a href="# ">支付宝</a>
			<b>|</b>
			<a href="# ">物流</a>
		</p>
	</div>
	<div class="footer-bd ">
		<p>
			<a href="# ">关于恒望</a>
			<a href="# ">合作伙伴</a>
			<a href="# ">联系我们</a>
			<a href="# ">网站地图</a>
			<em>© 2015-2025 Hengwang.com 版权所有. 更多模板 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></em>
		</p>
	</div>
</div>
@endsection

@section('inc')
<div class="navCir">
	<li class="active"><a href="home3.html"><i class="am-icon-home "></i>首页</a></li>
	<li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
	<li><a href="shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>	
	<li><a href="web_style/person/index.html"><i class="am-icon-user"></i>我的</a></li>					
</div>
@endsection

@section('menu')
<div class=tip>
			<div id="sidebar">
				<div id="wrap">
					<div id="prof" class="item ">
						<a href="# ">
							<span class="setting "></span>
						</a>
						<div class="ibar_login_box status_login ">
							<div class="avatar_box ">
								<p class="avatar_imgbox "><img src="web_style/images/no-img_mid_.jpg " /></p>
								<ul class="user_info ">
									<li>用户名：sl1903</li>
									<li>级&nbsp;别：普通会员</li>
								</ul>
							</div>
							<div class="login_btnbox ">
								<a href="# " class="login_order ">我的订单</a>
								<a href="# " class="login_favorite ">我的收藏</a>
							</div>
							<i class="icon_arrow_white "></i>
						</div>

					</div>
					<div id="shopCart " class="item ">
						<a href="# ">
							<span class="message "></span>
						</a>
						<p>
							购物车
						</p>
						<p class="cart_num ">0</p>
					</div>
					<div id="asset " class="item ">
						<a href="# ">
							<span class="view "></span>
						</a>
						<div class="mp_tooltip ">
							我的资产
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="foot " class="item ">
						<a href="# ">
							<span class="zuji "></span>
						</a>
						<div class="mp_tooltip ">
							我的足迹
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="brand " class="item ">
						<a href="#">
							<span class="wdsc "><img src="web_style/images/wdsc.png " /></span>
						</a>
						<div class="mp_tooltip ">
							我的收藏
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="broadcast " class="item ">
						<a href="# ">
							<span class="chongzhi "><img src="web_style/images/chongzhi.png " /></span>
						</a>
						<div class="mp_tooltip ">
							我要充值
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div class="quick_toggle ">
						<li class="qtitem ">
							<a href="# "><span class="kfzx "></span></a>
							<div class="mp_tooltip ">客服中心<i class="icon_arrow_right_black "></i></div>
						</li>
						<!--二维码 -->
						<li class="qtitem ">
							<a href="#none "><span class="mpbtn_qrcode "></span></a>
							<div class="mp_qrcode " style="display:none; "><img src="web_style/images/weixin_code_145.png " /><i class="icon_arrow_white "></i></div>
						</li>
						<li class="qtitem ">
							<a href="#top " class="return_top "><span class="top "></span></a>
						</li>
					</div>

					<!--回到顶部 -->
					<div id="quick_links_pop " class="quick_links_pop hide "></div>

				</div>

			</div>
			<div id="prof-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					我
				</div>
			</div>
			<div id="shopCart-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					购物车
				</div>
			</div>
			<div id="asset-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					资产
				</div>

				<div class="ia-head-list ">
					<a href="# " target="_blank " class="pl ">
						<div class="num ">0</div>
						<div class="text ">优惠券</div>
					</a>
					<a href="# " target="_blank " class="pl ">
						<div class="num ">0</div>
						<div class="text ">红包</div>
					</a>
					<a href="# " target="_blank " class="pl money ">
						<div class="num ">￥0</div>
						<div class="text ">余额</div>
					</a>
				</div>

			</div>
			<div id="foot-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					足迹
				</div>
			</div>
			<div id="brand-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					收藏
				</div>
			</div>
			<div id="broadcast-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					充值
				</div>
			</div>
</div>
<script>
	window.jQuery || document.write('<script src="basic/js/jquery.min.js "><\/script>');
</script>
<script type="text/javascript " src="../basic/js/quick_links.js "></script>
@endsection
