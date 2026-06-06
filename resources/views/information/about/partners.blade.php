@extends('layouts.app')

@section('title', 'Партнеры')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner mb-5 border-b border-[#eee]">
            <div class="container relative min-h-100 lg:min-h-150 mx-auto w-full px-4">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-1 lg:mb-5">Наши партнеры - наша сила</h2>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/2 mb-1 lg:mb-5">Сотрудничаем с ведущими компаниями в сфере строительства, архитектуры и производства. Вместе мы реализуем проекты любой сложности</p>

                    <div class="cards flex text-sm w-2/3 lg:w-1/2">
                        <div class="card flex items-center w-1/3 mr-2 lg:mr-0">
                            <svg class="w-7 h-7 lg:w-10 lg:h-10 mr-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/handshake.svg') }}" />
                            </svg>

                            <p class="text-xs lg:text-sm">Надежное сотрудничество</p>
                        </div>

                        <div class="card flex items-center w-1/3 mr-2 lg:mr-0">
                            <svg class="w-6 h-6 lg:w-9 lg:h-9 mr-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/medal.svg') }}" />
                            </svg>

                            <p class="text-xs lg:text-sm">Проверенные партнеры</p>
                        </div>

                        <div class="card flex items-center w-1/3">
                            <svg class="w-9 h-9 lg:w-12 lg:h-12 mr-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/target.svg') }}" />
                            </svg>

                            <p class="text-xs lg:text-sm">Общие цели - общий результат</p>
                        </div>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/glazed-building.png') }}" alt="windows in row" loading="lazy" class="absolute h-full right-0 object-cover object-right">
            </div>
        </section>

        <section class="partners-container mb-10">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5 text-center">С нами сотрудничают</h2>

                <div class="partners grid grid-cols-2 sm:grid-cols-3 gap-5">
                    @foreach($partners as $partner)
                        <a href="{{ $partner->link_website }}" target="_blank">
                            <img src="{{ asset($partner->url) }}" alt="partner {{ $partner->id }}" loading="lazy" class="partner h-full object-cover object-center">
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="become-partner-container mb-10">
            <div class="container relative mx-auto w-full text-white h-60">
                <div class="info absolute flex justify-between w-full h-full rounded-xl bg-linear-[90deg,#00030d,#00030d,#00030d00,#00030d,#00030d] z-10">
                    <div class="text flex flex-col justify-between ml-9 my-8 w-4/5">
                        <div class="text-group flex flex-col">
                            <h3 class="font-bold text-base lg:text-lg mb-4">Станьте нашим партнером</h3>
                            <p class="text-xs lg:text-sm">Мы открыты к новым проектам и взаимовыгодному сотрудничеству.</p>
                            <p class="text-xs lg:text-sm mb-7">Заполните форму, и наш менеджер свяжется с вами</p>
                        </div>

                        <a href="#" class="text-xs lg:text-sm font-bold bg-[#0a49bf] self-start px-3 lg:px-5 py-2 lg:py-4 rounded-lg flex items-center transition hover:bg-blue-600">Стать партнером <span class="ml-5">→</span></a>
                    </div>

                    <div class="icons flex flex-col justify-center mr-9 my-8 w-1/5">
                        <div class="icon flex items-center mb-5">
                            <div class="icon-container w-12 h-10 border border-white rounded-lg mr-2 flex justify-center items-center">
                                <svg class="w-8 h-6 text-white">
                                    <use href="{{ asset('resources/images/icons/human.svg') }}" />
                                </svg>
                            </div>

                            <p class="text-xs xl:text-sm">Индивидуальный подход к каждому партнеру</p>
                        </div>

                        <div class="icon flex items-center mb-5">
                            <div class="icon-container w-15 lg:w-12 xl:w-10 h-10 border border-white rounded-lg mr-2 flex justify-center items-center">
                                <svg class="w-6 h-6 text-white">
                                    <use href="{{ asset('resources/images/icons/like.svg') }}" />
                                </svg>
                            </div>

                            <p class="text-xs xl:text-sm">Гибкие условия сотрудничества</p>
                        </div>

                        <div class="icon flex items-center">
                            <div class="icon-container w-15 lg:w-12 xl:w-10 h-10 border border-white rounded-lg mr-2 flex justify-center items-center">
                                <svg class="w-6 h-6 text-white">
                                    <use href="{{ asset('resources/images/icons/support.svg') }}" />
                                </svg>
                            </div>

                            <p class="text-xs xl:text-sm">Поддержка на всех этапах проекта</p>
                        </div>
                    </div>
                </div>

                <div class="image absolute flex justify-center items-center top-0 w-full h-full">
                    <img src="{{ asset('resources/images/other/handshake.png') }}" alt="handshake" loading="lazy"
                         class="h-full rounded-xl">
                </div>
            </div>
        </section>
    </main>
@endsection
