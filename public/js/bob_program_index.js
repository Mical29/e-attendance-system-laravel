'use strict';
console.log('Hi');
setTimeout(function () {
    $('#bsalert').remove();
}, 3000);

$(document).ready(function () {
    $('.dbtable').DataTable();
});
