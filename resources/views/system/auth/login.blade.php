@extends('layouts.app.auth')

@section('title', 'Вход')

@vite([
    'resources/js/auth.js'
])

@section('main')
    <main class="flex-1 bg-[#f2f6fb] flex justify-center">
        <div class="container mx-auto px-4 md:px-4 py-2 md:py-10 flex justify-center items-center">
            <div class="register-container w-230 h-100 sm:h-105 md:h-150 flex">
                <div class="hidden md:block banner relative w-1/2 h-full bg-[#f2f6fb] rounded-tl-xl">
                    <div class="text p-5 flex flex-col absolute bottom-0 bg-[#f2f6fb] h-1/2 w-full after:absolute after:left-0 after:bottom-full after:bg-linear-[0deg,#f2f6fb,#f2f6fb00] after:w-full after:h-1/2">
                        <h3 class="text-lg font-bold text-[#0a49bf] leading-6 mb-1">Добро пожаловать</h3>
                        <p class="text-sm mb-3">Войдите в аккаунт, чтобы управлять заказами и пользоваться всеми сервисами платформы.</p>

                        <div class="advantages flex flex-col gap-3 mb-3">
                            @foreach([
                                ['resources/images/icons/notepad-with-star.svg', 'Управляйте заказами', 'Просматривайте статус заказов и историю взаимодействия'],
                                ['resources/images/icons/document.svg', 'Работайте с документами', 'Доступ ко всем документам, счётам и спецификациям онлайн']
                            ] as $advantage)
                                <div class="row flex items-center">
                                    <div class="icon rounded-lg bg-white mr-3">
                                        <svg class="w-6 h-6 m-1.5 text-[#0a49bf]">
                                            <use href="{{ asset($advantage[0]) }}" />
                                        </svg>
                                    </div>

                                    <div class="col flex flex-col">
                                        <h3 class="text-xs font-bold mb-0.5">{{ $advantage[1] }}</h3>
                                        <p class="text-xs">{{ $advantage[2] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="login self-start p-3 rounded-xl bg-white border border-[#eee]">
                            <p class="text-xs mb-1">Нет аккаунта?</p>
                            <a href="{{ route('system.auth.registerView') }}" class="text-xs font-bold text-[#0a49bf] transition hover:text-blue-600">Зарегистрируйтесь <b class="ml-3">></b></a>
                        </div>
                    </div>

                    <img src="{{ asset('resources/images/banners/ural.jpg') }}" alt="ural" loading="lazy" class="rounded-t-xl h-2/3 object-cover">
                </div>

                <div class="form-container flex flex-col p-3 md:p-6 w-full md:w-1/2 h-full bg-white rounded-xl border border-[#eee] shadow-xs">
                    <h2 class="text-lg font-bold mb-1">Вход в аккаунт</h2>
                    <p class="text-sm mb-5">Введи ваши данные для входа в личный кабинет</p>

                    <form action="{{ route('system.auth.login') }}" method="post" class="grow flex flex-col justify-between">
                        @csrf

                        <div class="inputs-container flex flex-col gap-2 sm:gap-4">
                            @foreach([
                                [
                                    'id' => 'email',
                                    'label' => 'Email',
                                    'placeholder' => 'Введите email',
                                    'icon_url' => 'resources/images/icons/email.svg'
                                ],
                                [
                                    'id' => 'password',
                                    'label' => 'Пароль',
                                    'placeholder' => 'Введите пароль',
                                    'icon_url' => 'resources/images/icons/lock.svg',
                                ],

                            ] as $input)
                                <div class="input-group flex flex-col group">
                                    <label for="{{ $input['id'] }}" class="text-sm mb-1.5">{{ $input['label'] }}</label>

                                    <div class="input relative w-full flex items-center justify-end">
                                        <input type="{{ $input['id'] }}" name="{{ $input['id'] }}" id="{{ $input['id'] }}" @if($input['id'] !== 'password') value="{{ old($input['id']) }}" @endif placeholder="{{ $input['placeholder'] }}" required class="@error($input['id']) border-red-600 @enderror w-full border border-[#eee] rounded-lg p-2 outline-none transition placeholder:text-sm group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute">

                                        <svg class="w-6 h-6 text-[#afb3c5] absolute right-2 transition group-hover:text-blue-600">
                                            <use href="{{ asset($input['icon_url']) }}" />
                                        </svg>
                                    </div>

                                    @error($input['id'])
                                        <p class="mt-0.5 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            @endforeach

                            <div class="row flex justify-between">
                                <div class="input-group flex flex-row-reverse justify-center items-center">
                                    <label for="remember" class="cursor-pointer text-xs transition hover:text-[#0a49bf]">Запомнить меня</label>
                                    <input type="checkbox" name="remember" id="remember" placeholder="{{ $input['placeholder'] }}" class="w-4.5 h-4.5 mr-2 cursor-pointer">
                                </div>

                                <a href="{{ route('system.auth.loginView') }}" class="text-xs text-[#0a49bf] transition hover:text-blue-600">Забыли пароль?</a>
                            </div>
                        </div>

                        <div class="col flex flex-col mt-2">
                            <button class="flex justify-center items-center cursor-pointer py-2 text-sm text-white bg-[#0a49bf] rounded-lg transition hover:bg-blue-600 active:text-black">Войти</button>
                            <p class="block md:hidden text-xs text-center mt-2.5">Нет аккаунта? <a href="{{ route('system.auth.loginView') }}" class="text-[#0a49bf] transition hover:text-blue-600">Зарегистрируйтесь <b>></b></a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('modal')
    @error('error')
    <div class="modal-error w-full fixed bottom-20 flex justify-center transition">
        <div class="text-lg fixed text-center text-red-600 border border-red-600 bg-red-100 px-12 py-4 rounded-xl">{{ $message  }}<svg class="w-4 h-4 text-red-600 absolute right-2 top-2 transition cursor-pointer hover:text-red-400"><use href="{{ asset('resources/images/icons/cancel.svg') }}" /></svg></div>
    </div>
    @enderror
@endsection
