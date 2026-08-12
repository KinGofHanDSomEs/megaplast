import {event, doc, slc, slcs, body, log, id} from '../functions.js';

const montageID = 6;


// modal order info

const modalOrder = slc('.modal-order');
const ordersContainer = slcs('.orders-container .order');

const modalDeleteOrder = slc('.modal-delete-order');

if (ordersContainer.length !== 0) {
    ordersContainer.forEach(order => {
        event(order, 'click', (e) => {
            e.stopPropagation();
            openShowModalOrder(modalOrder, slc('.order-info', order));
        });

        const updateBtn = slc('.buttons .update', order);
        if (updateBtn) {
            event(updateBtn, 'click', (e) => {
                e.stopPropagation();
                openUpdateModalOrder(modalOrder, slc('.order-info', order));
            });
        }

        const deleteBtn = slc('.buttons .delete', order);
        if (deleteBtn) {
            event(deleteBtn, 'click', (e) => {
                e.stopPropagation();
                openDeleteModalOrder(modalDeleteOrder, slc('.order-info .route', order).textContent);
            });
        }
    });
}

{
    // modal create, show and update order events

    const createOrderBtn = id('create-order');
    event(createOrderBtn, 'click', (e) => {
        e.stopPropagation();
        openCreateModalOrder(modalOrder);
    });

    event(slc('.create .type_id', modalOrder), 'change', (e) => {
        const montageInput = slc('.create .montage_address', modalOrder);

        if (e.target.value == montageID) {
            montageInput.classList.remove('hidden');
            return;
        }

        montageInput.classList.add('hidden');
    });

    event(modalOrder, 'click', (e) => e.stopPropagation());

    if (slcs('.row svg', modalOrder)) {
        slcs('.row svg', modalOrder).forEach(closeBtn => {
            event(closeBtn, 'click', () => closeModalOrder(modalOrder));
        });
    }
    event(body, 'click', () => closeModalOrder(modalOrder));
    event(doc, 'keydown', (e) => {
        if (e.key === 'Escape') {
            closeModalOrder(modalOrder);
            closeModalOrder(modalDeleteOrder);
        }
    });

    event(slc('.update .type_id', modalOrder), 'change', (e) => {
        const montageInput = slc('.update .montage_address', modalOrder);

        if (e.target.value == montageID) {
            montageInput.classList.remove('hidden');
            return;
        }

        montageInput.classList.add('hidden');
    });
}

{
    // modal delete order events

    event(modalDeleteOrder, 'click', () => {
        closeModalOrder(modalDeleteOrder);
    });
    event(slc('.delete', modalDeleteOrder), 'click', (e) => e.stopPropagation());
    event(slc('.delete .row svg', modalDeleteOrder), 'click', () => {
        closeModalOrder(modalDeleteOrder);
    });
    event(slc('.delete .buttons .cancel', modalDeleteOrder), 'click', () => {
        closeModalOrder(modalDeleteOrder);
    });
}

event(doc, 'DOMContentLoaded', () => {
    // display selected status

    const links = slc('.order-statuses');

    const params = new URLSearchParams(window.location.search);
    const status = params.get('status');

    if (status) {
        slc(`.${status}`, links).classList.add('text-[#0a49bf]', 'border-[#0a49bf]!')
        return
    }

    Array.from(links.children)[0].classList.add('text-[#0a49bf]', 'border-[#0a49bf]!')
});

function openCreateModalOrder(modal) {
    modal.classList.replace('invisible', 'visible');
    modal.classList.replace('opacity-0', 'opacity-100');

    Array.from(modal.children).forEach(m => m.classList.add('hidden'));

    const modalCreate = slc('.create', modal);

    modalCreate.classList.remove('hidden');
}

function openShowModalOrder(modal, order) {
    modal.classList.replace('invisible', 'visible');
    modal.classList.replace('opacity-0', 'opacity-100');

    Array.from(modal.children).forEach(m => m.classList.add('hidden'));

    const modalShow = slc('.show', modal);

    modalShow.classList.remove('hidden');

    [['id', 'Заказ №'], ['type', 'Тип: '], ['status', 'Статус: '], ['message', 'Комментарий: '], ['montage_address', 'Адрес монтажа: '], ['remaining_price', 'Осталось оплатить: '], ['execution_at', 'Дата выполнения: '], ['rejection_message', 'Комментарий отмены: '], ['price', 'Вся стоимость: ']].forEach(c => {
        const text = slc(`.${c[0]}`, order).textContent;
        const modalShowHeading = slc(`.${c[0]}`, modalShow);

        modalShowHeading.innerHTML = '';

        if (c[0] === 'status') {
            let status = '';
            let color = '';

            switch (text) {
                case 'rejected':
                    status = 'Отменено';
                    color = 'red';
                    break;
                case 'review':
                    status = 'Рассматривается';
                    color = 'gray';
                    break;
                case 'refine':
                    status = 'Ожидает дополнения';
                    color = 'yellow';
                    break;
                case 'accepted':
                    status = 'В производстве';
                    color = 'purple';
                    break;
                case 'completed':
                    status = 'Выполнена';
                    color = 'green';
                    break;
            }

            modalShowHeading.innerHTML = `${c[1]}<b class="text-${color}-600">${status}</b>`;
            return;
        }

        if (text) {
            modalShowHeading.innerHTML = `${c[1]}<b>${text}</b>`;

            if (['price', 'remaining_price'].includes(c[0])) {
                modalShowHeading.innerHTML += ' ₽';
            }
        }
    });
}

function openUpdateModalOrder(modal, order) {
    modal.classList.replace('invisible', 'visible');
    modal.classList.replace('opacity-0', 'opacity-100');

    Array.from(modal.children).forEach(m => m.classList.add('hidden'));

    const modalUpdate = slc('.update', modal);

    modalUpdate.action = '';
    modalUpdate.action = slc('.route', order).textContent;

    modalUpdate.classList.remove('hidden');

    slc(`.id`, modalUpdate).textContent = `Изменение заказа №${slc(`.id`, order).textContent}`;

    ['type_id', 'message'].forEach(c => {
        const text = slc(`.${c}`, order).textContent;
        const modalUpdateInput = slc(`.${c}`, modalUpdate);

        modalUpdateInput.value = '';
        modalUpdateInput.value = text;
    });

    const typeID = slc(`.type_id`, order).textContent;

    if (typeID == montageID) {
        slc('.montage_address', modalUpdate).classList.remove('hidden');

        const text = slc('.montage_address', order).textContent;
        const modalUpdateInput = slc('.montage_address input', modalUpdate);

        log(text);

        modalUpdateInput.value = '';
        modalUpdateInput.value = text;
        return;
    }

    slc('.montage_address', modalUpdate).classList.add('hidden');
}

function openDeleteModalOrder(modal, route) {
    modal.classList.remove('hidden');
    modal.classList.replace('invisible', 'visible');
    modal.classList.replace('opacity-0', 'opacity-100');

    slc('.delete .buttons form', modal).action = '';

    slc('.delete .buttons form', modal).action = route;
}

function closeModalOrder(modal) {
    modal.classList.replace('opacity-100', 'opacity-0');
    modal.classList.replace('visible', 'invisible');

    if (modal.classList.contains('modal-delete-order')) modal.classList.add('hidden');

}
