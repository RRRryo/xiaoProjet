@extends('layouts.dashboard')
<?php $page="/dashboard/recipients/index"  ?>
@section('content')
    <h2 class="sub-header">我的收件人</h2>

    {{ $recipient->name}}

{{--    {!! $recipients->render() !!}--}}
@stop