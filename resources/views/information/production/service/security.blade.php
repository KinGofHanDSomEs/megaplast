@extends('layouts.app')

@section('title', 'Гарантии')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner">
            <div class="container relative min-h-100 lg:min-h-150 mx-auto w-full px-4">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-1 lg:mb-5">Нестандартные решения</h2>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/3 mb-1 lg:mb-2">Реализуем сложные и уникальные проекты из стекла и алюминия любой сложности по индивидуальным чертежам и требованиям.</p>

                    <div class="buttons flex mb-4 lg:mb-7">
                        <a href="#" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-white font-bold bg-[#0a49bf] rounded-lg mr-3 transition hover:bg-[#1447e6]">Рассчитать проект</a>
                        <a href="#" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-[#0a49bf] font-bold bg-white border border-[#0a49bf] rounded-lg transition hover:border-blue-600 hover:text-blue-600">Каталог решений</a>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/megaplast.webp') }}" alt="megaplast" loading="lazy" class="absolute h-full right-0 object-cover object-right">
            </div>
        </section>

        <section class="guarantees-container mb-5 bg-[#f9fbfd]">
            <div class="container mx-auto w-full px-4 py-3 lg:py-5">
                <div class="guarantees grid grid-cols-4">
                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-6 h-6 lg:w-8 lg:h-8 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/human.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Индивидуальный подход</h3>
                            <p class="text-xs lg:text-sm">Разработка решений под ваши задачи</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-10 h-10 lg:w-12 lg:h-12 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/pyramid.svg') }}" />
                        </svg>

                        <div class="col flex flex-col mr-1 sm:mr-3 lg:mr-7">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Сложные формы и конструкции</h3>
                            <p class="text-xs lg:text-sm">Изготовим изделия любой формы и конфигурации</p>
                        </div>
                    </div>

                    <div class="guarantee flex mr-1 sm:mr-3 lg:mr-7">
                        <svg class="w-8 h-8 lg:w-10 lg:h-10 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/electrons.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Современные технологии</h3>
                            <p class="text-xs lg:text-sm">Используем передовое оборудование и материалы</p>
                        </div>
                    </div>

                    <div class="guarantee flex">
                        <svg class="w-6 h-6 lg:w-8 lg:h-8 mr-1 sm:mr-3 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/setting.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Контроль качества</h3>
                            <p class="text-xs lg:text-sm">Проверка на всех этапах производства</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="products-container mb-5">
            <div class="container mx-auto px-4">
                <h2 class="text-xl font-bold mb-5">Какие задачи мы решаем</h2>

                <div class="products grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
                    <div class="product h-90 rounded-xl bg-[#f5f7fc]">
                        <img src="{{ asset('resources/images/production/solutions/complex-shapes.jpg') }}" alt="complex shapes" loading="lazy" class="rounded-t-xl h-4/5 w-full object-cover object-center">

                        <div class="info h-1/5 px-4 py-3 flex flex-col justify-center">
                            <h3 class="text-xs 2xl:text-sm font-bold mb-1">Сложные формы и радиусные конструкции</h3>
                        </div>
                    </div>

                    <div class="product h-90 rounded-xl bg-[#f5f7fc]">
                        <img src="{{ asset('resources/images/production/solutions/triangular-construction.jpg') }}" alt="triangular construction" loading="lazy" class="rounded-t-xl h-4/5 w-full object-cover object-center">

                        <div class="info h-1/5 px-4 py-3 flex flex-col justify-center">
                            <h3 class="text-xs 2xl:text-sm font-bold mb-1">Треугольные, арочные и трапециевидные изделия</h3>
                        </div>
                    </div>

                    <div class="product h-90 rounded-xl bg-[#f5f7fc]">
                        <img src="{{ asset('resources/images/production/solutions/oval-design.jpg') }}" alt="oval design" loading="lazy" class="rounded-t-xl h-4/5 w-full object-cover object-center">

                        <div class="info h-1/5 px-4 py-3 flex flex-col justify-center">
                            <h3 class="text-xs 2xl:text-sm font-bold mb-1">Круглые и овальные конструкции</h3>
                        </div>
                    </div>

                    <div class="product h-90 rounded-xl bg-[#f5f7fc]">
                        <img src="{{ asset('resources/images/production/solutions/polygonal-solution.jpg') }}" alt="polygonal solution" loading="lazy" class="rounded-t-xl h-4/5 w-full object-cover object-center">

                        <div class="info h-1/5 px-4 py-3 flex flex-col justify-center">
                            <h3 class="text-xs 2xl:text-sm font-bold mb-1">Многоугольные и комбинированные решения</h3>
                        </div>
                    </div>

                    <div class="product h-90 rounded-xl bg-[#f5f7fc]">
                        <img src="{{ asset('resources/images/production/solutions/custom-sizes.jpg') }}" alt="custom sizes" loading="lazy" class="rounded-t-xl h-4/5 w-full object-cover object-center">

                        <div class="info h-1/5 px-4 py-3 flex flex-col justify-center">
                            <h3 class="text-xs 2xl:text-sm font-bold mb-1">Увеличенные габариты и нестандартные размеры</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="examples-container mb-5">
            <div class="container mx-auto w-full px-4 py-4">
                <h2 class="text-xl font-bold mb-5">Примеры наших решений</h2>

                <div class="examples grid grid-cols-4 gap-3 mb-5">
                    <img src="{{ asset('resources/images/projects/south-shopping-center/south-shopping-center.webp') }}" alt="south shopping center" loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                    <img src="{{ asset('resources/images/projects/house2/house.jpg') }}" alt="house21" loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                    <img src="{{ asset('resources/images/projects/house1/house.jpg') }}" alt="house11" loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                    <img src="{{ asset('resources/images/projects/ural/ural3.jpg') }}" alt="ural3" loading="lazy" class="w-full h-40 lg:h-60 rounded-xl">
                </div>

                <div class="btn w-full flex justify-center items-center">
                    <a href="{{ route('about.projects') }}" class="text-xs lg:text-sm py-1 px-3 lg:px-6 lg:py-3 text-[#0a49bf] font-bold bg-white border border-[#0a49bf] rounded-lg transition hover:border-blue-600 hover:text-blue-600">Смотреть все проекты &nbsp;&nbsp;&nbsp;&nbsp;→</a>
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
