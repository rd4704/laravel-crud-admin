/**
 * Created by mac on 07/03/2017.
 */

'use strict';

function docked() {
    $('#dock').on('click', function () {
        if($('#ship').val() != '') {
            $('#ship-name').html($('#ship').val());
        }
    });
}
$(window).load(function () {
    docked();
});


// Minesweeper logic

var dummyData = [
    ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
    ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
    ['empty', 'empty', 'empty', 'empty', 'empty', 'bomb', 'empty', 'empty'],
    ['empty', 'empty', 'empty', 'empty', 'empty', 'bomb', 'empty', 'empty'],
    ['empty', 'empty', 'empty', 'empty', 'bomb', 'empty', 'empty', 'empty'],
    ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
    ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
    ['empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'],
];

load();

function load() {
    var data = (document.grid !== undefined) ? document.grid : dummyData;
    for (var i = 0; i < data.length; i++) {
        for (var j = 0; j < data[i].length; j++) {
            $('#cell-' + (i + 1) + 'x' + (j + 1)).text(data[i][j]);
        }
    }
}

$(".Grid-cell").on("click", function () {
    if ($(this).text() === 'bomb') {
        $(this).addClass('lost');
    }

    var arrToCheck = [
        [-1, -1], [-1, 0], [-1, 1], [0, -1], [0, 1], [1, -1], [1, 0], [1, 1]
    ];

    if ($(this).text() === 'empty') {
        var cell = $(this).attr('id').split('-')[1];

        var row_col = cell.split('x');
        var row = row_col[0];
        var col = row_col[1];

        var result = 0;
        for (var i = 0; i < arrToCheck.length; i++) {
            var nearestCellInView = $('#cell-' + (parseInt(row) + parseInt(arrToCheck[i][0])) + 'x' + (parseInt(col) + parseInt(arrToCheck[i][1])));

            if (nearestCellInView !== undefined && nearestCellInView.text() === 'bomb') {
                result +=1;
            }
        }
        $(this).addClass('safe');

        if (result !== 0) {
            $(this).text(result);
        }
    }
});
