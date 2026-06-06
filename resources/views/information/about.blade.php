@extends('layouts.app')

@section('title', 'О компании')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner mb-5">
            <div class="container relative min-h-100 lg:min-h-150 mx-auto w-full px-4">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-1 lg:mb-5">О нас</h2>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/2 mb-2 lg:mb-5">Мы создаем прозрачные решения, которые делают пространство безопасным, эстетичным и энергоэффективным</p>

                    <div class="cards flex text-sm w-1/2">
                        <div class="card flex flex-col mr-2 lg:mr-4 w-1/3">
                            <div class="icon flex self-start justify-center items-center border border-[#eee] rounded-lg mb-2">
                                <svg class="w-6 h-6 lg:w-8 lg:h-8 m-2 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/security.svg') }}" />
                                </svg>
                            </div>

                            <p class="w-2/3 text-xs lg:text-sm">Технологии и инновации</p>
                        </div>

                        <div class="card flex flex-col mr-2 lg:mr-4 w-1/3">
                            <div class="icon flex self-start justify-center items-center border border-[#eee] rounded-lg mb-2">
                                <svg class="w-6 h-6 lg:w-8 lg:h-8 m-2 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/team.svg') }}" />
                                </svg>
                            </div>

                            <p class="w-2/3 text-xs lg:text-sm">Команда профессионалов</p>
                        </div>

                        <div class="card flex flex-col w-1/3">
                            <div class="icon flex self-start justify-center items-center border border-[#eee] rounded-lg mb-2">
                                <svg class="w-6 h-6 lg:w-8 lg:h-8 m-2 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/leaf.svg') }}" />
                                </svg>
                            </div>

                            <p class="w-2/3 text-xs lg:text-sm">Ответственность и устойчивое развитие</p>
                        </div>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/ural2.jpg') }}" alt="ural" loading="lazy" class="absolute h-full right-0 object-cover object-right">
            </div>
        </section>

        <section class="numbers-container mb-10">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5">Мегапласт в цифрах</h2>

                <div class="numbers grid grid-cols-3 lg:grid-cols-5">
                    <div class="number flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7 mb-2 lg:mb-0">
                        <svg class="w-10 h-10 mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/factory.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm xl:text-base font-bold">20+ лет</h3>
                            <p class="text-xs lg:text-sm lg:w-5/6">Контроль качества на всех этапах</p>
                        </div>
                    </div>

                    <div class="number flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-10 h-10 mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/box.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm xl:text-base font-bold">5000+ м<sup>2</sup></h3>
                            <p class="text-xs lg:text-sm lg:w-5/6">Площадь производства</p>
                        </div>
                    </div>

                    <div class="number flex items-center lg:border-r lg:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-10 h-10 mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/calendar.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm xl:text-base font-bold">400+</h3>
                            <p class="text-xs lg:text-sm lg:w-5/6">выполненных проектов</p>
                        </div>
                    </div>

                    <div class="number flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-10 h-10 mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/people.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm xl:text-base font-bold">120+</h3>
                            <p class="text-xs lg:text-sm lg:w-5/6">профессионалов в команде</p>
                        </div>
                    </div>

                    <div class="number flex items-center">
                        <svg class="w-10 h-10 mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/russian-border.svg') }}" />
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
                        <p class="mb-3">Мы прошли путь от пебольшой мастерской до современного производства полного цикла. Постоянно развиваемся, внедряем новые технологии и расширяем возможности, чтобы предлагать лучшее нашим клиентам.</p>

                        <a class="cursor-pointer text-xs sm:text-sm lg:text-base font-bold text-[#0a49bf] px-2 lg:px-6 py-2 self-start rounded-lg border border-[#0a49bf] transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">Подробнеее о компании</a>
                    </div>

                    <div class="chronology grid grid-cols-3 lg:grid-cols-5 gap-x-3 gap-y-5 w-2/3">
                        <div class="2004 flex flex-col justify-between items-center">
                            <div class="text h-1/2 mb-1 lg:mb-4 flex flex-col items-center">
                                <h3 class="text-sm font-bold text-[#0a49bf] mb-1 lg:mb-4">2004</h3>

                                <div class="point relative bg-[#0a49bf] h-2 w-2 rounded-full mb-2 lg:mb-4 after:absolute after:top-1/2 sm:after:top-1/3 after:left-full after:border-b lg:after:border-y after:border-[#eee] after:w-0 sm:after:w-65 md:after:w-78 lg:after:w-lg xl:after:w-163 2xl:after:w-197"></div>

                                <p class="text-xs 2xl:text-sm">Основание компании</p>
                            </div>

                            <img src="{{ asset('resources/images/history/founding-company.webp') }}" alt="founding company" loading="lazy"
                                class="h-1/2 rounded-lg">
                        </div>

                        <div class="2006 flex flex-col justify-between items-center">
                            <div class="text h-1/2 mb-1 lg:mb-4 flex flex-col items-center">
                                <h3 class="text-sm font-bold text-[#0a49bf] mb-1 lg:mb-4">2006</h3>

                                <div class="point relative bg-[#0a49bf] h-2 w-2 rounded-full mb-2 lg:mb-4"></div>

                                <p class="text-xs 2xl:text-sm">Запуск первой производственной линии</p>
                            </div>

                            <img src="{{ asset('resources/images/history/launch-production.png') }}" alt="launch production" loading="lazy"
                                 class="h-1/2 rounded-lg">
                        </div>

                        <div class="2009 flex flex-col justify-between items-center">
                            <div class="text h-1/2 mb-1 lg:mb-4 flex flex-col items-center">
                                <h3 class="text-sm font-bold text-[#0a49bf] mb-1 lg:mb-4">2009</h3>

                                <div class="point relative bg-[#0a49bf] h-2 w-2 rounded-full mb-2 lg:mb-4"></div>

                                <p class="text-xs 2xl:text-sm">Расширение ассортимента продукции</p>
                            </div>

                            <img src="{{ asset('resources/images/history/product-expansion.jpg') }}" alt="product expansion" loading="lazy"
                                 class="h-1/2 rounded-lg">
                        </div>

                        <div class="2012 flex flex-col justify-between items-center">
                            <div class="text h-1/2 mb-1 lg:mb-4 flex flex-col items-center">
                                <h3 class="text-sm font-bold text-[#0a49bf] mb-1 lg:mb-4">2012</h3>

                                <div class="point relative bg-[#0a49bf] h-2 w-2 rounded-full mb-2 lg:mb-4 lg:after:hidden after:absolute after:top-1/2 after:left-full after:border-b after:border-[#eee] after:w-0 sm:after:w-31  md:after:w-39"></div>

                                <p class="text-xs 2xl:text-sm">Первое сотрудничество</p>
                            </div>

                            <img src="{{ asset('resources/images/history/conclusion-cooperation.png') }}" alt="conclusion cooperation" loading="lazy"
                                 class="h-1/2 rounded-lg">
                        </div>

                        <div class="2018 flex relative flex-col justify-between items-center">
                            <div class="text h-1/2 mb-1 lg:mb-4 flex flex-col items-center">
                                <h3 class="text-sm font-bold text-[#0a49bf] mb-1 lg:mb-4">2018</h3>

                                <div class="point bg-[#0a49bf] h-2 w-2 rounded-full mb-2 lg:mb-4"></div>

                                <p class="text-xs 2xl:text-sm">Выход на новый уровень качества и сервиса</p>
                            </div>

                            <img src="{{ asset('resources/images/history/new-level.jpg') }}" alt="conclusion cooperation" loading="lazy"
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
                        <img src="{{ asset('resources/images/equipments/glass-cutting.png') }}" alt="glass cutting" loading="lazy"
                             class="h-1/2 w-full rounded-xl">

                        <div class="text flex flex-col h-1/2">
                            <h3 class="text-lg font-bold text-[#0a49bf] mt-3">01</h3>
                            <h4 class="text-base font-bold mb-2">Резка стекла</h4>
                            <p class="text-sm">Высокоточная резка листового стекла на автоматических линиях</p>
                        </div>
                    </div>

                    <div class="stage flex flex-col h-80">
                        <img src="{{ asset('resources/images/equipments/edge-processing.png') }}" alt="edge processing" loading="lazy"
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
                        <img src="{{ asset('resources/images/equipments/quality-control.png') }}" alt="quality control" loading="lazy"
                             class="h-1/2 w-full rounded-xl">

                        <div class="text flex flex-col h-1/2">
                            <h3 class="text-lg font-bold text-[#0a49bf] mt-3">04</h3>
                            <h4 class="text-base font-bold mb-2">Контроль качества</h4>
                            <p class="text-sm">Проверка на соответствие стандартам на каждом этапе производства</p>
                        </div>
                    </div>

                    <div class="stage flex flex-col h-80">
                        <img src="{{ asset('resources/images/equipments/assembly-windows.png') }}" alt="assembly windows" loading="lazy"
                             class="h-1/2 w-full rounded-xl">

                        <div class="text flex flex-col h-1/2">
                            <h3 class="text-lg font-bold text-[#0a49bf] mt-3">05</h3>
                            <h4 class="text-base font-bold mb-2">Изготовление стеклопакетов</h4>
                            <p class="text-sm">Сборка стеклопакетов на автоматических линиях с герметизацией</p>
                        </div>
                    </div>

                    <div class="stage flex flex-col h-80">
                        <img src="{{ asset('resources/images/equipments/packaging-windows.png') }}" alt="packaging windows" loading="lazy"
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
                <div class="nature relative flex items-center bg-[#f5f7fc] rounded-2xl pl-7 xl:pl-8 py-3 xl:py-5 overflow-hidden">
                    <svg class="mr-4 w-6 h-6 sm:w-7 sm:h-7 lg:w-10 lg:h-10 text-[#0a49bf]">
                        <use href="{{ asset('resources/images/icons/leaf.svg') }}" />
                    </svg>

                    <div class="info flex flex-col w-3/4">
                        <h3 class="text-sm sm:text-base lg:text-lg font-bold xl:mb-1">Забота о будущем</h3>
                        <p class="text-xs lg:text-sm w-3/4">Мы используем энергосберегающие технологии и минимизируем воздействие на окружающую среду, создавая продукцию, которая служит долгие годы</p>
                    </div>

                    <img src="{{ asset('resources/images/other/leafs.png') }}" alt="caring nature" loading="lazy" class="absolute h-30 sm:h-35 lg:h-40 xl:h-50 -bottom-1 right-0">
                </div>
            </div>
        </section>
    </main>
@endsection
