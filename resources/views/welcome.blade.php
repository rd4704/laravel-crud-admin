@extends('master')

@section('content')
    <div class="title m-b-md">
        <h1>Hello Yose</h1>
    </div>

    <div class="links">
        <a id="contact-me-link" class="contact-link" href="{{url('/contact')}}">Contact me</a>
        <a id="ping-challenge-link" href="{{secure_url("/ping")}}">Ping Challenge Link</a>
        <a id="repository-link" href="{{secure_url("/readme")}}">Read me</a>
    </div>
@stop
