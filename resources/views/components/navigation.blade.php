@props([
    'selected'
])

<section class="navigation z-10 fixed sm:relative left-0 bg-white flex flex-col h-screen sm:h-full pt-15 lg:pt-20 group after:absolute after:top-0 after:right-full after:h-full after:w-full">
    <nav class="flex flex-col gap-1.5 md:gap-3 transition pl-3">
        <div opened id="show-links-panel" class="cursor-pointer flex md:hidden lg:border-l-2 border-transparent items-center rounded-l-lg py-2.5 pl-2 pr-3 transition duration-300">
            <svg class="w-4 h-4 md:w-5 md:h-5 text-[#0a49bf]">
                <use href="{{ asset('resources/images/icons/menu.svg') }}" />
            </svg>
        </div>

        @foreach([
            [
                'id' => '1',
                'route' => 'system.manage.dashboardView',
                'icon_url' => 'resources/images/icons/home.svg',
                'title' => 'Главная',
            ],
            [
                'id' => '2',
                'route' => 'system.manage.ordersView',
                'icon_url' => 'resources/images/icons/notepad.svg',
                'title' => 'Заказы',
            ],
            [
                'id' => '3',
                'route' => 'system.manage.profileView',
                'icon_url' => 'resources/images/icons/human.svg',
                'title' => 'Профиль',
            ],
        ] as $link)
            <a href="{{ route($link['route']) }}" class="lg:border-l-2 border-transparent @if($link['id'] === $selected) text-[#0a49bf] group-hover:border-[#0a49bf] md:group-hover:bg-blue-100 @endif flex items-center rounded-l-lg py-2.5 pl-2 pr-3 transition duration-300">
                <svg class="w-4 h-4 md:w-5 md:h-5">
                    <use href="{{ asset($link['icon_url']) }}" />
                </svg>
            </a>
        @endforeach
    </nav>

    <div class="links-panel bg-white absolute top-0 left-full w-0 flex flex-col gap-1.5 md:gap-3 h-full pt-25.5 md:pt-15 lg:pt-20 transition-all duration-300 overflow-hidden border-r border-[#f2f6fb] group-hover:w-2/1">
        @foreach([
            [
                'id' => '1',
                'route' => 'system.manage.dashboardView',
                'title' => 'Главная',
            ],
            [
                'id' => '2',
                'route' => 'system.manage.ordersView',
                'title' => 'Заказы',
            ],
            [
                'id' => '3',
                'route' => 'system.manage.profileView',
                'title' => 'Профиль',
            ],
        ] as $link)
            <a href="{{ route($link['route']) }}" class="flex text-xs md:text-sm items-center rounded-r-lg mr-3 py-2.5 transition duration-300 @if($link['id'] === $selected) md:group-hover:bg-blue-100 text-[#0a49bf] @endif">{{ $link['title'] }}</a>
        @endforeach
    </div>

    <section class="footer-small pl-3 flex flex-col items-center absolute w-full left-0 bottom-0 visible opacity-100 transition duration-300 group-hover:invisible group-hover:opacity-0">
        <a href="" class="block md:hidden">
            <svg class="w-5 h-5 hover:text-[#0a49bf]">
                <use href="{{ asset('resources/images/icons/support.svg') }}" />
            </svg>
        </a>

        <img src="{{ asset('resources/images/logo/logo-small.png') }}" alt="logo-small" loading="lazy" class="brightness-10 w-4.5 h-4.5 md:h-5 md:w-5 my-3 md:my-5">
    </section>

    <section class="footer-big px-3 flex flex-col text-xs absolute left-0 bottom-0 w-3/1 invisible opacity-0 transition duration-300 group-hover:visible group-hover:opacity-100">
        <div class="help hidden md:flex w-full mt-auto flex-col items-center p-2 border border-[#eee] rounded-lg transition">
            <div class="icon border border-[#eee] rounded-lg bg-[#f2f6fb] mb-1.5">
                <svg class="w-7 h-7 m-1.5 text-[#0a49bf]">
                    <use href="{{ asset('resources/images/icons/support.svg') }}" />
                </svg>
            </div>

            <h3 class="text-center font-bold mb-1">Нужна помощь?</h3>
            <p class="text-center mb-1">Служба поддержки ответит на ваши вопросы</p>

            <a href="#" class="font-bold text-center text-xs text-[#0a49bf] p-2 border border-[#eee] rounded-lg transition hover:text-blue-600 hover:border-blue-600 active:text-black">Связаться с нами</a>
        </div>

        <a href="" class="flex md:hidden items-center group/help">
            <svg class="w-4 h-4 mr-2 transition text-black group-hover/help:text-[#0a49bf]">
                <use href="{{ asset('resources/images/icons/support.svg') }}" />
            </svg>

            <p class="text-xs transition group-hover/help:text-[#0a49bf]">Помощь</p>
        </a>


        <div class="security flex flex-col py-3 mt-3 md:mt-5 md:py-5 border-t border-[#eee]">
            <p>&copy; 2026 Мегапласт</p>
            <p class="hidden md:block">Все права защищены</p>
        </div>
    </section>
</section>
