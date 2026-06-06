@extends('layouts.app')

@section('title', 'Вакансии')

@vite([
    'resources/js/vacancies.js'
])

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner mb-5 border-b border-[#eee]">
            <div class="container relative min-h-100 lg:min-h-150 mx-auto w-full px-4">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-1 lg:mb-5">Вакансии</h2>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/3 mb-2 lg:mb-5">Мы постоянно развиваемся и ищем профессионалов, готовых расти и достигать вместе с нами</p>

                    <div class="cards flex flex-col text-sm">
                        <div class="card flex items-center mb-3 w-1/2">
                            <div class="icon flex justify-center items-center border border-[#eee] p-2 mr-3 rounded-lg copy cursor-copy" content="+7 (34783) 7-00-11">
                                <svg class="w-4 h-4 lg:w-6 lg:h-6 xl:w-8 xl:h-8 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/people.svg') }}" />
                                </svg>
                            </div>

                            <p class="text-xs xl:text-sm w-3/4 xl:w-2/5">Стабильная компания с более чем 10-летним опытом</p>
                        </div>

                        <div class="card flex items-center mb-3 w-1/2">
                            <div class="icon flex justify-center items-center border border-[#eee] p-2 mr-3 rounded-lg copy cursor-copy" content="+7 (34783) 7-00-11">
                                <svg class="w-4 h-4 lg:w-6 lg:h-6 xl:w-8 xl:h-8 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/increase.svg') }}" />
                                </svg>
                            </div>

                            <p class="text-xs xl:text-sm w-3/4 xl:w-2/5">Возможности для роста и профессионального развития</p>
                        </div>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/megaplast.webp') }}" alt="megaplast" loading="lazy" class="absolute h-full right-0 object-cover object-right">
            </div>
        </section>

        <section class="vacancies-container mb-10">
            <div class="container mx-auto w-full px-4">
                <div class="heading flex justify-between items-center mb-5">
                    <h2 class="text-xl font-bold">Открытые вакансии</h2>

                    <div class="col flex flex-col">
                        <p class="text-xs lg:text-sm">Не нашли подходящую вакансию?</p>
                        <a href="#" class="text-xs lg:text-sm transition text-[#0a49bf] hover:text-blue-600">Отправьте нам свое резюме</a>
                    </div>
                </div>

                <div class="vacancies flex flex-col">
                    @foreach($vacancies as $vacancy)
                        <div class="vacancy flex items-center mb-3 border border-[#eee] rounded-xl p-4">
                            <div class="heading flex items-center h-full border-r border-[#eee] w-1/2 pr-1 mr-4">
                                <div class="icon border border-[#eee] rounded-lg mr-2 sm:mr-4">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7 m-1.5 sm:m-2 text-[#0a49bf]">
                                        <use href="{{ asset($vacancy->icon_url) }}" />
                                    </svg>
                                </div>

                                <h3 class="text-xs xl:text-sm font-bold">{{ $vacancy->name }}</h3>
                            </div>

                            <div class="description flex items-center justify-end h-full w-1/2">
                                <div class="work-experience flex flex-col text-sm w-2/6 mr-1">
                                    <h3 class="text-xs xl:text-sm">Опыт работы</h3>
                                    <p class="text-xs xl:text-sm">@if($vacancy->experience) {{ $vacancy->experience }} @else без опыта @endif</p>
                                </div>

                                <div class="work-schedule flex flex-col text-sm w-3/6">
                                    <h3 class="text-xs xl:text-sm">График работы</h3>
                                    <p class="text-xs xl:text-sm">@if($vacancy->schedule) {{ $vacancy->schedule }} @else по договоренности @endif</p>
                                </div>

                                <div class="more-btn w-1/6 flex justify-end items-center">
                                    <button class="cursor-pointer hidden lg:inline text-xs xl:text-sm font-bold text-[#0a49bf] px-2 py-2 rounded-lg border border-[#0a49bf] transition hover:bg-blue-600 hover:border-blue-600 hover:text-white">Подробнее<span class="hidden 2xl:inline"> →</span></button>

                                    <svg class="cursor-pointer w-7 h-7 lg:hidden">
                                        <use href="{{ asset('resources/images/icons/more.svg') }}" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection


@section('modal')
    <section class="modal-more-container transition fixed top-0 left-0 w-screen h-screen bg-[#eeeeeeee] z-50 invisible opacity-0">
        <svg class="w-10 h-10 absolute top-1/50 right-1/100 cursor-pointer text-[#0a49bf] hover:text-blue-600">
            <use href="{{ asset('resources/images/icons/cancel.svg') }}" />
        </svg>

        <div class="vacancy-container">

        </div>
    </section>
@endsection
