@extends('master')

@section('content')
    <div class="title m-b-md">
        Hello Yose
    </div>

    <div class="links">
        <a id="contact-me-link" class="contact-link" href='{{secure_url('/')}}'>Contact me</a>

        <a id="ping-challenge-link" href='{{secure_url('/ping')}}'>Ping Challenge Link</a>
    </div>
@stop
