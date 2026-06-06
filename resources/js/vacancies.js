import { slc, slcs, event, log, body } from './functions.js'


// long heading vacancy

event(document, 'DOMContentLoaded', () => {
    const vacanciesHeadings = slcs('.vacancies-container .vacancies .vacancy .heading h3');

    vacanciesHeadings.forEach(vacancyHeading => {
        let text = vacancyHeading.textContent;

        vacancyHeading.textContent = text.length > 60 ? text.slice(0, 57) + '...' : text;
    });
});


// more button

event(document, 'DOMContentLoaded', () => {
    const moreButtonsContainer = slcs('.vacancies-container .vacancies .vacancy .description .more-btn');
    const modalMore = slc('.modal-more-container')

    moreButtonsContainer.forEach(moreButtons => {
        Array.from(moreButtons.children).forEach(moreBtn => {
            event(moreBtn, 'click', () => {
                openModal(modalMore);


            });
        });
    })

    event(modalMore, 'click', () => closeModal(modalMore));
});

function openModal(modal) {
    body.classList.replace('overflow-x-hidden', 'overflow-hidden');
    slc('header').classList.add('hidden');

    modal.classList.replace('invisible', 'visible');
    modal.classList.replace('opacity-0', 'opacity-100');
}

function closeModal(modal) {
    body.classList.replace('overflow-hidden', 'overflow-x-hidden');
    slc('header').classList.remove('hidden');

    modal.classList.replace('opacity-100', 'opacity-0');
    modal.classList.replace('visible', 'invisible');
}
