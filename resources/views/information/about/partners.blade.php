@extends('layouts.app.information')

@section('title', 'Партнеры')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner bg-[#f2f6fb] mb-5">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">Партнеры</h2>
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

        <section class="partners-container mb-10">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5 text-center">С нами сотрудничают</h2>

                <div class="partners grid grid-cols-2 sm:grid-cols-3 gap-5">
                    @foreach($partners as $partner)
                        <a href="{{ $partner->link }}" target="_blank">
                            <img src="{{ asset($partner->image_url) }}" alt="partner {{ $partner->id }}" loading="lazy"
                                 class="partner h-full object-cover object-center">
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="become-partner-container mb-10">
            <div class="container relative mx-auto w-full text-white h-60">
                <div
                    class="info absolute flex justify-between w-full h-full rounded-xl bg-linear-[90deg,#00030d,#00030d,#00030d00,#00030d,#00030d] z-10">
                    <div class="text flex flex-col justify-between ml-9 my-8 w-4/5">
                        <div class="text-group flex flex-col">
                            <h3 class="font-bold text-base lg:text-lg mb-4">Станьте нашим партнером</h3>
                            <p class="text-xs lg:text-sm">Мы открыты к новым проектам и взаимовыгодному
                                сотрудничеству.</p>
                            <p class="text-xs lg:text-sm mb-7">Заполните форму, и наш менеджер свяжется с вами</p>
                        </div>

                        <a href="#"
                           class="text-xs lg:text-sm font-bold bg-[#0a49bf] self-start px-3 lg:px-5 py-2 lg:py-4 rounded-lg flex items-center transition hover:bg-blue-600">Стать
                            партнером <span class="ml-5">→</span></a>
                    </div>

                    <div class="icons flex flex-col justify-center mr-9 my-8 w-1/5">
                        <div class="icon flex items-center mb-5">
                            <div
                                class="icon-container w-12 h-10 border border-white rounded-lg mr-2 flex justify-center items-center">
                                <svg class="w-8 h-6 text-white">
                                    <use href="{{ asset('resources/images/icons/human.svg') }}"/>
                                </svg>
                            </div>

                            <p class="text-xs xl:text-sm">Индивидуальный подход к каждому партнеру</p>
                        </div>

                        <div class="icon flex items-center mb-5">
                            <div
                                class="icon-container w-15 lg:w-12 xl:w-10 h-10 border border-white rounded-lg mr-2 flex justify-center items-center">
                                <svg class="w-6 h-6 text-white">
                                    <use href="{{ asset('resources/images/icons/like.svg') }}"/>
                                </svg>
                            </div>

                            <p class="text-xs xl:text-sm">Гибкие условия сотрудничества</p>
                        </div>

                        <div class="icon flex items-center">
                            <div
                                class="icon-container w-15 lg:w-12 xl:w-10 h-10 border border-white rounded-lg mr-2 flex justify-center items-center">
                                <svg class="w-6 h-6 text-white">
                                    <use href="{{ asset('resources/images/icons/support.svg') }}"/>
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
