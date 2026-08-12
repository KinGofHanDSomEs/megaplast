@extends('layouts.app.information')

@section('title', 'Вакансии')

@vite([
    'resources/js/vacancies.js'
])

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner bg-[#f2f6fb] mb-5">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">Вакансии</h2>
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

        <section class="jobs-container mb-10">
            <div class="container mx-auto w-full px-4">
                <div class="heading flex justify-between items-center mb-5">
                    <h2 class="text-xl font-bold">Открытые вакансии</h2>

                    <div class="col flex flex-col">
                        <p class="text-xs lg:text-sm">Не нашли подходящую вакансию?</p>
                        <a href="#" class="text-xs lg:text-sm transition text-[#0a49bf] hover:text-blue-600">Отправьте
                            нам свое резюме</a>
                    </div>
                </div>

                <div class="jobs flex flex-col">
                    @foreach($jobs as $job)
                        <div
                            class="job flex items-center mb-3 border border-[#eee] rounded-xl p-4 cursor-pointer transition hover:border-[#0a49bf] hover:scale-101 hover:shadow-sm"
                            name="{{ $job->name }}">
                            <div class="heading flex items-center h-full border-r border-[#eee] w-2/5 pr-1 mr-4">
                                <div class="icon border border-[#eee] rounded-lg mr-2 sm:mr-4">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7 m-1.5 sm:m-2 text-[#0a49bf]">
                                        <use href="{{ asset($job->icon_url) }}"/>
                                    </svg>
                                </div>

                                <h3 class="text-xs xl:text-sm font-bold">{{ $job->name }}</h3>
                            </div>

                            <div class="description flex items-center h-full w-3/5">
                                <div class="salary flex flex-col text-sm w-1/3 mr-1">
                                    <h3 class="text-xs xl:text-sm italic">Зар. плата:</h3>
                                    <p class="text-xs xl:text-sm">
                                        @if($job->min_salary !== null)
                                            {{ $job->min_salary }}

                                            @if($job->max_salary !== null)
                                                - {{ $job->max_salary }}
                                            @endif
                                            ₽/мес.
                                        @else
                                            по договоренности
                                        @endif
                                    </p>
                                </div>

                                <div class="experience flex flex-col text-sm w-1/3 mr-1">
                                    <h3 class="text-xs xl:text-sm italic">Опыт работы:</h3>
                                    <p class="text-xs xl:text-sm">@if($job->experience)
                                            {{ $job->experience }}
                                        @else
                                            без опыта
                                        @endif</p>
                                </div>

                                <div class="schedule flex flex-col text-sm w-1/3">
                                    <h3 class="text-xs xl:text-sm italic">График работы:</h3>
                                    <p class="text-xs xl:text-sm">@if($job->schedule)
                                            {{ $job->schedule }}
                                        @else
                                            по договоренности
                                        @endif</p>
                                </div>

                                @if($job->duties !== null)
                                    <div class="duties-container text-sm hidden">
                                        @foreach($job->duties as $duty)
                                            <p>{{ $duty }}</p>
                                        @endforeach
                                    </div>
                                @endif

                                @if($job->requirements !== null)
                                    <div class="requirements-container hidden">
                                        @foreach($job->requirements as $requirement)
                                            <p>{{ $requirement }}</p>
                                        @endforeach
                                    </div>
                                @endif

                                @if($job->conditions !== null)
                                    <div class="conditions-container hidden">
                                        @foreach($job->conditions as $condition)
                                            <p>{{ $condition }}</p>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection


@section('modal')
    <section
        class="modal-more-container transition flex justify-center fixed top-0 left-0 w-screen h-screen bg-[#eeeeeeee] z-50 invisible opacity-0">
        <svg class="w-10 h-10 absolute top-1/50 right-1/100 cursor-pointer text-[#0a49bf] hover:text-blue-600">
            <use href="{{ asset('resources/images/icons/cancel.svg') }}"/>
        </svg>

        <div class="job-body text-sm flex flex-col m-auto w-1/3 p-5 bg-white border border-[#eee] rounded-2xl">

        </div>
    </section>
@endsection
