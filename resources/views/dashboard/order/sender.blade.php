@extends('layouts.dashboard')
<?php $page="/dashboard/new_order"  ?>
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form role="form" method="GET" action="/dashboard/order_sender">
                <div class="form-group">
                    <label for="sender_id">选择寄件人:</label>
                    <select name="sender_id" class="form-control" onchange="this.form.submit()">
                        <option>寄件人列表中选择... </option>
                    @foreach($senders as $s)
                        <option @if ($s->id === $sender->id) selected @endif value="{{$s->id}}">{{$s->name}},&nbsp {{$s->address}},&nbsp {{$s->city}}</option>
                        @endforeach
                    </select>
                </div>
            </form>
            <div class="panel panel-warning">
                <div class="panel-heading"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 寄件人信息</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/dashboard/order_sender') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">姓名</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $sender->name}}" placeholder="输入姓名" required="" autofocus="">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">证件号或公司</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company" value="{{ $sender->company }}" placeholder="输入证件号或公司" required="" autofocus="">

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">地址</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address" value="{{ $sender->address }}" placeholder="输入地址" required="" autofocus="">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">邮编</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="postal_code" value="{{ $sender->postal_code }}" placeholder="输入邮编" required="" autofocus="">

                                @if ($errors->has('postal_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postal_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">城市</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" value="{{ $sender->city }}" placeholder="输入城市" required="" autofocus="">

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">国家</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="country" value="{{ $sender->country }}" placeholder="输入国家" required="" autofocus="">

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">电话</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="telephone" value="{{ $sender->telephone }}" placeholder="输入电话" required="" autofocus="">

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">备注（可选）</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="note" value="{{ $sender->note }}" placeholder="输入备注" required="" autofocus="">

                                @if ($errors->has('note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">电子邮箱</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ $sender->email }}" placeholder="输入邮箱" required="" autofocus="">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-lg btn-warning pull-right">
                                     下一步 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--{{ $sender->name}}--}}

    {{--    {!! $senders->render() !!}--}}
@stop