import { slc, slcs, event, log, body } from './functions.js'


event(document, 'DOMContentLoaded', () => {
    // long heading vacancy

    const jobsHeadings = slcs('.jobs-container .jobs .job .heading h3');

    jobsHeadings.forEach(jobHeading => {
        let text = jobHeading.textContent;

        jobHeading.textContent = text.length > 60 ? text.slice(0, 57) + '...' : text;
    });


    // modal more information about job

    const jobsContainer = slcs('.jobs-container .jobs .job');
    const modal = slc('.modal-more-container')

    jobsContainer.forEach(job => {
        event(job, 'click', () => openModal(modal, job));
    })

    event(modal, 'click', () => closeModal(modal));
    event(slc('.job-body', modal), 'click', (e) => e.stopPropagation());
    event(document, 'keydown', (e) => { if (e.key === 'Escape') closeModal(modal); });
});

function openModal(modal, job) {
    body.classList.replace('overflow-x-hidden', 'overflow-hidden');
    slc('header').classList.add('hidden');

    modal.classList.replace('invisible', 'visible');
    modal.classList.replace('opacity-0', 'opacity-100');

    let modalBody = slc('.job-body', modal);
    let jobDescription = slc('.description', job);

    modalBody.innerHTML = '';

    log(slc('.salary p', jobDescription));

    modalBody.innerHTML += `<h3 class="text-base text-[#0a49bf] font-bold mb-2 leading-5">${job.getAttribute('name')}</h3>`;
    modalBody.innerHTML += `<p>Заработная плата: ${slc('.salary p', jobDescription).textContent}</p>`;
    modalBody.innerHTML += `<p>Опыт работы: ${slc('.experience p', jobDescription).textContent}</p>`;
    modalBody.innerHTML += `<p>График работы: ${slc('.schedule p', jobDescription).textContent}</p><hr class="mt-4 mb-2">`;

    let dutiesContainer = slc('.duties-container', jobDescription);

    if (dutiesContainer !== null) {
        dutiesContainer = Array.from(dutiesContainer.children);

        let modalDuties = '<div class="duties-container text-sm">' +
            '<h3 class="font-bold">Обязанности</h3>' +
            '<ul class="duties list-disc ml-10">';

        dutiesContainer.forEach(duty => {
            modalDuties += `<li>${duty.textContent}</li>`;
        })

        modalBody.innerHTML += modalDuties + '</ul></div>';
    }

    let requirementsContainer = slc('.requirements-container', jobDescription);

    if (requirementsContainer !== null) {
        requirementsContainer = Array.from(requirementsContainer.children);

        let modalRequirements = '<hr class="my-2"><div class="requirements text-sm">' +
            '<h3 class="font-bold">Требования</h3>' +
            '<ul class="requirements list-disc ml-10">';

        requirementsContainer.forEach(requirement => {
            modalRequirements += `<li>${requirement.textContent}</li>`;
        })

        modalBody.innerHTML += modalRequirements + '</ul></div>';
    }

    let conditionsContainer = slc('.conditions-container', jobDescription);

    if (conditionsContainer !== null) {
        conditionsContainer = Array.from(conditionsContainer.children);

        let modalConditions = '<hr class="my-2"><div class="requirements text-sm">' +
            '<h3 class="font-bold">Условия</h3>' +
            '<ul class="requirements list-disc ml-10">';

        conditionsContainer.forEach(condition => {
            modalConditions += `<li>${condition.textContent}</li>`;
        })

        modalBody.innerHTML += modalConditions + '</ul></div>';
    }

    modalBody.innerHTML += `<button class="cursor-pointer mt-4 self-center bg-[#0a49bf] text-white px-4 py-2 rounded-lg transition hover:bg-blue-600 active:text-black lg:px-7 lg:py-3 lg:rounded-2xl">Оставить заявку</button>`;
}

function closeModal(modal) {
    body.classList.replace('overflow-hidden', 'overflow-x-hidden');
    slc('header').classList.remove('hidden');

    modal.classList.replace('opacity-100', 'opacity-0');
    modal.classList.replace('visible', 'invisible');
}
