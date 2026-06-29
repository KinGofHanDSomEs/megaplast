@php use Illuminate\Support\Facades\Auth; @endphp

@vite([
     'resources/js/manage/header.js'
])

<header class="w-full bg-transparent transition fixed top-0 z-20">
    <div class="container flex justify-between items-center mx-auto py-2 md:py-3 px-4">
        <a href="{{ route('information.index') }}" class="logo">
            <img src="{{ asset('resources/images/logo/logo.png') }}" alt="logo" class="logo h-4 hidden brightness-10 xl:h-8 lg:block">

            <img src="{{ asset('resources/images/logo/logo-small.png') }}" alt="logo small" class="logo-small h-6 brightness-10 lg:hidden">
        </a>

        <div class="right flex text-black">
            <div class="profile relative flex items-center cursor-pointer">
                <div class="row flex items-center transition text-black hover:text-blue-600">
                    <img src="@if($user->icon_url) {{ asset($user->icon_url) }} @else {{ asset('resources/images/profiles-pictures/anonymous.png') }} @endif" alt="profile icon" loading="lazy"
                        class="w-5 h-5 m-1.5 md:w-9 md:h-9 md:m-2 rounded-full">

                    <div class="col flex flex-col text-xs">
                        <p class="font-bold md:mb-1">{{ $user->name . ' ' . $user->lastname }}</p>
                        <p class="hidden md:block">
                            @switch($user->role)
                                @case('client')
                                    Клиент
                                    @break
                                @case('employee')
                                    Сотрудник
                                    @break
                                @case('partner')
                                    Партнер
                                    @break
                                @case('admin')
                                    Администратор
                                    @break
                                @default
                                    Аноним
                            @endswitch
                        </p>
                    </div>

                    <svg class="w-2 h-2 ml-1.5 md:w-3 md:h-3 md:ml-2  duration-300 rotate-0">
                        <use href="{{ asset('resources/images/icons/arrow-down.svg') }}" />
                    </svg>
                </div>

                <div class="profile-menu shadow-xs p-3 absolute top-7 md:top-10 -right-1 rounded-lg border-[#eee] bg-white flex flex-col transition invisible opactity-0">
                    <a href="{{ route('system.manage.logout') }}" class="row flex items-center text-[#0a49bf] hover:text-blue-600">
                        <svg class="w-4 h-4 mr-1.5 transition">
                            <use href="{{ asset('resources/images/icons/logout.svg') }}" />
                        </svg>

                        <p class="text-xs transition">Выйти</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
