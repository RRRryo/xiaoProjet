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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>X express</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/custom.css" rel="stylesheet"/>
    <link href="css/patch.css" rel="stylesheet"/>
    <link href="css/signin.css" rel="stylesheet"/>

</head>

<?php include 'head.php';?>
<!--narbar-->
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
                        <li><a href="home">首页</a></li>

                        <li class="dropdown active" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">国际快递<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">订单系统</a></li>
                            <li><a href="price_list">快递网站报价</a></li>
                            <li class="active"><a href="#">邮寄须知</a></li>
                            <li><a href="#">菜鸟代购</a></li>
                        </ul>
                        </li>

                        <li class="dropdown" ><a href="#">网上商城</a></li>

                    </ul>
                    <!--<ul class="nav navbar-nav navbar-right">
                        <li>
                            <button type="button" class="btn btn-default navbar-btn">登录</button>
                        </li>

                    </ul>-->
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </div>
</div>


    <div class="container">
        <?php echo $inputEmail ?>
        haha

    </div>
<?php include 'foot.php';?>