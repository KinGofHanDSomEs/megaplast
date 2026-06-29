import {slcs, slc, event, log, id, doc} from './functions.js'

const minPassLen = 8;

event(doc, 'DOMContentLoaded', () => {
    // show password

    const passwordsContainer = slcs('form .password-input-group .input');

    if (passwordsContainer) {
        passwordsContainer.forEach(passwordContainer => {
            const passwordInput = slc('input[type="password"]', passwordContainer);
            const eyes = slcs('svg', passwordContainer);

            eyes.forEach(eye => {
                event(eye, 'click', () => {
                    changePasswordDisplay(passwordInput, eyes);
                });
            });
        });
    }


    // dynamic password verification

    const passwordInput = id('password');

    if (passwordInput) {
        const passwordError = id('error-password');

        if (passwordError) {
            const passwordConfInput = id('password_confirmation');
            const passwordConfError = id('error-password-confirmation');

            event(passwordInput, 'change', () => {
                changePasswordError(passwordInput, passwordError, passwordInput.value.length < minPassLen ? 'Используйте не менее 8 символов' : null);
                changePasswordError(passwordConfInput, passwordConfError, passwordConfInput.value.length !== 0 && (passwordInput.value !== passwordConfInput.value) ? 'Пароли не совпадают!' : null);
            });

            event(passwordConfInput, 'change', () => {
                changePasswordError(passwordConfInput, passwordConfError, passwordConfInput.value.length !== 0 && (passwordInput.value !== passwordConfInput.value) ? 'Пароли не совпадают!' : null);
            });
        }
    }


    // close error modal window

    const modalError = slc('.modal-error');

    if (modalError) {
        event(slc('svg', modalError), 'click', () => {
            modalError.classList.replace('opacity-100', 'opacity-0');
            setTimeout(() => modalError.classList.replace('visible', 'invisible'), 500);
        })

        setTimeout(() => {
            modalError.classList.replace('opacity-100', 'opacity-0');
            setTimeout(() => modalError.classList.replace('visible', 'invisible'), 500);
        }, 5000);
    }


    // hide error border of input

    const igs = slcs('.input-group');

    if (igs) {
        igs.forEach(ig => {
            const input = slc('input', ig);

            if (input) {
                event(input, 'focus', () => {
                    input.classList.remove('border-red-600');
                    input.classList.remove('border-red-600!');

                    const error = slc('.error', ig);
                    if (error) slc('.error', ig).remove();
                });
            }
        });
    }
});

function changePasswordDisplay(passwordInput, eyes) {
    let isClosed = passwordInput.getAttribute('closed');

    if (isClosed) {
        eyes[0].classList.add('hidden');
        eyes[1].classList.remove('hidden');

        passwordInput.type = 'text';

        passwordInput.setAttribute('closed', '');

        return;
    }

    eyes[0].classList.remove('hidden');
    eyes[1].classList.add('hidden');

    passwordInput.type = 'password';

    passwordInput.setAttribute('closed', '1');
}

function changePasswordError(password, errorDiv, error = null) {
    if (error === null) {
        password.classList.remove('border-red-600!');
        errorDiv.innerHTML = '';
        return;
    }

    password.classList.add('border-red-600!');
    errorDiv.innerHTML = `<p class="error mt-0.5 text-xs text-red-600">${error}</p>`
}
