@extends('layouts.dashboard')
<?php $page="/dashboard/balances"  ?>
@section('content')

      <h2>我的余额为 {{$final_balance}} €</h2>


      <div id="exparcel_wrapper" class="dataTables_wrapper form-inline dt-bootstrap" >
            <table id="xparcel" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                  <tr bgcolor="#FF9933">
                        <th>日期</th>
                        <th>额度</th>
                        <th>操作</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($balances as $balance)
                        <tr>
                              <td>{{ $balance->created_at}}</td>
                              <td>{{ $balance->balance}}</td>
                              <td>{{ $balance->description}}</td>

                        </tr>
                  @endforeach
                  </tbody>
            </table>

      </div>
@stop
