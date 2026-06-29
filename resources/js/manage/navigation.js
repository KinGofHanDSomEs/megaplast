import {event, id, log, slc, slcs} from '../functions.js'

event(document, 'DOMContentLoaded', () => {
    // navigation change color white hover links

    const svgs = slcs('.navigation nav a');
    const as = slcs('.navigation .links-panel a');

    for (let i = 0; i < svgs.length; i++) {
        const svg = svgs[i];
        const a = as[i];

        event(svg, 'mouseenter', () => {
            svg.classList.add('text-blue-600!')
            a.classList.add('text-blue-600!');
        });

        event(svg, 'mouseleave', () => {
            svg.classList.remove('text-blue-600!')
            a.classList.remove('text-blue-600!');
        });

        event(a, 'mouseenter', () => {
            svg.classList.add('text-blue-600!');
            a.classList.add('text-blue-600!');
        });

        event(a, 'mouseleave', () => {
            svg.classList.remove('text-blue-600!');
            a.classList.remove('text-blue-600!');
        });
    }


    // show links panel on phone

    const showPanelBtn = id('show-links-panel');
    const linksPanel = slc('.navigation .links-panel');

    if (showPanelBtn) {
        event(showPanelBtn, 'click', () => {
            linksPanelDisplay(linksPanel);
        });
    }
});

function linksPanelDisplay(panel) {
    let open = panel.getAttribute('opened');

    if (open) {
        panel.classList.replace('w-2/1', 'w-0');
        panel.setAttribute('opened', '');
        return;
    }

    panel.classList.replace('w-0', 'w-2/1');
    panel.setAttribute('opened', '1');
}
