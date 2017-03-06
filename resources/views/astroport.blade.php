@extends('master')

@section('content')
    <div id="astroport-name" class="title m-b-md">
        Artisans
    </div>
    <div class="links">
        @for($j=1; $j<=3; $j++)
            <div id="gate-{{ $j }}">
                <div id="ship-{{ $j }}">Ship {{ $j }}</div>
            </div>
        @endfor
    </div>
@stop
