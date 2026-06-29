@extends('layouts.app.auth')

@section('title', 'Регистрация')

@vite([
    'resources/js/auth.js'
])

@section('main')
    <main class="flex-1 bg-[#f2f6fb] flex justify-center">
        <div class="container mx-auto px-4 md:px-4 py-2 md:py-10 flex justify-center items-center">
            <div class="register-container w-230 h-210 sm:h-220 md:h-203 flex">
                <div class="hidden md:block banner relative w-1/2 h-full bg-[#f2f6fb] rounded-tl-xl">
                    <div class="text p-5 flex flex-col absolute bottom-0 bg-[#f2f6fb] h-1/2 w-full after:absolute after:left-0 after:bottom-full after:bg-linear-[0deg,#f2f6fb,#f2f6fb00] after:w-full after:h-1/2">
                        <h3 class="text-lg font-bold text-[#0a49bf] leading-6 mb-1">Создайте аккаунт для работы с нами</h3>
                        <p class="text-sm mb-3">Получите доступ к персональному кабинету, управляйте заказами, отслеживайте поставки и работайте с документами онлайн.</p>

                        <div class="advantages flex flex-col gap-3 mb-3">
                            @foreach([
                                ['resources/images/icons/security.svg', 'Удобство и скорость', 'Все инструменты для работы в одном личном кабинете'],
                                ['resources/images/icons/lock.svg', 'Безопасность данных', 'Мы используем современные методы защиты информации'],
                                ['resources/images/icons/support.svg', 'Поддержка 24/7', 'Наша команда всегда готова помочь вам']
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
                            <p class="text-xs mb-1">Уже есть аккаунт?</p>
                            <a href="{{ route('system.auth.loginView') }}" class="text-xs font-bold text-[#0a49bf] transition hover:text-blue-600">Войдите в систему <b class="ml-3">></b></a>
                        </div>
                    </div>

                    <img src="{{ asset('resources/images/banners/ural.jpg') }}" alt="ural" loading="lazy" class="rounded-t-xl h-1/2 object-cover">
                </div>

                <div class="form-container flex flex-col p-3 md:p-6 w-full md:w-1/2 h-full bg-white rounded-xl border border-[#eee] shadow-xs">
                    <h2 class="text-lg font-bold mb-1">Регистрация</h2>
                    <p class="text-sm mb-5">Заполните форму, чтобы создать аккаунт</p>

                    <form action="{{ route('system.auth.register') }}" method="post" class="grow flex flex-col justify-between">
                        @csrf

                        <div class="inputs-container flex flex-col gap-2 sm:gap-4">
                            @foreach([
                                [
                                    'id' => 'name',
                                    'label' => 'Имя',
                                    'is_required' => true,
                                    'placeholder' => 'Введите имя',
                                    'icon_url' => 'resources/images/icons/badge.svg'
                                ],
                                [
                                    'id' => 'lastname',
                                    'label' => 'Фамилия',
                                    'is_required' => true,
                                    'placeholder' => 'Введите фамилию',
                                    'icon_url' => 'resources/images/icons/badge.svg'
                                ],
                                [
                                    'id' => 'patronymic',
                                    'label' => 'Отчество',
                                    'is_required' => false,
                                    'placeholder' => 'Введите отчество',
                                    'icon_url' => 'resources/images/icons/badge.svg'
                                ],
                                [
                                    'id' => 'phone',
                                    'label' => 'Номер телефона',
                                    'is_required' => true,
                                    'placeholder' => 'Введите номер телефона',
                                    'icon_url' => 'resources/images/icons/phone.svg'
                                ],
                            ] as $input)
                                <div class="input-group flex flex-col group">
                                    <label for="{{ $input['id'] }}" class="text-sm mb-1.5">{{ $input['label'] }} @if($input['is_required'])<b class="text-[#0a49bf]">*</b>@endif</label>

                                    <div class="input relative w-full flex items-center justify-end">
                                        <input type="text" name="{{ $input['id'] }}" id="{{ $input['id'] }}" value="{{ old($input['id']) }}" placeholder="{{ $input['placeholder'] }}" @if($input['is_required']) required @endif class="w-full border border-[#eee] rounded-lg p-2 outline-none transition placeholder:text-sm group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute">

                                        <svg class="w-6 h-6 text-[#afb3c5] absolute right-2 transition group-hover:text-blue-600">
                                            <use href="{{ asset($input['icon_url']) }}" />
                                        </svg>
                                    </div>

                                    @if($input['id'] === 'phone')
                                        @error('phone')
                                            <p class="mt-0.5 text-xs text-red-600">{{ $message }}</p>
                                        @enderror
                                    @endif
                                </div>
                            @endforeach

                            <div class="input-group flex flex-col group">
                                <label for="email" class="text-sm mb-1.5">Email <b class="text-[#0a49bf]">*</b></label>

                                <div class="input relative w-full flex items-center justify-end">
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Введите email" required class="@error('email') border-red-600! @enderror w-full border border-[#eee] rounded-lg p-2 outline-none transition placeholder:text-sm group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute">

                                    <svg class="w-6 h-6 text-[#afb3c5] absolute right-2 transition group-hover:text-blue-600">
                                        <use href="{{ asset('resources/images/icons/email.svg') }}" />
                                    </svg>
                                </div>

                                @error('email')
                                    <p class="mt-0.5 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="input-group password-input-group flex flex-col group">
                                <label for="password" class="text-sm mb-1.5">Пароль <b class="text-[#0a49bf]">*</b></label>

                                <div class="input relative w-full flex items-center justify-end">
                                    <input closed="1" type="password" name="password" id="password" placeholder="Введите пароль" required class="@error('password') @if($message !== 'Пароли не совпадают!') border-red-600! @endif @enderror w-full border border-[#eee] rounded-lg p-2 outline-none transition placeholder:text-sm group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute ">

                                    <svg class="w-6 h-6 cursor-pointer text-[#afb3c5] absolute right-2 transition group-hover:text-blue-600">
                                        <use href="{{ asset('resources/images/icons/closed-eye.svg') }}" />
                                    </svg>

                                    <svg class="hidden w-6 h-6 cursor-pointer text-[#afb3c5] absolute right-2 transition group-hover:text-blue-600">
                                        <use href="{{ asset('resources/images/icons/eye.svg') }}" />
                                    </svg>
                                </div>

                                <div id="error-password">
                                    @error('password')
                                        @if($message !== 'Пароли не совпадают!')
                                            <p class="error mt-0.5 text-xs text-red-600">{{ $message }}</p>
                                        @endif
                                    @enderror
                                </div>
                            </div>

                            <div class="input-group password-input-group flex flex-col group">
                                <label for="password_confirmation" class="text-sm mb-1.5">Подтвердите пароль <b class="text-[#0a49bf]">*</b></label>

                                <div class="input relative w-full flex items-center justify-end">
                                    <input closed="1" type="password" name="password_confirmation" id="password_confirmation" placeholder="Повторите пароль" required class="@error('password') @if($message === 'Пароли не совпадают!') border-red-600! @endif @enderror w-full border border-[#eee] rounded-lg p-2 outline-none transition placeholder:text-sm group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute">

                                    <svg class="w-6 h-6 cursor-pointer text-[#afb3c5] absolute right-2 transition group-hover:text-blue-600">
                                        <use href="{{ asset('resources/images/icons/closed-eye.svg') }}" />
                                    </svg>

                                    <svg class="hidden w-6 h-6 cursor-pointer text-[#afb3c5] absolute right-2 transition group-hover:text-blue-600">
                                        <use href="{{ asset('resources/images/icons/eye.svg') }}" />
                                    </svg>
                                </div>

                                <div id="error-password-confirmation">
                                    @error('password')
                                        @if($message === 'Пароли не совпадают!')
                                            <p class="error mt-0.5 text-xs text-red-600">{{ $message }}</p>
                                        @endif
                                    @enderror
                                </div>
                            </div>

                            <div class="input-group flex flex-row-reverse justify-end items-center group">
                                <label for="agreement" class="text-xs">Я принимаю условия <a href="" class="text-[#0a49bf] transition hover:text-blue-600">Пользовательского соглашения</a> и <a href="" class="text-[#0a49bf] transition hover:text-blue-600">Политику конфиденциальности</a> <b class="text-[#0a49bf]">*</b></label>
                                <input type="checkbox" name="agreement" id="agreement" required class="w-4.5 h-4.5 mr-2 outline-none transition">
                            </div>
                        </div>

                        <div class="col flex flex-col mt-2">
                            <button class="flex justify-center items-center cursor-pointer py-2 text-sm text-white bg-[#0a49bf] rounded-lg transition hover:bg-blue-600 active:text-black">Зарегистрироваться</button>
                            <p class="block md:hidden text-xs text-center mt-2.5">Есть аккаунт? <a href="{{ route('system.auth.loginView') }}" class="text-[#0a49bf] transition hover:text-blue-600">Войдите в систему <b>></b></a></p>
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
