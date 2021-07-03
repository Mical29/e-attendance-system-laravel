'use strict';
//Add Chapter
$('.addchapter').click(function (event) {
    event.preventDefault();
    var d1 = document.querySelector('#coursecontainer');
    var new_count_chapter = parseInt($('#total_count_chapter').val()) + 1;

    d1.insertAdjacentHTML(
        'beforeend',
        `
    <div class="chapterbox p-3 border border-gray rounded pl-3 pr-3 my-3 bg-gradient" id="chapter${new_count_chapter}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="chapter${new_count_chapter}" class="fs-6 fw-bold">Chapter #${new_count_chapter}</label>
                                            <br />
                                            <input type="text" id="chapter${new_count_chapter}" name="chapter${new_count_chapter}" placeholder="Enter Chapter #${new_count_chapter} Name...">
                                        </p>
                                        
                                        <div class="filebox">
                                                <p>
                                                    <label for="file1name" class="fw-bold">File #1</label><br />
                                                    <input type="text" id="file1name" name="file1name" placeholder="Enter File #1 Name..."><br />
                                                    <input type="file" name="file1upload" class="form-control mt-3">
                                                </p>
                                        </div>
                                        <div class="row fileaction">
                                                <div class="col-md-12">
                                                    <label for="filebox" class=" fw-bold" id="">File Action</label>
                                                    <br />
                                                    <button class="addfileVV bg-dark">Add new file</button>
                                                    <button class="removefileVV bg-dark">Remove recent file</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    `
    );
    $('#total_count_chapter').val(new_count_chapter);
});

//Remove Chapter
$('.removechapter').click(function (event) {
    event.preventDefault();
    var d1 = document.querySelector('#coursecontainer');
    var new_count = parseInt($('#total_count_chapter').val()) + 1;

    var last_count = $('#total_count_chapter').val();

    if (last_count > 1) {
        $('#chapter' + last_count).remove();
        $('#total_count_chapter').val(last_count - 1);
    }
});

//Add File
$('.addfile').click(function (event) {
    event.preventDefault();
    var d2 = document.querySelector('.filebox');
    var new_count_file = parseInt($('.total_count_file').val()) + 1;

    d2.insertAdjacentHTML(
        'beforeend',
        `
        <p class="filebox my-2" id="fileid${new_count_file}">
        <label for="file${new_count_file}name" class="fw-bold">File #${new_count_file}</label><br />
        <input type="text" id="file${new_count_file}name" name="file${new_count_file}name" placeholder="Enter File #${new_count_file} Name..."><br />
        <input type="file" id="file${new_count_file}upload" name="file${new_count_file}" class="form-control mt-3">
    </p>
    `
    );
    $('.total_count_file').val(new_count_file);
});

//Remove File
$('.removefile').click(function (event) {
    event.preventDefault();
    var d2 = document.querySelector('.filebox');
    var new_count = parseInt($('.total_count_file').val()) + 1;

    var last_count = $('.total_count_file').val();

    if (last_count > 1) {
        $('#fileid' + last_count).remove();
        $('.total_count_file').val(last_count - 1);
    }
});
