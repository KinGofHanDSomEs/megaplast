@extends('layouts.app')

@section('title', 'Проекты')

@vite([
    'resources/js/about/projects.js',
])

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner">
            <div class="container relative min-h-100 lg:min-h-150 mx-auto w-full px-4">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-1 lg:mb-5">Готовые проекты</h2>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/2 mb-2 lg:mb-5">Реализованные объекты различного назначения по всей России. Качество, проверенное делом</p>

                    <div class="cards flex text-sm w-1/2">
                        <div class="card flex items-center mr-2 lg:mr-4 w-1/3">
                            <svg class="w-6 h-6 lg:w-10 lg:h-10 mr-3 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/projects.svg') }}" />
                            </svg>

                            <p class="w-3/4 text-xs lg:text-sm">Более 50 успешных проектов</p>
                        </div>

                        <div class="card flex items-center mr-2 lg:mr-4 w-1/3">
                            <svg class="w-6 h-6 lg:w-10 lg:h-10 mr-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/security.svg') }}" />
                            </svg>

                            <p class="w-3/4 text-xs lg:text-sm">Соблюдение сроков и стандартов</p>
                        </div>

                        <div class="card flex items-center w-1/3">
                            <svg class="w-6 h-6 lg:w-10 lg:h-10 mr-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/medal.svg') }}" />
                            </svg>

                            <p class="w-3/4 text-xs lg:text-sm">Качество, которому доверяют</p>
                        </div>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/ural.jpg') }}" alt="ural" loading="lazy" class="absolute h-full right-0 object-cover object-right">
            </div>
        </section>

        <section class="projects-type-container mb-5 bg-[#f9fbfd]">
            <div class="container mx-auto w-full px-4 py-3 lg:py-5">
                <div class="projects-type grid grid-cols-5 gap-3 lg:gap-7">
                    <div id="all-projects" class="project-type border border-[#0a49bf] bg-[#0a49bf] text-white rounded-xl px-1 py-0 sm:py-1 lg:py-3 w-full flex justify-center items-center cursor-pointer transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">
                        <h3 class="text-xs xl:text-sm font-bold text-center">Все проекты</h3>
                    </div>

                    <div id="residential-complexes" class="project-type border border-[#eee] rounded-xl px-1 py-0 sm:py-1 lg:py-3 w-full flex justify-center items-center cursor-pointer transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">
                        <h3 class="text-xs xl:text-sm font-bold text-center">Жилые комплексы</h3>
                    </div>

                    <div id="business-centers" class="project-type border border-[#eee] rounded-xl px-1 py-0 sm:py-1 lg:py-3 w-full flex justify-center items-center cursor-pointer transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">
                        <h3 class="text-xs xl:text-sm font-bold text-center">Бизнес-центры</h3>
                    </div>

                    <div id="shopping-malls" class="project-type border border-[#eee] rounded-xl px-1 py-0 sm:py-1 lg:py-3 w-full flex justify-center items-center cursor-pointer transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">
                        <h3 class="text-xs xl:text-sm font-bold text-center">Торговые центры</h3>
                    </div>

                    <div id="public-buildings" class="project-type border border-[#eee] rounded-xl px-1 py-0 sm:py-1 lg:py-3 w-full flex justify-center items-center cursor-pointer transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">
                        <h3 class="text-xs xl:text-sm font-bold text-center">Общественные здания</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects-container mb-10">
            <div class="container mx-auto w-full px-4">
                <div class="projects grid grid-cols-2 xl:grid-cols-3 gap-5">
                    <div type="shopping-malls" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/ural/ural.jpg') }}" alt="ural" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/ural/ural2.jpg') }}" alt="ural2" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/ural/ural3.jpg') }}" alt="ural3" loading="lazy" class="image  absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 mr-2"></div>
                                <div class="bar h-1 w-10 bg-gray-400 mr-2 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Урал</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1 text-wrap">г. Нефтекамск, Юбилейный проспект, д. 18</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Торговые центры</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">4 000 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">5 месяцев</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="public-buildings" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/arsenal/arsenal.jfif') }}" alt="arsenal" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/arsenal/arsenal2.jfif') }}" alt="arsenal2" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/arsenal/arsenal3.jfif') }}" alt="arsenal3" loading="lazy" class="image  absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 mr-2"></div>
                                <div class="bar h-1 w-10 bg-gray-400 mr-2 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Арсенал</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, Комсомольский проспект, д. 27Б</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Общественные здания</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">250 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">1 месяц</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="shopping-malls" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/avtokamsk-service/avtokamsk-service.jfif') }}" alt="avtokamsk service" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/avtokamsk-service/avtokamsk-service2.jfif') }}" alt="avtokamsk service 2" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">АвтоКамск</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, Трактовая ул., д. 6/п3</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Торговые центры</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">100 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">2 недели</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="public-buildings" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/butler/butler.jfif') }}" alt="butler" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Бутлер</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, Комсомольский проспект, д. 27А</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Общественные здания</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">60 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">1,5 недели</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="shopping-malls" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/central-shopping-center/central-shopping-center.jfif') }}" alt="central shopping center" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/central-shopping-center/central-shopping-center2.webp') }}" alt="central shopping center" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Торговый комплекс Центральный</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, Парковая улица, д. 2Е</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Торговые центры</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">300 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">1 месяц</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="residential-complexes" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/house1/house.jpg') }}" alt="house11" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Квартиры</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Жилые комплексы</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">500 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">2 месяца</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="public-buildings" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/house2/house.jpg') }}" alt="house21" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/house2/house2.jpg') }}" alt="house22" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Общественное здание</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Общественные здания</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">100 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">2 недели</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="residential-complexes" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/house3/house.jfif') }}" alt="house31" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Квартиры</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Жилые комплексы</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">500 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">2 месяца</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="residential-complexes" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/house4/house.jpg') }}" alt="house41" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Квартиры</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Жилые комплексы</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">500 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">2 месяца</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="residential-complexes" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/house5/house.jpg') }}" alt="house51" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Квартиры</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Жилые комплексы</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">500 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">2 месяца</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="residential-complexes" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/house6/house.jfif') }}" alt="house61" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/house6/house2.jfif') }}" alt="house62" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 rounded-r-lg"></div>
                            </div>

                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Квартиры</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Жилые комплексы</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">500 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">2 месяца</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="public-buildings" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/ice-palace/ice-palace.jfif') }}" alt="ice palace" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/ice-palace/ice-palace2.jfif') }}" alt="ice palace2" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/ice-palace/ice-palace3.jfif') }}" alt="ice palace3" loading="lazy" class="image  absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 mr-2"></div>
                                <div class="bar h-1 w-10 bg-gray-400 mr-2 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Ледовый Дворец</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, ул. Ленина, д. 19Д</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Общественные здания</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">600 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">1,5 месяца</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="shopping-malls" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/lada-service/lada-service.jfif') }}" alt="lada service" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/lada-service/lada-service2.jfif') }}" alt="lada service2" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/lada-service/lada-service3.jfif') }}" alt="lada service3" loading="lazy" class="image  absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 mr-2"></div>
                                <div class="bar h-1 w-10 bg-gray-400 mr-2 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Абсолют</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, Дорожная улица, д. 44Б</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Торговые центры</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">300 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">3 недели</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="shopping-malls" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/nissan-service/nissan-service.jfif') }}" alt="nissan-service" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/nissan-service/nissan-service2.jfif') }}" alt="nissan-service2" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Nissan</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, Янаульская ул., д. 12Г</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Торговые центры</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">300 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">3 недели</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="public-buildings" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/police-station/police-station.jfif') }}" alt="police station" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/police-station/police-station2.jfif') }}" alt="police station2" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/police-station/police-station3.jfif') }}" alt="police station" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 mr-2"></div>
                                <div class="bar h-1 w-10 bg-gray-400 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Полиция</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, Трактовая ул., д. 2</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Общественные здания</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">500 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">4 недели</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="business-centers" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/real-estate/real-estate.jfif') }}" alt="real estate" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/real-estate/real-estate2.jfif') }}" alt="peal estate2" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/real-estate/real-estate3.jfif') }}" alt="real estate3" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 mr-2"></div>
                                <div class="bar h-1 w-10 bg-gray-400 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Агентство Нефтекамская недвижимость</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, ул. Ленина, д. 21В</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Бизнес-центры</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">500 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">4 недели</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="shopping-malls" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/south-shopping-center/south-shopping-center.webp') }}" alt="south shopping center" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/south-shopping-center/south-shopping-center2.jfif') }}" alt="south shopping center2" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Торговый центр Южный</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, Парковая ул., д. 2А</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Торговые центры</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">300 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">2 недели</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="public-buildings" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/teacher-college/teacher-college.jpg') }}" alt="teacher college" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/teacher-college/teacher-college2.webp') }}" alt="teacher college2" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Педагогический колледж</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, ул. Нефтяников, д. 2</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Общественные здания</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">450 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">3,5 недели</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="shopping-malls" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/tempo-burger/tempo-burger.jfif') }}" alt="tempo burger" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Tempo Burger</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, ул. Ленина, д. 32</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Торговые центры</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">300 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">2 недели</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="public-buildings" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/traffic-police/traffic-police.jfif') }}" alt="traffic police" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Госавтоинспекция</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, Янаульская ул., д. вл2с3</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Общественные здания</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">100 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">1 неделя</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="shopping-malls" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/velican/velican.jfif') }}" alt="velican" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                            <img src="{{ asset('resources/images/projects/velican/velican2.jfif') }}" alt="velican2" loading="lazy" class="image absolute invisible opacity-0 transition duration-300 h-full rounded-t-xl object-cover object-top">

                            <div class="bars absolute w-full bottom-3 flex justify-center">
                                <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                <div class="bar h-1 w-10 bg-gray-400 rounded-r-lg"></div>
                            </div>
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Великан</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, ул. Ленина, д. 82А</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Торговые центры</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">700 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">1,5 месяца</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>

                    <div type="shopping-malls" class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                        <div class="images h-2/3 relative flex">
                            <img src="{{ asset('resources/images/projects/yves-rocher/yves-rocher.jfif') }}" alt="yves rocher" loading="lazy" class="image absolute transition duration-300 h-full rounded-t-xl object-cover object-top">
                        </div>

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text flex flex-col">
                                <h3 class="text-sm lg:text-base font-bold mb-1">Yves Rocher</h3>

                                <div class="row flex justify-between mb-2 md:mb-6">
                                    <div class="address flex items-center w-3/5">
                                        <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                            <use href="{{ asset('resources/images/icons/mark.svg')  }}" />
                                        </svg>

                                        <p class="text-xs mr-1">г. Нефтекамск, ул. Ленина, д. 32</p>
                                    </div>

                                    <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">Торговые центры</p>
                                </div>

                                <div class="sizes flex">
                                    <div class="square flex flex-col w-1/2">
                                        <p class="text-xs">Площадь остекления</p>
                                        <p class="text-xs lg:text-sm font-bold">150 м<sup>2</sup></p>
                                    </div>

                                    <div class="period flex flex-col w-1/2">
                                        <p class="text-xs">Срок реализации</p>
                                        <p class="text-xs lg:text-sm font-bold">1,5 недели</p>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее ⭢</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
