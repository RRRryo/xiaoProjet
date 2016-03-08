@extends('layouts.dashboard')
<?php $page="/dashboard/recipients/show"  ?>
@section('content')
    <h2 class="sub-header">我的收件人</h2>

    <div class="row panel">
        <form class="form-group" action="/dashboard/recipients" method="GET">
            <div class="col-md-3"><input class="form-control" type="text" name="search" value="" placeholder="姓名、公司、地址    或者电话..."/></div>
            <div class="col-md-3"><button class="btn btn-warning" type="submit"><i class="fa fa-btn fa-search "></i> 查找</button></div>

        </form>

    </div>

    <div class="table-responsive">
        <table class="table table-striped "></i>
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
                @foreach($recipients as $recipient)
                <tr>
                    <td>{{ $recipient->name}}</td>
                    <td>{{ $recipient->company}}</td>
                    <td>{{ $recipient->address}}</td>
                    <td>{{ $recipient->telephone}}</td>
                    <td><a href="{{ URL::to('/dashboard/recipients/' . $recipient->id . '/edit') }}">修改</a></td>
                    <td><a href="#">删除</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {!! $recipients->render() !!}
@stop