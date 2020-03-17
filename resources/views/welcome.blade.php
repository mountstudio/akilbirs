<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{--    <div class="logo">--}}
    {{--        <img src="{{ asset('img/ak_ilbirs_logo.png') }}" alt="">--}}
    {{--    </div>--}}
    {{--    <button>--}}

    {{--    </button>--}}
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript">
    </script>
</head>
<body>
<section class="bg-main position-relative">
    <div class="backdrop"></div>
    <div class="container position-relative py-3">
        <div class="row align-items-center logo">
            <div class="col-12 col-lg-2 text-center">
                <img src="{{ asset('img/logo.svg') }}" style="width: 150px; height: auto;" alt="">
            </div>
            <div class="col-12 col-lg-3 text-center">
                <p class="text-white pt-2 m-0">Время в Китае: 21:40:40</p>
                <p class="text-white">Время в Стамбуле: 21:40:40</p>
            </div>
            <div class="col-12 col-lg-3 py-4 text-center">
                <a class="border rounded-pill p-3 text-white" href="tel:+ 996 706 199 144">+ 996 706 199 144</a>
            </div>
            <div class="col-12 col-lg-4 text-center">
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Выбрать язык
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Русский</a>
                        <a class="dropdown-item" href="#">Кыргызча</a>
                        <a class="dropdown-item" href="#">English</a>
                        <a class="dropdown-item" href="#">Turkish</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row min-vh-100 align-items-center py-3">
            <div class="col-12 col-lg-12 text-white text-center">
                <p class="h1 py-4">Грузоперевозки из Китая и Стамбула под ключ</p>
                <a class="text-white p-3 " style="background: #17679A;border-radius: 15px;" href="">Заказать
                    обратный звонок</a>
{{--            </div>--}}
{{--            <div class="col-12 col-lg-4 row justify-content-md-end d-inline-block">--}}
                <ul class="list-inline py-3" style="list-style: none">
                    <li class="list-inline-item py-4 px-2"><a href=""><img src="{{ asset('icons/wechat.svg') }}" alt="wechat"></a></li>
                    <li class="list-inline-item py-4 px-2"><a href="https://www.instagram.com/akilbirs.kg/?hl=ru"><img
                                src="{{ asset('icons/insta.png') }}" alt="insta"></a></li>
                    <li class="list-inline-item py-4 px-2"><a href="https://t.me/996770199144"><img src="{{ asset('icons/telegram.png') }}"
                                                                              alt="telegram"></a></li>
                    <li class="list-inline-item py-4 px-2"><a href="https://api.whatsapp.com/send?phone=996770199144"><img
                                src="{{ asset('icons/whatsapp.png') }}" alt="whatsapp"></a></li>
                    <li class="list-inline-item py-4 px-2"><a href="https://www.facebook.com/tk.akilbirs/"><img
                                src="{{ asset('icons/facebook.png') }}" alt="facebook"></a></li>
                </ul>
            </div>
        </div>
        <div class="text-white">
           <div class="row align-items-center">
               <div class="col-12 col-lg-1 text-lg-right text-center pb-2 px-0">
                   <img class="img-fluid text-lg-right" src="{{ asset('img/perevozka_gruzov.png') }}" alt="">
               </div>
               <div class="col-12 col-lg-2   text-center">
                   <p class="">Перевозка сборных
                       грузов от 1 кг</p>
               </div>
               <div class="col-12 col-lg-1 text-lg-right text-center  pb-2 px-0">
                   <img class="img-fluid text-lg-right" src="{{ asset('img/sklad_v_guangou.png') }}" alt="">
               </div>
               <div class="col-12 col-lg-2  text-center">
                   <p class="pt-2">Склад в
                       Гуанчжоу</p>
               </div>
               <div class="col-12 col-lg-1 text-lg-right text-center  pb-2 px-0">
                   <img class="img-fluid text-lg-right" src="{{ asset('img/express_dostavka.png') }}" alt="">
               </div>
               <div class="col-12 col-lg-2   text-center">
                   <p class="">Экспресс доставка
                       от 7 дней</p>
               </div>
               <div class="col-12 col-lg-1 text-lg-right text-center  pb-2 px-0">
                   <img class="img-fluid text-lg-right" src="{{ asset('img/dostavka_do_dveri.png') }}" alt="">
               </div>
               <div class="col-12 col-lg-2   text-center">
                   <p class="pt-2">Доставка
                       до двери</p>
               </div>

           </div>
{{--            <hr style="width: 868px;">--}}
        </div>
    </div>
</section>
<section class="pt-3">
    <div class="container">
        <div class="row  text-white">
            <div class="col-12 advantages text-center">
                <img src="{{ asset('img/track.png') }}" alt="">
                <div class="row justify-content-center">
                    <img class="img-fluid advantages-img d-none d-sm-block" src="{{ asset('img/right_line.png') }}" alt="">
                    <h2 class="text-dark">Наши преимущества</h2>
                    <img class="img-fluid advantages-img d-none d-sm-block" src="{{ asset('img/left_line.png') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 text-center py-2">
                <div class="bg_advantages p-5">
                    <img src="{{ asset('img/delivery-truck.png') }}" alt="">
                    <hr>
                    <p style="min-height: 40px;">Скорость</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 text-center py-2">
                <div class="bg_advantages p-5">
                    <img src="{{ asset('img/men-carrying-a-box.png') }}" alt="">
                    <hr>
                    <p style="min-height: 40px;">Без посредников</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 text-center py-2">
                <div class="bg_advantages p-5">
                    <img src="{{ asset('img/package.png') }}" alt="">
                    <hr>
                    <p style="min-height: 40px;"> Сохранность грузов</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 text-center py-2">
                <div class="bg_advantages p-5">
                    <img src="{{ asset('img/calendar.png') }}" alt="">
                    <hr>
                    <p style="min-height: 56px;margin-bottom: 0;">Работаем без выходных</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="col-12 text-center py-3">
    <h2>Наши партнеры</h2>
</div>
<section class="" style="background: #E5E5E5;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-3 col-md-6 py-5 text-center">
                <a href="https://texmart.kg/"><img class="img-fluid pt-2" src="{{ asset('img/logo2.png') }}"
                                                   alt=""></a>
            </div>
            <div class="col-12 col-lg-3 col-md-6 py-5 text-center">
                <a href=""><img class="img-fluid pt-2"
                                src="{{ asset('img/final.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-3">
                <h2>Частые вопросы</h2>
            </div>
            <div class="py-2 col-12">
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
            <div class="py-2 col-12">
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
            <div class="py-2 col-12">
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
            <div class="col-12 text-center">
                <h2>Свяжитесь с нами</h2>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 d-flex row justify-content-center">
                    <div class="text-center">
                        <p class="h4">Телефоны:</p>
                        <a class="text-white" href="tel:+996 770 199 144"><p style="margin-bottom: 0">+996 770 199
                                144</p></a>
                        <a class="text-white" href="tel:+996 706 199 144"><p>+996 706 199 144</p></a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 row justify-content-center">
                    <div class="text-center">
                        <p class="h4">Email:</p>
                        <a class="text-white" href="mailto:"><p>info@akilbirs.kg</p></a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 row justify-content-center">
                    <div class="text-center">
                        <p class="h4">Адрес:</p>
                        <p class="text-white text-center">г. Бишкек, ул. Ибраимова, 208а,
                            рынок “Дордой”, “Ак-Суу”,
                            склад №125</p>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-md-6 pt-5">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3Aab66f004e34297061650de4b5e4eae2f3ca8c1392477903ce2d5cc71771d86fc&amp;source=constructor"
                        width="100%" height="450" frameborder="0"></iframe>
                </div>
                <div class="col-12 col-lg-5 col-md-6 py-5">
                    <form>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Имя">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Телефон">
                            </div>
                        </div>
                        <div class="form-group pt-3">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="E-mail">
                        </div>
                        <div class="form-group pb-4">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                                      placeholder="Комментарий"></textarea>
                        </div>
                    </form>
                    <div class="text-center">
                        <a class="text-white p-3 text-center" style="background: #063E62;border-radius: 15px;" href="">Заказать
                            обратный звонок</a>
                    </div>
                    {{--                    <a class="text-white p-3 text-center" style="background: #063E62;border-radius: 15px;" href="">Заказать--}}
                    {{--                        обратный звонок</a>--}}
                    <div class="text-center py-4">
                        <img class="px-1" src="{{ asset('icons/wechat.svg') }}" alt="">
                        <img class="px-1" src="{{ asset('icons/insta.png') }}" alt="">
                        <img class="px-1" src="{{ asset('icons/telegram.png') }}" alt="">
                        <img class="px-1" src="{{ asset('icons/whatsapp.png') }}" alt="">
                        <img class="px-1" src="{{ asset('icons/facebook.png') }}" alt="">
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
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>
</body>
</html>

