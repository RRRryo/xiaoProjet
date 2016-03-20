@extends('layouts.dashboard')
<?php $page="/dashboard/orders"  ?>
@section('content')
    <div id="exparcel_wrapper" class="table-responsive dataTables_wrapper form-inline dt-bootstrap" >
        <table id="xparcel" class="table table-striped " cellspacing="0" width="100%">
            <thead>
            <tr bgcolor="#FF9933" style="color: #ffffff">
                <th>日期</th>
                <th>编号</th>
                <th>寄件人</th>
                <th>收件人</th>
                <th>价格€</th>
                <th>状态</th>
                <th>操作</th>

            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->created_at}}</td>
                    <td>{{ $order->code}}</td>
                    <td>{{ $order->sender_name}}</td>
                    <td>{{ $order->recipient_name}}</td>
                    <td>{{ $order->amount}}</td>
                    <td> @if ($order->status == 0) 未付款 @else 已付款 @endif </td>
                    <td><a href="{{ URL::to('/dashboard/order_detail/' . $order->id ) }}">查看</a></td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@stop