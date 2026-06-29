@php use Illuminate\Support\Facades\Auth; @endphp

<footer class="w-full bg-white">
    <div class="container mx-auto py-5 px-4 text-sm text-black flex justify-between items-center">
        <div class="company flex flex-col justify-center">
            <p>&copy; 2026 Мегапласт</p>
            <p>Все права защищены</p>
        </div>

        <nav class="flex gap-5">
            <a href="{{ route('information.production') }}" class="transition hover:text-[#0a49bf]">Производство</a>
            <a href="{{ route('information.dealers') }}" class="transition hover:text-[#0a49bf]">Дилерам</a>
            <a href="{{ route('information.vacancies') }}" class="transition hover:text-[#0a49bf]">Вакансии</a>
            <a href="{{ route('information.about') }}" class="transition hover:text-[#0a49bf]">О компании</a>
        </nav>
    </div>
</footer>
