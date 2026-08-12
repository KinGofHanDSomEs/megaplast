@extends('layouts.app.system')

@section('title', 'Заказы')

@vite([
    'resources/js/manage/orders.js',
//    'resources/js/manage/navigation.js',
    'resources/js/auth.js',
])

@section('main')
    <div class="container mx-auto flex flex-1 bg-red-500 relative">
        <x-navigation selected="2" />

        <main class="bg-[#f2f6fb] pr-7 pl-20 sm:pr-7 sm:pl-7 pt-15 pb-5 lg:pt-20 flex-1">
            <div class="row flex items-center justify-between mb-5">
                <div class="col flex flex-col">
                    <h3 class="font-bold text-lg mb-2">Заказы</h3>
                    <p class="text-sm mb-3">Управляйте своими заказами и отслеживайте их статус на всех этапах</p>
                </div>

                <button id="create-order" class="cursor-pointer text-center text-sm font-bold px-5 py-2 flex justify-center items-center text-white bg-[#0a49bf] rounded-lg transition hover:bg-blue-600 active:text-black">
                    <svg class="w-6 h-6 mr-2">
                        <use href="{{ asset('resources/images/icons/plus.svg') }}" />
                    </svg>

                    Создать новый заказ
                </button>
            </div>

            <div class="statistics grid grid-cols-6 gap-5 mb-5">
                @foreach(['all', 'completed', 'accepted', 'refine', 'review', 'rejected'] as $status)
                    <div class="statistic flex justify-between items-center p-3 rounded-lg bg-white shadow-sm">
                        <div class="col flex flex-col">
                            <p class="text-sm mb-1">
                                @switch($status)
                                    @case('all')
                                        Всего заказов
                                        @break
                                    @case('accepted')
                                        В производстве
                                        @break
                                    @case('refine')
                                        Ожидают дополнения
                                        @break
                                    @case('review')
                                        Рассматриваются
                                        @break
                                    @case('completed')
                                        Выполнены
                                        @break
                                    @default
                                        Отменено
                                @endswitch
                            </p>
                            <p class="font-bold text-base">{{ $statusCounts[$status] }}</p>
                        </div>

                        @switch($status)
                            @case('all')
                                <div class="icon bg-blue-200 rounded-lg">
                                    <svg class="w-6 h-6 m-2 text-blue-600">
                                        <use href="{{ asset('resources/images/icons/notepad.svg') }}" />
                                    </svg>
                                </div>
                                @break
                            @case('accepted')
                                <div class="icon bg-purple-200 rounded-lg">
                                    <svg class="w-6 h-6 m-2 text-purple-600">
                                        <use href="{{ asset('resources/images/icons/notepad.svg') }}" />
                                    </svg>
                                </div>
                                @break
                            @case('refine')
                                <div class="icon bg-yellow-200 rounded-lg">
                                    <svg class="w-6 h-6 m-2 text-yellow-600">
                                        <use href="{{ asset('resources/images/icons/notepad.svg') }}" />
                                    </svg>
                                </div>
                                @break
                            @case('review')
                                <div class="icon bg-gray-200 rounded-lg">
                                    <svg class="w-6 h-6 m-2 text-gray-600">
                                        <use href="{{ asset('resources/images/icons/notepad.svg') }}" />
                                    </svg>
                                </div>
                                @break
                            @case('completed')
                                <div class="icon bg-green-200 rounded-lg">
                                    <svg class="w-6 h-6 m-2 text-green-600">
                                        <use href="{{ asset('resources/images/icons/notepad.svg') }}" />
                                    </svg>
                                </div>
                                @break
                            @default
                                <div class="icon bg-red-200 rounded-lg">
                                    <svg class="w-6 h-6 m-2 text-red-600">
                                        <use href="{{ asset('resources/images/icons/notepad.svg') }}" />
                                    </svg>
                                </div>
                        @endswitch
                    </div>
                @endforeach
            </div>

            <div class="order-statuses flex text-sm mb-4">
                @foreach([['Все заказы', ''], ['Выполнены', 'completed'], ['В производстве', 'accepted'], ['Ожидают дополнения', 'refine'], ['Рассматриваются', 'review'], ['Отменено', 'rejected'], ['', '']] as $st)
                    @if($st[0])
                        <a href="{{ route('system.manage.ordersView', ['status' => $st[1]]) }}" class="{{ $st[1] }} cursor-pointer py-3 px-5 border-b border-[#eee] transition hover:text-blue-600 active:border-blue-600">{{ $st[0] }}</a>
                    @else
                        <p class="py-3 border-b border-[#eee] flex-1"></p>
                    @endif
                @endforeach
            </div>

            <div class="orders-container flex flex-col text-sm">
                <div class="headings bg-[#eee] rounded-xl grid grid-cols-6 mb-1">
                    @foreach(['Номер заказа', 'Дата создания', 'Статус', 'Оплатить', 'Срок выполнения', 'Действия'] as $hd)
                        <h4 class="text-center py-2">{{ $hd }}</h4>
                    @endforeach
                </div>

                @foreach($orders as $order)
                    <div class="order grid grid-cols-6 bg-white rounded-xl py-3 items-center shadow-sm not-last:mb-1 cursor-pointer transition hover:scale-102 active:scale-101">
                        <div class="order-info hidden">
                            <p class="id">{{ $order->id }}</p>
                            <p class="type_id">{{ $order->type_id }}</p>
                            <p class="type">{{ $order->product_type->type }}</p>
                            <p class="status">{{ $order->status }}</p>
                            <p class="message">{{ $order->message }}</p>
                            <p class="montage_address">{{ $order->montage_address }}</p>
                            <p class="remaining_price">{{ $order->remaining_price ? number_format($order->remaining_price, 0, '.', ' ') : '' }}</p>
                            <p class="execution_at">{{ $order->execution_at ? $order->execution_at->setTimezone('Asia/Yekaterinburg')->format('d.m.Y') : '' }}</p>
                            <p class="rejection_message">{{ $order->rejection_message }}</p>
                            <p class="price">{{ $order->price ? number_format($order->price, 0, '.', ' ') : '' }}</p>

                            <p class="route">{{ route('system.orders.delete', $order->id) }}</p>
                        </div>

                        <div class="pl-4 flex flex-col">
                            <p class="font-bold">{{ $order->id }}</p>
                            <p class="text-xs">{{ $order->product_type->type }}</p>
                        </div>

                        <div class="flex flex-col">
                            <p>{{ $order->created_at->setTimezone('Asia/Yekaterinburg')->format('d.m.Y') }}</p>
                            <p>{{ $order->created_at->setTimezone('Asia/Yekaterinburg')->format('H:i') }}</p>
                        </div>

                        <div class="flex items-center text-sm px-2">
                            @switch($order->status)
                                @case('accepted')
                                    <div class="status px-2 py-1 bg-purple-100 text-purple-700 rounded-sm flex items-center">
                                        <svg class="w-2.5 h-2.5 mr-1.5">
                                            <use href="{{ asset('resources/images/icons/point.svg') }}" />
                                        </svg> В производстве
                                    </div>
                                    @break
                                @case('refine')
                                    <div class="status px-2 py-1 bg-yellow-100 text-yellow-700 rounded-sm flex items-center">
                                        <svg class="w-2.5 h-2.5 mr-1.5">
                                            <use href="{{ asset('resources/images/icons/point.svg') }}" />
                                        </svg> Ожидает дополнения
                                    </div>
                                    @break
                                @case('review')
                                    <div class="status px-2 py-1 bg-gray-100 text-gray-700 rounded-sm flex items-center">
                                        <svg class="w-2.5 h-2.5 mr-1.5">
                                            <use href="{{ asset('resources/images/icons/point.svg') }}" />
                                        </svg> Рассматривается
                                    </div>
                                    @break
                                @case('completed')
                                    <div class="status px-2 py-1 bg-green-100 text-green-700 rounded-sm flex items-center">
                                        <svg class="w-2.5 h-2.5 mr-1.5">
                                            <use href="{{ asset('resources/images/icons/point.svg') }}" />
                                        </svg> Выполнена
                                    </div>
                                    @break
                                @default
                                    <div class="status px-2 py-1 bg-red-100 text-red-700 rounded-sm flex items-center">
                                        <svg class="w-2.5 h-2.5 mr-1.5">
                                            <use href="{{ asset('resources/images/icons/point.svg') }}" />
                                        </svg> Отменено
                                    </div>
                            @endswitch
                        </div>

                        <p class="text-center @if($order->price) font-bold @endif">
                            @if($order->price)
                                {{ number_format($order->price, 0, '.', ' ') }} &#8381;
                            @else
                                &mdash;
                            @endif
                        </p>

                        <p class="text-center">
                            @if($order->execution_at)
                                {{ $order->execution_at->setTimezone('Asia/Yekaterinburg')->format('d.m.Y')  }}
                            @else
                                &mdash;
                            @endif
                        </p>

                        <div class="buttons flex gap-3 pr-4 justify-end">
                            @if($order->remaining_price && $order->remaining_price > 0)
                                <a href="" title="Оплатить" class="update icon rounded-lg border border-[#f2f6fb] cursor-pointer transition text-[#0a49bf] hover:border-[#0a49bf] active:border-blue-600 active:text-blue-600">
                                    <svg class="w-5 h-5 m-1.5">
                                        <use href="{{ asset('resources/images/icons/cart.svg') }}" />
                                    </svg>
                                </a>
                            @endif

                            @if($order->status !== 'accepted' && $order->status !== 'completed')
                                <div title="Изменить" class="update icon rounded-lg border border-[#f2f6fb] cursor-pointer transition text-[#0a49bf] hover:border-[#0a49bf] active:border-blue-600 active:text-blue-600">
                                    <svg class="w-5 h-5 m-1.5">
                                        <use href="{{ asset('resources/images/icons/pen.svg') }}" />
                                    </svg>
                                </div>

                                @if($order->price === $order->remaining_price)
                                    <div title="Удалить" class="delete icon rounded-lg border border-[#f2f6fb] cursor-pointer transition text-[#0a49bf] hover:border-[#0a49bf] active:border-blue-600 active:text-blue-600">
                                        <svg class="w-5 h-5 m-1.5">
                                            <use href="{{ asset('resources/images/icons/basket.svg') }}" />
                                        </svg>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach

                <div class="orders-results flex justify-between mt-5">
                    <div class="pagination-wrapper gap-3 flex text-base">
                        @if($orders->currentPage() > 1)
                            <a href="{{ route('system.manage.ordersView', ['page' => $orders->currentPage()-1]) }}" class="bg-white rounded-lg border border-[#eee] text-[#0a49bf] transition hover:border-[#0a49bf] active:text-blue-600 active:border-blue-600">
                                <svg class="w-4 h-4 m-2 rotate-90">
                                    <use href="{{ asset('resources/images/icons/arrow-down.svg') }}" />
                                </svg>
                            </a>
                        @else
                            <div class="bg-[#eee] rounded-lg border border-[#eee]">
                                <svg class="w-4 h-4 m-2 rotate-90">
                                    <use href="{{ asset('resources/images/icons/arrow-down.svg') }}" />
                                </svg>
                            </div>
                        @endif

                        @if($orders->currentPage() === 4)
                                <a href="{{ route('system.manage.ordersView', ['page' => 1]) }}" class="flex justify-center items-center bg-white rounded-lg border border-[#eee] text-[#0a49bf] hover:border-[#0a49bf] active:text-blue-600 active:border-blue-600 px-3 transition">
                                    1
                                </a>
                        @elseif($orders->currentPage() > 4)
                            <a href="{{ route('system.manage.ordersView', ['page' => 1]) }}" class="flex justify-center items-center bg-white rounded-lg border border-[#eee] text-[#0a49bf] hover:border-[#0a49bf] active:text-blue-600 active:border-blue-600 px-3 transition">
                                1
                            </a>
                            <p>...</p>
                        @endif

                        @for($i = $orders->currentPage()-2; $i <= $orders->currentPage()+2; $i++)
                            @if($i <= 0) @continue @endif
                            @if($i > $orders->lastPage()) @break @endif

                            <a href="{{ route('system.manage.ordersView', ['page' => $i]) }}" class="flex justify-center items-center bg-white rounded-lg border @if($i === $orders->currentPage()) border-[#0a49bf] bg-[#0a49bf]! text-white hover:border-blue-600! hover:bg-blue-600! active:text-black @else border-[#eee] text-[#0a49bf] hover:border-[#0a49bf] active:text-blue-600 active:border-blue-600 @endif px-3 transition">
                                {{ $i }}
                            </a>
                        @endfor

                        @if($orders->currentPage() === $orders->lastPage()-3)
                            <a href="{{ route('system.manage.ordersView', ['page' => $orders->lastPage()]) }}" class="flex justify-center items-center bg-white rounded-lg border border-[#eee] text-[#0a49bf] hover:border-[#0a49bf] active:text-blue-600 active:border-blue-600 px-3 transition">
                                {{ $orders->lastPage() }}
                            </a>
                        @elseif($orders->currentPage() < $orders->lastPage()-3)
                            <p>...</p>
                            <a href="{{ route('system.manage.ordersView', ['page' => $orders->lastPage()]) }}" class="flex justify-center items-center bg-white rounded-lg border border-[#eee] text-[#0a49bf] hover:border-[#0a49bf] active:text-blue-600 active:border-blue-600 px-3 transition">
                                {{ $orders->lastPage() }}
                            </a>
                        @endif

                        @if($orders->currentPage() < $orders->lastPage())
                            <a href="{{ route('system.manage.ordersView', ['page' => $orders->currentPage()+1]) }}" class="bg-white rounded-lg border border-[#eee] text-[#0a49bf]  transition hover:border-[#0a49bf] active:text-blue-600 active:border-blue-600">
                                <svg class="w-4 h-4 m-2 -rotate-90">
                                    <use href="{{ asset('resources/images/icons/arrow-down.svg') }}" />
                                </svg>
                            </a>
                        @else
                            <div class="bg-[#eee] rounded-lg border border-[#eee]">
                                <svg class="w-4 h-4 m-2 -rotate-90">
                                    <use href="{{ asset('resources/images/icons/arrow-down.svg') }}" />
                                </svg>
                            </div>
                        @endif
                    </div>

                    <div class="show-by flex items-center">
                        <p>Показывать по:</p>

                        <div class="list-container ml-3">
                            <div class="selected-container flex items-center border border-[#eee] rounded-lg py-2 px-3">
                                <p>10</p>
                                <svg class="w-3 h-3 ml-5">
                                    <use href="{{ asset('resources/images/icons/arrow-down.svg') }}" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection

@section('modal')
    @if(session('success'))
        <div class="modal-error w-full fixed bottom-20 flex justify-center transition duration-500 visible opacity-100">
            <div class="text-lg fixed text-center text-blue-600 border border-blue-600 bg-blue-100 px-12 py-4 rounded-xl">{{ session('success')  }}<svg class="w-4 h-4 text-blue-600 absolute right-2 top-2 transition cursor-pointer hover:text-blue-400"><use href="{{ asset('resources/images/icons/cancel.svg') }}" /></svg></div>
        </div>
    @else
        @error('error')
        <div class="modal-error w-full fixed bottom-20 flex justify-center transition duration-500 visible opacity-100">
            <div class="text-lg fixed text-center text-red-600 border border-red-600 bg-red-100 px-12 py-4 rounded-xl">{{ $message  }}<svg class="w-4 h-4 text-red-600 absolute right-2 top-2 transition cursor-pointer hover:text-red-400"><use href="{{ asset('resources/images/icons/cancel.svg') }}" /></svg></div>
        </div>
        @enderror
    @endif


    <div class="modal-order fixed z-90 right-3 top-1/2 -translate-y-1/2 visible opacity-100 transition duration-500">
        <form action="{{ route('system.orders.create') }}" method="post" class="create hidden flex flex-col shadow-lg w-100 bg-white p-4 rounded-xl border border-[#eee] text-base z-90 transition hover:border-blue-600">
            @csrf

            <div class="row flex justify-between items-center mb-3">
                <h4 class="id font-bold text-lg text-[#0a49bf]">Создание заказа</h4>

                <svg class="w-6 h-6 cursor-pointer transition hover:text-[#0a49bf]">
                    <use href="{{ asset('resources/images/icons/cancel.svg') }}" />
                </svg>
            </div>

            <div class="input-group flex flex-col group mb-2">
                <label for="create_type_id" class="text-sm mb-1.5">Тип продукции <b class="text-[#0a49bf]">*</b></label>

                <div class="input relative w-full flex items-center justify-end">
                    <select name="type_id" id="create_message" required class="type_id w-full border border-[#eee] rounded-lg p-2 outline-none transition placeholder:text-sm group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute">
                        @foreach($productTypes as $productType)
                            <option value="{{ $productType->id }}">{{ $productType->type }}</option>
                        @endforeach
                    </select>
                </div>

                @error('type_id')
                    <p class="mt-0.5 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-group flex flex-col group mb-3">
                <label for="create_message" class="text-sm mb-1.5">Комментарий <b class="text-[#0a49bf]">*</b></label>

                <div class="input relative w-full flex items-center justify-end">
                    <textarea name="message" id="create_message" placeholder="Введите комментарий" required class="message w-full border border-[#eee] rounded-lg p-2 outline-none transition placeholder:text-sm group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute"></textarea>
                </div>

                @error('message')
                <p class="mt-0.5 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-group montage_address hidden flex flex-col group mb-3">
                <label for="create_montage_address" class="text-sm mb-1.5">Адрес монтажа <b class="text-[#0a49bf]">*</b></label>

                <div class="input relative w-full flex items-center justify-end">
                    <input type="text" name="montage_address" id="create_montage_address" placeholder="Введите адрес монтажа" class="w-full border border-[#eee] rounded-lg p-2 outline-none transition placeholder:text-sm group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute"></input>
                </div>

                @error('montage_address')
                    <p class="mt-0.5 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button class="cursor-pointer self-center text-center text-sm font-bold px-5 py-2 flex justify-center items-center text-white bg-[#0a49bf] rounded-lg transition hover:bg-blue-600 active:text-black">Создать</button>
        </form>

        <div class="show hidden shadow-lg w-100 bg-white p-4 rounded-xl border border-[#eee] text-base z-90 transition hover:border-blue-600">
            <div class="row flex justify-between items-center mb-1">
                <h4 class="id font-bold text-lg text-[#0a49bf]"></h4>

                <svg class="w-6 h-6 cursor-pointer transition hover:text-[#0a49bf]">
                    <use href="{{ asset('resources/images/icons/cancel.svg') }}" />
                </svg>
            </div>

            <p class="type mb-0.5"></p>
            <p class="status mb-0.5"></p>
            <p class="message mb-0.5"></p>
            <p class="montage_address mb-0.5"></p>
            <p class="remaining_price mb-0.5"></p>
            <p class="execution_at mb-0.5"></p>
            <p class="rejection_message mb-0.5 text+red"></p>
            <p class="price"></p>
        </div>

        <form action="" method="post" class="update hidden flex flex-col shadow-lg w-100 bg-white p-4 rounded-xl border border-[#eee] text-base z-90 transition hover:border-blue-600">
            @csrf
            @method('PATCH')

            <div class="row flex justify-between items-center mb-3">
                <h4 class="id font-bold text-lg text-[#0a49bf]"></h4>

                <svg class="w-6 h-6 cursor-pointer transition hover:text-[#0a49bf]">
                    <use href="{{ asset('resources/images/icons/cancel.svg') }}" />
                </svg>
            </div>

            <div class="input-group flex flex-col group mb-2">
                <label for="type_id" class="text-sm mb-1.5">Тип продукции <b class="text-[#0a49bf]">*</b></label>

                <div class="input relative w-full flex items-center justify-end">
                    <select name="type_id" id="message" required class="type_id w-full border border-[#eee] rounded-lg p-2 outline-none transition placeholder:text-sm group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute">
                        @foreach($productTypes as $productType)
                            <option value="{{ $productType->id }}">{{ $productType->type }}</option>
                        @endforeach
                    </select>
                </div>

                @error('type_id')
                    <p class="mt-0.5 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-group flex flex-col group mb-3">
                <label for="message" class="text-sm mb-1.5">Комментарий <b class="text-[#0a49bf]">*</b></label>

                <div class="input relative w-full flex items-center justify-end">
                    <textarea name="message" id="message" placeholder="Введите комментарий" required class="message w-full border border-[#eee] rounded-lg p-2 outline-none transition placeholder:text-sm group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute"></textarea>
                </div>

                @error('message')
                    <p class="mt-0.5 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-group montage_address hidden flex flex-col group mb-3">
                <label for="montage_address" class="text-sm mb-1.5">Адрес монтажа <b class="text-[#0a49bf]">*</b></label>

                <div class="input relative w-full flex items-center justify-end">
                    <input type="text" name="montage_address" id="montage_address" placeholder="Введите адрес монтажа" class="w-full border border-[#eee] rounded-lg p-2 outline-none transition placeholder:text-sm group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute"></input>
                </div>

                @error('montage_address')
                    <p class="mt-0.5 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button class="cursor-pointer self-center text-center text-sm font-bold px-5 py-2 flex justify-center items-center text-white bg-[#0a49bf] rounded-lg transition hover:bg-blue-600 active:text-black">Изменить</button>
        </form>
    </div>

    <div class="modal-delete-order hidden flex fixed justify-center invisible opacity-0 items-center w-screen h-screen bg-[#eeeeeeaa] z-90 transitin">
        <div class="delete visible opacity-100 shadow-lg w-100 bg-white p-4 rounded-xl border border-[#eee] text-base z-90 transition hover:border-red-600">
            <div class="row flex justify-center items-center mb-3 relative">
                <h4 class="id font-bold text-lg text-red-600">Удалить заявку</h4>

                <svg class="w-6 h-6 absolute top-0 right-0 cursor-pointer transition hover:text-red-600">
                    <use href="{{ asset('resources/images/icons/cancel.svg') }}" />
                </svg>
            </div>

            <p class="mb-5">Вы уверены что хотите удалить заказ?</p>

            <div class="buttons flex justify-between items-center">
                <form action="" method="post">
                    @csrf
                    @method('DELETE')

                    <button class="cursor-pointer self-center text-center text-sm font-bold px-5 py-2 flex justify-center items-center text-white bg-red-600 rounded-lg transition hover:bg-red-700 active:text-black">Удалить</button>
                </form>

                <button class="cancel cursor-pointer self-center text-center text-sm font-bold px-5 py-2 flex justify-center items-center text-white bg-[#0a49bf] rounded-lg transition hover:bg-blue-600 active:text-black">Оставить</button>
            </div>
        </div>
    </div>
@endsection
