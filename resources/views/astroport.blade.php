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

    <div class="bg mar-top">
        <div class="block">
            <label>Ship:</label>
            <p id="ship-name">--None--</p>
        </div>

        <div class="block mar-top">
            <label>Ship: </label>
            <input name="ship" id="ship" />
            <button id="dock" class="btn">Dock</button>
        </div>
    </div>
    <script src="/js/main.js"></script>
@stop
