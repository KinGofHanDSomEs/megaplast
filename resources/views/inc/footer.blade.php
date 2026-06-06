@php use Illuminate\Support\Facades\Auth; @endphp

<footer class="w-full bg-[#0a49bf]">
    <div class="container flex flex-col mx-auto py-5 px-4 text-white">
        <div class="top flex justify-between mb-5">
            <img src="{{ asset('resources/images/logo/logo.png') }}" alt="logo" class="logo h-6 xl:h-10">
            <img src="{{ asset('resources/images/logo/handsome-logo.png') }}" alt="handsome logo" class="handsome h-8 xl:h-12">
        </div>

        <div class="group-links text-base grid grid-cols-4 mb-5">
            <div class="links flex flex-col mr-2">
                <h3 class="font-bold text-lg mb-2">Продукция</h3>

                <a href="{{ route('production.products.aluminum') }}" class="mb-1 transition hover:text-black">Алюминиевые двери и витражи</a>
                <a href="{{ route('production.products.parts') }}" class="mb-1 transition hover:text-black">Комплектующие</a>
                <a href="{{ route('production.products.solution') }}" class="mb-1 transition hover:text-black">Нестандартные решения</a>
                <a href="{{ route('production.products.glazing') }}" class="mb-1 transition hover:text-black">Остекления и перегородки</a>
                <a href="{{ route('production.products.plastic') }}" class="transition hover:text-black">Пластиковые окна и двери</a>
            </div>

            <div class="links flex flex-col mr-2">
                <h3 class="font-bold text-lg mb-2">Сервис</h3>

                <a href="{{ route('production.service.advices') }}" class="mb-1 transition hover:text-black">Рекомендации</a>
                <a href="{{ route('production.service.security') }}" class="mb-1 transition hover:text-black">Гарантии</a>
                <a href="{{ route('production.service.montage') }}" class="mb-1 transition hover:text-black">Монтаж</a>
            </div>

            <div class="links flex flex-col mr-2">
                <h3 class="font-bold text-lg mb-2">О компании</h3>

                <a href="{{ route('about.projects') }}" class="mb-1 transition hover:text-black">Проекты</a>
                <a href="{{ route('about.certs') }}" class="mb-1 transition hover:text-black">Сертификаты</a>
                <a href="{{ route('about.partners') }}" class="mb-1 transition hover:text-black">Партнеры</a>
                <a href="{{ route('about.contacts') }}" class="mb-1 transition hover:text-black">Контакты</a>
            </div>

            <div class="links flex flex-col">
                <h3 class="font-bold text-lg mb-2">Другие</h3>

                @if(Auth::check())
                    <a href="{{ route('auth.profileView') }}" class="mb-1 transition hover:text-black">Профиль</a>
                @else
                    <a href="{{ route('auth.loginView') }}" class="mb-1 transition hover:text-black">Войти в аккаунт</a>
                @endif
                <a href="{{ route('dealers') }}" class="mb-1 transition hover:text-black">Дилерам</a>
                <a href="{{ route('vacancies') }}" class="mb-1 transition hover:text-black">Вакансии</a>
            </div>
        </div>

        <div class="bot flex justify-center text-sm">
            <p>&copy; 2026 Общество с ограниченной ответственностью «Мегапласт»</p>
        </div>
    </div>
</footer>
