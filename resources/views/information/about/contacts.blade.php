@extends('layouts.app')

@section('title', 'Контакты')

@section('main')
    <main class="flex-1 flex flex-col bg-white">
        <section class="banner mb-5 border-b border-[#eee]">
            <div class="container relative min-h-100 lg:min-h-150 mx-auto w-full px-4">
                <div class="info flex flex-col justify-center pb-10 pl-10 absolute w-full h-full z-10 bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffff,#ffffffef,#ffffffaf,#ffffff00] lg:bg-linear-[90deg,#ffffff,#ffffff,#ffffff,#ffffffbf,#ffffff00]">
                    <h2 class="text-xl lg:text-2xl font-bold text-[#0a49bf] w-1/2 mt-20 mb-1 lg:mb-5">Контакты</h2>
                    <p class="text-xs lg:text-sm text-gray-500 w-1/2 mb-1 lg:mb-5">Мы всегда на связи и готовы ответить на ваши вопросы. Свяжитесь с нами удобным для вас способом</p>

                    <div class="cards flex flex-col text-sm">
                        <div class="card flex items-center mb-3">
                            <div class="icon flex justify-center items-center border border-[#eee] p-2 mr-3 rounded-lg copy cursor-copy" content="+7 (34783) 7-00-11">
                                <svg class="w-4 h-4 lg:w-6 lg:h-6 xl:w-8 xl:h-8 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/phone.svg') }}" />
                                </svg>
                            </div>

                            <div class="text flex flex-col">
                                <h3 class="font-bold text-xs sm:text-sm mb-1 copy cursor-copy hover:text-gray-600" content="+7 (34783) 7-00-11">+7 (34783) 7-00-11</h3>
                                <p class="text-sm">Пн-Пт с 9:00 до 18:00</p>
                            </div>
                        </div>

                        <div class="card flex items-center mb-3">
                            <div class="icon flex justify-center items-center border border-[#eee] p-2 mr-3 rounded-lg copy cursor-copy" content="+7 (34783) 7-00-11">
                                <svg class="w-4 h-4 lg:w-6 lg:h-6 xl:w-8 xl:h-8 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/scales.svg') }}" />
                                </svg>
                            </div>

                            <div class="text flex flex-col">
                                <h3 class="font-bold text-xs sm:text-sm mb-1 copy cursor-copy hover:text-gray-600" content="+7 (34783) 7-00-87">+7 (34783) 7-00-87</h3>
                                <p class="text-sm">Отдел кадров, юрист</p>
                            </div>
                        </div>

                        <div class="card flex items-center mb-3">
                            <div class="icon flex justify-center items-center border border-[#eee] p-2 mr-3 rounded-lg copy cursor-copy" content="torg@megaplastrb.ru">
                                <svg class="w-4 h-4 lg:w-6 lg:h-6 xl:w-8 xl:h-8 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/email.svg') }}" />
                                </svg>
                            </div>

                            <div class="text flex flex-col">
                                <h3 class="font-bold text-xs sm:text-sm mb-1 copy cursor-copy hover:text-gray-600" content="torg@megaplastrb.ru">torg@megaplastrb.ru</h3>
                                <p class="text-sm">Ответим в течение 15 минут</p>
                            </div>
                        </div>

                        <div class="card flex items-center mb-3">
                            <div class="icon flex justify-center items-center border border-[#eee] p-2 mr-3 rounded-lg copy cursor-copy" content="г. Нефтекамск, Автозаводская ул., д. 20Ж">
                                <svg class="w-4 h-4 lg:w-6 lg:h-6 xl:w-8 xl:h-8 text-[#0a49bf]">
                                    <use href="{{ asset('resources/images/icons/mark.svg') }}" />
                                </svg>
                            </div>

                            <div class="text flex flex-col">
                                <h3 class="font-bold text-xs sm:text-sm mb-1 copy cursor-copy hover:text-gray-600" content="г. Нефтекамск, Автозаводская ул., д. 20Ж">г. Нефтекамск, Автозаводская ул., д. 20Ж</h3>
                                <p class="text-xs lg:text-sm">Производство и офис</p>
                            </div>
                        </div>

                        <div class="social-network-container flex flex-col">
                            <h3 class="text-xs lg:text-sm font-bold mb-1">Социальные сети:</h3>

                            <div class="social-network flex">
                                <a href="https://vk.com/megaplast_rb_opt">
                                    <svg class="w-6 h-6 lg:w-8 lg:h-8 text-[#0a49bf]">
                                        <use href="{{ asset('resources/images/icons/vk.svg') }}" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="{{ asset('resources/images/banner/megaplast.webp') }}" alt="megaplast" loading="lazy" class="absolute h-full right-0 object-cover object-right">
            </div>
        </section>

        <section class="contacts-container mb-5">
            <div class="container mx-auto px-4 flex w-full">
                <div class="feedback flex flex-col w-1/3 mr-5 py-4 px-5 border border-[#eee] rounded-xl">
                    <h3 class="text-base font-bold mb-1">Напишите нам</h3>
                    <p class="text-sm mb-3">Заполните форму, и наш менеджер свяжется с вами в ближайшее время.</p>

                    <form class="">
                        <input type="text" name="name" id="name" class="border border-[#eee] rounded-lg p-2 text-base w-full outline-none transition mb-3 hover:border-blue-600 focus:border-[#0a49bf] placeholder:text-sm" placeholder="Ваше имя *">

                        <div class="row flex mb-3">
                            <input type="text" name="phone" id="phone" class="border border-[#eee] rounded-lg p-2 text-base w-1/2 mr-3 outline-none transition hover:border-blue-600 focus:border-[#0a49bf] placeholder:text-sm" placeholder="Телефон *">
                            <input type="email" name="email" id="email" class="border border-[#eee] rounded-lg p-2 text-base w-1/2 outline-none transition hover:border-blue-600 focus:border-[#0a49bf] placeholder:text-sm" placeholder="E-mail *">
                        </div>

                        <textarea name="message" id="message" rows="3" class="mb-1 border border-[#eee] rounded-lg p-2 text-base w-full outline-none transition hover:border-blue-600 focus:border-[#0a49bf] placeholder:text-sm" placeholder="Сообщение"></textarea>

                        <div class="row flex items-center mb-3">
                            <input type="checkbox" name="personal_data" id="personal_data" class="mr-2 border border-[#eee] rounded-lg p-2 text-base outline-none transition hover:border-blue-600 focus:border-[#0a49bf]">
                            <label for="personal_data" class="text-xs">Я согласен на обработку <a href="#" class="text-[#0a49bf] font-bold hover:text-blue-600">персональных данных</a></label>
                        </div>

                        <button class="text-sm text-white self-start bg-[#0a49bf] hover:bg-blue-600 transition flex items-center px-4 py-2 rounded-lg cursor-pointer">Отправить сообщение
                            <svg class="w-4 h-4 ml-5">
                                <use fill="white" href="{{ asset('resources/images/icons/letter.svg') }}" />
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="location rounded-xl w-2/3">
                    <iframe class="w-full rounded-xl" src="https://yandex.ru/map-widget/v1/?um=constructor%3Acdbb89370e368ceaac57f06632258adc395e81a4541b83c926f999299031fddd&amp;source=constructor" width="700" height="500" frameborder="0"></iframe>
                </div>
            </div>
        </section>

        <section class="help-container mb-5">
            <div class="container mx-auto px-4">
                <div class="help flex justify-between bg-[#f5f7fc] rounded-xl py-7 px-6">
                    <div class="info flex items-center w-4/6 lg:w-4/5">
                        <svg class="w-10 h-10 sm:w-15 sm:h-15 mr-3 sm:mr-5 text-[#0a49bf]">
                            <use href="{{ asset('resources/images/icons/assistant.svg') }}" />
                        </svg>

                        <div class="col flex flex-col">
                            <h3 class="text-xs sm:text-sm lg:text-base font-bold mb-2">Нужна помощь в подборе продукции?</h3>
                            <p class="text-xs lg:text-sm w-5/6">Наши специалисты помогут подобрать оптимальное решение под ваш проект и рассчитают стоимость</p>
                        </div>
                    </div>

                    <a href="#" class="wg-2/6 lg:w-1/5 text-xs xl:text-sm self-center text-center text-white bg-[#0a49bf] transition hover:bg-blue-600 px-3 lg:px-0 py-2 xl:py-4 rounded-lg">Получить консультацию</a>
                </div>
            </div>
        </section>
    </main>
@endsection
