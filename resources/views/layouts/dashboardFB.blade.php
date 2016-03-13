<html lang="zh-Hans">
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
    <link href="/css/bootply.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="/css/patch.css" rel="stylesheet"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- CSS code from Bootply.com editor -->

    {{--<script id="_carbonads_projs" type="text/javascript" src="//srv.carbonads.net/ads/C6AILKT.json?segment=placement:bootplycom&amp;callback=_carbonads_go"></script><script type="text/javascript" src="http://adn.fusionads.net/launchbit/9533/developers//bootplycom/8/?click_redir=%2F%2Fsrv.buysellads.com%2Fads%2Fclick%2Fx%2FGTND423MCAAD553WCKA4YKQWCWSILK3UF6BDPZ3JCEBI553JCV7DVK7KC6BDP27YCASIKK3EHJNCLSIZZRLCP7I35MNFV%3Fencredirect%3D&amp;r=145787808"></script></head>--}}

<!-- HTML code from Bootply.com editor -->

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
                    <li @if ($page == '/dashboard/senders') class="active" @endif><a href="/dashboard/senders"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 寄件人管理</a></li>
                    <li @if ($page == '/dashboard/recipients') class="active" @endif><a href="/dashboard/recipients"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> 收件人管理</a></li>
                    <li @if ($page == '/dashboard/balances') class="active" @endif><a href="/dashboard/balances"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span> 充值记录</a></li>
                    <li @if ($page == '/dashboard/') class="active" @endif><a href="#"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 订单记录</a></li></li>
                    <li @if ($page == '/dashboard/charge') class="active" @endif><a href="/dashboard/charge"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> 我要充值</a></li></li>
                    <li @if ($page == '/dashboard/') class="active" @endif><a href="#"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> 我要邮寄</a></li></li>
                    {{--<li @if ($page == '/dashboard/reset_password') class="active" @endif><a href="dashboard/reset_password"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 更改密码</a></li>--}}
                </ul>
                <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                    <li>
                        {{--<a href="http://www.bootply.com"><h3>Bootstrap</h3> <i class="glyphicon glyphicon-heart-empty"></i> Bootply</a>--}}
                    </li>
                </ul>

                <!-- tiny only nav-->
                <ul class="nav visible-xs" id="xs-menu">
                    <li @if ($page == '/dashboard/overview') class="active" @endif><a href="/dashboard"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li @if ($page == '/dashboard/profile') class="active" @endif><a href="/dashboard/profile"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
                    <li @if ($page == '/dashboard/senders') class="active" @endif><a href="/dashboard/senders"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
                    <li @if ($page == '/dashboard/recipients') class="active" @endif><a href="/dashboard/recipients"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
                    <li @if ($page == '/dashboard/balances') class="active" @endif><a href="/dashboard/balances"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span></a></li>
                    <li @if ($page == '/dashboard/') class="active" @endif><a href="#"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a></li></li>
                    <li @if ($page == '/dashboard/charge') class="active" @endif><a href="/dashboard/charge"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></a></li></li>
                    <li @if ($page == '/dashboard/') class="active" @endif><a href="#"><span class="glyphicon glyphicon-send" aria-hidden="true"></span></a></li></li>
                    {{--<li @if ($page == '/dashboard/reset_password') class="active" @endif><a href="dashboard/reset_password"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 更改密码</a></li>--}}
                </ul>

            </div>
            <!-- /sidebar -->

            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">

                <!-- top nav -->
                <div class="navbar navbar navbar-static-top">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/" >X parcel</a>
                    </div>
                    <nav class="collapse navbar-collapse" role="navigation">

                        <ul class="nav navbar-nav">

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li {{--class="dropdown"--}}>
                                <a href="/dashboard" {{-- class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"--}}>
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->name }}
                                </a>
                            </li>

                            <li ><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> </a></li>
                        </ul>
                    </nav>
                </div>
                <!-- /top nav -->

                <div class="padding">
                    <div class="full col-sm-9">
                        <!-- content -->
                        <div class="row">

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
                            <hr>
                        </div><!--/row-->
                    </div>


                </div><!-- /padding -->
            </div>
            <!-- /main -->

        </div>
    </div>
</div>


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

{{--
<script async="" src="//www.google-analytics.com/analytics.js"></script>
--}}
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


{{--<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>--}}


<!-- JavaScript jQuery code from Bootply.com editor  -->

<script type="text/javascript">

    $(document).ready(function() {

        /* off-canvas sidebar toggle */

        $('[data-toggle=offcanvas]').click(function() {
            $(this).toggleClass('visible-xs text-center');
            $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
            $('.row-offcanvas').toggleClass('active');
            $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
            $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
            $('#btnShow').toggle();
        });

    });

</script>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

{{--<script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>--}}

{{--<script src="/js/bootbox.min.js"></script>--}}

<script>
    $(document).ready(function() {
        $('#xparcel').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Chinese.json"
            }
        });

    } );

</script>



</body></html>