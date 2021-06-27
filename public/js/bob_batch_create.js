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

//Batch Create
$(document).ready(function () {
    $('.slable').text('Select');
    $('input[type="checkbox"]').click(function () {
        if ($(this).prop('checked') == true) {
            $('.slable').text('Selected');
        }
    });
});
