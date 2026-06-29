@php use Illuminate\Support\Facades\Auth; @endphp

<header class="w-full bg-[#f2f6fb] transition">
    <div class="container flex justify-between items-center mx-auto py-3 px-4">
        <a href="{{ route('information.index') }}" class="logo">
            <img src="{{ asset('resources/images/logo/logo.png') }}" alt="logo" class="logo h-6 hidden brightness-10 xl:h-10 lg:block">

            <img src="{{ asset('resources/images/logo/logo-small.png') }}" alt="logo small" class="logo-small h-6 brightness-10 lg:hidden">
        </a>

        <a href="{{ route('information.index') }}" class="transition hover:text-[#0a49bf]">Главная</a>
    </div>
</header>
