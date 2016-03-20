@extends('layouts.dashboard')
<?php $page="/dashboard/new_order"  ?>
@section('content')

    <div class="container">

        <div class="row"><div class="col-md-12"><h4 class="iTitle"><span class="glyphicon glyphicon-floppy-save"></span> 您正在创建新的表单</h4></div></div>
        <form method="post" class="form-horizontal" action="/dashboard/order_items">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row" id="colis" style="">
                <div class="col-md-12">
                    <div class="alert alert-warning" role="alert">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                        <span class="sr-only">Info:</span>
                        <span>体积尺寸单位厘米cm, 精确到小数点后1位, 体积重量(自动计算)=长cm*宽cm*高cm/5000. 包裹尺寸 单边不过1m，长+宽+高≤1.5m</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="weightreal">实际重量(单位kg)</label>
                        <div class="col-sm-2 has-feedback">
                            <input type="text" class="form-control" id="weightreal" name="weightreal" value="">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <label class="col-sm-2 control-label" for="length-width-height">体积尺寸(单位CM)</label>
                        <div class="col-sm-2 has-feedback">
                            <input type="text" class="form-control" id="length" name="length" placeholder="长" value="">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="col-sm-2 has-feedback">
                            <input type="text" class="form-control" id="width" name="width" placeholder="宽" value="">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="col-sm-2 has-feedback">
                            <input type="text" class="form-control" id="height" name="height" placeholder="高" value="">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="weightdim">请选择包裹类型</label>
                        <div class="col-sm-2 has-feedback">
                            <select class="form-control" id="type_colis" name="type_colis">
                                <option value="1">Cadeau</option>
                                <!--
                                <option value="2" >Echantillon commercial</option>
                                <option value="3" >Envoi commercial</option>
                                -->
                                <option value="4">Document</option>
                                <option value="5">Autre</option>
                            </select>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <label class="col-sm-2 control-label" for="weightdim">体积重量(自动计算)</label>
                        <div class="col-sm-2 has-feedback">
                            <input type="text" class="form-control" id="weightdim" name="weightdim" disabled>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <label class="col-sm-2 control-label" for="weightbuy">购买重量(自动计算 )</label>
                        <div class="col-sm-2 has-feedback">
                            <input type="text" class="form-control" id="weightbuy" name="weightbuy" disabled="" value="">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="alert alert-warning" role="alert">
                        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>
                        <span class="sr-only">Info:</span>
                        <span>包裹内容 请如实申报</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <table id="tb_colis" class="table">
                        <tbody><tr><th>物品名称（法语）</th><th><span class="info_imp">单件</span>物品重量（千克kg）</th><th>数量</th><th><span class="info_imp">单件</span>物品价值（欧元）</th><th>原产地</th><th><button type="button" class="btn btn-success btn-sm" id="add_unit_coli">添加</button></th></tr>
                        <tr>
                            <td><div class="has-feedback">
                                    <input id="objname" name="objname" class="form-control" value="" required="">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div></td>

                            <td><div class="has-feedback">
                                    <input id="objpoid" name="objpoid" class="form-control" value="" required="">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div></td>

                            <td><div class="has-feedback">
                                    <input id="objnum" name="objnum" class="form-control" value="" required="">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div></td>

                            <td><div class="has-feedback">
                                    <input id="objval" name="objval" class="form-control" value="" required="">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div></td>

                            <td><div class="has-feedback">
                                    <select class="form-control" name="objpays" id="objpays" required="">
                                        <option value="FR">法国</option>
                                        <option value="DE">德国</option>
                                        <option value="IT">意大利</option>
                                        <option value="ES">西班牙</option>
                                        <option value="CH">瑞士</option>
                                        <option value="BE">比利时</option>
                                        <option value="GB">英国</option>
                                        <option value="CN">中国大陆地区</option>
                                        <option value="TW">台湾地区</option>
                                        <option value="HK">香港地区</option>
                                        <option value="US">美国</option>
                                        <option value="CA">加拿大</option>
                                        <option value="JP">日本</option>
                                        <option value="KR">韩国</option>
                                        <option value="SG">新加坡</option>
                                        <option value="TH">泰国</option>
                                        <option value="RU">俄罗斯</option>
                                        <option value="AU">澳大利亚</option>
                                        <option value="VN">越南</option>
                                    </select>
                                </div></td>

                            <td></td>
                        </tr>
                        </tbody></table>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <input name="baoxian" type="radio" value="1">
                            <label class="control-label" for="baoxian">购买保险</label>
                        </div>
                        <div class="col-sm-2">
                            <input name="baoxian" type="radio" value="0">
                            <label class="control-label" for="baoxian">不购买保险</label>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group has-feedback">
                                <span class="input-group-addon">保险额度（1-10）</span>
                                <input type="text" class="form-control" id="baoxianmoney" name="baoxianmoney" value="">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning pull-right" id="btn_etape_colis">预览 <span class="glyphicon glyphicon-chevron-right"></span></button>
                    </div>
                </div>

            </div>
        </form>

    </div>

    <a href="/dashboard/order_recipient" class="btn btn-warning pull-left" ><span class="glyphicon glyphicon-chevron-left"></span> 上一步 </a>


@stop

@section('javascript')
<script src="/js/new_order.js"></script>
@stop
