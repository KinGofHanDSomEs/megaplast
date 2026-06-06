@extends('layouts.app')

@section('title', 'Алюминиевые двери и витражи')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner mb-5">
            <div class="container relative min-h-100 lg:min-h-150 mx-auto w-full px-4">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-1 lg:mb-5">Алюминиевые двери и витражи</h2>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/3 mb-2 lg:mb-5">Современные алюминиевые конструкции для коммерческих и общественных зданий. Надежность, эстетика и долговечность</p>

                    <div class="buttons flex mb-4 lg:mb-7">
                        <a href="#" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-white font-bold bg-[#0a49bf] rounded-lg mr-3 transition hover:bg-[#1447e6]">Рассчитать проект</a>
                        <a href="#" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-[#0a49bf] font-bold bg-white border border-[#0a49bf] rounded-lg transition hover:border-blue-600 hover:text-blue-600">Каталог решений</a>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/megaplast.webp') }}" alt="megaplast" loading="lazy" class="rounded-br-xl absolute h-full right-0 object-cover object-right">
            </div>
        </section>

        <section class="catalog-container mb-10">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5">Каталог продукции</h2>

                <div class="catalog grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="product relative h-70 sm:h-80 w-full rounded-xl overflow-hidden">
                        <div class="info absolute z-10 top-0 left-0 w-full h-full flex">
                            <div class="text flex flex-col justify-between p-5 w-3/6 md:w-4/6 xl:w-3/6 h-full bg-[#f6f9fc]">
                                <div class="text-group">
                                    <h3 class="text-xs sm:text-sm lg:text-base font-bold text-[#0a49bf] mb-2">Алюминиевые двери</h3>
                                    <p class="text-xs lg:text-sm mb-3">Надежные и функциональные двери для входных групп и внутренних помещений</p>

                                    <div class="types flex flex-col">
                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}" />
                                            </svg>

                                            <p class="text-xs lg:text-sm">Входные группы</p>
                                        </div>

                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}" />
                                            </svg>

                                            <p class="text-xs lg:text-sm">Маятниковые двери</p>
                                        </div>

                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}" />
                                            </svg>

                                            <p class="text-xs lg:text-sm">Раздвижные двери</p>
                                        </div>

                                        <div class="type flex">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}" />
                                            </svg>

                                            <p class="text-xs lg:text-sm">Противопожарные двери</p>
                                        </div>
                                    </div>
                                </div>

                                <a href="#" class="text-xs lg:text-sm font-bold text-white bg-[#0a49bf] self-start px-6 py-3 rounded-lg transition hover:bg-blue-600">Смотреть решения</a>
                            </div>

                            <div class="bg h-full  w-2/6 bg-linear-[90deg,#f6f9fc,#f6f9fc80,#f6f9fc00]"></div>
                        </div>

                        <img src="{{ asset('resources/images/products/aluminium.jpg') }}" alt="aluminium" loading="lazy" class="absolute z-0 h-full top-0 -right-30">
                    </div>

                    <div class="product relative h-70 sm:h-80 w-full rounded-xl overflow-hidden">
                        <div class="info absolute z-10 top-0 left-0 w-full h-full flex">
                            <div class="text flex flex-col justify-between p-5 w-3/6 md:w-4/6 xl:w-3/6 h-full bg-[#f6f9fc]">
                                <div class="text-group">
                                    <h3 class="text-xs sm:text-sm lg:text-base font-bold text-[#0a49bf] mb-2">Алюминиевые витражи</h3>
                                    <p class="text-xs lg:text-sm mb-3">Светопрозрачные фасадные системы для современных зданий и архитектурных решений</p>

                                    <div class="types flex flex-col">
                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}" />
                                            </svg>

                                            <p class="text-xs lg:text-sm">Стоечно-ригельные системы</p>
                                        </div>

                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}" />
                                            </svg>

                                            <p class="text-xs lg:text-sm">Структурное остекление</p>
                                        </div>

                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}" />
                                            </svg>

                                            <p class="text-xs lg:text-sm">Теплые и холодные профили</p>
                                        </div>

                                        <div class="type flex">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}" />
                                            </svg>

                                            <p class="text-xs lg:text-sm">Индивидуальные решения</p>
                                        </div>
                                    </div>
                                </div>

                                <a href="#" class="text-xs lg:text-sm font-bold text-white bg-[#0a49bf] self-start px-6 py-3 rounded-lg transition hover:bg-blue-600">Смотреть решения</a>
                            </div>

                            <div class="bg h-full w-2/6 bg-linear-[90deg,#f6f9fc,#f6f9fc80,#f6f9fc00]"></div>
                        </div>

                        <img src="{{ asset('resources/images/banner/ural.jpg') }}" alt="aluminium" loading="lazy" class="absolute z-0 h-full top-0 right-0">
                    </div>
                </div>
            </div>
        </section>

        <section class="advantages-container mb-10">
            <div class="container mx-auto w-full px-4 py-4">
                <h2 class="text-xl font-bold mb-5">Преимущества наших конструкций</h2>

                <div class="advantages grid grid-cols-3 2xl:grid-cols-5 gap-3">
                    <div class="advantage flex items-center pr-2">
                        <div class="icon border border-[#eee] rounded-lg mr-3">
                            <svg class="w-8 h-8 lg:w-10 lg:h-10 m-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/security.svg') }}" />
                            </svg>
                        </div>

                        <div class="info flex flex-col h-full">
                            <h3 class="text-xs lg:text-sm font-bold h-1/4 flex items-center">Прочность и надежность</h3>
                            <p class="text-xs lg:text-sm h-3/4">Алюминиевые профили устойчивы к коррозии, деформациями перепадан температур</p>
                        </div>
                    </div>

                    <div class="advantage flex items-center pr-2">
                        <div class="icon border border-[#eee] rounded-lg mr-3">
                            <svg class="w-8 h-8 lg:w-10 lg:h-10 m-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/infinity.svg') }}" />
                            </svg>
                        </div>

                        <div class="info flex flex-col h-full">
                            <h3 class="text-xs lg:text-sm font-bold h-1/4 flex items-center">Долговечность</h3>
                            <p class="text-xs lg:text-sm h-3/4">Срок службы конструкций более 50 лет без потери эксплуатационных характеристик</p>
                        </div>
                    </div>

                    <div class="advantage flex items-center pr-2">
                        <div class="icon border border-[#eee] rounded-lg mr-3">
                            <svg class="w-6 h-6 lg:w-8 lg:h-8 m-4 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/pipette.svg') }}" />
                            </svg>
                        </div>

                        <div class="info flex flex-col h-full">
                            <h3 class="text-xs lg:text-sm font-bold h-1/4 flex items-center">Эстетика и дизайн</h3>
                            <p class="text-xs lg:text-sm h-3/4">Современный внешний вид, возможность окрашивания в любой цвет по RAL</p>
                        </div>
                    </div>

                    <div class="advantage flex items-center pr-2">
                        <div class="icon border border-[#eee] rounded-lg mr-3">
                            <svg class="w-10 h-10 2xl:w-12 2xl:h-12 m-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/speedometer.svg') }}" />
                            </svg>
                        </div>

                        <div class="info flex flex-col h-full">
                            <h3 class="text-xs lg:text-sm font-bold h-1/4 flex items-center">Энергоэффективность</h3>
                            <p class="text-xs lg:text-sm h-3/4">Теплые профили и современные стеклопакеты обеспечивают высокую теплоизоляцию</p>
                        </div>
                    </div>

                    <div class="advantage flex items-center pr-2">
                        <div class="icon border border-[#eee] rounded-lg mr-3">
                            <svg class="w-9 h-9 2xl:w-12 2xl:h-12 m-3 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/tool.svg') }}" />
                            </svg>
                        </div>

                        <div class="info flex flex-col h-full">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Индивидуальные решения</h3>
                            <p class="text-xs lg:text-sm h-3/4">Проектируем и производим конструкции под любые архитектурные задачи</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="examples-container mb-5">
            <div class="container mx-auto w-full px-4 py-4">
                <h2 class="text-xl font-bold mb-5">Примеры наших решений</h2>

                <div class="examples grid grid-cols-4 gap-3 mb-5">
                    <img src="{{ asset('resources/images/projects/ural/ural2.jpg') }}" alt="ural2" loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                    <img src="{{ asset('resources/images/projects/central-shopping-center/central-shopping-center.jfif') }}" alt="central shopping center" loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                    <img src="{{ asset('resources/images/projects/ice-palace/ice-palace.jfif') }}" alt="ice palace" loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                    <img src="{{ asset('resources/images/projects/lada-service/lada-service.jfif') }}" alt="lada service" loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                </div>

                <div class="btn w-full flex justify-center items-center">
                    <a href="{{ route('about.projects') }}" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-[#0a49bf] font-bold bg-white border border-[#0a49bf] rounded-lg transition hover:border-blue-600 hover:text-blue-600">Смотреть все проекты &nbsp;&nbsp;&nbsp;&nbsp;→</a>
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
