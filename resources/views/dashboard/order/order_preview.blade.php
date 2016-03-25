@extends('layouts.dashboard')
<?php $page = "/dashboard/new_order"  ?>
@section('content')


    <div class="row">
        <div class=" panel panel-warning">
            <div class="panel-heading ">
                <h3>请核对以下信息</h3>
            </div>
            <div class="panel-body ">
                <div class="col-md-6">
                    <h4>寄件人信息</h4>
                    <div class="panel-body ">
                        <p>{{$order->sender_name}}</p>
                        <p>{{$order->sender_address}}</p>
                        <p>{{$order->sender_city}}</p>
                        <p>{{$order->sender_country}}</p>
                        <p>{{$order->sender_telephone}}</p>
                        <p>{{$order->sender_email}}</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <h4>收件人信息</h4>
                    <div class="panel-body ">
                        <p>{{$order->recipient_name}}</p>
                        <p>{{$order->recipient_address}}</p>
                        <p>{{$order->recipient_city}}</p>
                        <p>{{$order->recipient_country}}</p>
                        <p>{{$order->recipient_telephone}}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <p>尺寸: {{$order->length}} cm x {{$order->width}} cm x {{$order->height}} cm | 类型: {{$order->type_colis}} |@if($order->insurance == "true") 购买保险&nbsp {{$order->insurance_amount}}€ @else 不购买保险 @endif</p>
                    <p>物品总重量: {{$order->real_weight}}Kg 物品总价值: {{$totalAmount}}€</p>
                    <p>购买重量: {{$order->buy_weight}}kg 总价格: {{$order->buy_weight}}€</p>
                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th>物品名称</th>
                                <th>数量</th>
                                <th>单件物品价值</th>
                                <th>单件物品重量</th>
                                <th>原产地</th>
                            </tr>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{$item->value}} €</td>
                                    <td>{{$item->weight}} kg</td>
                                    <td>{{$item->origin}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button onclick="window.history.back()" class="btn btn-lg btn-warning "><span class="glyphicon glyphicon-chevron-left"></span> 上一步</button>
                    <a class="btn btn-lg btn-primary pull-right" href="/dashboard/create_order"> 生成订单</a>
                </div>

            </div>


        </div>

    </div>


@stop