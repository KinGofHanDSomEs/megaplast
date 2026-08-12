@extends('layouts.app.information')

@section('title', 'Алюминиевые двери и витражи')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner bg-[#f2f6fb] mb-5">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">Алюминиевые двери и витражи</h2>
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

                <img src="{{ asset('resources/images/banners/conveyor-windows.png')  }}" alt="banner" loading="lazy"
                     class="absolute h-full right-0 bottom-0">
            </div>
        </section>

        <section class="catalog-container mb-10">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5">Каталог продукции</h2>

                <div class="catalog grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="product relative h-70 sm:h-80 w-full rounded-xl overflow-hidden">
                        <div class="info absolute z-10 top-0 left-0 w-full h-full flex">
                            <div
                                class="text flex flex-col justify-between p-5 w-3/6 md:w-4/6 xl:w-3/6 h-full bg-[#f6f9fc]">
                                <div class="text-group">
                                    <h3 class="text-xs sm:text-sm lg:text-base font-bold text-[#0a49bf] mb-2">
                                        Алюминиевые двери</h3>
                                    <p class="text-xs lg:text-sm mb-3">Надежные и функциональные двери для входных групп
                                        и внутренних помещений</p>

                                    <div class="types flex flex-col">
                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}"/>
                                            </svg>

                                            <p class="text-xs lg:text-sm">Входные группы</p>
                                        </div>

                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}"/>
                                            </svg>

                                            <p class="text-xs lg:text-sm">Маятниковые двери</p>
                                        </div>

                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}"/>
                                            </svg>

                                            <p class="text-xs lg:text-sm">Раздвижные двери</p>
                                        </div>

                                        <div class="type flex">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}"/>
                                            </svg>

                                            <p class="text-xs lg:text-sm">Противопожарные двери</p>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                   class="text-xs lg:text-sm font-bold text-white bg-[#0a49bf] self-start px-6 py-3 rounded-lg transition hover:bg-blue-600">Смотреть
                                    решения</a>
                            </div>

                            <div class="bg h-full  w-2/6 bg-linear-[90deg,#f6f9fc,#f6f9fc80,#f6f9fc00]"></div>
                        </div>

                        <img src="{{ asset('resources/images/production/products/aluminium/1.jpg') }}" alt="aluminium" loading="lazy"
                             class="absolute z-0 h-full top-0 -right-30">
                    </div>

                    <div class="product relative h-70 sm:h-80 w-full rounded-xl overflow-hidden">
                        <div class="info absolute z-10 top-0 left-0 w-full h-full flex">
                            <div
                                class="text flex flex-col justify-between p-5 w-3/6 md:w-4/6 xl:w-3/6 h-full bg-[#f6f9fc]">
                                <div class="text-group">
                                    <h3 class="text-xs sm:text-sm lg:text-base font-bold text-[#0a49bf] mb-2">
                                        Алюминиевые витражи</h3>
                                    <p class="text-xs lg:text-sm mb-3">Светопрозрачные фасадные системы для современных
                                        зданий и архитектурных решений</p>

                                    <div class="types flex flex-col">
                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}"/>
                                            </svg>

                                            <p class="text-xs lg:text-sm">Стоечно-ригельные системы</p>
                                        </div>

                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}"/>
                                            </svg>

                                            <p class="text-xs lg:text-sm">Структурное остекление</p>
                                        </div>

                                        <div class="type flex mb-1">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}"/>
                                            </svg>

                                            <p class="text-xs lg:text-sm">Теплые и холодные профили</p>
                                        </div>

                                        <div class="type flex">
                                            <svg class="w-4 h-4 text-[#0a49bf] mr-2">
                                                <use href="{{ asset('resources/images/icons/check-mark.svg') }}"/>
                                            </svg>

                                            <p class="text-xs lg:text-sm">Индивидуальные решения</p>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                   class="text-xs lg:text-sm font-bold text-white bg-[#0a49bf] self-start px-6 py-3 rounded-lg transition hover:bg-blue-600">Смотреть
                                    решения</a>
                            </div>

                            <div class="bg h-full w-2/6 bg-linear-[90deg,#f6f9fc,#f6f9fc80,#f6f9fc00]"></div>
                        </div>

                        <img src="{{ asset('resources/images/banners/ural.jpg') }}" alt="aluminium" loading="lazy"
                             class="absolute z-0 h-full top-0 right-0">
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
                                <use href="{{ asset('resources/images/icons/security.svg') }}"/>
                            </svg>
                        </div>

                        <div class="info flex flex-col h-full">
                            <h3 class="text-xs lg:text-sm font-bold h-1/4 flex items-center">Прочность и надежность</h3>
                            <p class="text-xs lg:text-sm h-3/4">Алюминиевые профили устойчивы к коррозии, деформациями
                                перепадан температур</p>
                        </div>
                    </div>

                    <div class="advantage flex items-center pr-2">
                        <div class="icon border border-[#eee] rounded-lg mr-3">
                            <svg class="w-8 h-8 lg:w-10 lg:h-10 m-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/infinity.svg') }}"/>
                            </svg>
                        </div>

                        <div class="info flex flex-col h-full">
                            <h3 class="text-xs lg:text-sm font-bold h-1/4 flex items-center">Долговечность</h3>
                            <p class="text-xs lg:text-sm h-3/4">Срок службы конструкций более 50 лет без потери
                                эксплуатационных характеристик</p>
                        </div>
                    </div>

                    <div class="advantage flex items-center pr-2">
                        <div class="icon border border-[#eee] rounded-lg mr-3">
                            <svg class="w-6 h-6 lg:w-8 lg:h-8 m-4 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/pipette.svg') }}"/>
                            </svg>
                        </div>

                        <div class="info flex flex-col h-full">
                            <h3 class="text-xs lg:text-sm font-bold h-1/4 flex items-center">Эстетика и дизайн</h3>
                            <p class="text-xs lg:text-sm h-3/4">Современный внешний вид, возможность окрашивания в любой
                                цвет по RAL</p>
                        </div>
                    </div>

                    <div class="advantage flex items-center pr-2">
                        <div class="icon border border-[#eee] rounded-lg mr-3">
                            <svg class="w-10 h-10 2xl:w-12 2xl:h-12 m-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/speedometer.svg') }}"/>
                            </svg>
                        </div>

                        <div class="info flex flex-col h-full">
                            <h3 class="text-xs lg:text-sm font-bold h-1/4 flex items-center">Энергоэффективность</h3>
                            <p class="text-xs lg:text-sm h-3/4">Теплые профили и современные стеклопакеты обеспечивают
                                высокую теплоизоляцию</p>
                        </div>
                    </div>

                    <div class="advantage flex items-center pr-2">
                        <div class="icon border border-[#eee] rounded-lg mr-3">
                            <svg class="w-9 h-9 2xl:w-12 2xl:h-12 m-3 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/tool.svg') }}"/>
                            </svg>
                        </div>

                        <div class="info flex flex-col h-full">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Индивидуальные решения</h3>
                            <p class="text-xs lg:text-sm h-3/4">Проектируем и производим конструкции под любые
                                архитектурные задачи</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="examples-container mb-5">
            <div class="container mx-auto w-full px-4 py-4">
                <h2 class="text-xl font-bold mb-5">Примеры наших решений</h2>

                <div class="examples grid grid-cols-4 gap-3 mb-5">
                    <img src="{{ asset('resources/images/projects/ural/ural2.jpg') }}" alt="ural2" loading="lazy"
                         class="w-full h-40 lg:h-60 rounded-xl">
                    <img
                        src="{{ asset('resources/images/projects/central-shopping-center/central-shopping-center.jfif') }}"
                        alt="central shopping center" loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                    <img src="{{ asset('resources/images/projects/ice-palace/ice-palace.jfif') }}" alt="ice palace"
                         loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                    <img src="{{ asset('resources/images/projects/lada-service/lada-service.jfif') }}"
                         alt="lada service" loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                </div>

                <div class="btn w-full flex justify-center items-center">
                    <a href="{{ route('information.about.projects') }}"
                       class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-[#0a49bf] font-bold bg-white border border-[#0a49bf] rounded-lg transition hover:border-blue-600 hover:text-blue-600">Смотреть
                        все проекты &nbsp;&nbsp;&nbsp;&nbsp;→</a>
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
