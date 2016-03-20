<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>X parcel Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet"/>
    {{--<link href="/css/bootply.css" rel="stylesheet"/>--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/patch.css" rel="stylesheet"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">


            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

                <ul class="nav">
                    <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                </ul>

                <ul class="nav hidden-xs" id="lg-menu">
                    <li @if ($page == '/dashboard/overview') class="active" @endif><a href="/dashboard"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 总览</a></li>
                    <li @if ($page == '/dashboard/profile') class="active" @endif><a href="/dashboard/profile"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 我的资料</a></li>
                    <li @if ($page == '/dashboard/sender') class="active" @endif><a href="/dashboard/sender"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 寄件人管理</a></li>
                    <li @if ($page == '/dashboard/recipient') class="active" @endif><a href="/dashboard/recipient"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> 收件人管理</a></li>
                    <li @if ($page == '/dashboard/balances') class="active" @endif><a href="/dashboard/balances"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span> 充值记录</a></li>
                    <li @if ($page == '/dashboard/orders') class="active" @endif><a href="/dashboard/orders"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 订单记录</a></li></li>
                    <li @if ($page == '/dashboard/charge') class="active" @endif><a href="/dashboard/charge"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> 我要充值</a></li></li>
                    <li @if ($page == '/dashboard/new_order') class="active" @endif><a href="/dashboard/order_sender"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> 我要邮寄</a></li></li>
                    {{--<li @if ($page == '/dashboard/reset_password') class="active" @endif><a href="dashboard/reset_password"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 更改密码</a></li>--}}
                </ul>
                <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                    {{--<li>
                        <a href="http://www.bootply.com"><h3>Bootstrap</h3> <i class="glyphicon glyphicon-heart-empty"></i> Bootply</a>
                    </li>--}}
                </ul>

                <!-- tiny only nav-->
                <ul class="nav visible-xs" id="xs-menu">
                    <li @if ($page == '/dashboard/overview') class="active" @endif><a href="/dashboard"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li @if ($page == '/dashboard/profile') class="active" @endif><a href="/dashboard/profile"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
                    <li @if ($page == '/dashboard/sender') class="active" @endif><a href="/dashboard/sender"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
                    <li @if ($page == '/dashboard/recipient') class="active" @endif><a href="/dashboard/recipient"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
                    <li @if ($page == '/dashboard/balances') class="active" @endif><a href="/dashboard/balances"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span></a></li>
                    <li @if ($page == '/dashboard/orders') class="active" @endif><a href="/dashboard/orders"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a></li></li>
                    <li @if ($page == '/dashboard/charge') class="active" @endif><a href="/dashboard/charge"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></a></li></li>
                    <li @if ($page == '/dashboard/') class="active" @endif><a href="#"><span class="glyphicon glyphicon-send" aria-hidden="true"></span></a></li></li>
                    <li @if ($page == '/dashboard/new_order') class="active" @endif><a href="/dashboard/order_sender"><span class="glyphicon glyphicon-send" aria-hidden="true"></span></a></li></li>
                </ul>

            </div>
            <!-- /sidebar -->

            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">

                <div class="container-fluid" style="background: #ffffff">

                    <div class="col-sm-5 " style="z-index: 1;">
                        <div class="col-sm-12">
                            <a href="/home"><img class="img-responsive" src="/img/remark.png" align="left" alt="X pacel" ></a>
                        </div>
                        <h3>法国邮政la Poste官方合作伙伴</h3>
                        {{--<h1 style=" font-weight: bold;">X<span class="color_18">express</span></h1>--}}
                        {{--<p>
                            I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.
                        </p>--}}
                    </div>

                    <div class="col-sm-3 full-height pull-right" style="z-index: -1;">
                        <div class="container-xs-height full-height">
                            <div class="col-xs-height col-middle text-left">
                                <div class="col-md-11 desktop-only" >
                                    {{--<img src="/img/man1.png" align="right" alt="deliver man" >--}} </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- top nav -->
                <div class="container-fluid navbar navbar-inverse navbar-static-top">

                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/" class="navbar-brand logo">X parcel</a>
                    </div>
                    <nav class="collapse navbar-collapse" role="navigation">
                        {{--<form class="navbar-form navbar-left">
                            <div class="input-group input-group-sm" style="max-width:360px;">
                                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>--}}
                        <ul class="nav navbar-nav">
                           {{-- <li>
                                <a href="/home"><i class="glyphicon glyphicon-home"></i> X parcel</a>
                            </li>--}}

                            {{--<li>
                                <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
                            </li>
                            <li>
                                <a href="#"><span class="badge">badge</span></a>
                            </li>--}}
                        </ul>
                        <ul class="nav navbar-nav navbar-right">

                            {{--<li class="">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                            </li>--}}
                            <li class="">
                                <a href="/logout" ><i class="glyphicon glyphicon-off"></i> &nbsp&nbsp</a>
                            </li>
                            <li class="">
                                <br>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- /top nav -->

                <div class=" container-fluid">
                    <div class="full col-sm-9 panel">

                        <!-- content -->

                        @if (session('failed'))
                            <div class="alert alert-danger">
                                {{ session('failed') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @yield("content")


                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->

        </div>
    </div>
</div>

{{--

<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                Update Status
            </div>
            <div class="modal-body">
                <form class="form center-block">
                    <div class="form-group">
                        <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div>
                    <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
                    <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
                </div>
            </div>
        </div>
    </div>
</div>
--}}

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

{{--<script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>--}}

<script src="/js/scripts.js"></script>

<script>
    $(document).ready(function() {
        $('#xparcel').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Chinese.json"
            }
        });

    } );

</script>
@yield("javascript")

</body>
</html>