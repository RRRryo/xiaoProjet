
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

    <div class="col-sm-5 " style="z-index: 1;">
        <div class="col-sm-12">
        <a href="/home"><img class="img-responsive" src="/img/remark.png" align="left" alt="X pacel" ></a>
        </div>
        {{--<h1 style=" font-weight: bold;">X<span class="color_18">express</span></h1>--}}
        <h3>法国邮政la Poste官方合作伙伴</h3>
        {{--<p>
            I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.
        </p>--}}
    </div>

    <div class="col-sm-3 full-height pull-right" style="z-index: -1;">
        <div class="container-xs-height full-height">
            <div class="col-xs-height col-middle text-left">
                <div class="col-md-11 desktop-only" > {{--<img src="/img/man1.png" align="right" alt="deliver man" >--}} </div>
            </div>
        </div>
    </div>
</div>
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
                    <li @if ($page == '/home') class="active" @endif ><a href="/home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 首页</a></li>
                    <li @if ($page == '/price_list') class="active" @endif ><a href="/price_list"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 价格列表</a></li>
                    <li @if ($page == '/tips') class="active" @endif ><a href="/tips"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> 邮寄须知</a></li>

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
                        <li @if ($page == 'register') class="active" @endif><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span> 注册</a></li>
                        <li @if ($page == 'login') class="active" @endif><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 登录</a></li>
                    @else
                        <li {{--class="dropdown"--}}>
                            <a href="/dashboard" {{-- class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"--}}>
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->name }}
                            </a>

                            {{--                                    <ul class="dropdown-menu" role="menu">
                                                                    <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> 登出 </a></li>
                                                                </ul>--}}
                        </li>
                        <li ><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> </a></li>

                    @endif
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
</div>
<div class="container-fluid">

</div>

    @yield('content')

<footer class="footer">
    <div class="container-fluid" style="background: black;">
        <div class="container"><p style=" color: #ffffff;  margin: 20px 0;" {{--class="text-muted"--}}>Copyright © X-parcel</p></div>

    </div>
</footer>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>
<script src="/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

{{--<script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>--}}
{{--<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>--}}

{{--<script src="/js/bootbox.min.js"></script>--}}
</body>
</html>