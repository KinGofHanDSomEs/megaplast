@extends('layouts.app.information')

@section('title', 'Остекления и перегородки')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner bg-[#f2f6fb]">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">Остекления и перегородки</h2>
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

                <img src="{{ asset('resources/images/banners/glazed-building.png')  }}" alt="banner" loading="lazy"
                     class="absolute h-full right-0 bottom-0">
            </div>
        </section>

        <section class="guarantees-container mb-5 bg-[#f9fbfd]">
            <div class="container mx-auto w-full px-4 py-3 lg:py-5">
                <div class="guarantees grid grid-cols-4">
                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-5">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 lg:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/transparency.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Прозрачность и свет</h3>
                            <p class="text-xs lg:text-sm">Больше естественного света и визуального пространства</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-5">
                        <svg class="w-10 h-10 lg:w-12 lg:h-12 mr-1 lg:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/security.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col mr-1 sm:mr-3 lg:mr-7">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Надежность и безопасность</h3>
                            <p class="text-xs lg:text-sm">Закаженное стекло, прочные профили и фурнитура</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-5">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 lg:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/layers.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Широкие возможности</h3>
                            <p class="text-xs lg:text-sm">Разнообразие конструкций, профилей и видов отделки</p>
                        </div>
                    </div>

                    <div class="guarantee flex">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 lg:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/setting.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Индивидуальные решения</h3>
                            <p class="text-xs lg:text-sm">Проектируем и изготавливаем перегородки под ваш проект</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="products-container mb-10">
            <div class="container mx-auto px-4">
                <h2 class="text-xl font-bold mb-5">Виды остеклений и перегородок</h2>

                <div class="products grid grid-cols-2 lg:grid-cols-3 gap-5">
                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/products/glazing/1.jpg') }}" alt="glazing 1" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Офисные перегородки</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Легкие и функциональные перегородки для зонирования
                                    рабочих пространств, переговорных и кабинетов.</p>
                            </div>

                            <a href="#"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее
                                →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/products/glazing/2.jpg') }}" alt="glazing 2" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Стационарные перегородки</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Надежные стационарные конструкции с различными
                                    вариантами остекления и отделки.</p>
                            </div>

                            <a href="#"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее
                                →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/products/glazing/3.jpg') }}" alt="glazing 3" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Цельностеклянные перегородки</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Максимум прозрачности и эстетики. Стеклянные
                                    перегородки без вертикальных стоек.</p>
                            </div>

                            <a href="#"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее
                                →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/products/glazing/4.jpg') }}" alt="glazing 4" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Раздвижные</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Экономия пространства и гибкость использования.
                                    Удобные раздвижные системы.</p>
                            </div>

                            <a href="#"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее
                                →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/products/glazing/5.jpg') }}" alt="glazing 5" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Перегородки в стиле Loft</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Алюминиевые перегородки в стиле лофт для современных
                                    интерьеров.</p>
                            </div>

                            <a href="#"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее
                                →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/products/glazing/6.jpg') }}" alt="glazing 6" loading="lazy"
                             class="rounded-t-xl h-2/3 w-full object-cover object-center">

                        <div class="info h-1/3 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs 2xl:text-sm font-bold mb-1">Перегородки с жалюзи</h3>

                                <p class="text-xs 2xl:text-sm mb-1">Встроенные жалюзи между стеклами для регулировки
                                    света и конфиденциальности.</p>
                            </div>

                            <a href="#"
                               class="self-start text-xs 2xl:text-sm font-bold text-[#0a49bf] transition hover:text-blue-600">Подробнее
                                →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-container mb-10">
            <div class="container mx-auto px-4">
                <h2 class="text-xl font-bold mb-5">Конструктивные особенности</h2>

                <div class="features grid grid-cols-5 gap-5">
                    <div class="feature flex flex-col items-center">
                        <svg class="w-12 h-12 lg:w-15 lg:h-15 mb-2 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/square.svg') }}"/>
                        </svg>

                        <h3 class="text-xs xl:text-sm font-bold mb-1 text-center">Алюминиевые профили</h3>
                        <p class="text-xs xl:text-sm text-center">Легкие и прочные системы с различными вариантами
                            отделки</p>
                    </div>

                    <div class="feature flex flex-col items-center">
                        <svg class="w-12 h-12 lg:w-15 lg:h-15 mb-2 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/layers-windows.svg') }}"/>
                        </svg>

                        <h3 class="text-xs xl:text-sm font-bold mb-1 text-center">Типы стекол</h3>
                        <p class="text-xs xl:text-sm text-center">Закаленное, триплекс, матовое, тонированное, с
                            декоративными пленками</p>
                    </div>

                    <div class="feature flex flex-col items-center">
                        <svg class="w-10 h-10 lg:w-13 lg:h-13 mt-2 mb-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/pipette.svg') }}"/>
                        </svg>

                        <h3 class="text-xs xl:text-sm font-bold mb-1 text-center">Цветовые решения</h3>
                        <p class="text-xs xl:text-sm text-center">Порошковая покраска по каталогу RAL, анодирование</p>
                    </div>

                    <div class="feature flex flex-col items-center">
                        <svg class="w-12 h-12 lg:w-15 lg:h-15 mb-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/security.svg') }}"/>
                        </svg>

                        <h3 class="text-xs xl:text-sm font-bold mb-1 text-center">Безопасность</h3>
                        <p class="text-xs xl:text-sm text-center">Использование закаленного стекла и надежной фурнитуры,
                            соответствие ГОСТ</p>
                    </div>

                    <div class="feature flex flex-col items-center">
                        <svg class="w-14 h-14 lg:w-17 lg:h-17 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/waves.svg') }}"/>
                        </svg>

                        <h3 class="text-xs xl:text-sm font-bold mb-1 text-center">Звукоизоляция</h3>
                        <p class="text-xs xl:text-sm text-center">Конструкции с повышенными показателями
                            звукоизоляции</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="help-container mb-5">
            <div class="container mx-auto px-4">
                <div class="help flex justify-between bg-[#f5f7fc] rounded-xl py-7 px-6">
                    <div class="info flex items-center w-4/6 lg:w-4/5">
                        <svg class="w-10 h-10 sm:w-15 sm:h-15 mr-3 sm:mr-5 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/assistant.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-2">Нужна помощь в подборе
                                продукции?</h3>
                            <p class="text-xs lg:text-sm w-5/6">Наши специалисты помогут подобрать оптимальное решение
                                под ваш проект и рассчитают стоимость</p>
                        </div>
                    </div>

                    <a href="#"
                       class="wg-2/6 lg:w-1/5 text-xs xl:text-sm self-center text-center text-white bg-[#0a49bf] transition hover:bg-blue-600 px-3 lg:px-0 py-2 xl:py-4 rounded-lg">Получить
                        консультацию</a>
                </div>
            </div>
        </section>
    </main>
@endsection
