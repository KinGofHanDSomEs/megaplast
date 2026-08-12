@extends('layouts.app.information')

@section('main')
    <main class="flex-1 bg-white">
        <section class="banner bg-[#f2f6fb] mb-5">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">Завод окон и дверей «МЕГАПЛАСТ»</h2>
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

        <section class="products-container mb-10">
            <div class="container mx-auto px-4 relative">
                <h2 class="text-xl font-bold text-center mb-5">Наша продукция</h2>

                <div class="products grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                    <div class="product h-85 sm:h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/products/aluminium/1.jpg') }}" alt="aluminium door"
                             loading="lazy" class="rounded-t-xl h-1/2 w-full object-cover object-center">

                        <div class="info h-1/2 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs xl:text-sm font-bold mb-1">Алюминиевые двери и витражи</h3>

                                <p class="text-xs xl:text-sm mb-1">Окна из алюминиевых профилей экологичны, не выделяет
                                    никаких вредных примесей в течение всего срока эксплуатации</p>
                            </div>

                            <a href="{{ route('information.production.products.aluminum') }}"
                               class="self-start text-sm text-[#0a49bf] transition hover:text-blue-600">Подронее →</a>
                        </div>
                    </div>

                    <div class="product h-85 sm:h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/production/parts/beads.png') }}" alt="parts" loading="lazy"
                             class="rounded-t-xl h-1/2 w-full object-cover object-center">

                        <div class="info h-1/2 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs xl:text-sm font-bold mb-1">Комплектующие</h3>

                                <p class="text-xs xl:text-sm mb-1">Компания «Мегапласт» оснащает свои изделия всеми
                                    возможными комплектующими</p>
                            </div>

                            <a href="{{ route('information.production.products.parts') }}" class="text-sm text-[#0a49bf]">Подронее
                                →</a>
                        </div>
                    </div>

                    <div class="product h-85 sm:h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/products/solution.jpg') }}" alt="solution" loading="lazy"
                             class="rounded-t-xl h-1/2 w-full object-cover object-center">

                        <div class="info h-1/2 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs xl:text-sm font-bold mb-1">Нестандартные решения</h3>

                                <p class="text-xs xl:text-sm mb-1">Окно практически любой формы мы сможем наделить
                                    функциональностью и удобством по последнему слову оконных технологий</p>
                            </div>

                            <a href="{{ route('information.production.products.solution') }}"
                               class="self-start text-sm text-[#0a49bf] transition hover:text-blue-600">Подронее →</a>
                        </div>
                    </div>

                    <div class="product h-85 sm:h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/products/glazing.jpg') }}" alt="glazing" loading="lazy"
                             class="rounded-t-xl h-1/2 w-full object-cover object-center">

                        <div class="info h-1/2 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs xl:text-sm font-bold mb-1">Остекления и перегородки</h3>

                                <p class="text-xs xl:text-sm mb-1">Добиться уюта и тепла на Вашем балконе поможет
                                    остекление производства компании «Мегапласт»</p>
                            </div>

                            <a href="{{ route('information.production.products.glazing') }}"
                               class="self-start text-sm text-[#0a49bf] transition hover:text-blue-600">Подронее →</a>
                        </div>
                    </div>

                    <div class="product h-85 sm:h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/products/plastic.jpg') }}" alt="plastic" loading="lazy"
                             class="rounded-t-xl h-1/2 w-full object-cover object-center">

                        <div class="info h-1/2 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs xl:text-sm font-bold mb-1">Пластиковые окна и двери</h3>

                                <p class="text-xs xl:text-sm mb-1">Окна компании «Мегапласт» это возможность предать
                                    Вашему дому свой собственный стиль</p>
                            </div>

                            <a href="{{ route('information.production.products.plastic') }}"
                               class="self-start text-sm text-[#0a49bf] transition hover:text-blue-600">Подронее →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="advantages-container mb-10">
            <div class="container mx-auto w-full pl-4 flex justify-between">
                <div class="left w-1/3">
                    <h2 class="text-xl font-bold mb-5">Почему выбирают нас?</h2>

                    <div class="advantages">
                        <div class="advantage flex items-center mb-4">
                            <div class="icon border border-[#eee] rounded-xl flex justify-center items-center mr-2">
                                <svg class="w-6 h-6 m-2 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/setting.svg') }}"/>
                                </svg>
                            </div>

                            <div class="col flex flex-col">
                                <h3 class="text-sm font-bold mb-1">Современное оборудование</h3>
                                <p class="text-xs">Используем передовые технологии для идеального результата</p>
                            </div>
                        </div>

                        <div class="advantage flex items-center mb-4">
                            <div class="icon border border-[#eee] rounded-xl flex justify-center items-center mr-2">
                                <svg class="w-6 h-6 m-2 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/security.svg') }}"/>
                                </svg>
                            </div>

                            <div class="col flex flex-col">
                                <h3 class="text-sm font-bold mb-1">Гарантия качества</h3>
                                <p class="text-xs">Строгий контроль на всех этапах производства</p>
                            </div>
                        </div>

                        <div class="advantage flex items-center mb-4">
                            <div class="icon border border-[#eee] rounded-xl flex justify-center items-center mr-2">
                                <svg class="w-6 h-6 m-2 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/pen.svg') }}"/>
                                </svg>
                            </div>

                            <div class="col flex flex-col">
                                <h3 class="text-sm font-bold mb-1">Изготовление по вашим размерам</h3>
                                <p class="text-xs">Выполним заказ любой сложности по индивидуальным размерам</p>
                            </div>
                        </div>

                        <div class="advantage flex items-center">
                            <div class="icon border border-[#eee] rounded-xl flex justify-center items-center mr-2">
                                <svg class="w-6 h-6 m-2 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/delivery.svg') }}"/>
                                </svg>
                            </div>

                            <div class="col flex flex-col">
                                <h3 class="text-sm font-bold mb-1">Доставка и монтаж</h3>
                                <p class="text-xs">Оперативная доставка и профессиональный монтаж по всей России</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image w-2/3 h-auto rounded-l-xl overflow-hidden flex justify-end">
                    <img src="{{ asset('resources/images/banners/ural.jpg') }}" alt="ural" loading="lazy"
                         class="h-3/4 object-cover rounded-l-xl">
                </div>
            </div>
        </section>
    </main>
@endsection
