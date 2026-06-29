@extends('layouts.app.information')

@section('title', 'О компании')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner bg-[#f2f6fb] mb-5">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">О компании</h2>
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

                <img src="{{ asset('resources/images/banners/megaplast.webp')  }}" alt="banner" loading="lazy"
                     class="absolute h-full right-0 bottom-0">
            </div>
        </section>

        <section class="numbers-container mb-10">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5">Мегапласт в цифрах</h2>

                <div class="numbers grid grid-cols-3 lg:grid-cols-5">
                    <div
                        class="number flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7 mb-2 lg:mb-0">
                        <svg class="w-10 h-10 mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/factory.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm xl:text-base font-bold">20+ лет</h3>
                            <p class="text-xs lg:text-sm lg:w-5/6">Контроль качества на всех этапах</p>
                        </div>
                    </div>

                    <div class="number flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-10 h-10 mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/box.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm xl:text-base font-bold">5000+ м<sup>2</sup></h3>
                            <p class="text-xs lg:text-sm lg:w-5/6">Площадь производства</p>
                        </div>
                    </div>

                    <div class="number flex items-center lg:border-r lg:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-10 h-10 mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/calendar.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm xl:text-base font-bold">400+</h3>
                            <p class="text-xs lg:text-sm lg:w-5/6">выполненных проектов</p>
                        </div>
                    </div>

                    <div class="number flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-10 h-10 mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/people.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm xl:text-base font-bold">120+</h3>
                            <p class="text-xs lg:text-sm lg:w-5/6">профессионалов в команде</p>
                        </div>
                    </div>

                    <div class="number flex items-center">
                        <svg class="w-10 h-10 mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/russian-border.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm xl:text-base font-bold">По всей России</h3>
                            <p class="text-xs lg:text-sm lg:w-5/6">поставки и монтаж в любой регион</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="history-container mb-10">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5">Наша история</h2>

                <div class="history flex">
                    <div class="text w-1/3 text-base flex flex-col justify-between mr-10">
                        <p class="mb-3">Мы прошли путь от пебольшой мастерской до современного производства полного
                            цикла. Постоянно развиваемся, внедряем новые технологии и расширяем возможности, чтобы
                            предлагать лучшее нашим клиентам.</p>

                        <a class="cursor-pointer text-xs sm:text-sm lg:text-base font-bold text-[#0a49bf] px-2 lg:px-6 py-2 self-start rounded-lg border border-[#0a49bf] transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">Подробнеее
                            о компании</a>
                    </div>

                    <div class="chronology grid grid-cols-3 lg:grid-cols-5 gap-x-3 gap-y-5 w-2/3">
                        <div class="2004 flex flex-col justify-between items-center">
                            <div class="text h-1/2 mb-1 lg:mb-4 flex flex-col items-center">
                                <h3 class="text-sm font-bold text-[#0a49bf] mb-1 lg:mb-4">2004</h3>

                                <div
                                    class="point relative bg-[#0a49bf] h-2 w-2 rounded-full mb-2 lg:mb-4 after:absolute after:top-1/2 sm:after:top-1/3 after:left-full after:border-b lg:after:border-y after:border-[#eee] after:w-0 sm:after:w-65 md:after:w-78 lg:after:w-lg xl:after:w-163 2xl:after:w-197"></div>

                                <p class="text-xs 2xl:text-sm">Основание компании</p>
                            </div>

                            <img src="{{ asset('resources/images/history/founding-company.webp') }}"
                                 alt="founding company" loading="lazy"
                                 class="h-1/2 rounded-lg">
                        </div>

                        <div class="2006 flex flex-col justify-between items-center">
                            <div class="text h-1/2 mb-1 lg:mb-4 flex flex-col items-center">
                                <h3 class="text-sm font-bold text-[#0a49bf] mb-1 lg:mb-4">2006</h3>

                                <div class="point relative bg-[#0a49bf] h-2 w-2 rounded-full mb-2 lg:mb-4"></div>

                                <p class="text-xs 2xl:text-sm">Запуск первой производственной линии</p>
                            </div>

                            <img src="{{ asset('resources/images/history/launch-production.png') }}"
                                 alt="launch production" loading="lazy"
                                 class="h-1/2 rounded-lg">
                        </div>

                        <div class="2009 flex flex-col justify-between items-center">
                            <div class="text h-1/2 mb-1 lg:mb-4 flex flex-col items-center">
                                <h3 class="text-sm font-bold text-[#0a49bf] mb-1 lg:mb-4">2009</h3>

                                <div class="point relative bg-[#0a49bf] h-2 w-2 rounded-full mb-2 lg:mb-4"></div>

                                <p class="text-xs 2xl:text-sm">Расширение ассортимента продукции</p>
                            </div>

                            <img src="{{ asset('resources/images/history/product-expansion.jpg') }}"
                                 alt="product expansion" loading="lazy"
                                 class="h-1/2 rounded-lg">
                        </div>

                        <div class="2012 flex flex-col justify-between items-center">
                            <div class="text h-1/2 mb-1 lg:mb-4 flex flex-col items-center">
                                <h3 class="text-sm font-bold text-[#0a49bf] mb-1 lg:mb-4">2012</h3>

                                <div
                                    class="point relative bg-[#0a49bf] h-2 w-2 rounded-full mb-2 lg:mb-4 lg:after:hidden after:absolute after:top-1/2 after:left-full after:border-b after:border-[#eee] after:w-0 sm:after:w-31  md:after:w-39"></div>

                                <p class="text-xs 2xl:text-sm">Первое сотрудничество</p>
                            </div>

                            <img src="{{ asset('resources/images/history/conclusion-cooperation.png') }}"
                                 alt="conclusion cooperation" loading="lazy"
                                 class="h-1/2 rounded-lg">
                        </div>

                        <div class="2018 flex relative flex-col justify-between items-center">
                            <div class="text h-1/2 mb-1 lg:mb-4 flex flex-col items-center">
                                <h3 class="text-sm font-bold text-[#0a49bf] mb-1 lg:mb-4">2018</h3>

                                <div class="point bg-[#0a49bf] h-2 w-2 rounded-full mb-2 lg:mb-4"></div>

                                <p class="text-xs 2xl:text-sm">Выход на новый уровень качества и сервиса</p>
                            </div>

                            <img src="{{ asset('resources/images/history/new-level.jpg') }}"
                                 alt="conclusion cooperation" loading="lazy"
                                 class="h-1/2 rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-creation-container mb-5">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5">Как создается наша продукция</h2>

                <div class="product-creation grid grid-cols-3 md:grid-cols-4 xl:grid-cols-6 gap-4">
                    <div class="stage flex flex-col h-80">
                        <img src="{{ asset('resources/images/equipments/glass-cutting.png') }}" alt="glass cutting"
                             loading="lazy"
                             class="h-1/2 w-full rounded-xl">

                        <div class="text flex flex-col h-1/2">
                            <h3 class="text-lg font-bold text-[#0a49bf] mt-3">01</h3>
                            <h4 class="text-base font-bold mb-2">Резка стекла</h4>
                            <p class="text-sm">Высокоточная резка листового стекла на автоматических линиях</p>
                        </div>
                    </div>

                    <div class="stage flex flex-col h-80">
                        <img src="{{ asset('resources/images/equipments/edge-processing.png') }}" alt="edge processing"
                             loading="lazy"
                             class="h-1/2 w-full rounded-xl">

                        <div class="text flex flex-col h-1/2">
                            <h3 class="text-lg font-bold text-[#0a49bf] mt-3">02</h3>
                            <h4 class="text-base font-bold mb-2">Обработка кромки</h4>
                            <p class="text-sm">Шлифовка и полировка кромки для безопасности и эстетического вида</p>
                        </div>
                    </div>

                    <div class="stage flex flex-col h-80">
                        <img src="{{ asset('resources/images/equipments/heat-treatment.png') }}" alt="" loading="lazy"
                             class="h-1/2 w-full rounded-xl">

                        <div class="text flex flex-col h-1/2">
                            <h3 class="text-lg font-bold text-[#0a49bf] mt-3">03</h3>
                            <h4 class="text-base font-bold mb-2">Закалка</h4>
                            <p class="text-sm">Упрочнение стекла в термических печах для повышения прочности</p>
                        </div>
                    </div>

                    <div class="stage flex flex-col h-80">
                        <img src="{{ asset('resources/images/equipments/quality-control.png') }}" alt="quality control"
                             loading="lazy"
                             class="h-1/2 w-full rounded-xl">

                        <div class="text flex flex-col h-1/2">
                            <h3 class="text-lg font-bold text-[#0a49bf] mt-3">04</h3>
                            <h4 class="text-base font-bold mb-2">Контроль качества</h4>
                            <p class="text-sm">Проверка на соответствие стандартам на каждом этапе производства</p>
                        </div>
                    </div>

                    <div class="stage flex flex-col h-80">
                        <img src="{{ asset('resources/images/equipments/assembly-windows.png') }}"
                             alt="assembly windows" loading="lazy"
                             class="h-1/2 w-full rounded-xl">

                        <div class="text flex flex-col h-1/2">
                            <h3 class="text-lg font-bold text-[#0a49bf] mt-3">05</h3>
                            <h4 class="text-base font-bold mb-2">Изготовление стеклопакетов</h4>
                            <p class="text-sm">Сборка стеклопакетов на автоматических линиях с герметизацией</p>
                        </div>
                    </div>

                    <div class="stage flex flex-col h-80">
                        <img src="{{ asset('resources/images/equipments/packaging-windows.png') }}"
                             alt="packaging windows" loading="lazy"
                             class="h-1/2 w-full rounded-xl">

                        <div class="text flex flex-col h-1/2">
                            <h3 class="text-lg font-bold text-[#0a49bf] mt-3">06</h3>
                            <h4 class="text-base font-bold mb-2">Упаковка и отгрузка</h4>
                            <p class="text-sm">Надежная упаковка и своевременная доставка клиенту</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="nature-container mb-5">
            <div class="container mx-auto w-full px-4">
                <div
                    class="nature relative flex items-center bg-[#f5f7fc] rounded-2xl pl-7 xl:pl-8 py-3 xl:py-5 overflow-hidden">
                    <svg class="mr-4 w-6 h-6 sm:w-7 sm:h-7 lg:w-10 lg:h-10 text-[#0a49bf]">
                        <use href="{{ asset('resources/images/icons/leaf.svg') }}"/>
                    </svg>

                    <div class="info flex flex-col w-3/4">
                        <h3 class="text-sm sm:text-base lg:text-lg font-bold xl:mb-1">Забота о будущем</h3>
                        <p class="text-xs lg:text-sm w-3/4">Мы используем энергосберегающие технологии и минимизируем
                            воздействие на окружающую среду, создавая продукцию, которая служит долгие годы</p>
                    </div>

                    <img src="{{ asset('resources/images/other/leafs.png') }}" alt="caring nature" loading="lazy"
                         class="absolute h-30 sm:h-35 lg:h-40 xl:h-50 -bottom-1 right-0">
                </div>
            </div>
        </section>
    </main>
@endsection
