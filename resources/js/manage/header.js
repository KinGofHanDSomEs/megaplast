import {event, doc, slc, log} from '../functions.js';

event(doc, 'DOMContentLoaded', () => {
    // open profile menu

    const header = slc('header .right .profile');
    const profile = slc('.row', header);
    const menu  = slc('.profile-menu', header);

    event(profile, 'click', (e) => {
        e.stopPropagation();
        openProfileMenu(profile, menu);
    });
    event(doc, 'click', () => { closeProfileMenu(profile, menu) });
    event(doc, 'keydown', (e) => { if (e.key === 'Escape') closeProfileMenu(profile, menu);});
});

function openProfileMenu(profile, menu) {
    log(slc('svg', profile));

    slc('svg', profile).classList.replace('rotate-0', 'rotate-180');

    menu.classList.replace('invisible', 'visible');
    menu.classList.replace('opacity-0', 'opacity-100');
}

function closeProfileMenu(profile, menu) {
    slc('svg', profile).classList.replace('rotate-180', 'rotate-0');

    menu.classList.replace('visible', 'invisible');
    menu.classList.replace('opacity-100', 'opacity-0');
}
