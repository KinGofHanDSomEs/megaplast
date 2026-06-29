@extends('layouts.app.information')

@section('title', 'Контакты')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner bg-[#f2f6fb] mb-5">
            <div class="container mx-auto w-full bg-[#f2f6fb] relative h-150 overflow-hidden">
                <div class="info absolute left-0 top-0 w-full h-full z-10 flex">
                    <div
                        class="text relative h-full w-1/2 bg-[#f2f6fb] flex flex-col justify-end pl-5 pb-10 md:pb-20 pr-3 after:absolute after:left-full after:top-0 after:h-full after:w-2/3 after:bg-linear-[90deg,#f2f6fb,#f2f6fb00]">
                        <h2 class="text-xl text-[#0a49bf] font-bold mb-2">Контакты</h2>
                        <p class="text-sm mb-4">Производим конструкции из различных профильных систем от эконом до
                            премиум класса в различных исполнениях</p>

                        <div class="buttons flex flex-col md:flex-row mb-5 xl:mb-10 w-6/7 lg:w-2/3 xl:w-1/2">
                            <a href="{{ route('information.production') }}"
                               class="mb-3 md:mb-0 text-center text-sm font-bold w-4/5 md:w-1/2 py-3 flex justify-center items-center text-white bg-[#0a49bf] rounded-lg mr-3 transition hover:bg-blue-600 active:text-black">Продукция</a>
                            <a href="{{ route('system.manage.profileView') }}"
                               class="text-center text-sm font-bold w-4/5 md:w-1/2 py-3 flex justify-center items-center text-[#0a49bf] bg-white border border-[#0a49bf] rounded-lg transition hover:border-blue-600 hover:text-blue-600 active:text-black active:border-black">Оставить
                                заявку</a>
                        </div>

                        <div class="icons grid md:grid-cols-2 xl:grid-cols-3 xl:w-6/7 gap-3">
                            <div class="row flex items-center xl:border-r xl:border-[#eee] pr-2">
                                <div class="icon bg-white rounded-lg mr-3">
                                    <svg class="w-7 h-7 m-1 text-[#0a49bf]">
                                        <use href="{{ asset('resources/images/icons/layers.svg') }}"/>
                                    </svg>
                                </div>

                                <p class="text-sm">Собственное производство</p>
                            </div>

                            <div class="row flex items-center xl:border-r xl:border-[#eee] pr-2">
                                <div class="icon bg-white rounded-lg mr-3">
                                    <svg class="w-7 h-7 m-1 text-[#0a49bf]">
                                        <use href="{{ asset('resources/images/icons/security.svg') }}"/>
                                    </svg>
                                </div>

                                <p class="text-sm">Контроль качества</p>
                            </div>

                            <div class="row flex items-center">
                                <div class="icon bg-white rounded-lg mr-3">
                                    <svg class="w-7 h-7 m-1 text-[#0a49bf]">
                                        <use href="{{ asset('resources/images/icons/calendar.svg') }}"/>
                                    </svg>
                                </div>

                                <p class="text-sm">Изготовление в срок от 1 дня</p>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banners/megaplast.webp')  }}" alt="banner" loading="lazy"
                     class="absolute h-full right-0 bottom-0">
            </div>
        </section>

        <section class="contacts-container mb-5">
            <div class="container mx-auto px-4 flex w-full">
                <div class="feedback flex flex-col w-1/3 mr-5 py-4 px-5 border border-[#eee] rounded-xl">
                    <h3 class="text-base font-bold mb-1">Напишите нам</h3>
                    <p class="text-sm mb-3">Заполните форму, и наш менеджер свяжется с вами в ближайшее время.</p>

                    <form class="">
                        <input type="text" name="name" id="name"
                               class="border border-[#eee] rounded-lg p-2 text-base w-full outline-none transition mb-3 hover:border-blue-600 focus:border-[#0a49bf] placeholder:text-sm"
                               placeholder="Ваше имя *">

                        <div class="row flex mb-3">
                            <input type="text" name="phone" id="phone"
                                   class="border border-[#eee] rounded-lg p-2 text-base w-1/2 mr-3 outline-none transition hover:border-blue-600 focus:border-[#0a49bf] placeholder:text-sm"
                                   placeholder="Телефон *">
                            <input type="email" name="email" id="email"
                                   class="border border-[#eee] rounded-lg p-2 text-base w-1/2 outline-none transition hover:border-blue-600 focus:border-[#0a49bf] placeholder:text-sm"
                                   placeholder="E-mail *">
                        </div>

                        <textarea name="message" id="message" rows="3"
                                  class="mb-1 border border-[#eee] rounded-lg p-2 text-base w-full outline-none transition hover:border-blue-600 focus:border-[#0a49bf] placeholder:text-sm"
                                  placeholder="Сообщение"></textarea>

                        <div class="row flex items-center mb-3">
                            <input type="checkbox" name="personal_data" id="personal_data"
                                   class="mr-2 border border-[#eee] rounded-lg p-2 text-base outline-none transition hover:border-blue-600 focus:border-[#0a49bf]">
                            <label for="personal_data" class="text-xs">Я согласен на обработку <a href="#"
                                                                                                  class="text-[#0a49bf] font-bold hover:text-blue-600">персональных
                                    данных</a></label>
                        </div>

                        <button
                            class="text-sm text-white self-start bg-[#0a49bf] hover:bg-blue-600 transition flex items-center px-4 py-2 rounded-lg cursor-pointer">
                            Отправить сообщение
                            <svg class="w-4 h-4 ml-5">
                                <use fill="white" href="{{ asset('resources/images/icons/letter.svg') }}"/>
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="location rounded-xl w-2/3">
                    <iframe class="w-full rounded-xl"
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3Acdbb89370e368ceaac57f06632258adc395e81a4541b83c926f999299031fddd&amp;source=constructor"
                            width="700" height="500" frameborder="0"></iframe>
                </div>
            </div>
        </section>

        <section class="help-container mb-5">
            <div class="container mx-auto px-4">
                <div class="help flex justify-between bg-[#f5f7fc] rounded-xl py-7 px-6">
                    <div class="info flex items-center w-4/6 lg:w-4/5">
                        <svg class="w-10 h-10 sm:w-15 sm:h-15 mr-3 sm:mr-5 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/assistant.svg') }}"/>
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-2">Нужна помощь в подборе
                                продукции?</h3>
                            <p class="text-xs lg:text-sm w-5/6">Наши специалисты помогут подобрать оптимальное решение
                                под ваш проект и рассчитают стоимость</p>
                        </div>
                    </div>

                    <a href="#"
                       class="wg-2/6 lg:w-1/5 text-xs xl:text-sm self-center text-center text-white bg-[#0a49bf] transition hover:bg-blue-600 px-3 lg:px-0 py-2 xl:py-4 rounded-lg">Получить
                        консультацию</a>
                </div>
            </div>
        </section>
    </main>
@endsection
