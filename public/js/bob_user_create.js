'use strict';
//Choose Batch in Users/Create
document.getElementById('userrole').onchange = function () {
    document.getElementById('batchlist').setAttribute('disabled', 'disabled');
    if (this.value == 'smsstudent') {
        document.getElementById('batchlist').removeAttribute('disabled');
        document
            .getElementById('batchcontainer')
            .classList.remove('bg-secondary');
        document.getElementById('light').classList.remove('text-light');
    } else {
        document.getElementById('batchcontainer').classList.add('bg-secondary');
        document.getElementById('light').classList.add('text-light');
    }
};
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
