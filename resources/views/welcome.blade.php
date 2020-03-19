@extends('layouts.app')

@section('content')
<section class="bg-main position-relative">
    <div class="backdrop"></div>
    <div class="container position-relative py-3">
        <div class="row align-items-center logo">
            <div class="col-15 col-lg-2 text-center">
                <img src="{{ asset('img/logo.svg') }}" style="width: 150px; height: auto;" alt="">
            </div>
            <div class="col-15 col-lg-3 text-center">
                <p class="text-white pt-2 m-0">Время в Китае: {{ \Carbon\Carbon::now()->addHours(8)->format('H:i') }}</p>
                <p class="text-white">Время в Стамбуле: {{ \Carbon\Carbon::now()->addHours(3)->format('H:i') }}</p>
            </div>
            <div class="col-15 col-lg-7 py-4 text-center d-md-flex d-block">
                <div class="mx-2 my-5 my-md-0">
                    <a class="border rounded-pill p-3 text-white" href="tel:+996706199144">+ 996 706 199 144</a>
                </div>
                <div class="mx-2 my-5 my-md-0">
                    <a class="border rounded-pill p-3 text-white" href="tel:+996770199144">+ 996 770 199 144</a>

                </div>

            </div>
{{--            <div class="col-15 col-lg-2 text-center">--}}
{{--                <div class="dropdown">--}}
{{--                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"--}}
{{--                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Выбрать язык--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
{{--                        <a class="dropdown-item" href="#">Русский</a>--}}
{{--                        <a class="dropdown-item" href="#">Кыргызча</a>--}}
{{--                        <a class="dropdown-item" href="#">English</a>--}}
{{--                        <a class="dropdown-item" href="#">Turkish</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="row min-vh-100 align-items-center py-3">
            <div class="col-15 col-lg-15 text-white text-center">
                <p class="h1 py-4">Грузоперевозки из Китая и Стамбула под ключ</p>
                <a class="text-white p-3 " style="background: #17679A;border-radius: 15px;" href="#form-request">Заказать
                    обратный звонок</a>
                {{--            </div>--}}
                {{--            <div class="col-12 col-lg-4 row justify-content-md-end d-inline-block">--}}
                <ul class="list-inline py-3" style="list-style: none">
                    <li class="list-inline-item py-4 px-2"><a class="text-white" href="#wechat"><i class="fab fa-weixin fa-2x"></i></a></li>
                    <li class="list-inline-item py-4 px-2"><a class="text-white" href="https://www.instagram.com/akilbirs.kg/?hl=ru"><i class="fab fa-instagram fa-2x"></i></a></li>
                    <li class="list-inline-item py-4 px-2"><a class="text-white" href="https://t.me/996770199144"><i class="fab fa-telegram fa-2x"></i></a></li>
                    <li class="list-inline-item py-4 px-2"><a class="text-white"
                            href="https://api.whatsapp.com/send?phone=996770199144"><i class="fab fa-whatsapp fa-2x"></i></a></li>
                    <li class="list-inline-item py-4 px-2"><a class="text-white" href="https://www.facebook.com/tk.akilbirs/"><i class="fab fa-facebook fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white">
        <div class="row align-items-center">
            <div class="col-15 col-lg-3 d-md-flex d-block align-items-center">
                <div class="col-15 col-lg-3 text-lg-right text-center pb-2 px-0">
                    <img class="img-fluid text-lg-right" src="{{ asset('img/perevozka_gruzov.png') }}" alt="">
                </div>
                <div class="col-15 col-lg-10   text-center">
                    <p class="">Перевозка сборных
                        грузов от 1 кг</p>
                </div>
            </div>
            <div class="col-15 col-lg-3 d-md-flex d-block align-items-center">
                <div class="col-15 col-lg-3 text-lg-right text-center  pb-2 px-0">
                    <img class="img-fluid text-lg-right" src="{{ asset('img/sklad_v_guangou.png') }}" alt="">
                </div>
                <div class="col-15 col-lg-10  text-center">
                    <p class="pt-2">Склад в
                        Гуанчжоу и Стамбуле</p>
                </div>
            </div>
            <div class="col-15 col-lg-3 d-md-flex d-block align-items-center">
                <div class="col-15 col-lg-3 text-lg-right text-center  pb-2 px-0">
                    <img class="img-fluid text-lg-right" src="{{ asset('img/express_dostavka.png') }}" alt="">
                </div>
                <div class="col-15 col-lg-10   text-center">
                    <p class="">Экспресс доставка
                        от 7 дней</p>
                </div>
            </div>
            <div class="col-15 col-lg-3 d-md-flex d-block align-items-center">
                <div class="col-15 col-lg-3 text-lg-right text-center  pb-2 px-0">
                    <img class="img-fluid text-lg-right" src="{{ asset('img/dostavka_do_dveri.png') }}" alt="">
                </div>
                <div class="col-15 col-lg-10   text-center">
                    <p class="pt-2">Доставка
                        до двери</p>
                </div>
            </div>
            <div class="col-15 col-lg-3 d-md-flex d-block align-items-center">
                <div class="col-15 col-lg-3 text-lg-right text-center  pb-2 px-0">
                    <img class="img-fluid text-lg-right" src="{{ asset('icons/trip.png') }}" alt="">
                </div>
                <div class="col-15 col-lg-10   text-center">
                    <p class="pt-2">Авиадоставка от 3 дней</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-3">
    <div class="container py-5">
        <div class="row text-white">
            <div class="col-15 advantages text-center">
                <img src="{{ asset('img/track.png') }}" alt="">
                <div class="row justify-content-center">
                    <img class="img-fluid advantages-img d-none d-sm-block" src="{{ asset('img/right_line.png') }}"
                         alt="">
                    <h2 class="text-dark">Наши преимущества</h2>
                    <img class="img-fluid advantages-img d-none d-sm-block" src="{{ asset('img/left_line.png') }}"
                         alt="">
                </div>
            </div>
        </div>
        <div class="row text-white justify-content-center">
            <div class="col-15 col-lg-3 col-md-6 text-center py-2">
                <div class="bg_advantages p-4">
                    <img src="{{ asset('img/delivery-truck.png') }}" alt="">
                    <hr>
                    <p style="min-height: 40px;">Скорость</p>
                </div>
            </div>
            <div class="col-15 col-lg-3 col-md-6 text-center py-2">
                <div class="bg_advantages p-4">
                    <img src="{{ asset('img/men-carrying-a-box.png') }}" alt="">
                    <hr>
                    <p style="min-height: 40px;">Без посредников</p>
                </div>
            </div>
            <div class="col-15 col-lg-3 col-md-6 text-center py-2">
                <div class="bg_advantages p-4">
                    <img src="{{ asset('img/package.png') }}" alt="">
                    <hr>
                    <p style="min-height: 40px;"> Сохранность грузов</p>
                </div>
            </div>
            <div class="col-15 col-lg-3 col-md-6 text-center py-2">
                <div class="bg_advantages p-4">
                    <img src="{{ asset('img/calendar.png') }}" alt="">
                    <hr>
                    <p style="min-height: 56px;margin-bottom: 0;">Работаем без выходных</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-5">
        <div class="row text-white">
            <div class="col-15 advantages text-center">
                <img src="{{ asset('img/visa (3).png') }}" alt="">
                <div class="row justify-content-center">
                    <img class="img-fluid advantages-img d-none d-sm-block" src="{{ asset('img/right_line.png') }}"
                         alt="">
                    <h2 class="text-dark">Визовая помощь в Китай и Турцию</h2>
                    <img class="img-fluid advantages-img d-none d-sm-block" src="{{ asset('img/left_line.png') }}"
                         alt="">
                </div>
            </div>
        </div>
        <div class="row text-white">
            <div class="col-15 col-lg-5 col-md-6 text-center py-3">
                <div class="bg_advantages p-5">
                    <img src="{{ asset('img/team (1).png') }}" alt="">
                    <hr>
                    <p style="min-height: 50px;">Оформление групповых и индивидуальных виз</p>
                </div>
            </div>
            <div class="col-15 col-lg-5 col-md-6 text-center py-3">
                <div class="bg_advantages p-5">
                    <img src="{{ asset('img/experience (2).png') }}" alt="">
                    <hr>
                    <p style="min-height: 50px;">Опыт работы более 20 лет</p>
                </div>
            </div>
            <div class="col-15 col-lg-5 col-md-6 text-center py-3">
                <div class="bg_advantages p-5">
                    <img src="{{ asset('img/trip.png') }}" alt="">
                    <hr>
                    <p style="min-height: 50px;">Туры и поездки по всему миру</p>
                </div>
            </div>
        </div>
        <div class="row text-white">
            <div class="col-15 col-lg-10 text-center text-dark pt-4">
                <p class="h4 font-weight-bold">Контактные данные визового консультанта</p>
                <p>Адрес: Кыргызстан, г.Бишкек, ул.Шопокова (Ред Центр,5 этаж,516 кабинет) 121/1</p>
                <a href="tel:+996509199144"><p class="text-dark">Телефонный номер: +996509199144</p></a>
                <a href="" class="text-dark mx-2"><i class="fab fa-2x fa-weixin"></i></a>
                <a href="" class="text-dark mx-2"><i class="fab fa-2x fa-telegram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=996509199144" class="text-dark mx-2"><i class="fab fa-2x fa-whatsapp"></i></a>
            </div>
            <div class="col-15 col-lg-5  text-center text-dark pt-4">
                <p class="h4 font-weight-bold">Wechat:</p>
                <img class="img-fluid mx-2" src="{{ asset('img/photo_2020-02-15_16-34-09.jpg') }}" alt="" style="width: 150px;height: 150px">
            </div>
        </div>
    </div>
</section>

<section style="background: #E5E5E5;">
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-15">
                <h2>Наши партнеры</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-15 col-lg-5 col-md-6 py-5 text-center">
                <a href="https://texmart.kg/"><img class="img-fluid pt-2" src="{{ asset('img/logo2.png') }}"
                                                   alt=""></a>
            </div>
            <div class="col-15 col-lg-5 col-md-6 py-5 text-center">
                <a href=""><img class="img-fluid pt-2"
                                src="{{ asset('img/final.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-15 text-center py-3">
                <h2>Частые вопросы</h2>
            </div>
            <div class="py-2 col-15">
                <button class="accordion border rounded-pill">Как отправить груз вашей транспортной компанией?
                </button>
                <div class="panel">
                    <p>
                        Прежде чем отправить груз, Вы должны нам сообщить характеристику груза:
                    </p>
                    <ul>
                        <li>вес, объем и спецификацию груза;</li>
                        <li>связаться с нашим менеджером по телефону, чтобы получить более подробную информацию о
                            местонахождения наших складов;
                        </li>
                        <li>после прибытья вашего груза на наши склады в Гуанчжоу и Стамбул, мы сообщаем о получении
                            груза и если нужно можем проверить товар (количество, цвет, размер и т.д.)
                        </li>
                    </ul>
                </div>
            </div>
            <div class="py-2 col-15">
                <button class="accordion border rounded-pill">Какие сроки доставки?</button>
                <div class="panel">
                    <p>Гуанжоу - срок доставки грузов от 7 до 25 дней с момента получения груза на наш склад. </p>
                    <p>Стамбул - срок доставки грузов от 2 до 15 дней с момента получения груза на наш склад. </p>
                    <p>Помимо этого на сроки могут повлиять факторы: </p>
                    <ul>
                        <li>погодные условия;</li>
                        <li>режим работы границ и таможенных органов;</li>
                        <li>форс-мажорные обстоятельство: эпидемии, катастрофы и т.д.</li>
                    </ul>
                </div>
            </div>
            <div class="py-2 col-15">
                <button class="accordion border rounded-pill">Какая стоимость грузоперевозки?</button>
                <div class="panel">
                    <p>Стоимость доставки груза зависит от:</p>
                    <ul>
                        <li>объема, веса, от типа груза вида транспорта и доставки</li>
                        <li>для уточнения стоимости свяжитесь с нашим менеджером.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <section class="pt-5 bg_footer" style="">
        <div class="container text-white">
            <div class="col-15 text-center">
                <h2>Свяжитесь с нами</h2>
            </div>
            <div class="row">
                <div class="col-15 col-lg-4 ">
                    <div class="text-center">
                        <p class="h4">Телефоны:</p>
                        <a class="text-white" href="tel:+996 770 199 144"><p style="margin-bottom: 0">+996 770 199
                                144</p></a>
                        <a class="text-white" href="tel:+996 706 199 144"><p>+996 706 199 144</p></a>
                    </div>
                </div>
                <div class="col-15 col-lg-4 ">
                    <div class="text-center">
                        <p class="h4">Email:</p>
                        <a class="text-white" href="mailto:"><p>info@akilbirs.kg</p></a>
                    </div>
                </div>
                <div class="col-15 col-lg-4 ">
                    <div class="text-center">
                        <p class="h4">Адрес:</p>
                        <p class="text-white text-center">г. Бишкек, ул. Ибраимова, 208а,
                            рынок “Дордой”, “Ак-Суу”,
                            склад №125</p>
                    </div>
                </div>
                <div class="col-15 col-lg-3 r">
                    <div class="text-center" id="wechat">
                        <p class="h4 text-white">Wechat:</p>
                        <img class="img-fluid mx-2" src="{{ asset('img/photo_2020-03-19_14-14-26.jpg') }}" alt="" style="width: 150px;height: 150px">
                    </div>
                </div>
                <div class="col-15 col-lg-8 col-md-6 pt-5">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3Aab66f004e34297061650de4b5e4eae2f3ca8c1392477903ce2d5cc71771d86fc&amp;source=constructor"
                        width="100%" height="450" frameborder="0"></iframe>
                </div>
                <div class="col-15 col-lg-7 col-md-6 py-5">
                    <form id="form-request" method="post" action="{{ route('form.request') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Имя *" required>
                            </div>
                            <div class="col">
                                <input type="text" name="phone" class="form-control" placeholder="Телефон *" required>
                            </div>
                        </div>
                        <div class="form-group pt-3">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="E-mail">
                        </div>
                        <div class="form-group pb-4">
                            <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="10"
                                      placeholder="Комментарий"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="text-white p-3 text-center btn" style="background: #063E62;border-radius: 15px;" href="">Заказать
                                обратный звонок</button>
                        </div>
                    </form>

                    {{--                    <a class="text-white p-3 text-center" style="background: #063E62;border-radius: 15px;" href="">Заказать--}}
                    {{--                        обратный звонок</a>--}}
                    <div class="text-center py-4">
                        <a href="#wechat"><img class="px-1" src="{{ asset('icons/wechat.svg') }}" alt=""></a>
                        <a href="https://www.instagram.com/akilbirs.kg/?hl=ru"><img class="px-1" src="{{ asset('icons/insta.png') }}" alt=""></a>
                        <a href="https://t.me/996770199144"><img class="px-1" src="{{ asset('icons/telegram.png') }}" alt=""></a>
                        <a href="https://api.whatsapp.com/send?phone=996770199144"><img class="px-1" src="{{ asset('icons/whatsapp.png') }}" alt=""></a>
                        <a href="https://www.facebook.com/tk.akilbirs/"><img class="px-1" src="{{ asset('icons/facebook.png') }}" alt=""></a>
                    </div>
                </div>
                {{--                <div class="col-11 row justify-content-end">--}}
                {{--                    <a class="text-white p-3 text-center" style="background: #063E62;border-radius: 15px;" href="">Заказать--}}
                {{--                        обратный звонок</a>--}}
                {{--                </div>--}}
                {{--                <div class="col-11 row justify-content-end py-3">--}}
                {{--                    <img class="px-2" src="{{ asset('icons/wechat.svg') }}" alt="">--}}
                {{--                    <img class="px-2" src="{{ asset('icons/insta.png') }}" alt="">--}}
                {{--                    <img class="px-2" src="{{ asset('icons/telegram.png') }}" alt="">--}}
                {{--                    <img class="px-2" src="{{ asset('icons/whatsapp.png') }}" alt="">--}}
                {{--                    <img  class="px-2" src="{{ asset('icons/facebook.png') }}" alt="">--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>
</footer>
@endsection
