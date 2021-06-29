'use strict';
console.log('Hi');
setTimeout(function () {
    $('#bsalert').remove();
}, 10000);

$(document).ready(function () {
    $('.dbtable').DataTable();
});
