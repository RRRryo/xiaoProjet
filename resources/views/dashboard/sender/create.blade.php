@extends('layouts.dashboard')
<?php $page="/dashboard/sender"  ?>
@section('content')
    {{--<h2 class="sub-header">新收件人</h2>--}}

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
                <div class="panel-heading"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 新寄件人</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/dashboard/sender') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">姓名</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="输入姓名" required="" autofocus="">

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
                                <input type="text" class="form-control" name="company" value="{{ old('company') }}" placeholder="输入证件号或公司" required="" autofocus="">

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
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="输入地址" required="" autofocus="">

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
                                <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}" placeholder="输入邮编" required="" autofocus="">

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
                                <input type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="输入城市" required="" autofocus="">

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
                                <input type="text" class="form-control" name="country" value="{{ old('country') }}" placeholder="输入国家" required="" autofocus="">

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
                                <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" placeholder="输入电话" required="" autofocus="">

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
                                <input type="text" class="form-control" name="note" value="{{ old('note') }}" placeholder="输入备注" required="" autofocus="">

                                @if ($errors->has('note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--<div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">备注</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="note" value="{{ old('note') }}" placeholder="输入备注"  autofocus="">

                                @if ($errors->has('note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>--}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-warning">
                                    <i class="fa fa-btn fa-save"></i> 保存寄件人 </button>
                                <button onclick="window.history.back()" class="btn btn-danger pull-right"> 取消 </button>
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