'use strict';
//for class/create

const tabs = document.querySelectorAll('.operations__tab');
const tabsContainer = document.querySelector('.operations__tab-container');
const tabsConent = document.querySelectorAll('.operations__content');
const activeTab = document.querySelector('.operations__content--active');

//Operations

//with event delegation
tabsContainer.addEventListener('click', e => {
    const clicked = e.target.closest('.operations__tab');

    //Guard clause
    if (!clicked) return;

    //Remove active class
    tabs.forEach(t => t.classList.remove('operations__tab--active'));
    tabsConent.forEach(c => c.classList.remove('operations__content--active'));

    //Active Tab
    clicked.classList.add('operations__tab--active');

    //Active content area
    document
        .querySelector(`.operations__content--${clicked.dataset.tab}`)
        .classList.add('operations__content--active');
});

//Program Image
programimg.onchange = evt => {
    const [file] = programimg.files;
    if (file) {
        programpreview.src = URL.createObjectURL(file);
    }
};

//Time Validate
const timefromto = function () {
    let timefrom = new Date();
    temp = $('#timefrom').val().split(':');
    timefrom.setHours((parseInt(temp[0]) - 1 + 24) % 24);
    timefrom.setMinutes(parseInt(temp[1]));

    let timeto = new Date();
    temp = $('#timeto').val().split(':');
    timeto.setHours((parseInt(temp[0]) - 1 + 24) % 24);
    timeto.setMinutes(parseInt(temp[1]));

    if (timeto < timefrom) {
        alert('start time should be smaller than end time!');
    }
};
timefromto();
