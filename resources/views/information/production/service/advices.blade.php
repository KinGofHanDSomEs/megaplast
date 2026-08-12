@extends('layouts.app.information')

@section('title', 'Рекомендации по уходу')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner bg-[#f2f6fb]">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">Рекомендации по уходу</h2>
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
                        <svg class="w-6 h-6 lg:w-8 lg:h-8 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/human.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Индивидуальный подход</h3>
                            <p class="text-xs lg:text-sm">Разработка решений под ваши задачи</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-10 h-10 lg:w-12 lg:h-12 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/pyramid.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col mr-1 sm:mr-3 lg:mr-7">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Сложные формы и конструкции</h3>
                            <p class="text-xs lg:text-sm">Изготовим изделия любой формы и конфигурации</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/electrons.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Современные технологии</h3>
                            <p class="text-xs lg:text-sm">Используем передовое оборудование и материалы</p>
                        </div>
                    </div>

                    <div class="guarantee flex">
                        <svg class="w-6 h-6 lg:w-8 lg:h-8 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/setting.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Контроль качества</h3>
                            <p class="text-xs lg:text-sm">Проверка на всех этапах производства</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="products-container mb-5">
            <div class="container mx-auto px-4">
                <h2 class="text-xl font-bold mb-5">Какие задачи мы решаем</h2>

                <div class="products grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
                    <div class="product h-90 rounded-xl bg-[#f5f7fc]">
                        <img src="{{ asset('resources/images/production/solutions/complex-shapes.jpg') }}"
                             alt="complex shapes" loading="lazy"
                             class="rounded-t-xl h-4/5 w-full object-cover object-center">

                        <div class="info h-1/5 px-4 py-3 flex flex-col justify-center">
                            <h3 class="text-xs 2xl:text-sm font-bold mb-1">Сложные формы и радиусные конструкции</h3>
                        </div>
                    </div>

                    <div class="product h-90 rounded-xl bg-[#f5f7fc]">
                        <img src="{{ asset('resources/images/production/solutions/triangular-construction.jpg') }}"
                             alt="triangular construction" loading="lazy"
                             class="rounded-t-xl h-4/5 w-full object-cover object-center">

                        <div class="info h-1/5 px-4 py-3 flex flex-col justify-center">
                            <h3 class="text-xs 2xl:text-sm font-bold mb-1">Треугольные, арочные и трапециевидные
                                изделия</h3>
                        </div>
                    </div>

                    <div class="product h-90 rounded-xl bg-[#f5f7fc]">
                        <img src="{{ asset('resources/images/production/solutions/oval-design.jpg') }}"
                             alt="oval design" loading="lazy"
                             class="rounded-t-xl h-4/5 w-full object-cover object-center">

                        <div class="info h-1/5 px-4 py-3 flex flex-col justify-center">
                            <h3 class="text-xs 2xl:text-sm font-bold mb-1">Круглые и овальные конструкции</h3>
                        </div>
                    </div>

                    <div class="product h-90 rounded-xl bg-[#f5f7fc]">
                        <img src="{{ asset('resources/images/production/solutions/polygonal-solution.jpg') }}"
                             alt="polygonal solution" loading="lazy"
                             class="rounded-t-xl h-4/5 w-full object-cover object-center">

                        <div class="info h-1/5 px-4 py-3 flex flex-col justify-center">
                            <h3 class="text-xs 2xl:text-sm font-bold mb-1">Многоугольные и комбинированные решения</h3>
                        </div>
                    </div>

                    <div class="product h-90 rounded-xl bg-[#f5f7fc]">
                        <img src="{{ asset('resources/images/production/solutions/custom-sizes.jpg') }}"
                             alt="custom sizes" loading="lazy"
                             class="rounded-t-xl h-4/5 w-full object-cover object-center">

                        <div class="info h-1/5 px-4 py-3 flex flex-col justify-center">
                            <h3 class="text-xs 2xl:text-sm font-bold mb-1">Увеличенные габариты и нестандартные
                                размеры</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="examples-container mb-5">
            <div class="container mx-auto w-full px-4 py-4">
                <h2 class="text-xl font-bold mb-5">Примеры наших решений</h2>

                <div class="examples grid grid-cols-4 gap-3 mb-5">
                    <img src="{{ asset('resources/images/projects/south-shopping-center/south-shopping-center.webp') }}"
                         alt="south shopping center" loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                    <img src="{{ asset('resources/images/projects/house2/house.jpg') }}" alt="house21" loading="lazy"
                         class="w-full h-40 lg:h-60 rounded-xl">
                    <img src="{{ asset('resources/images/projects/house1/house.jpg') }}" alt="house11" loading="lazy"
                         class="w-full h-40 lg:h-60 rounded-xl">
                    <img src="{{ asset('resources/images/projects/ural/ural3.jpg') }}" alt="ural3" loading="lazy"
                         class="w-full h-40 lg:h-60 rounded-xl">
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
