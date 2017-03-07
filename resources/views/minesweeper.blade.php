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

    <script type="text/javascript">

        var dummyData = [
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'bomb' , 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
            ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
        ];

        load();

        function load() {
            data = (document.grid !== undefined) ? document.grid : dummyData;
            for (var i=0; i<data.length; i++) {
                for (var j=0; j<data[i].length; j++) {
                    $('#cell-' + (i+1) + 'x' + (j+1)).text(data[i][j]);
                }
            }
        }

        $( ".Grid-cell" ).on( "click", function() {
            if($(this).text() === 'bomb') {
                $(this).addClass('lost');
            }
        });

    </script>
@stop

