@extends('master')

@section('content')
    <div class="title m-b-md">
        Hello Yose
    </div>

    <div class="links">
        <a id="contact-me-link" class="contact-link" href="{{url('/')}}">Contact me</a>
        <a id="ping-challenge-link" href="{{url('/ping')}}">Ping Challenge Link</a>
        <a id="repository-link" href="{{url('/readme')}}">Read me</a>
    </div>
@stop
