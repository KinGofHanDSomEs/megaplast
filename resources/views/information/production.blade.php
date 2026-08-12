@extends('layouts.app.information')

@section('title', 'Производство')

@section('main')
    <main class="flex-1 bg-white">
        <section class="banner bg-[#f2f6fb] mb-5">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">Производство</h2>
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

                <img src="{{ asset('resources/images/banners/windows.png')  }}" alt="banner" loading="lazy"
                     class="absolute h-full right-0 bottom-0">
            </div>
        </section>

        <section class="icons">
            <div class="container mx-auto w-full px-4 grid grid-cols-3 lg:grid-cols-5 lg:py-4 mt-3 mb-10 border rounded-2xl border-[#eee]">
                <div class="icon border-r border-[#eee] flex lg:justify-center items-center px-3 lg:px-2">
                    <svg class="w-6 h-6 xl:w-9 xl:h-9 mr-2 xl:mr-3 text-[#0a49bf]">
                        <use href="{{ asset('resources/images/icons/factory.svg') }}"/>
                    </svg>

                    <div class="info flex flex-col py-4">
                        <h3 class="text-sm lg:text-base xl:text-lg font-bold text-[#0a49bf]">5000+ м<sup>2</sup></h3>
                        <p class="text-xs xl:text-sm">площадь производства</p>
                    </div>
                </div>

                <div class="icon border-r border-[#eee] flex lg:justify-center items-center px-3 lg:px-2">
                    <svg class="w-6 h-6 xl:w-9 xl:h-9 mr-2 xl:mr-3 text-[#0a49bf]">
                        <use href="{{ asset('resources/images/icons/automation.svg') }}"/>
                    </svg>

                    <div class="info flex flex-col">
                        <h3 class="text-sm lg:text-base xl:text-lg font-bold text-[#0a49bf]">6</h3>
                        <p class="text-xs xl:text-sm">автоматизированных линий</p>
                    </div>
                </div>

                <div class="icon border-r border-[#eee] flex lg:justify-center items-center px-3 lg:px-2">
                    <svg class="w-6 h-6 xl:w-9 xl:h-9 mr-2 xl:mr-3 text-[#0a49bf]">
                        <use href="{{ asset('resources/images/icons/people.svg') }}"/>
                    </svg>

                    <div class="info flex flex-col">
                        <h3 class="text-sm lg:text-base xl:text-lg font-bold text-[#0a49bf]">120+</h3>
                        <p class="text-xs xl:text-sm">специалистов в штате</p>
                    </div>
                </div>

                <div class="icon border-r border-[#eee] flex lg:justify-center items-center px-3 lg:px-2">
                    <svg class="w-6 h-6 xl:w-9 xl:h-9 mr-2 xl:mr-2 text-[#0a49bf]">
                        <use href="{{ asset('resources/images/icons/layers.svg') }}"/>
                    </svg>

                    <div class="info flex flex-col py-4">
                        <h3 class="text-sm lg:text-base xl:text-lg font-bold text-[#0a49bf]">2000+</h3>
                        <p class="text-xs xl:text-sm">тонн стекла в месяц</p>
                    </div>
                </div>

                <div
                    class="icon flex lg:justify-center items-center px-3 lg:px-2 border-r border-[#eee] lg:border-none">
                    <svg class="w-6 h-6 xl:w-9 xl:h-9 mr-2 xl:mr-2 text-[#0a49bf]">
                        <use href="{{ asset('resources/images/icons/security.svg') }}"/>
                    </svg>

                    <div class="info flex flex-col">
                        <h3 class="text-sm lg:text-base xl:text-lg font-bold text-[#0a49bf]">0,1%</h3>
                        <p class="text-xs xl:text-sm">процент брака</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="production-container mb-10">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5">Как мы производим</h2>

                <div class="productions grid grid-cols-6">
                    <div
                        class="production relative flex flex-col items-center after:absolute after:border-b after:border-dotted after:border-[#eee] after:w-4/6 after:bg-[#eee] after:top-5.5 after:left-4/6">
                        <div class="number rounded-full border border-[#eee] mb-3">
                            <p class="text-lg px-3 py-2 text-[#0a49bf]">01</p>
                        </div>

                        <div class="info w-2/3">
                            <h3 class="font-bold text-xs sm:text-sm mb-1">Раскрой стекла</h3>
                            <p class="text-xs sm:text-sm">Высокоточная резка листового стекла на автоматических
                                линиях</p>
                        </div>
                    </div>

                    <div
                        class="production relative flex flex-col items-center after:absolute after:border-b after:border-dotted after:border-[#eee] after:w-4/6 after:bg-[#eee] after:top-5.5 after:left-4/6">
                        <div class="number rounded-full border border-[#eee] mb-3">
                            <p class="text-lg px-3 py-2 text-[#0a49bf]">02</p>
                        </div>

                        <div class="info w-3/4">
                            <h3 class="font-bold text-xs sm:text-sm mb-1">Обработка кромки</h3>
                            <p class="text-xs sm:text-sm">Шлифовка и полировка кромки для безопасности и эстетичного
                                вида</p>
                        </div>
                    </div>

                    <div
                        class="production relative flex flex-col items-center after:absolute after:border-b after:border-dotted after:border-[#eee] after:w-4/6 after:bg-[#eee] after:top-5.5 after:left-4/6">
                        <div class="number rounded-full border border-[#eee] mb-3">
                            <p class="text-lg px-3 py-2 text-[#0a49bf]">03</p>
                        </div>

                        <div class="info w-3/4">
                            <h3 class="font-bold text-xs sm:text-sm mb-1">Мойка и сушка</h3>
                            <p class="text-xs sm:text-sm">Многоступенчатая мойка и сушка для идеальной чистоты
                                стекла</p>
                        </div>
                    </div>
                    <div
                        class="production relative flex flex-col items-center after:absolute after:border-b after:border-dotted after:border-[#eee] after:w-4/6 after:bg-[#eee] after:top-5.5 after:left-4/6">
                        <div class="number rounded-full border border-[#eee] mb-3">
                            <p class="text-lg px-3 py-2 text-[#0a49bf]">04</p>
                        </div>

                        <div class="info w-3/4">
                            <h3 class="font-bold text-xs sm:text-sm mb-1">Сборка стеклопакета</h3>
                            <p class="text-xs sm:text-sm">Сборка и герметизация стеклопакетов с применением качественных
                                материалов</p>
                        </div>
                    </div>
                    <div
                        class="production relative flex flex-col items-center after:absolute after:border-b after:border-dotted after:border-[#eee] after:w-4/6 after:bg-[#eee] after:top-5.5 after:left-4/6">
                        <div class="number rounded-full border border-[#eee] mb-3">
                            <p class="text-lg px-3 py-2 text-[#0a49bf]">05</p>
                        </div>

                        <div class="info w-3/4">
                            <h3 class="font-bold text-xs sm:text-sm mb-1">Контроль качества</h3>
                            <p class="text-xs sm:text-sm">Проверка герметичности, геометрии и оптических
                                характеристик</p>
                        </div>
                    </div>

                    <div class="production relative flex flex-col items-center">
                        <div class="number rounded-full border border-[#eee] mb-3">
                            <p class="text-lg px-3 py-2 text-[#0a49bf]">06</p>
                        </div>

                        <div class="info w-3/4">
                            <h3 class="font-bold text-xs sm:text-sm mb-1">Упаковка и отгрузка</h3>
                            <p class="text-xs sm:text-sm">Надежная упаковка и быстрая отгрузка готовой продукции</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="equipments-container mb-5">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5">Оборудование и технологии</h2>

                <div class="equipments grid grid-cols-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5">
                    <div class="product h-75 lg:h-80 2xl:h-70 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/equipments/automatic-cutting.png') }}"
                             alt="automatic cutting" loading="lazy"
                             class="rounded-t-xl rounded-b-lg h-1/2 xl:h-3/5 w-full object-cover object-center">

                        <div class="info h-1/2 xl:h-2/3 px-2 sm:px-4 py-3 flex flex-col">
                            <h3 class="text-xs xl:text-sm font-bold mb-1">Автоматический раскрой</h3>
                            <p class="text-xs xl:text-sm">Высокоточное оборудование обеспечивает идеальной раскрой и
                                минимальный допуски</p>
                        </div>
                    </div>

                    <div class="product h-75 lg:h-80 2xl:h-70 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/equipments/edge-processing.png') }}" alt="edge processing"
                             loading="lazy"
                             class="rounded-t-xl rounded-b-lg h-1/2 xl:h-3/5 w-full object-cover object-center">

                        <div class="info h-1/2 xl:h-2/3 px-2 sm:px-4 py-3 flex flex-col">
                            <h3 class="text-xs xl:text-sm font-bold mb-1">Обработка кромки</h3>
                            <p class="text-xs xl:text-sm">Современные станки выполняют шлифовку, полировку и фацет любой
                                сложности</p>
                        </div>
                    </div>

                    <div class="product h-75 lg:h-80 2xl:h-70 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/equipments/heat-treatment.png') }}" alt="heat treatment"
                             loading="lazy"
                             class="rounded-t-xl rounded-b-lg h-1/2 xl:h-3/5 w-full object-cover object-center">

                        <div class="info h-1/2 xl:h-2/3 px-2 sm:px-4 py-3 flex flex-col">
                            <h3 class="text-xs xl:text-sm font-bold mb-1">Закалка и термообработка</h3>
                            <p class="text-xs xl:text-sm">Закалочные печи последнего поколения для прочности и
                                безопасности стекла</p>
                        </div>
                    </div>

                    <div class="product h-75 lg:h-80 2xl:h-70 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/equipments/assembly-windows.png') }}"
                             alt="assembly windows" loading="lazy"
                             class="rounded-t-xl rounded-b-lg h-1/2 xl:h-3/5 w-full object-cover object-center">

                        <div class="info h-1/2 xl:h-2/3 px-2 sm:px-4 py-3 flex flex-col">
                            <h3 class="text-xs xl:text-sm font-bold mb-1">Сборка стеклопакетов</h3>
                            <p class="text-xs xl:text-sm">Автоматизированные линии сборки обеспечивают точность и
                                надежность каждого стеклопакета</p>
                        </div>
                    </div>

                    <div class="product h-75 lg:h-80 2xl:h-70 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/equipments/quality-control.png') }}" alt="quality control"
                             loading="lazy"
                             class="rounded-t-xl rounded-b-lg h-1/2 xl:h-3/5 w-full object-cover object-center">

                        <div class="info h-1/2 xl:h-2/3 px-2 sm:px-4 py-3 flex flex-col">
                            <h3 class="text-xs xl:text-sm font-bold mb-1">Контроль качества</h3>
                            <p class="text-xs xl:text-sm">Современные системы контроля выявляют любые отклонения на
                                ранних этапах</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="nature mb-10">
            <div class="container mx-auto w-full px-4 relative flex items-center bg-[#f5f7fc] rounded-2xl pl-7 xl:pl-8 py-3 xl:py-5 overflow-hidden">
                <div class="icon w-9 h-9 sm:w-11 sm:h-11 lg:w-15 lg:h-15 mr-4 lg:mr-7 flex justify-center items-center rounded-full border border-[#0a49bf]">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-10 lg:h-10 text-[#0a49bf]">
                        <use href="{{ asset('resources/images/icons/leaf.svg') }}"/>
                    </svg>
                </div>

                <div class="info flex flex-col w-3/4">
                    <h3 class="text-sm sm:text-base lg:text-lg font-bold xl:mb-1">Забота об окружающей среде</h3>
                    <p class="text-xs lg:text-sm w-3/4">Мы внедряем энергосберегающие технологии, перерабатываем отходы
                        стекла и скоращаем воздействие на окружающую среду</p>
                </div>

                <img src="{{ asset('resources/images/other/leaf-window.png') }}" alt="caring nature" loading="lazy"
                     class="absolute h-30 sm:h-35 lg:h-40 xl:h-50 -bottom-1 right-0">
            </div>
        </section>
    </main>
@endsection
