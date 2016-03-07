@extends('layouts.dashboard')
@section('content')
    recipients {{ $recipients->get()}}
@stop