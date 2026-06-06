@extends('layouts.app')

@section('title', 'Комплектующие')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner">
            <div class="container relative min-h-100 lg:min-h-150 mx-auto w-full px-4">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-1 lg:mb-5">Комплектующие</h2>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/3 mb-1 lg:mb-2">Качественные комплектующие для производства и монтажа алюминиевых конструкций.</p>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/3 mb-2 lg:mb-5">Надежность, совместимость и долговечность.</p>

                    <div class="buttons flex mb-4 lg:mb-7">
                        <a href="#" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-white font-bold bg-[#0a49bf] rounded-lg mr-3 transition hover:bg-[#1447e6]">Получить консультацию</a>
                        <a href="#" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-[#0a49bf] font-bold bg-white border border-[#0a49bf] rounded-lg transition hover:border-blue-600 hover:text-blue-600">Скачать каталог</a>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/megaplast.webp') }}" alt="megaplast" loading="lazy" class="absolute h-full right-0 object-cover object-right">
            </div>
        </section>

        <section class="guarantees-container mb-5 bg-[#f9fbfd]">
            <div class="container mx-auto w-full px-4 py-3 lg:py-5">
                <div class="guarantees grid grid-cols-4">
                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/security.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Высокое качество</h3>
                            <p class="text-xs lg:text-sm 2xl:w-2/3">Только проверенные производители</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-10 h-10 lg:w-12 lg:h-12 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/box.svg') }}" />
                        </svg>

                        <div class="col flex flex-col mr-1 sm:mr-3 lg:mr-7">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Широкий ассортимент</h3>
                            <p class="text-xs lg:text-sm 2xl:w-2/3">Все необходимое для изготовления и монтажа конструкций</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/like.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Совместимость</h3>
                            <p class="text-xs lg:text-sm 2xl:w-2/3">Подходит для большинства профильных систем</p>
                        </div>
                    </div>

                    <div class="guarantee flex">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/delivery.svg') }}" />
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
                        <img src="{{ asset('resources/images/production/parts/loops.png') }}" alt="loops" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Петли</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Надежные петли для дверей из алюминиевого профиля</p>
                            </div>

                            <a href="{{ route('production.products.aluminum') }}" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/handles.png') }}" alt="handles" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Ручки</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Дверные ручки различных форм и цветов</p>
                            </div>

                            <a href="{{ route('production.products.aluminum') }}" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/locks.png') }}" alt="locks" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Замки</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Механические и многозапорные замки для алюминиевых дверей</p>
                            </div>

                            <a href="{{ route('production.products.aluminum') }}" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/closers.png') }}" alt="closers" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Доводчики</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Доводчики для дверей с различной нагрузкой и функциями</p>
                            </div>

                            <a href="{{ route('production.products.aluminum') }}" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/seals.png') }}" alt="seals" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Уплотнители</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Уплотчители для оконных и дверных систем</p>
                            </div>

                            <a href="{{ route('production.products.aluminum') }}" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/beads.png') }}" alt="beads" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Штапики</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Прижимные штапики для фиксации стеклопакетов и заполнений</p>
                            </div>

                            <a href="{{ route('production.products.aluminum') }}" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/fasteners-corners.png') }}" alt="fasteners corner" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Крепеж и уголки</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Уголки, пластины, кронштейны и другой крепеж</p>
                            </div>

                            <a href="{{ route('production.products.aluminum') }}" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть товары →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/mounting-accessories.png') }}" alt="mounting accessories" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Монтажные аксессуары</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Все для качественного монтажа алюминиевых конструкций</p>
                            </div>

                            <a href="{{ route('production.products.aluminum') }}" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Смотреть товары →</a>
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
                            <use href="{{ asset('resources/images/icons/assistant.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-2">Нужна помощь в подборе продукции?</h3>
                            <p class="text-xs lg:text-sm w-5/6">Наши специалисты помогут подобрать оптимальное решение под ваш проект и рассчитают стоимость</p>
                        </div>
                    </div>

                    <a href="#" class="wg-2/6 lg:w-1/5 text-xs xl:text-sm self-center text-center text-white bg-[#0a49bf] transition hover:bg-blue-600 px-3 lg:px-0 py-2 xl:py-4 rounded-lg">Получить консультацию</a>
                </div>
            </div>
        </section>
    </main>
@endsection
