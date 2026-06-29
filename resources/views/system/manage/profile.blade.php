@extends('layouts.app.system')

@section('title', 'Профиль')

@vite([
    'resources/js/manage/profile.js',
    'resources/js/manage/navigation.js',
    'resources/js/auth.js',
])


@section('main')
    <div class="container mx-auto flex flex-1 bg-red-500 relative">
        <x-navigation selected="3" />

        <main class="bg-[#f2f6fb] pr-7 pl-20 sm:pr-7 sm:pl-7 pt-15 pb-5 lg:pt-20 flex-1">
            <h3 class="font-bold text-lg mb-2">Профиль</h3>
            <p class="text-sm mb-3">Управляйте личной информацией и настройками аккаунта</p>

            <div class="profile-info mb-5 gap-5 bg-white rounded-xl p-5 flex flex-col md:flex-row justify-between">
                <div class="profile flex">
                    <img src="@if($user->icon_url) {{ asset($user->icon_url) }} @else {{ asset('resources/images/profiles-pictures/anonymous.png') }} @endif" alt="profile logo" loading="lazy" class="w-20 h-20 mr-5 rounded-full">

                    <div class="info flex flex-col">
                        <h4 class="text-base font-bold">{{ $user->lastname . ' ' . $user->name }} @if($user->patronymic) {{ ' ' . $user->patronymic }} @endif</h4>
                        <p class="text-sm text-[#0a49bf] mb-2.5">
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

                        <div class="row flex mb-1 items-center">
                            <svg class="w-4 h-4 mr-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/email.svg') }}" />
                            </svg>

                            <p class="text-sm">{{ $user->email }}</p>
                        </div>

                        <div class="row flex items-center">
                            <svg class="w-4 h-4 mr-2 text-[#0a49bf]">
                                <use href="{{ asset('resources/images/icons/phone.svg') }}" />
                            </svg>

                            <p class="text-sm">{{ $user->phone }}</p>
                        </div>
                    </div>
                </div>

                @if($user->last_login_at)
                    <div class="activity self-start flex flex-col text-sm border border-[#eee] bg-[#f2f6fb] rounded-lg p-3">
                        <h5 class="font-bold mb-1.5">Безопасность аккаунта</h5>
                        <p class="mb-2.5">Последний вход: {{ $user->last_login_at->setTimezone('Asia/Yekaterinburg')->format('d.m.Y') }} в {{ $user->last_login_at->setTimezone('Asia/Yekaterinburg')->format('H:i') }}</p>

                        <button id="security_change" class="self-start text-sm flex items-center border border-[#0a49bf] rounded-lg p-2 cursor-pointer font-bold text-[#0a49bf] transition hover:text-blue-600 hover:border-blue-600 active:text-black">
                            <svg class="w-4.5 h-4.5 mr-2">
                                <use href="{{ asset('resources/images/icons/lock.svg') }}" />
                            </svg>
                            Изменить пароль
                        </button>
                    </div>
                @endif
            </div>

            <div class="profile-buttons flex w-full text-sm mb-5">
                <p type="personal-information" class="cursor-pointer font-bold border-b border-[#eee] border-[#0a49bf]! text-[#0a49bf] px-4 py-3  transition hover:text-blue-600 hover:border-blue-600 active:border-blue-600">Личные данные</p>
                <p type="security" class="cursor-pointer font-bold border-b border-[#eee] px-4 py-3 transition hover:text-blue-600 active:border-blue-600">Безопасность</p>
                <p class="flex-1 border-b border-[#eee] px-4 py-3"></p>
            </div>

            <div class="profile-settings">
                <div class="personal-information transition flex flex-col bg-white rounded-xl p-5 w-1/2 md:w-full">
                    <h4 class="mb-4 font-bold text-base">Личные данные</h4>

                    <form action="{{ route('system.manage.changePersonalInformation') }}" method="post" class="flex flex-col">
                        @csrf
                        @method('PATCH')

                        <div class="row flex flex-col md:flex-row w-full gap-2 mb-5">
                            <div class="col flex flex-col w-full md:w-1/2 gap-2 mr-8">
                                @foreach([
                                   [
                                       'id' => 'name',
                                       'label' => 'Имя',
                                       'is_required' => true,
                                       'icon_url' => 'resources/images/icons/badge.svg'
                                   ],
                                   [
                                       'id' => 'lastname',
                                       'label' => 'Фамилия',
                                       'is_required' => true,
                                       'icon_url' => 'resources/images/icons/badge.svg'
                                   ],
                                   [
                                       'id' => 'patronymic',
                                       'label' => 'Отчество',
                                       'is_required' => false,
                                       'icon_url' => 'resources/images/icons/badge.svg'
                                   ],

                               ] as $input)
                                    <div class="input-group flex flex-col group">
                                        <label for="{{ $input['id'] }}" class="text-sm mb-1.5">{{ $input['label'] }} @if($input['is_required'])<b class="text-[#0a49bf]">*</b>@endif</label>

                                        <div class="input relative w-full flex items-center justify-end">
                                            <input type="text" name="{{ $input['id'] }}" id="{{ $input['id'] }}" value="{{ $user[$input['id']] }}" @if($input['is_required']) required @endif class="@error($input['id']) border-red-600 @enderror w-full border border-[#eee] rounded-lg p-2 outline-none transition group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute">

                                            <svg class="w-6 h-6 text-[#afb3c5] absolute right-2 transition group-hover:text-blue-600">
                                                <use href="{{ asset($input['icon_url']) }}" />
                                            </svg>
                                        </div>

                                        @error($input['id'])
                                            <p class="error mt-0.5 text-xs text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                @endforeach
                            </div>

                            <div class="col flex flex-col w-full md:w-1/2 gap-2">
                                @foreach([
                                    [
                                       'type' => 'text',
                                       'id' => 'phone',
                                       'label' => 'Телефон',
                                       'is_required' => true,
                                       'icon_url' => 'resources/images/icons/phone.svg'
                                   ],
                                   [
                                       'type' => 'email',
                                       'id' => 'email',
                                       'label' => 'Почта',
                                       'is_required' => true,
                                       'icon_url' => 'resources/images/icons/email.svg'
                                   ],
                               ] as $input)
                                    <div class="input-group flex flex-col group">
                                        <label for="{{ $input['id'] }}" class="text-sm mb-1.5">{{ $input['label'] }} @if($input['is_required'])<b class="text-[#0a49bf]">*</b>@endif</label>

                                        <div class="input relative w-full flex items-center justify-end">
                                            <input type="{{ $input['type'] }}" name="{{ $input['id'] }}" id="{{ $input['id'] }}" value="{{ $user[$input['id']] }}" @if($input['is_required']) required @endif class="@error($input['id']) border-red-600 @enderror w-full border border-[#eee] rounded-lg p-2 outline-none transition group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute">

                                            <svg class="w-6 h-6 text-[#afb3c5] absolute right-2 transition group-hover:text-blue-600">
                                                <use href="{{ asset($input['icon_url']) }}" />
                                            </svg>
                                        </div>

                                        @error($input['id'])
                                            <p class="error mt-0.5 text-xs text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <button class="self-start cursor-pointer text-center text-sm font-bold px-5 py-2 flex justify-center items-center text-white bg-[#0a49bf] rounded-lg transition hover:bg-blue-600 active:text-black">Сохранить изменения</button>
                    </form>
                </div>

                <div class="security transition hidden flex flex-col bg-white rounded-xl p-5 w-1/2">
                    <h4 class="mb-4 font-bold text-base">Безопасность</h4>

                    <form action="{{ route('system.manage.changePassword') }}" method="post" class="flex flex-col w-full">
                        @csrf
                        @method('PATCH')

                         <div class="col flex flex-col gap-2 mb-5">
                                @foreach([
                                  [
                                      'id' => 'old_password',
                                      'label' => 'Текущий пароль',
                                      'is_required' => true,
                                      'icon_url' => 'resources/images/icons/lock.svg'
                                  ],
                                  [
                                      'id' => 'password',
                                      'label' => 'Новый пароль',
                                      'is_required' => true,
                                      'icon_url' => 'resources/images/icons/closed-eye.svg'
                                  ],
                                  [
                                      'id' => 'password_confirmation',
                                      'label' => 'Повторите новый пароль',
                                      'is_required' => true,
                                      'icon_url' => 'resources/images/icons/closed-eye.svg'
                                  ],
                              ] as $input)
                                    <div class="input-group @if($input['id'] !== 'old_password') password-input-group @endif flex flex-col group">
                                        <label for="{{ $input['id'] }}" class="text-sm mb-1.5">{{ $input['label'] }} @if($input['is_required'])<b class="text-[#0a49bf]">*</b>@endif</label>

                                        <div class="input relative w-full flex items-center justify-end">
                                            <input closed="1" type="password" name="{{ $input['id'] }}" id="{{ $input['id'] }}" @if($input['is_required']) required @endif class="@error($input['id']) border-red-600 @enderror w-full border border-[#eee] rounded-lg p-2 outline-none transition group-hover:border-blue-600 focus:border-[#0a49bf] after:absolute">

                                            <svg class="w-6 h-6 text-[#afb3c5] cursor-pointer absolute right-2 transition group-hover:text-blue-600">
                                                <use href="{{ asset($input['icon_url']) }}" />
                                            </svg>

                                            <svg class="hidden w-6 h-6 cursor-pointer text-[#afb3c5] absolute right-2 transition group-hover:text-blue-600">
                                                <use href="{{ asset('resources/images/icons/eye.svg') }}" />
                                            </svg>
                                        </div>

                                        @switch($input['id'])
                                            @case('password')
                                                <div id="error-password">
                                                    @error('password')
                                                        @if($message !== 'Пароли не совпадают!')
                                                            <p class="error mt-0.5 text-xs text-red-600">{{ $message }}</p>
                                                        @endif
                                                    @enderror
                                                </div>
                                                @break
                                            @case('password_confirmation')
                                                <div id="error-password-confirmation">
                                                    @error('password')
                                                        @if($message === 'Пароли не совпадают!')
                                                            <p class="error mt-0.5 text-xs text-red-600">{{ $message }}</p>
                                                        @endif
                                                    @enderror
                                                </div>
                                                @break
                                            @default
                                                @error('old_password')
                                                    <p class="error mt-0.5 text-xs text-red-600">{{ $message }}</p>
                                                @enderror
                                        @endswitch
                                    </div>
                                @endforeach
                         </div>

                        <button class="self-start cursor-pointer text-center text-sm font-bold px-5 py-2 flex justify-center items-center text-white bg-[#0a49bf] rounded-lg transition hover:bg-blue-600 active:text-black">Сохранить изменения</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection

@section('modal')
    @if(session('success'))
        <div class="modal-error w-full fixed bottom-20 flex justify-center transition duration-500 visible opacity-100">
            <div class="text-lg fixed text-center text-blue-600 border border-blue-600 bg-blue-100 px-12 py-4 rounded-xl">{{ session('success')  }}<svg class="w-4 h-4 text-blue-600 absolute right-2 top-2 transition cursor-pointer hover:text-blue-400"><use href="{{ asset('resources/images/icons/cancel.svg') }}" /></svg></div>
        </div>
    @else
        @error('error')
            <div class="modal-error w-full fixed bottom-20 flex justify-center transition duration-500 visible opacity-100">
                <div class="text-lg fixed text-center text-red-600 border border-red-600 bg-red-100 px-12 py-4 rounded-xl">{{ $message  }}<svg class="w-4 h-4 text-red-600 absolute right-2 top-2 transition cursor-pointer hover:text-red-400"><use href="{{ asset('resources/images/icons/cancel.svg') }}" /></svg></div>
            </div>
        @enderror
    @endif
@endsection
