@extends('layouts.app.information')

@section('title', 'Проекты')

@vite([
    'resources/js/about/projects.js',
])

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner bg-[#f2f6fb]">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">Проекты</h2>
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

                <img src="{{ asset('resources/images/banners/ural.jpg')  }}" alt="banner" loading="lazy"
                     class="absolute h-full right-0 bottom-0">
            </div>
        </section>

        <section class="projects-type-container mb-5 bg-[#f9fbfd]">
            <div class="container mx-auto w-full px-4 py-3 lg:py-5">
                <div class="projects-type grid grid-cols-5 gap-3 lg:gap-7">
                    <div id="all-projects"
                         class="project-type border border-[#0a49bf] bg-[#0a49bf] text-white rounded-xl px-1 py-0 sm:py-1 lg:py-3 w-full flex justify-center items-center cursor-pointer transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">
                        <h3 class="text-xs xl:text-sm font-bold text-center">Все проекты</h3>
                    </div>

                    <div id="residential-complexes"
                         class="project-type border border-[#eee] rounded-xl px-1 py-0 sm:py-1 lg:py-3 w-full flex justify-center items-center cursor-pointer transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">
                        <h3 class="text-xs xl:text-sm font-bold text-center">Жилые комплексы</h3>
                    </div>

                    <div id="business-centers"
                         class="project-type border border-[#eee] rounded-xl px-1 py-0 sm:py-1 lg:py-3 w-full flex justify-center items-center cursor-pointer transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">
                        <h3 class="text-xs xl:text-sm font-bold text-center">Бизнес-центры</h3>
                    </div>

                    <div id="shopping-malls"
                         class="project-type border border-[#eee] rounded-xl px-1 py-0 sm:py-1 lg:py-3 w-full flex justify-center items-center cursor-pointer transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">
                        <h3 class="text-xs xl:text-sm font-bold text-center">Торговые центры</h3>
                    </div>

                    <div id="public-buildings"
                         class="project-type border border-[#eee] rounded-xl px-1 py-0 sm:py-1 lg:py-3 w-full flex justify-center items-center cursor-pointer transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">
                        <h3 class="text-xs xl:text-sm font-bold text-center">Общественные здания</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects-container mb-10">
            <div class="container mx-auto w-full px-4">
                <div class="projects grid grid-cols-2 xl:grid-cols-3 gap-5">
                    @foreach($projects as $project)
                        <div type="{{ $project->type }}"
                             class="project h-130 flex flex-col border border-[#eee] rounded-xl">
                            <div class="images h-2/3 relative flex">
                                @for($i = 0; $i < count($project->images_url); $i++)
                                    <img src="{{ asset($project->images_url[$i]) }}" alt="project" loading="lazy"
                                         class="image absolute @if($i !== 0) invisible opacity-0 @endif transition duration-300 h-full rounded-t-xl object-cover object-top">
                                @endfor

                                @switch(count($project->images_url))
                                    @case(2)
                                        <div class="bars absolute w-full bottom-3 flex justify-center">
                                            <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                            <div class="bar h-1 w-10 bg-gray-400 mr-2 rounded-r-lg"></div>
                                        </div>
                                        @break
                                    @case(3)
                                        <div class="bars absolute w-full bottom-3 flex justify-center">
                                            <div class="bar h-1 w-10 bg-white mr-2 rounded-l-lg"></div>
                                            <div class="bar h-1 w-10 bg-gray-400 mr-2"></div>
                                            <div class="bar h-1 w-10 bg-gray-400 mr-2 rounded-r-lg"></div>
                                        </div>
                                        @break
                                @endswitch
                            </div>

                            <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                                <div class="text flex flex-col">
                                    <h3 class="text-sm lg:text-base font-bold mb-1">{{ $project->name }}</h3>

                                    <div class="row flex justify-between mb-2 md:mb-6">
                                        <div class="address flex items-center w-3/5">
                                            <svg class="w-4 h-4 mr-1 text-[#0a49bf]">
                                                <use href="{{ asset('resources/images/icons/mark.svg')  }}"/>
                                            </svg>

                                            <p class="text-xs mr-1 text-wrap">{{ $project->address }}</p>
                                        </div>

                                        <p class="type text-xs w-2/5 self-center text-[#0a49bf] bg-blue-100 rounded-lg px-1 py-0.5 text-center">
                                            @switch($project->type)
                                                @case('public-buildings') Общественные здания @break
                                                @case('shopping-malls') Торговые центры @break
                                                @case('business-centers') Бизнес-центры @break
                                                @case('residential-complexes') Жилые комплексы @break
                                            @endswitch
                                        </p>
                                    </div>

                                    <div class="sizes flex">
                                        <div class="square flex flex-col w-1/2">
                                            <p class="text-xs">Площадь остекления</p>
                                            <p class="text-xs lg:text-sm font-bold">{{$project->square  }} м<sup>2</sup>
                                            </p>
                                        </div>

                                        <div class="period flex flex-col w-1/2">
                                            <p class="text-xs">Срок реализации</p>
                                            <p class="text-xs lg:text-sm font-bold">{{ $project->period }}</p>
                                        </div>
                                    </div>
                                </div>


                                <a href="https://yandex.ru/maps?text={{ $project->address }}" target="_blank"
                                   class="text-xs lg:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее
                                    ⭢</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
