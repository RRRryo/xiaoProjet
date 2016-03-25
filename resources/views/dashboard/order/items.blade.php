@extends('layouts.dashboard')
<?php $page = "/dashboard/new_order"  ?>
@section('content')

    <div class="container">
        <div class="panel">
        @foreach ($errors->all() as $error)
                <span class="help-block">
                    <strong>{{$error}}</strong>
                </span>
        @endforeach
        </div>

{{--        @if ($errors->exist())--}}

        {{--@endif--}}
        <div class="row">
            <div class="col-md-12"><h4 class="iTitle"><span class="glyphicon glyphicon-floppy-save"></span> 您正在创建新的表单
                </h4></div>
        </div>
        <form class="form-horizontal"  method="POST" action="/dashboard/order_items">
            {!! csrf_field() !!}
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
                        <div class="col-sm-2 has-feedback form-group{{ $errors->has('weightreal') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" id="weightreal" name="weightreal" value="{{ old('weightreal') }}" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>


                        <label class="col-sm-2 control-label" for="length-width-height">体积尺寸(单位CM)</label>
                        <div class="col-sm-2 has-feedback form-group{{ $errors->has('length') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" id="length" name="length" placeholder="长" value="{{ old('length') }}"
                                   required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        {{--@if ($errors->has('length'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('length') }}</strong>
                                </span>
                        @endif--}}
                        <div class="col-sm-2 has-feedback form-group{{ $errors->has('width') ? ' has-error' : '' }}">

                            <input type="text" class="form-control" id="width" name="width" placeholder="宽" value="{{ old('width') }}"
                                   required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        {{--@if ($errors->has('width'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('width') }}</strong>
                                </span>
                        @endif--}}
                        <div class="col-sm-2 has-feedback form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" id="height" name="height" placeholder="高" value="{{ old('height') }}" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            {{--@if ($errors->has('height'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('height') }}</strong>
                                </span>
                            @endif--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="type_colis">请选择包裹类型</label>
                        <div class="col-sm-2 has-feedback form-group{{ $errors->has('type_colis') ? ' has-error' : '' }}">
                            <select class="form-control" id="type_colis" name="type_colis">
                                <option value="Cadeau">Cadeau</option>
                                <!--
                                <option value="2" >Echantillon commercial</option>
                                <option value="3" >Envoi commercial</option>
                                -->
                                <option value="Document">Document</option>
                                <option value="Autre">Autre</option>
                            </select>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            {{--@if ($errors->has('height'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                            @endif--}}
                        </div>
                        <label class="col-sm-2 control-label" for="weightdim">体积重量(自动计算)</label>
                        <div class="col-sm-2 has-feedback">
                            <input type="text" class="form-control" id="weightdim" name="weightdim" disabled>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <label class="col-sm-2 control-label" for="weightbuy">购买重量(自动计算 )</label>
                        <div class="col-sm-2 has-feedback">
                            <input type="text" class="form-control" id="weightbuy" name="weightbuy" disabled=""
                                   value="">
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
                        <tbody>
                        <tr>
                            <th>物品名称（法语）</th>
                            <th><span class="info_imp">单件</span>物品重量（千克kg）</th>
                            <th>数量</th>
                            <th><span class="info_imp">单件</span>物品价值（欧元）</th>
                            <th>原产地</th>
                            <th>
                                <button type="button" class="btn btn-success btn-sm" id="add_unit_coli">添加</button>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="has-feedback">
                                    <input id="objname" name="objname" class="form-control" value="{{ old('objname') }}" required="">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </td>

                            <td>
                                <div class="has-feedback">
                                    <input id="objpoid" name="objpoid" class="form-control" value="{{ old('objpoid') }}" required="">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </td>

                            <td>
                                <div class="has-feedback">
                                    <input id="objnum" name="objnum" class="form-control" value="{{ old('objnum') }}" required="">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </td>

                            <td>
                                <div class="has-feedback">
                                    <input id="objval" name="objval" class="form-control" value="{{ old('objval') }}" required="">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </td>

                            <td>
                                <div class="has-feedback">
                                    <select class="form-control" name="objpays" id="objpays" required="">
                                        <option @if(old('objpays') == "France") selected  @endif  value="France">法国</option>
                                        <option @if(old('objpays') == "Allemagne") selected  @endif  value="Allemagne">德国</option>
                                        <option @if(old('objpays') == "Italie") selected  @endif  value="Italie">意大利</option>
                                        <option @if(old('objpays') == "Espagne") selected  @endif  value="Espagne">西班牙</option>
                                        <option @if(old('objpays') == "Suisse") selected  @endif  value="Suisse">瑞士</option>
                                        <option @if(old('objpays') == "Belgique") selected  @endif  value="Belgique">比利时</option>
                                        <option @if(old('objpays') == "Anglais") selected  @endif  value="Anglais">英国</option>
                                        <option @if(old('objpays') == "Chine") selected  @endif  value="Chine">中国大陆地区</option>
                                        <option @if(old('objpays') == "Taiwan") selected  @endif  value="Taiwan">台湾地区</option>
                                        <option @if(old('objpays') == "Hong Kong") selected  @endif  value="Hong Kong">香港地区</option>
                                        <option @if(old('objpays') == "USA") selected  @endif  value="USA">美国</option>
                                        <option @if(old('objpays') == "Canada") selected  @endif  value="Canada">加拿大</option>
                                        <option @if(old('objpays') == "Japon") selected  @endif  value="Japon">日本</option>
                                        <option @if(old('objpays') == "Corée") selected  @endif  value="Corée">韩国</option>
                                        <option @if(old('objpays') == "Singapour") selected  @endif  value="Singapour">新加坡</option>
                                        <option @if(old('objpays') == "Thaïlande") selected  @endif  value="Thaïlande">泰国</option>
                                        <option @if(old('objpays') == "Russie") selected  @endif  value="Russie">俄罗斯</option>
                                        <option @if(old('objpays') == "Australie") selected  @endif  value="Australie">澳大利亚</option>
                                        <option @if(old('objpays') == "Viêt-Nam") selected  @endif value="Viêt-Nam">越南</option>
                                    </select>
                                </div>
                            </td>

                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <input name="baoxian" type="radio" value="true" required @if(old('baoxian') == "true") checked="checked"  @endif  >
                            <label class="control-label" for="baoxian">购买保险</label>
                        </div>
                        <div class="col-sm-2">
                            <input name="baoxian" type="radio" value="false" required required @if(old('baoxian') == "false") checked="checked"  @endif >
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
                        <a href="/dashboard/order_recipient" class="btn btn-lg btn-warning pull-left"><span
                                    class="glyphicon glyphicon-chevron-left"></span> 上一步 </a>
                        <button type="submit" class="btn btn-lg btn-warning pull-right" id="btn_etape_colis">预览 <span
                                    class="glyphicon glyphicon-chevron-right"></span></button>
                    </div>
                </div>

            </div>
        </form>

    </div>



@stop

@section('javascript')
    <script src="/js/new_order.js"></script>
@stop
