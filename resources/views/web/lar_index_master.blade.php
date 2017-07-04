<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	<title>首页</title>
	@yield('head')
	
	</head>

	<body>
		<div class="hmtop">
			<!--顶部导航条 -->
			@yield('top_nav')
			<!-- end顶部导航条 -->
			
			<!-- banner -->
			@yield('banner')						
			<!-- end banner -->
			<div class="shopNav">
				<div class="slideall">
			           <!-- 中间导航 -->
					   @yield('mid_nav')
		        		<!-- end 中间导航 -->

						<!--侧边导航 -->
						@yield('left_nav')

					<!--小导航 -->
					<div class="am-g am-g-fixed smallnav">
						<div class="am-u-sm-3">
							<a href="sort.html"><img src="web_style/images/navsmall.jpg" />
								<div class="title">商品分类</div>
							</a>
						</div>
						<div class="am-u-sm-3">
							<a href="#"><img src="web_style/images/huismall.jpg" />
								<div class="title">大聚惠</div>
							</a>
						</div>
						<div class="am-u-sm-3">
							<a href="#"><img src="web_style/images/mansmall.jpg" />
								<div class="title">个人中心</div>
							</a>
						</div>
						<div class="am-u-sm-3">
							<a href="#"><img src="web_style/images/moneysmall.jpg" />
								<div class="title">投资理财</div>
							</a>
						</div>
					</div>

					<!--走马灯 -->
					@yield('right_box')
			</div>
			<div class="shopMainbg">
				<div class="shopMain" id="shopmain">

					<!--今日推荐 -->
					@yield('recommend')
					<!-- end 今日推荐 -->
					
					<!--热门活动 -->
					@yield('hot')
					<!-- end 热门活动 -->

					<!--甜点-->
					@yield('cat_one')
					<!--坚果-->
					@yield('cat_two')
					<!-- 海味 -->
					@yield('cat_tree')
					<!-- 底部 -->
					@yield('footer')
				</div>
			</div>
		</div>
		</div>
		<!--引导 -->
		@yield('inc')
		<!--菜单 -->
		@yield('menu')
	</body>

</html>
