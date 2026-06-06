@extends('layouts.app')

@section('title', 'Сертификаты')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner">
            <div class="container relative min-h-100 lg:min-h-150 mx-auto w-full px-4">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-1 lg:mb-5">Сертификаты</h2>
                    <p class="text-sm lg:text-base text-gray-500 w-1/2 mb-2 lg:mb-5">Качество и безопасность нашей продукции подтверждены всеми необходимыми сертификатами и соответствуют действующим стандартам</p>
                </div>

                <img src="{{ asset('resources/images/banner/windows-in-row.png') }}" alt="windows in row" loading="lazy" class="absolute h-full right-0 object-cover object-right">
            </div>
        </section>

        <section class="guarantees-container mb-5 bg-[#f9fbfd]">
            <div class="container mx-auto w-full px-4 py-3 lg:py-5">
                <div class="guarantees grid grid-cols-4">
                    <div class="guarantee flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-5 h-5 lg:w-8 lg:h-8 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/security.svg') }}" />
                        </svg>

                        <p class="text-xs lg:text-sm lg:w-2/3">Соответствие ГОСТ и СНиП</p>
                    </div>

                    <div class="guarantee flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-5 h-5 lg:w-8 lg:h-8 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/medal.svg') }}" />
                        </svg>

                        <p class="text-xs lg:text-sm lg:w-2/3">Контроль качества на всех этапах</p>
                    </div>

                    <div class="guarantee flex items-center sm:border-r sm:border-[#eee] mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-5 h-5 lg:w-8 lg:h-8 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/document.svg') }}" />
                        </svg>

                        <p class="text-xs lg:text-sm lg:w-2/3">Сертифицированное производство</p>
                    </div>

                    <div class="guarantee flex items-center">
                        <svg class="w-4.5 h-4.5 lg:w-7.5 lg:h-7.5 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/shield.svg') }}" />
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
                    @foreach($certs as $cert)
                        <div class="cert h-130 flex flex-col px-4 py-3 border border-[#eee] rounded-xl">
                            <div class="image h-4/5 w-full flex justify-center">
                                <img src="{{ asset($cert->url) }}" alt="cert {{ $cert->id }}" loading="lazy" class="h-full object-cover object-top">
                            </div>

                            <div class="info flex flex-col justify-between mt-3 h-1/5">
                                <div class="text">
                                    <h3 class="text-base font-bold">{{ $cert->name }}</h3>
                                </div>

                                <a href="{{ asset($cert->url) }}" download="{{ $cert->download_filename }}" class="flex items-center font-bold text-sm text-[#0a49bf]">Скачать
                                    <svg class="w-5 h-5 ml-4">
                                        <use href="{{ asset('resources/images/icons/download.svg') }}" />
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
