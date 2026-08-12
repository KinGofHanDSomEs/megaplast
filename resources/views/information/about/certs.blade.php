@extends('layouts.app.information')

@section('title', 'Сертификаты')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner bg-[#f2f6fb]">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">Сертификаты</h2>
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

                <img src="{{ asset('resources/images/banners/ural2.jpg')  }}" alt="banner" loading="lazy"
                     class="absolute h-full right-0 bottom-0">
            </div>
        </section>

        <section class="guarantees-container mb-5 bg-[#f9fbfd]">
            <div class="container mx-auto w-full px-4 py-3 lg:py-5">
                <div class="guarantees grid grid-cols-4">
                    <div class="guarantee flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-5 h-5 lg:w-8 lg:h-8 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/security.svg') }}"/>
                        </svg>

                        <p class="text-xs lg:text-sm lg:w-2/3">Соответствие ГОСТ и СНиП</p>
                    </div>

                    <div class="guarantee flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-5 h-5 lg:w-8 lg:h-8 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/medal.svg') }}"/>
                        </svg>

                        <p class="text-xs lg:text-sm lg:w-2/3">Контроль качества на всех этапах</p>
                    </div>

                    <div class="guarantee flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-5 h-5 lg:w-8 lg:h-8 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/document.svg') }}"/>
                        </svg>

                        <p class="text-xs lg:text-sm lg:w-2/3">Сертифицированное производство</p>
                    </div>

                    <div class="guarantee flex items-center">
                        <svg class="w-4.5 h-4.5 lg:w-7.5 lg:h-7.5 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/shield.svg') }}"/>
                        </svg>

                        <p class="text-xs lg:text-sm lg:w-2/3">Гарантия надежности и безопасности</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="certs-container mb-10">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5">Наши сертфикаты</h2>

                <div class="certs grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                    @foreach($certificates as $cert)
                        <div class="cert h-130 flex flex-col px-4 py-3 border border-[#eee] rounded-xl">
                            <div class="image h-4/5 w-full flex justify-center">
                                <img src="{{ asset($cert->url) }}" alt="cert {{ $cert->id }}" loading="lazy"
                                     class="h-full object-cover object-top">
                            </div>

                            <div class="info flex flex-col justify-between mt-3 h-1/5">
                                <div class="text">
                                    <h3 class="text-base font-bold">{{ $cert->name }}</h3>
                                </div>

                                <a href="{{ asset($cert->url) }}" download="{{ $cert->download_filename }}"
                                   class="flex items-center font-bold text-sm text-[#0a49bf]">Скачать
                                    <svg class="w-5 h-5 ml-4">
                                        <use href="{{ asset('resources/images/icons/download.svg') }}"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
