
<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

    <title>X express</title>


    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/custom.css" rel="stylesheet"/>
    <link href="/css/patch.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    @yield('css')

</head>
<body>
<div class="container">

    <div class="col-sm-5 full-height" style="z-index: 1;">
        <h1 style=" font-weight: bold;">X<span class="color_18">express</span></h1>
        <h2>You pick the location,<br>
            we will take care of the rest</h2>
        <p>
            I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.
        </p>
    </div>

    <div class="col-sm-3 full-height pull-right" style="z-index: -1;">
        <div class="container-xs-height full-height">
            <div class="col-xs-height col-middle text-left">
                <div class="col-md-11 desktop-only" > <img src="/img/man1.png" align="right" alt="deliver man" > </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="navbar-primary">
        <!-- Static navbar -->
        <nav class="navbar  navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" >
                        <li @if ($page == 'home') class="active" @endif ><a href="/home">首页</a></li>
                        <li @if ($page == 'price_list') class="active" @endif ><a href="/price_list">价格列表</a></li>
                        <li @if ($page == 'tips') class="active" @endif ><a href="/tips">邮寄须知</a></li>

                        {{--<li class="dropdown @if ($page == 'price_list' || $page == 'tips' ) active @endif" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">国际快递<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">订单系统</a></li>
                                <li @if ($page == 'price_list') class="active" @endif><a href="price_list">快递网站报价</a></li>
                                <li @if ($page == 'tips') class="active" @endif><a href="tips">邮寄须知</a></li>
                                <li><a href="#">菜鸟代购</a></li>
                            </ul>
                        </li>--}}

                        {{--<li class="dropdown" ><a href="#">网上商城</a></li>--}}

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li @if ($page == 'login') class="active" @endif><a href="{{ url('/login') }}">登录</a></li>
                                <li @if ($page == 'register') class="active" @endif><a href="{{ url('/register') }}">注册</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" onclick="location.href='/dashboard'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> 登出 </a></li>
                                    </ul>
                                </li>
                            @endif
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </div>
</div>

    @yield('content')

<footer class="footer">
    <div class="container">
        <p class="text-muted">Copyright © X-parcel</p>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/custom.js"></script>

</body>
</html>