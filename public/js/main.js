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
