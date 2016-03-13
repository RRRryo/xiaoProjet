@extends('layouts.dashboard')
<?php $page = "/dashboard/senders"  ?>
@section('content')

    <h2 class="sub-header">我的寄件人</h2>

    <div class="">
        {{--<form class="form-group" action="/dashboard/senders" method="GET">
            <div class="col-md-3"><input class="form-control" type="text" name="search" value="" placeholder="姓名、公司、地址    或者电话..."/></div>
            <div class="col-md-3"><button class="btn btn-warning" type="submit"><i class="fa fa-btn fa-search "></i> 查找</button></div>

        </form>--}}
        <div class="pull-right">
            <a type="button" class="btn btn-lg btn-link " href="/dashboard/senders/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 添加新寄件人</a>
        </div>
    </div>
    <div id="exparcel_wrapper" class="dataTables_wrapper form-inline dt-bootstrap" >
        <table id="xparcel" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr bgcolor="#FF9933">
                <th>姓名</th>
                <th>证件号或公司名称</th>
                <th>地址</th>
                <th>电话</th>
                <th>修改</th>
                <th>删除</th>

            </tr>
            </thead>
            <tbody>
                @foreach($senders as $sender)
                <tr>
                    <td>{{ $sender->name}}</td>
                    <td>{{ $sender->company}}</td>
                    <td>{{ $sender->address}}</td>
                    <td>{{ $sender->telephone}}</td>
                    <td><button class="btn-link"><a href="{{ URL::to('/dashboard/senders/' . $sender->id . '/edit') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 修改</a></button></td>
                    <form action="{{ URL::to('/dashboard/senders/' . $sender->id ) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <td>
                            <button class="btn-link" onclick="return confirm('您确定要删除已选寄件人信息吗?')" type="submit" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 删除</button></td>
                    </form>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@stop