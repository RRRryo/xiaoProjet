@extends('layouts.dashboard')
<?php $page="/dashboard/new_order"  ?>
@section('content')

    <button onclick="window.history.back()" class="btn btn-warning "> 返回 </button>

    <hr>
    <div class="modal-body">
           <div class="row">
               <div class="col-md-12">
                   <div class="media">
                       <div class="media-left">
                           {{--<img class="media-object" src="img/purchase-order-128.png">--}}
                       </div>
                       <div class="media-body">
                           <h3 class="media-heading">{{$order->code}}
                               <span>{{--<img src="img/weight-24.png"> --}}{{$order->buy_weight}}Kg</span> |
                               <span>{{--<img src="img/euro-24.png">--}}{{$order->amount}} €</span>
                           </h3>
                           <h4>{{$order->recipient_name}}</h4>
                           <h4>{{$order->recipient_address}}</h4>
                           <h4>{{$order->recipient_postal_code}},&nbsp{{$order->recipient_city}}&nbsp {{$order->recipient_country}}</h4>
                           <h4>{{$order->recipient_tel}}</h4>
                       </div>
                   </div>
               </div>
           </div>
           <hr>
           <div class="row">
               <div class="col-md-12">
                   <h4>发件人信息: </h4>
                   <p>{{$order->sender_name}}</p>
                   <p> {{$order->sender_postal_code}},&nbsp{{$order->sender_city}}&nbsp {{$order->sender_country}}</p>
                   <p>{{$order->sender_tel}} | {{$order->sender_email}}</p>
               </div>
           </div>
           <hr>
           <div class="row">
               <div class="col-md-12">
                   <p>尺寸: {{$order->length}} cm x {{$order->width}} cm x {{$order->height}} cm  | 类型: {{$order->type_colis}}</p>
               </div>
           </div>
           <hr>
           <div class="row">
               <div class="col-md-12">
                   <table class="table table-condensed table-bordered table-striped"><tbody><tr><th>物品名称</th><th>数量</th><th>单件物品价值</th><th>单件物品重量</th><th>原产地</th></tr>
                       @foreach($order->items as $item)
                       <tr>
                           <td>{{$item->name}}</td>
                           <td>{{$item->quantity}}</td>
                           <td>{{$item->value}} €</td>
                           <td>{{$item->weight}} kg</td>
                           <td>{{$item->origin}}</td>
                       </tr>
                       @endforeach

                       </tbody></table>
               </div>
           </div>
       </div>
@stop