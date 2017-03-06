@extends('master')

@section('content')
    <div id="title" class="title m-b-md">
        Minesweeper
    </div>

    <div id="cell-nxp">
        @for($i=1; $i<=8; $i++)
            <div class="Grid" id="row-{{ $i }}">
                @for($j=1; $j<=8; $j++)
                    <div class="Grid-cell" id="cell-{{ $i. 'x' .$j }}">
                        {{ $i. '-' .$j }}
                    </div>
                @endfor
            </div>
        @endfor
    </div>
@stop
