'use strict';

setTimeout(function () {
    $('#bsalert').remove();
}, 10000);

// Show File

// let fb = document.getElementsByClassName(`filebox`);
// document.getElementById('cfoption').onchange = function () {
//     if (this.value == 'File') {
//         for (var i = 0; i < fb.length; i++) {
//             fb[i].classList.remove('hidefilebox');
//         }
//     } else {
//         for (var i = 0; i < fb.length; i++) {
//             fb[i].classList.add('hidefilebox');
//         }
//     }
// };

//Add File
$('.addaction').click(function (event) {
    event.preventDefault();
    var d2 = document.querySelector('.filebox');
    var new_count_file = parseInt($('.total_count_file').val()) + 1;

    d2.insertAdjacentHTML(
        'beforeend',
        `
        <div id="cfid${new_count_file}">
        <p>
            <label for="cfname${new_count_file}" class="fs-6 fw-bold" id="cfname${new_count_file}">Add New Chapter/File Name</label>
            <br />
            <input type="text" id="chapter${new_count_file}" name="cfname${new_count_file}" placeholder="Enter Chapter/File Name...">
        </p>
        <p>
            <select class="" name="cfoption" id="cfoption">
            <option selected="" disabled="">Select Type</option>
            <option value="Chapter">Chapter</option>
            <option value="File">File</option>
            </select>
        </p>
        <div class="filebox">
            <p class="fileborder">
                <label for="addfile" class="fw-bold">Add File</label><br />
                <input type="file" name="addfile" class="form-control">
            </p>
        </div>
        </div>
    `
    );
    $('.total_count_file').val(new_count_file);
});

//Remove File
$('.removeaction').click(function (event) {
    event.preventDefault();
    var d2 = document.querySelector('.filebox');
    var new_count = parseInt($('.total_count_file').val()) + 1;

    var last_count = $('.total_count_file').val();

    if (last_count > 1) {
        $('#cfid' + last_count).remove();
        $('.total_count_file').val(last_count - 1);
    }
});
