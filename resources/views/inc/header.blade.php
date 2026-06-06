@php use Illuminate\Support\Facades\Auth; @endphp

<header class="w-full bg-[#ffffffcc] fixed top-0 z-100 transition ease-in">
    <div class="container flex justify-between items-center mx-auto py-3 px-4">
        <a href="{{ route('index') }}" class="logo">
            <img src="{{ asset('resources/images/logo/logo.png') }}" alt="logo" class="logo h-6 hidden brightness-10 xl:h-10 lg:block">

            <img src="{{ asset('resources/images/logo/logo-small.png') }}" alt="logo small" class="logo-small h-6 brightness-10 lg:hidden">
        </a>

        <div class="links flex items-center">
            <nav class="flex mr-5">
                <div class="nav-link relative group mr-4">
                    <a href="{{ route('production') }}"
                       class="link group flex items-center transition hover:text-[#0a49bf]">
                        Производство

                        <svg class="arrow h-2.5 w-2.5 ml-2 cursor-pointer transition duration-300 group-hover:transform-[rotate(180deg)]">
                            <use href="{{ asset('resources/images/icons/arrow-down.svg') }}"/>
                        </svg>
                    </a>

                    <div
                        class="sub-nav flex absolute invisible opacity-0 -left-30 top-10 bg-white py-1 border border-[#eee] rounded-2xl transition duration-300 before:content-[] before:absolute before:w-full before:h-5 before:bg-transparent before:-top-5 before:left-0 group-hover:visible group-hover:opacity-100 xl:py-3 xl:min-w-100 xl:-left-57">
                        <div class="sub-nav-links flex flex-col w-1/2 px-2 border-r border-[#eee] xl:px-4">
                            <div class="heading flex items-center mb-1">
                                <svg class="w-4.5 h-4.5 mr-1 xl:w-5.5 xl:h-5.5 xl:mr-2 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/factory.svg') }}"/>
                                </svg>

                                <h3 class="font-bold text-sm xl:text-base">Продукция</h3>
                            </div>

                            <a href="{{ route('production.products.aluminum') }}" class="text-sm mb-1 transition hover:text-[#0a49bf]">Алюминиевые двери и витражи</a>
                            <a href="{{ route('production.products.parts') }}" class="text-sm mb-1 transition hover:text-[#0a49bf]">Комплектующие</a>
                            <a href="{{ route('production.products.solution') }}" class="text-sm mb-1 transition hover:text-[#0a49bf]">Нестандартные решения</a>
                            <a href="{{ route('production.products.glazing') }}" class="text-sm mb-1 transition hover:text-[#0a49bf]">Остекления и перегородки</a>
                            <a href="{{ route('production.products.plastic') }}" class="text-sm transition hover:text-[#0a49bf]">Пластиковые окна и двери</a>
                        </div>

                        <div class="sub-nav-links flex flex-col w-1/2 px-2 xl:px-4">
                            <div class="heading flex items-center mb-1">
                                <svg class="w-4 h-4 mr-1 xl:w-5 xl:h-5 xl:mr-2 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/setting.svg') }}"/>
                                </svg>

                                <h3 class="font-bold text-sm xl:text-base">Сервис</h3>
                            </div>

                            <a href="{{ route('production.service.advices') }}" class="text-sm mb-1 transition hover:text-[#0a49bf]">Рекомендации по уходу</a>
                            <a href="{{ route('production.service.security') }}" class="text-sm mb-1 transition hover:text-[#0a49bf]">Гарантии</a>
                            <a href="{{ route('production.service.montage') }}" class="text-sm mb-1 transition hover:text-[#0a49bf]">Монтаж</a>
                        </div>
                    </div>
                </div>

                <div class="nav-link relative group mr-4">
                    <a href="{{ route('dealers') }}"
                       class="link group flex items-center transition hover:text-[#0a49bf]">Дилерам</a>
                </div>

                <div class="nav-link relative group mr-4">
                    <a href="{{ route('vacancies') }}"
                       class="link group flex items-center transition hover:text-[#0a49bf]">Вакансии</a>
                </div>

                <div class="nav-link relative group">
                    <a href="{{ route('about') }}"
                       class="link group flex items-center transition hover:text-[#0a49bf]">
                        О компании

                        <svg
                            class="arrow h-2.5 w-2.5 ml-2 cursor-pointer transition duration-300 group-hover:transform-[rotate(180deg)]">
                            <use href="{{ asset('resources/images/icons/arrow-down.svg') }}"/>
                        </svg>
                    </a>

                    <div class="sub-nav flex flex-col absolute invisible opacity-0 top-10 -left-5 xl:-left-10 bg-white border py-1 px-2 xl:py-2 xl:px-3 border-[#e6eaf0] rounded-2xl transition duration-300 before:content-[] before:absolute before:w-full before:h-5 before:bg-transparent before:-top-5 group-hover:visible group-hover:opacity-100">
                        <a href="{{ route('about.projects') }}" class="flex items-center transition hover:text-[#0a49bf] text-sm xl:text-base">
                            <svg class="w-4 h-4 xl:w-5 xl:h-5 mr-1">
                                <use href="{{ asset('resources/images/icons/projects.svg') }}"/>
                            </svg>

                            Проекты
                        </a>

                        <a href="{{ route('about.certs') }}" class="flex items-center transition hover:text-[#0a49bf] text-sm xl:text-base">
                            <svg class="w-4 h-4 xl:w-5 xl:h-5 mr-1">
                                <use href="{{ asset('resources/images/icons/certificate.svg') }}"/>
                            </svg>

                            Сертификаты
                        </a>

                        <a href="{{ route('about.partners') }}"
                           class="flex items-center transition hover:text-[#0a49bf] text-sm xl:text-base">
                            <svg class="w-4 h-4 xl:w-5 xl:h-5 mr-1">
                                <use href="{{ asset('resources/images/icons/partners.svg') }}"/>
                            </svg>

                            Партнеры
                        </a>

                        <a href="{{ route('about.contacts') }}"
                           class="flex items-center transition hover:text-[#0a49bf] text-sm xl:text-base">
                            <svg class="w-4 h-4 xl:w-5 xl:h-5 mr-1">
                                <use href="{{ asset('resources/images/icons/document.svg') }}"/>
                            </svg>

                            Контакты
                        </a>
                    </div>
                </div>
            </nav>

            <div class="contacts flex flex-col justify-center text-sm mr-4">
                <div class="copy cursor-copy flex items-center" content="+7 (34783) 7-00-11">
                    <svg class="w-5 h-5 text-[#0a49bf] hover:text-gray-600">
                        <use href="{{ asset('resources/images/icons/phone.svg') }}"/>
                    </svg>

                    <p class="ml-1 hidden transition lg:block hover:text-gray-600">+7 (34783) 7-00-11</p>
                </div>

                <div class="copy cursor-copy flex items-center" content="torg@megaplastrb.ru">
                    <svg class="w-5 h-5 text-[#0a49bf] hover:text-gray-600">
                        <use href="{{ asset('resources/images/icons/email.svg') }}"/>
                    </svg>

                    <p class="ml-1 hidden transition lg:block hover:text-gray-600">torg@megaplastrb.ru</p>
                </div>
            </div>

            <div class="auth">
                @if(!Auth::check())
                    <a href="{{ route('auth.loginView') }}" class="bg-[#0a49bf] text-white px-4 py-2 rounded-lg transition hover:bg-blue-600 active:text-black lg:px-7 lg:py-3 lg:rounded-2xl">Войти</a>
                @else
                    <a href="{{ route('auth.profileView') }}">
                        <svg class="w-5 h-5">
                            <use href="{{ asset('resources/images/icons/human.svg') }}" />
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </div>
</header>
