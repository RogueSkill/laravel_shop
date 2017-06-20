<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>

<!-- 导航 -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li class="hidden-sm hidden-md"><a href="http://v2.bootcss.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'v2doc'])">测试</a></li>

                <li><a href="http://v3.bootcss.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'v3doc'])">测试</a></li>
                <li><a href="http://v4.bootcss.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'v4doc'])">测试</a></li>
                <li><a href="/p/lesscss/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'less'])">测试</a></li>
                <li><a href="http://www.jquery123.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'jquery'])">测试</a></li>
                <li><a href="http://expo.bootcss.com" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'expo'])">测试</a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <ul class="nav navbar-nav navbar-right hidden-sm">
                <li><a href="/about/" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'about'])">登录</a></li>
                <li><a href="/about/" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'about'])">注册</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- end -->

@yield('content')

<!--友情链接上的图片-->
<div class="container">
    <div class="bq-img"><img src="{{asset('images/bq-nav.png')}}" alt="" class="img-responsive"></div>
</div>
<!--end-->

<!-- 友情链接 -->
<div class="container">
    <div class="links">
        <div class="links-font">友情链接</div>
        <ul>
            <li><a href="">百度</a></li>
            <li><a href="">谷歌</a></li>
            <li><a href="">必应</a></li>
        </ul>
        <hr>
    </div>
</div>
<!-- end -->

<div class="copyright">
    <div class="container">
        <div class="copyright-font">本站相关网页素材及相关资源均来源互联网，如有侵权请速告知，我们将会在24小时内删除</div>
</div>
</div>
</body>
</html>
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
