@extends('layouts.app')

@section('main')
    <main class="flex-1 bg-white">
        <div class="container mx-auto w-full px-4">
            <section class="banner relative mb-5 min-h-100 lg:min-h-150 w-full">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-2 lg:mb-5">Завод окон и дверей «МЕГАПЛАСТ»</h2>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/2 mb-2 lg:mb-5">Производим конструкции из различных профильных систем от эконом до премиум класса в различных исполнениях</p>

                    <div class="buttons flex mb-4 lg:mb-7">
                        <a href="{{ route('production') }}" class="text-xs lg:text-sm font-bold py-1 px-3 lg:px-6 lg:py-3 text-white bg-[#0a49bf] rounded-lg mr-3 transition hover:bg-[#1447e6]">Продукция</a>
                        <a href="{{ route('auth.profileView') }}" class="text-xs lg:text-sm font-bold py-1 px-3 lg:px-6 lg:py-3 text-[#0a49bf] bg-white border border-[#0a49bf] rounded-lg transition hover:border-blue-600 hover:text-blue-600">Оставить заявку</a>
                    </div>

                    <div class="cards flex text-sm w-1/2">
                        <div class="card flex items-center border-r pr-3 border-[#eeeeee] mr-2 lg:mr-4 w-1/3">
                            <svg class="w-6 h-6 lg:w-10 lg:h-10 mr-3 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/factory.svg') }}" />
                            </svg>

                            <p class="w-1/3 text-xs lg:text-sm">Собственное производство</p>
                        </div>

                        <div class="card flex items-center border-r pr-3 border-[#eeeeee] mr-2 lg:mr-4 w-1/3">
                            <svg class="w-6 h-6 lg:w-10 lg:h-10 mr-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/security.svg') }}" />
                            </svg>

                            <p class="w-1/3 text-xs lg:text-sm">Контроль качества</p>
                        </div>

                        <div class="card flex items-center w-1/3">
                            <svg class="w-6 h-6 lg:w-10 lg:h-10 mr-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/calendar.svg') }}" />
                            </svg>

                            <p class="w-1/3 text-xs lg:text-sm">Изготовление в срок</p>
                        </div>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/windows.png') }}" alt="windows" loading="lazy" class="absolute h-full right-0 object-cover object-right rounded-br-2xl">
            </section>

            <section class="products-container mb-10">
                <h2 class="text-xl font-bold text-center mb-5">Наша продукция</h2>

                <div class="products grid grid-cols-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/products/aluminium.jpg') }}" alt="aluminium door" loading="lazy" class="rounded-t-xl h-1/2 w-full object-cover object-center">

                        <div class="info h-1/2 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs xl:text-sm font-bold mb-1">Алюминиевые двери и витражи</h3>

                                <p class="text-xs xl:text-sm mb-1">Окна из алюминиевых профилей экологичны, не выделяет никаких вредных примесей в течение всего срока эксплуатации</p>
                            </div>

                            <a href="{{ route('production.products.aluminum') }}" class="self-start text-sm text-[#0a49bf] transition hover:text-blue-600">Подронее →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/products/parts.jpg') }}" alt="parts" loading="lazy" class="rounded-t-xl h-1/2 w-full object-cover object-center">

                        <div class="info h-1/2 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs xl:text-sm font-bold mb-1">Комплектующие</h3>

                                <p class="text-xs xl:text-sm mb-1">Компания «Мегапласт» оснащает свои изделия всеми возможными комплектующими</p>
                            </div>

                            <a href="{{ route('production.products.parts') }}" class="text-sm text-[#0a49bf]">Подронее →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/products/solution.jpg') }}" alt="solution" loading="lazy" class="rounded-t-xl h-1/2 w-full object-cover object-center">

                        <div class="info h-1/2 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs xl:text-sm font-bold mb-1">Нестандартные решения</h3>

                                <p class="text-xs xl:text-sm mb-1">Окно практически любой формы мы сможем наделить функциональностью и удобством по последнему слову оконных технологий</p>
                            </div>

                            <a href="{{ route('production.products.solution') }}" class="self-start text-sm text-[#0a49bf] transition hover:text-blue-600">Подронее →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/products/glazing.jpg') }}" alt="glazing" loading="lazy"  class="rounded-t-xl h-1/2 w-full object-cover object-center">

                        <div class="info h-1/2 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs xl:text-sm font-bold mb-1">Остекления и перегородки</h3>

                                <p class="text-xs xl:text-sm mb-1">Добиться уюта и тепла на Вашем балконе поможет остекление производства компании «Мегапласт»</p>
                            </div>

                            <a href="{{ route('production.products.glazing') }}" class="self-start text-sm text-[#0a49bf] transition hover:text-blue-600">Подронее →</a>
                        </div>
                    </div>

                    <div class="product h-100 border rounded-xl border-[#eee]">
                        <img src="{{ asset('resources/images/products/plastic.jpg') }}" alt="plastic" loading="lazy"  class="rounded-t-xl h-1/2 w-full object-cover object-center">

                        <div class="info h-1/2 px-4 py-3 flex flex-col justify-between">
                            <div class="text">
                                <h3 class="text-xs xl:text-sm font-bold mb-1">Пластиковые окна и двери</h3>

                                <p class="text-xs xl:text-sm mb-1">Окна компании «Мегапласт» это возможность предать Вашему дому свой собственный стиль</p>
                            </div>

                            <a href="{{ route('production.products.plastic') }}" class="self-start text-sm text-[#0a49bf] transition hover:text-blue-600">Подронее →</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="advantages-container mb-10">
            <div class="container mx-auto w-full pl-4 flex justify-between">
                <div class="left w-1/3">
                    <h2 class="text-xl font-bold mb-5">Почему выбирают нас?</h2>

                    <div class="advantages">
                        <div class="advantage flex items-center mb-4">
                            <div class="icon w-10 h-10 border border-[#eee] rounded-xl flex justify-center items-center mr-2">
                                <svg class="w-6 h-6 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/setting.svg') }}" />
                                </svg>
                            </div>

                            <div class="col flex flex-col">
                                <h3 class="text-sm font-bold mb-1">Современное оборудование</h3>
                                <p class="text-xs">Используем передовые технологии для идеального результата</p>
                            </div>
                        </div>

                        <div class="advantage flex items-center mb-4">
                            <div class="icon w-10 h-10 border border-[#eee] rounded-xl flex justify-center items-center mr-2">
                                <svg class="w-6 h-6 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/security.svg') }}" />
                                </svg>
                            </div>

                            <div class="col flex flex-col">
                                <h3 class="text-sm font-bold mb-1">Гарантия качества</h3>
                                <p class="text-xs">Строгий контроль на всех этапах производства</p>
                            </div>
                        </div>

                        <div class="advantage flex items-center mb-4">
                            <div class="icon w-10 h-10 border border-[#eee] rounded-xl flex justify-center items-center mr-2">
                                <svg class="w-6 h-6 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/pen.svg') }}" />
                                </svg>
                            </div>

                            <div class="col flex flex-col">
                                <h3 class="text-sm font-bold mb-1">Изготовление по вашим размерам</h3>
                                <p class="text-xs">Выполним заказ любой сложности по индивидуальным размерам</p>
                            </div>
                        </div>

                        <div class="advantage flex items-center">
                            <div class="icon w-10 h-10 border border-[#eee] rounded-xl flex justify-center items-center mr-2">
                                <svg class="w-6 h-6 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/delivery.svg') }}" />
                                </svg>
                            </div>

                            <div class="col flex flex-col">
                                <h3 class="text-sm font-bold mb-1">Доставка и монтаж</h3>
                                <p class="text-xs">Оперативная доставка и профессиональный монтаж по всей России</p>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/ural.jpg') }}" alt="ural" loading="lazy" class="rounded-l-xl w-1/2">
            </div>
        </section>
    </main>
@endsection
