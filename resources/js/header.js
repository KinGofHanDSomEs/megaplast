import { slc, event } from './functions.js'

let lastScroll = 0;

event(document, 'DOMContentLoaded', () => {
    const header = slc('header');

    event(window, 'scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll > lastScroll && currentScroll > header.offsetHeight) {
            header.classList.add('-translate-y-full');
        }

        else if (currentScroll < lastScroll) {
            header.classList.remove('-translate-y-full');
        }

        lastScroll = currentScroll;
    });
});
