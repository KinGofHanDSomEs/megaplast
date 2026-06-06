@extends('layouts.app')

@section('title', 'Пластиковые окна и двери')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner">
            <div class="container relative min-h-100 lg:min-h-150 mx-auto w-full px-4">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-1 lg:mb-5">Пластиковые окна и двери</h2>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/3 mb-2 lg:mb-5">Современные оконные и дверные системы из ПВХ профиля. Тепло, тишина и комфорт в вашем доме или офисе.</p>

                    <div class="buttons flex mb-4 lg:mb-7">
                        <a href="#" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-white font-bold bg-[#0a49bf] rounded-lg mr-3 transition hover:bg-[#1447e6]">Рассчитать стоимость</a>
                        <a href="#" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-[#0a49bf] font-bold bg-white border border-[#0a49bf] rounded-lg transition hover:border-blue-600 hover:text-blue-600">Каталог решений</a>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/megaplast.webp') }}" alt="megaplast" loading="lazy" class="absolute h-full right-0 object-cover object-right">
            </div>
        </section>

        <section class="guarantees-container mb-5 bg-[#f9fbfd]">
            <div class="container mx-auto w-full px-4 py-3 lg:py-5">
                <div class="guarantees grid grid-cols-4">
                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-5">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 lg:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/security.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Тепло и тишина</h3>
                            <p class="text-xs lg:text-sm">Высокая теплоизоляция и защита от шума</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-5">
                        <svg class="w-10 h-10 lg:w-12 lg:h-12 mr-1 lg:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/reliability.svg') }}" />
                        </svg>

                        <div class="col flex flex-col mr-1 sm:mr-3 lg:mr-7">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Надежность и долговечность</h3>
                            <p class="text-xs lg:text-sm">Качественные материалы и фурнитура</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-5">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 lg:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/leaf.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Экологичность</h3>
                            <p class="text-xs lg:text-sm">Безопасные профили без свинца</p>
                        </div>
                    </div>

                    <div class="guarantee flex">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 lg:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/palette.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Эстетика и стиль</h3>
                            <p class="text-xs lg:text-sm">Широкий выбор цветов и форм</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="types-container mb-10">
            <div class="container mx-auto px-4">
                <h2 class="text-xl font-bold mb-5">Виды окон и дверей</h2>

                <div class="types grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                    <div class="type h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/projects/ural/ural.jpg/') }}" alt="ural" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Поворотные окна</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Классический вариант открывания. Надежные и удобные в использовании.</p>
                            </div>

                            <a href="#" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее →</a>
                        </div>
                    </div>

                    <div class="type h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/projects/ural/ural.jpg/') }}" alt="ural" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Поворотно-откидные окна</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Функциональность и конфорт. Проветривание без сквозняков.</p>
                            </div>

                            <a href="#" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее →</a>
                        </div>
                    </div>

                    <div class="type h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/projects/ural/ural.jpg/') }}" alt="ural" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Раздвижные окна и двери</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Идеальны для балконов и лоджий Экономия пространства и легкость использования.</p>
                            </div>

                            <a href="#" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее →</a>
                        </div>
                    </div>

                    <div class="type h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/projects/ural/ural.jpg/') }}" alt="ural" loading="lazy" class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Входные ПВХ двери</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Прочные и теплые двери для частных домов и офисов.</p>
                            </div>

                            <a href="#" class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-container mb-10">
            <div class="container mx-auto px-4">
                <h2 class="text-xl font-bold mb-5">Преимущества наших окон и дверей</h2>

                <div class="features grid grid-cols-5 gap-3">
                    <div class="feature flex">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-2 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/temperature.svg') }}" />
                        </svg>

                        <div class="text flex flex-col">
                            <h3 class="text-xs xl:text-sm font-bold mb-1">Высокая теплоизоляция</h3>
                            <p class="text-xs xl:text-sm">Снижение затрат на отопление</p>
                        </div>
                    </div>

                    <div class="feature flex">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-2 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/sound.svg') }}" />
                        </svg>

                        <div class="text flex flex-col">
                            <h3 class="text-xs xl:text-sm font-bold mb-1">Защита от шума</h3>
                            <p class="text-xs xl:text-sm">Комфорт и тишина в вашем доме</p>
                        </div>
                    </div>

                    <div class="feature flex">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-2 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/security.svg') }}" />
                        </svg>

                        <div class="text flex flex-col">
                            <h3 class="text-xs xl:text-sm font-bold mb-1">Безопасность</h3>
                            <p class="text-xs xl:text-sm">Надежная фурнитура и замки</p>
                        </div>
                    </div>

                    <div class="feature flex">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-2 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/brush.svg') }}" />
                        </svg>

                        <div class="text flex flex-col">
                            <h3 class="text-xs xl:text-sm font-bold mb-1">Легкий уход</h3>
                            <p class="text-xs xl:text-sm">Гладкая поверхность, устойчивая к загрязнениям</p>
                        </div>
                    </div>

                    <div class="feature flex">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-2 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/medal.svg') }}" />
                        </svg>

                        <div class="text flex flex-col">
                            <h3 class="text-xs xl:text-sm font-bold mb-1">Гарантия качества</h3>
                            <p class="text-xs xl:text-sm">Официальная гарантия до 5 лет</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="help-container mb-5">
            <div class="container mx-auto px-4">
                <div class="help flex justify-between bg-[#f5f7fc] rounded-xl py-7 px-6">
                    <div class="info flex items-center w-4/6 lg:w-4/5">
                        <svg class="w-10 h-10 sm:w-15 sm:h-15 mr-3 sm:mr-5 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/assistant.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-2">Нужна помощь в подборе продукции?</h3>
                            <p class="text-xs lg:text-sm w-5/6">Наши специалисты помогут подобрать оптимальное решение под ваш проект и рассчитают стоимость</p>
                        </div>
                    </div>

                    <a href="#" class="wg-2/6 lg:w-1/5 text-xs xl:text-sm self-center text-center text-white bg-[#0a49bf] transition hover:bg-blue-600 px-3 lg:px-0 py-2 xl:py-4 rounded-lg">Получить консультацию</a>
                </div>
            </div>
        </section>
    </main>
@endsection
