
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
                            <li class=""><a href="#">邮寄须知</a></li>
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


    <div class="container  tips-width" >
        <div class="jumbotron color_18">
            <h1  align="center">邮寄须知</h1>
        </div>

        <h2 class="color_18" align="center">包裹计费重量</h2>
        <p><h3><span style="color: gray">法国邮政的计价标准：</span></h3></p><br>
        <p>计价重量按实际重量，体积重量大者计算。</p>

        <p>情况1：包裹体积重量是5.58kg，但是实际重量是7公斤，最终重量按照7公斤算。<br>

            情况2：包裹体积重量是6.58kg，但是实际重量是5公斤，最终重量按照7公斤算。</p>

        <p>体积重量：将包裹尺寸（单位：厘米）按照公式：（长X宽X高）/5000代入计算。</p>

        <p><span style="color: red">注意：包裹的实际重量和尺寸仅以承运商的最终扫描结果为准。为避免超重，请务必将包裹打包严实规整并预留0.5kg余地。在包裹投寄之前请预先保存好能证明包裹尺寸（将标尺置于箱子一侧）和单号的照片3-4张作为凭证以便在对邮局的扫描结果有疑议时提出申诉。</span></p>

        <h2 class="color_18" align="center">禁寄物品</h2>

        <p>根据国际航空快递标准和承运商规定，下面所列出的所有物品都因其价值或种类而被禁止运输。本公司将不会在合同、运单文件里列出下列禁运物品，也不会有特别协议对禁运品进行说明，客户有责任和义务自己了解相关禁运品信息。 如因包裹内存在禁运物品而导致的退件、海关查扣、销毁等情况的出现，本公司不承担任何法律责任。</p>
        <p>法国关于禁运品的相关说明：XXXXXXXXXXXXX</p>
        <ul>
            <li>国家法律法规禁止流通或者寄递的物品；</li>
            <li>爆炸性、易燃性、腐蚀性、放射性和毒性等危险物品；</li>
            <li>反动报刊、书籍、窗口或者淫秽物品；</li>
            <li>活的动物（包装能确保寄递和工作人员安全的蜜蜂、蚕、水蛭除外；</li>
            <li>包装不妥，可能危害人身安全、污染或损毁其它邮件设备的物品；</li>
            <li>其它不适合邮递条件的物品。</li>
        </ul>

        <p>会员注册成功后两个月内无法注销，如需注销会员需在注册期满两个月后发送申请邮件至XXX@gmail.com，经本公司核实确认后，您可以选择将100欧元押金冲抵运费，也可以选择终止服务后由我公司以邮寄公司支票形式寄至会员注册地址。 关于VIP会员600欧元运费预充值，需在自充值成功之日起12个月内消费完毕，除非在此期间续充600欧元可相应延长12个月，否则逾期运费将清零。预充值的运费无法以任何理由和形式退换，只能作为包裹运费来消费完毕。VIP会员的600欧元预存运费消费完毕后，只有续充至少900欧元才可以继续维持VIP资格，否则本公司有权力在不事先通知客户的前提下将其自动降为普通会员。</p>


        <h2 class="color_18" align="center">保险</h2>
        <p>客户可自行选择是否需要对包裹购买额外保险。如需购买额外保险，在保证邮    寄物品价值与投保金额相符的前提下，保费按照三档收取：    2欧保费最高可保300欧元；5欧保费最高可保500欧元；10欧保费最高可保1000欧元。每个包裹最高可购买不超过1000欧元的保险。</p>
        <h2 class="color_18" align="center">包裹赔偿</h2>
        <p>本公司为客户提供下单，包裹追踪等服务，后续的包裹运输由本公司的合作承运商负责提供，包裹在寄递过程中因非我公司原因而发生丢失、短少、损毁和延误，我司不承担任何责任。对间接损失和未实现的利益不承担任何责任。</p>
        <p>以下情况本公司及各包裹承运商不承担赔偿责任：</p>
        <ul>
            <li>寄递的物品违反禁寄或限寄规定的，经主管机关没收或依照有关法规处理</li>
            <li>投交时邮件封装完好无拆动痕迹，且重量无减少而内件短少或损坏的。</li>
            <li>收件人已按规定手续签收的。</li>
            <li>由于客户的责任或所寄物品本身的原因造成邮件损失或延误的。</li>
            <li>客户自交寄邮件之日起至查询期满未查询又未提出赔偿要求的。</li>
            <li>国际邮件被寄达国按其国内法令扣留、没收或销毁的。</li>
        </ul>

        <h2 class="color_18" align="center">免责声明</h2><p>由于天气原因，自然灾害，战争，机械故障等不可抗力造成的货物延误，和目的地海关查货以及目的地客人没有进出口权，或目的地客人拒绝签收，或目的地客人支付海关关税不及时等其他原因造成的货件延误，货物无法清关，货物无法派送，货物被退回，本公司不承担任何责任，发货人将承担由此引起的一切责任和费用。</p>
        <p>由于各国的法律不同，对于进口货物的限制也不一样，所以由于货物的原因造成进口国海关通关困难和延误或涉及关税等，本公司不承担任何责任。</p>
        <p>如果货物被目的地海关强行退回，可能产生的相关退运费、当地进口关税和相关杂费应由发货方承担。否则，发货方有权要求放弃此货。</p>
        <p>因付款不及时引起的发货延误, 本公司不承担责任。</p>
        <p>易碎品不承担任何保险责任，包装完好的货物内件损坏不予赔偿。</p>
        <p>在发货之前请申报货物的品名数量和货物价值，如果你未与我们特别说明，将被默认为由我司代为申报，我们将按照常规进行申报，由此造成的后果我司不承担任何责任。</p>
        <p>各国法律法规禁止的物品，本公司拒绝接收。客户需自行承担因为寄违禁、限制类物品而被扣关的所有的风险。违禁和限制类物品请查询网站信息或者向工作人员咨询。</p>
        <p>本公司不提供寄存业务，我们确保您送来的包裹能在当天或次天交到指定承运商，但是不接受未进行打包的包裹在本公司存放到指定日期寄出。凡应寄件人要求一定要存放的包裹发生被盗、丢失等情况时，我公司不承担任何责任。箱内物品与清关明细单内容不相符，邮包会被开箱，查扣等情况，后果一律自负，我司不承担任何责任。</p>
        <h2 class="color_18" align="center">清关与关税</h2><p>根据中国法律规定，个人邮寄进境物品，海关依法征收进口税，但应征进口税税额在人民币50元（含50元）以下的，海关予以免征。</p>
        <p>个人寄自或寄往港、澳、台地区的物品，每次限值为800元人民币；寄自或寄往其它国家和地区的物品，每次限值为1000元人民币。</p>
        <p>海关会根据物品属性和价值来决定是否征税和征税额。海关会参考形式发票上的申报金额，但最后不一定采纳申报金额，可能会根据实际情况作出自己的判断，决定是否征税和征税金额。具体可以参考中国海关2010年第43号公告。</p>
        <p>http://www.customs.gov.cn/publish/portal0/tab399/info231089.htm</p>
        <p>本公司仅提供法国邮政的代理物流服务，无法决定海关是否会对您的物品征收关税或者征收额，同样的一票快件，同样的申报，不同地方的海关和不同的清关工作人员处理起来结果都可能不同。</p>
        <p>通过国家邮政系统投寄的包裹，被抽检的概率一般比较低。</p>
        <p>按中华人民共和国海关总署对进出境个人邮递物品管理措施，目的地海关将会以抽查形式查验包裹，如海关认定包裹内物品超出个人合理自用范围，将按照货物办理通关手续；如收件人因拒绝缴纳税项或未能按照货物规定办理通关手续，寄件人可委托本公司申请办理退运手续，本公司将收取相应的退件费用。</p>
        <p>请在邮寄包裹前仔细阅读此须知，一旦您开始使用我司的服务，即表明您已阅    读并同意以上内容。</p>
        <p>本公司对以上邮寄须知享有最终解释权。</p>


    </div>

<?php include 'foot.php';?>