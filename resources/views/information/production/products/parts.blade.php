@extends('layouts.app.information')

@section('title', 'Комплектующие')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner bg-[#f2f6fb]">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">Комплектующие</h2>
                        <p class="text-sm mb-4">Производим конструкции из различных профильных систем от эконом до
                            премиум класса в различных исполнениях</p>

                        <div class="buttons flex flex-col md:flex-row mb-5 xl:mb-10 w-6/7 lg:w-2/3 xl:w-1/2">
                            <a href="{{ route('information.production') }}"
                               class="mb-3 md:mb-0 text-center text-sm font-bold w-4/5 md:w-1/2 py-3 flex justify-center items-center text-white bg-[#0a49bf] rounded-lg mr-3 transition hover:bg-blue-600 active:text-black">Продукция</a>
                            <a href="{{ route('system.manage.profileView') }}"
                               class="text-center text-sm font-bold w-4/5 md:w-1/2 py-3 flex justify-center items-center text-[#0a49bf] bg-white border border-[#0a49bf] rounded-lg transition hover:border-blue-600 hover:text-blue-600 active:text-black active:border-black">Оставить
                                заявку</a>
                        </div>

                        <div class="icons grid md:grid-cols-2 xl:grid-cols-3 xl:w-6/7 gap-3">
                            <div class="row flex items-center xl:border-r xl:border-[#eee] pr-2">
                                <div class="icon bg-white rounded-lg mr-3">
                                    <svg class="w-7 h-7 m-1 text-[#0a49bf]">
                                        <use href="{{ asset('resources/images/icons/layers.svg') }}"/>
                                    </svg>
                                </div>

                                <p class="text-sm">Собственное производство</p>
                            </div>

                            <div class="row flex items-center xl:border-r xl:border-[#eee] pr-2">
                                <div class="icon bg-white rounded-lg mr-3">
                                    <svg class="w-7 h-7 m-1 text-[#0a49bf]">
                                        <use href="{{ asset('resources/images/icons/security.svg') }}"/>
                                    </svg>
                                </div>

                                <p class="text-sm">Контроль качества</p>
                            </div>

                            <div class="row flex items-center">
                                <div class="icon bg-white rounded-lg mr-3">
                                    <svg class="w-7 h-7 m-1 text-[#0a49bf]">
                                        <use href="{{ asset('resources/images/icons/calendar.svg') }}"/>
                                    </svg>
                                </div>

                                <p class="text-sm">Изготовление в срок от 1 дня</p>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banners/windows-in-row.png')  }}" alt="banner" loading="lazy"
                     class="absolute h-full right-0 bottom-0">
            </div>
        </section>

        <section class="guarantees-container mb-5 bg-[#f9fbfd]">
            <div class="container mx-auto w-full px-4 py-3 lg:py-5">
                <div class="guarantees grid grid-cols-4">
                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/security.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Высокое качество</h3>
                            <p class="text-xs lg:text-sm 2xl:w-2/3">Только проверенные производители</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-10 h-10 lg:w-12 lg:h-12 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/box.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col mr-1 sm:mr-3 lg:mr-7">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Широкий ассортимент</h3>
                            <p class="text-xs lg:text-sm 2xl:w-2/3">Все необходимое для изготовления и монтажа
                                конструкций</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/like.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Совместимость</h3>
                            <p class="text-xs lg:text-sm 2xl:w-2/3">Подходит для большинства профильных систем</p>
                        </div>
                    </div>

                    <div class="guarantee flex">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/delivery.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Оперативная поставка</h3>
                            <p class="text-xs lg:text-sm 2xl:w-2/3">Быстрая отгрузка со склада и под заказ</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="products-container mb-5">
            <div class="container mx-auto px-4">
                <h2 class="text-xl font-bold text-center mb-5">Наша продукция</h2>

                <div class="products grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/loops.png') }}" alt="loops" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Петли</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Надежные петли для дверей из алюминиевого
                                    профиля</p>
                            </div>

                            <a href="{{ route('information.production.products.aluminum') }}"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть
                                товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/handles.png') }}" alt="handles"
                             loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Ручки</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Дверные ручки различных форм и цветов</p>
                            </div>

                            <a href="{{ route('information.production.products.aluminum') }}"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть
                                товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/locks.png') }}" alt="locks" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Замки</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Механические и многозапорные замки для алюминиевых
                                    дверей</p>
                            </div>

                            <a href="{{ route('information.production.products.aluminum') }}"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть
                                товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/closers.png') }}" alt="closers"
                             loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Доводчики</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Доводчики для дверей с различной нагрузкой и
                                    функциями</p>
                            </div>

                            <a href="{{ route('information.production.products.aluminum') }}"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть
                                товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/seals.png') }}" alt="seals" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Уплотнители</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Уплотчители для оконных и дверных систем</p>
                            </div>

                            <a href="{{ route('information.production.products.aluminum') }}"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть
                                товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/beads.png') }}" alt="beads" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Штапики</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Прижимные штапики для фиксации стеклопакетов и
                                    заполнений</p>
                            </div>

                            <a href="{{ route('information.production.products.aluminum') }}"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть
                                товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/fasteners-corners.png') }}"
                             alt="fasteners corner" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Крепеж и уголки</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Уголки, пластины, кронштейны и другой крепеж</p>
                            </div>

                            <a href="{{ route('information.production.products.aluminum') }}"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть
                                товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/mounting-accessories.png') }}"
                             alt="mounting accessories" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Монтажные аксессуары</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Все для качественного монтажа алюминиевых
                                    конструкций</p>
                            </div>

                            <a href="{{ route('information.production.products.aluminum') }}"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть
                                товары →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="help-container mb-5">
            <div class="container mx-auto px-4">
                <div class="help flex justify-between bg-[#f5f7fc] rounded-xl py-7 px-6">
                    <div class="info flex items-center w-4/6 lg:w-4/5">
                        <svg class="w-10 h-10 sm:w-15 sm:h-15 mr-3 sm:mr-5 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/assistant.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-2">Нужна помощь в подборе
                                продукции?</h3>
                            <p class="text-xs lg:text-sm w-5/6">Наши специалисты помогут подобрать оптимальное решение
                                под ваш проект и рассчитают стоимость</p>
                        </div>
                    </div>

                    <a href="#"
                       class="wg-2/6 lg:w-1/5 text-xs xl:text-sm self-center text-center text-white bg-[#0a49bf] transition hover:bg-blue-600 px-3 lg:px-0 py-2 xl:py-4 rounded-lg">Получить
                        консультацию</a>
                </div>
            </div>
        </section>
    </main>
@endsection
