import {slcs, slc, event, doc, log, id} from '../functions.js'

event(doc, 'DOMContentLoaded', () => {
    // change window settings profile

    let profileBtns = Array.from(slc('.profile-buttons').children).slice(0, -1);

    const profileSettings = slc('.profile-settings');

    profileBtns.forEach(profileBtn => {
        event(profileBtn, 'click', () => openWindow(profileSettings, profileBtns, profileBtn));
    });


    // with query

    const params = new URLSearchParams(window.location.search);
    switch (params.get('change')) {
        case 'pass':
            openWindow(profileSettings, profileBtns, profileBtns[1]);
            break;
    }
});

function openWindow(settings, btns, btn) {
    btns.forEach(b => b.classList.remove('border-[#0a49bf]!', 'text-[#0a49bf]'));
    btn.classList.add('border-[#0a49bf]!', 'text-[#0a49bf]');

    Array.from(settings.children).forEach(setting => {
        setting.classList.add('hidden');
    });

    slc('.' + btn.getAttribute('type'), settings).classList.remove('hidden');
}
