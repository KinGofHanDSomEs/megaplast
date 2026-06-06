@extends('layouts.app')

@section('title', 'Дилерам')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner mb-5">
            <div class="container relative min-h-100 lg:min-h-150 mx-auto w-full px-4">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-1 lg:mb-5">Партнерство, которое приносит результат</h2>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/3 mb-2 lg:mb-5">Мы ценим надежные партнерские отношения и создаем все условия для взаимного роста и развития бизнеса</p>

                    <div class="buttons flex mb-4 lg:mb-7">
                        <a href="#" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-white font-bold bg-[#0a49bf] rounded-lg mr-3 transition hover:bg-[#1447e6]">Стать дилером</a>
                        <a href="#" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-[#0a49bf] font-bold bg-white border border-[#0a49bf] rounded-lg transition hover:border-blue-600 hover:text-blue-600">Скачать презентацию</a>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/megaplast.webp') }}" alt="megaplast" loading="lazy" class="rounded-br-xl absolute h-full right-0 object-cover object-right">
            </div>
        </section>

        <section class="advantages-container mb-10">
            <div class="container mx-auto w-full px-4 py-4">
                <div class="advantages grid grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="advantage flex items-center border-r border-[#eee] pr-2">
                        <svg class="w-12 h-12 lg:w-15 lg:h-15 text-[#0a49bf] mr-3">
                            <use href="{{ asset('resources/images/icons/medal.svg') }}" />
                        </svg>

                        <div class="info flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Надежность</h3>
                            <p class="text-xs lg:text-sm">Более 10 лет на рынке стекольной продукции и безупречная репутация</p>
                        </div>
                    </div>

                    <div class="advantage flex items-center lg:border-r lg:border-[#eee] pr-2">
                        <svg class="w-12 h-12 lg:w-15 lg:h-15 text-[#0a49bf] mr-3">
                            <use href="{{ asset('resources/images/icons/box.svg') }}" />
                        </svg>

                        <div class="info flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Широкий ассортимент</h3>
                            <p class="text-xs lg:text-sm">Всe для производства и монтажа конструкций из стекла и стеклопакетовп</p>
                        </div>
                    </div>

                    <div class="advantage flex items-center border-r border-[#eee] pr-2">
                        <svg class="w-12 h-12 lg:w-15 lg:h-15 text-[#0a49bf] mr-3">
                            <use href="{{ asset('resources/images/icons/delivery.svg') }}" />
                        </svg>

                        <div class="info flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Своевременные поставки</h3>
                            <p class="text-xs lg:text-sm">Собственное производство и логистика по всей территории России</p>
                        </div>
                    </div>

                    <div class="advantage flex items-center pr-2">
                        <svg class="w-9 h-9 lg:w-11 lg:h-11 text-[#0a49bf] mr-3">
                            <use href="{{ asset('resources/images/icons/security.svg') }}" />
                        </svg>

                        <div class="info flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Гарантия качества</h3>
                            <p class="text-xs lg:text-sm">Соответствие ГОСТ и международным стандартам</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="benefits-container mb-10">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5 text-center">Что вы получаете</h2>

                <div class="benefits grid grid-cols-2 lg:grid-cols-3 gap-5">
                     <div class="benefit flex border border-[#eee] rounded-xl px-4 py-3">
                         <svg class="w-15 h-15 text-[#0a49bf] mr-5">
                             <use href="{{ asset('resources/images/icons/discount.svg') }}" />
                         </svg>

                         <div class="info flex flex-col">
                             <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-1 sm:mb-2">Выгодные условия</h3>
                             <p class="text-xs lg:text-sm">Гибкая система скидок и индивидуальный подход к каждому партнёру</p>
                         </div>
                     </div>

                    <div class="benefit flex border border-[#eee] rounded-xl px-4 py-3">
                        <svg class="w-15 h-15 text-[#0a49bf] mr-5">
                            <use href="{{ asset('resources/images/icons/statistics.svg') }}" />
                        </svg>

                        <div class="info flex flex-col">
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-1 sm:mb-2">Маркетинговая поддержка</h3>
                            <p class="text-xs lg:text-sm">Рекламные материалы, поддержка в продвижении и совместных маркетинговых активностях</p>
                        </div>
                    </div>

                    <div class="benefit flex border border-[#eee] rounded-xl px-4 py-3">
                        <svg class="w-15 h-15 text-[#0a49bf] mr-5">
                            <use href="{{ asset('resources/images/icons/education-hat.svg') }}" />
                        </svg>

                        <div class="info flex flex-col">
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-1 sm:mb-2">Обучение</h3>
                            <p class="text-xs lg:text-sm">Обучаем продукцим и технологиям, консультируем по техническим вопросам</p>
                        </div>
                    </div>

                    <div class="benefit flex border border-[#eee] rounded-xl px-4 py-3">
                        <svg class="w-15 h-15 text-[#0a49bf] mr-5">
                            <use href="{{ asset('resources/images/icons/notepad-with-start.svg') }}" />
                        </svg>

                        <div class="info flex flex-col">
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-1 sm:mb-2">Приоритет в поставках</h3>
                            <p class="text-xs lg:text-sm">Дилеры получают приоритет при планировании производства и поставок</p>
                        </div>
                    </div>

                    <div class="benefit flex border border-[#eee] rounded-xl px-4 py-3">
                        <svg class="w-12 h-12 text-[#0a49bf] mr-3.5">
                            <use href="{{ asset('resources/images/icons/box.svg') }}" />
                        </svg>

                        <div class="info flex flex-col">
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-1 sm:mb-2">Расширение ассортимента</h3>
                            <p class="text-xs lg:text-sm">Постоянное обновление продукции и доступ к новинкам первыми</p>
                        </div>
                    </div>

                    <div class="benefit flex border border-[#eee] rounded-xl px-4 py-3">
                        <svg class="w-10 h-12 text-[#0a49bf] mr-5">
                            <use href="{{ asset('resources/images/icons/human.svg') }}" />
                        </svg>

                        <div class="info flex flex-col">
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-1 sm:mb-2">Личный менеджер</h3>
                            <p class="text-xs lg:text-sm">Персональный менеджер на всех этапах сотрудничества</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="become-dealer-container mb-10">
            <div class="container mx-auto w-full px-4">
                <h2 class="text-xl font-bold mb-5">Как стать нашим дилером</h2>

                <div class="become-dealer grid grid-cols-4">
                    <div class="1 flex flex-col items-center mr-5">
                        <div class="icon relative border border-[#eee] rounded-full mb-2 after:hidden md:after:inline after:absolute after:top-1/2 after:left-6/5 after:w-23 lg:after:w-33 xl:after:w-48 2xl:after:w-63 after:border-b  after:border-dashed after:border-[#0a49bf]">
                            <svg class="w-8 h-8 lg:w-10 lg:h-10 xl:w-12 xl:h-12 m-3 sm:m-4 lg:m-5 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/notepad-with-pen.svg') }}" />
                            </svg>
                        </div>

                        <div class="text flex flex-col lg:w-4/5 xl:w-2/3">
                            <p class="text-[#0a49bf] font-bold text-sm sm:text-base lg:text-lg mb-0.5 md:mb-1">01</p>
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold">Оставьте заявку</h3>
                            <h3 class="text-xs lg:text-sm">Заполните короткую форму или свяжитесь с нами удобным способом</h3>
                        </div>
                    </div>

                    <div class="2 flex flex-col items-center mr-5">
                        <div class="icon relative border border-[#eee] rounded-full mb-2 after:hidden md:after:inline after:absolute after:top-1/2 after:left-6/5 after:w-23 lg:after:w-33 xl:after:w-47 2xl:after:w-63 after:border-b  after:border-dashed after:border-[#0a49bf]">
                            <svg class="w-8 h-8 lg:w-10 lg:h-10 xl:w-12 xl:h-12 m-3 sm:m-4 lg:m-5 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/people.svg') }}" />
                            </svg>
                        </div>

                        <div class="text flex flex-col lg:w-4/5 xl:w-2/3">
                            <p class="text-[#0a49bf] font-bold text-sm sm:text-base lg:text-lg mb-0.5 md:mb-1">02</p>
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold">Обсудим условия</h3>
                            <h3 class="text-xs lg:text-sm">Мы свяжемся с вами, чтобы обсудить детали сотрудничества</h3>
                        </div>
                    </div>

                    <div class="3 flex flex-col items-center mr-5">
                        <div class="icon relative border border-[#eee] rounded-full mb-2 after:hidden md:after:inline after:absolute after:top-1/2 after:left-6/5 after:w-23 lg:after:w-33 xl:after:w-47 2xl:after:w-63 after:border-b  after:border-dashed after:border-[#0a49bf]">
                            <svg class="w-8 h-8 lg:w-10 lg:h-10 xl:w-12 xl:h-12 m-3 sm:m-4 lg:m-5 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/signed-document.svg') }}" />
                            </svg>
                        </div>

                        <div class="text flex flex-col lg:w-4/5 xl:w-2/3">
                            <p class="text-[#0a49bf] font-bold text-sm sm:text-base lg:text-lg mb-0.5 md:mb-1">03</p>
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold">Подпишем договор</h3>
                            <h3 class="text-xs lg:text-sm">Заключаем договор и согласовываем индивидуальные условия</h3>
                        </div>
                    </div>

                    <div class="4 flex flex-col items-center mr-5">
                        <div class="icon border border-[#eee] rounded-full mb-2">
                            <svg class="w-8 h-8 lg:w-10 lg:h-10 xl:w-12 xl:h-12 m-3 sm:m-4 lg:m-5 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/delivery.svg') }}" />
                            </svg>
                        </div>

                        <div class="text flex flex-col lg:w-4/5 xl:w-2/3">
                            <p class="text-[#0a49bf] font-bold text-sm sm:text-base lg:text-lg mb-0.5 md:mb-1">04</p>
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold">Начнём работу</h3>
                            <h3 class="text-xs lg:text-sm">Вы получаете доступ к продукции, материалам и поддержке на всех этапах</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="become-dealer-order-container mb-10">
            <div class="container relative mx-auto w-full text-white h-30">
                <div class="info absolute flex justify-between w-full h-full rounded-xl bg-linear-[90deg,#989494,#989494,#989494fa,#98949400,#989494fa,#989494,#989494] z-10">
                    <div class="text flex flex-col ml-9 my-8 w-6/7">
                        <h3 class="font-bold text-base lg:text-lg mb-2">Давайте развивать ваш бизнес вместе!</h3>
                        <p class="text-xs lg:text-sm">Оставьте заявку и узнайте больше о партнёрской программе и специальных условиях для дилеров.</p>
                    </div>

                    <a href="#" class="self-center text-center font-bold text-xs sm:text-sm lg:text-base text-[#0a49bf] bg-white rounded-lg py-3 px-2 w-1/7 mr-9 my-8 transition hover:bg-blue-600 hover:text-white">Оставить заявку</a>
                </div>

                <div class="image absolute overflow-hidden flex justify-center items-center top-0 w-full h-full">
                    <img src="{{ asset('resources/images/other/windows.jpg') }}" alt="handshake" loading="lazy"
                         class="h-4/1 rounded-xl">
                </div>
            </div>
        </section>
    </main>
@endsection
