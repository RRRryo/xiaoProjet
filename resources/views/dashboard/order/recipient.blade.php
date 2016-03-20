@extends('layouts.dashboard')
<?php $page="/dashboard/new_order"  ?>
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form role="form" method="GET" action="/dashboard/order_recipient">
                <div class="form-group">
                    {{--<label for="recipient_id">选择收件人:</label>--}}
                    <select name="recipient_id" class="form-control" onchange="this.form.submit()">
                        <option>收件人列表中选择... </option>
                    @foreach($recipients as $s)
                        <option @if ($s->id === $recipient->id) selected @endif value="{{$s->id}}">{{$s->name}},&nbsp {{$s->address}},&nbsp {{$s->city}}</option>
                        @endforeach
                    </select>
                </div>
            </form>
            <div class="panel panel-warning">
                <div class="panel-heading"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 收件人信息</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/dashboard/order_recipient') }}">
                        {!! csrf_field() !!}

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">姓名</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $recipient->name}}" placeholder="输入姓名" required="" autofocus="">

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
                                <input type="text" class="form-control" name="company" value="{{ $recipient->company }}" placeholder="输入证件号或公司" required="" autofocus="">

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
                                <input type="text" class="form-control" name="address" value="{{ $recipient->address }}" placeholder="输入地址" required="" autofocus="">

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
                                <input type="text" class="form-control" name="postal_code" value="{{ $recipient->postal_code }}" placeholder="输入邮编" required="" autofocus="">

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
                                <input type="text" class="form-control" name="city" value="{{ $recipient->city }}" placeholder="输入城市" required="" autofocus="">

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
                                <input type="text" class="form-control" name="country" value="{{ $recipient->country }}" placeholder="输入国家" required="" autofocus="">

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
                                <input type="text" class="form-control" name="telephone" value="{{ $recipient->telephone }}" placeholder="输入电话" required="" autofocus="">

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a class="btn btn-primary btn-warning pull-left" href="/dashboard/order_sender">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 上一步 </a>
                                <button type="submit" class="btn btn-primary btn-warning pull-right">
                                     下一步 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--{{ $recipient->name}}--}}

    {{--    {!! $recipients->render() !!}--}}
@stop