@extends('layouts.dashboard')
<?php $page="/dashboard/balances"  ?>
@section('content')

      <h4>我的余额为 {{$final_balance}} €</h4>

      <div id="exparcel_wrapper" class=" dataTables_wrapper form-inline dt-bootstrap table-responsive " >
            <table id="xparcel" class="table table-striped " cellspacing="0" width="100%">
                  <thead>
                  <tr bgcolor="#FF9933" style="color: #ffffff">
                        <th>日期</th>
                        <th>额度</th>
                        <th>操作</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($balances as $balance)
                        <tr>
                              <td>{{ $balance->created_at}}</td>
                              <td>{{ $balance->amount}}</td>
                              <td>{{ $balance->description}}</td>

                        </tr>
                  @endforeach
                  </tbody>
            </table>

      </div>
@stop
