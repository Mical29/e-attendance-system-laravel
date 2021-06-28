'use strict';
//Choose Batch in Users/Create

document.getElementById('isub').classList.add('hideform');

document.getElementById('userrole').onchange = function () {
    // document.getElementById('batchlist').setAttribute('disabled', 'disabled');
    // document.getElementById('programlist').setAttribute('disabled', 'disabled');

    const batchprogram = document.querySelectorAll('.bplist');
    for (const element of batchprogram) {
        element.setAttribute('disabled', 'disabled');
    }

    const lighton = document.querySelectorAll('.lighton');
    for (const element of lighton) {
        element.classList.add('text-light');
    }

    const addbutton = document.querySelector('.addpb');
    addbutton.disabled = true;

    const removebutton = document.querySelector('.removepb');
    removebutton.disabled = true;

    if (this.value == 'Student') {
        // document.getElementById('batchlist').removeAttribute('disabled');
        // document.getElementById('programlist').removeAttribute('disabled');
        for (const element of batchprogram) {
            element.removeAttribute('disabled');
        }

        document
            .getElementById('batchcontainer')
            .classList.remove('bg-secondary');
        // document.getElementById('light').classList.remove('text-light');
        for (const element of lighton) {
            element.classList.remove('text-light');
        }
        addbutton.disabled = false;
        removebutton.disabled = false;
        // for (const i of pbadd) {
        //     i.disabled = false;
        // }
    } else {
        $('#programlist')[0].selectedIndex = 0;
        $('#batchlist')[0].selectedIndex = 0;

        document.getElementById('batchcontainer').classList.add('bg-secondary');
        // document.getElementById('light').classList.add('text-light');
    }

    //Adding instructor subjects
    if (this.value == 'Instructor') {
        document.getElementById('isub').classList.remove('hideform');
    } else {
        document.getElementById('isub').classList.add('hideform');
    }
};

// const btnAdd = document.querySelector('#btnAdd');
// const btnRemove = document.querySelector('#btnRemove');
// const sb = document.querySelector('#list');
// const name = document.querySelector('#name');

// btnAdd.onclick = eve => {
//     eve.preventDefault();

//     // validate the option
//     if (name.value == '') {
//         alert('Please enter the name.');
//         return;
//     }
//     // create a new option
//     const option = new Option(name.value, name.value);
//     // add it to the list
//     sb.add(option, undefined);

//     // reset the value of the input
//     name.value = '';
//     name.focus();
// };

// // remove selected option
// btnRemove.onclick = e => {
//     e.preventDefault();

//     // save the selected option
//     let selected = [];

//     for (let i = 0; i < sb.options.length; i++) {
//         selected[i] = sb.options[i].selected;
//     }

//     // remove all selected option
//     let index = sb.options.length;
//     while (index--) {
//         if (selected[index]) {
//             sb.remove(index);
//         }
//     }
// };

//Add Program and Batch
$('.addpb').click(function (event) {
    event.preventDefault();
    var d1 = document.querySelector('.pbbox');
    var new_count = parseInt($('#total_count').val()) + 1;

    d1.insertAdjacentHTML(
        'beforebegin',
        `
    <div class="row" id="pbrow${new_count}">
                                <div class="col-md-6">
                                    <p>
                                        <label for="programlist${new_count}" class="fs-6 fw-bold lighton" id="light">Choose Program #${new_count}</label>
                                        <br />
                                        <select class="batinput bplist" name="programlist${new_count}" id="programlist${new_count}">
                                            <option selected="" disabled="">Select Program</option>
                                            <option value="program1">Program 1</option>
                                            <option value="program2">Program 2</option>
                                            <option value="program3">Program 3</option>
                                            <option value="program4">Program 4</option>
                                        </select>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <label for="batchlist${new_count}" class="fs-6 fw-bold lighton" id="light">Choose Batch #${new_count}</label>
                                        <br />
                                        <select class="batinput bplist" name="batchlist${new_count}" id="batchlist${new_count}">
                                            <option selected="" disabled="">Select Batch</option>
                                            <option value="batch1">Batch 1</option>
                                            <option value="batch2">Batch 2</option>
                                            <option value="batch3">Batch 3</option>
                                            <option value="batch4">Batch 4</option>
                                        </select>
                                    </p>
                                </div>
    `
    );
    $('#total_count').val(new_count);
});

//Remove Program and Batch
$('.removepb').click(function (event) {
    event.preventDefault();
    var d1 = document.querySelector('.pbbox');
    var new_count = parseInt($('#total_count').val()) + 1;

    var last_count = $('#total_count').val();

    if (last_count > 1) {
        $('#pbrow' + last_count).remove();
        $('#total_count').val(last_count - 1);
    }
});

//Profile Image
profileimg.onchange = evt => {
    const [file] = profileimg.files;
    if (file) {
        profilepreview.src = URL.createObjectURL(file);
    }
};
//Guardian Image
guardianfirstimg.onchange = evt => {
    const [file] = guardianfirstimg.files;
    if (file) {
        guardianfirstpreview.src = URL.createObjectURL(file);
    }
};

//Second Guardian Image
guardiansecimg.onchange = evt => {
    const [file] = guardiansecimg.files;
    if (file) {
        guardiansecpreview.src = URL.createObjectURL(file);
    }
};

//Second Guardian Image
medicalreport.onchange = evt => {
    const [file] = medicalreport.files;
    if (file) {
        guardiansecpreview.src = URL.createObjectURL(file);
    }
};

//Other Answer Radio Button
$('.targetfirstrs').change(function () {
    if ($(this).val() == 'other') {
        $('#otherAnswer').show();
    } else {
        $('#otherAnswer').hide();
    }
});

//Other Answer Radio Button for second guardian
$('.targetsecrs').change(function () {
    if ($(this).val() == 'secother') {
        $('#secOtherAnswer').show();
    } else {
        $('#secOtherAnswer').hide();
    }
});
