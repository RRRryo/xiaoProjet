<?php
echo '
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
                        <li class="" ><a href="#">首页</a></li>

                        <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">国际快递<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">订单系统</a></li>
                            <li><a href="price_list">快递网站报价</a></li>
                            <li><a href="tips">邮寄须知</a></li>
                            <li><a href="#">菜鸟代购</a></li>
                        </ul>
                        </li>

                        <li class="dropdown" ><a href="#">网上商城</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <button type="button" class="btn btn-default navbar-btn" onclick="location.href=\'signin\'">登录</button>
                        </li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </div>
</div>
';
?>