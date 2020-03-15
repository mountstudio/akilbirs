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
    <div class="logo">
        <img src="{{ asset('img/ak_ilbirs_logo.png') }}" alt="">
    </div>
    {{--    <button>--}}

    {{--    </button>--}}

</head>
<body>
<section class="bg-main">
    <div class="container ">
        <div class="row">
            <div class="col-8 text-white">
                <p>Транспортная компания “Ак-Илбирс”</p>
                <p>Грузоперевозки из Китая
                    под ключ</p>
                <p>Прямые доставки В Кыргызстан, Россию и Казахстан</p>
            </div>
            <div class="col-4 row justify-content-end">
               <ul class="" style="list-style: none">
                   <li class="pt-3"><a href=""><img src="{{ asset('icons/wechat.svg') }}" alt="wechat"></a></li>
                   <li class="pt-3"><a href=""><img src="{{ asset('icons/insta.png') }}" alt="insta"></a></li>
                   <li class="pt-3"><a href=""><img src="{{ asset('icons/telegram.png') }}" alt="telegram"></a></li>
                   <li class="pt-3"><a href=""><img src="{{ asset('icons/whatsapp.png') }}" alt="whatsapp"></a></li>
                   <li class="pt-3"><a href=""><img src="{{ asset('icons/facebook.png') }}" alt="facebook"></a></li>
               </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row  text-white">
            <div class="col-12 text-center">
                <img src="{{ asset('img/track.png') }}" alt="">
                <div class="">
                    <img src="{{ asset('img/right_line.png') }}" alt="">
                    <img src="{{ asset('img/left_line.png') }}" alt="">
                    <h2 class="text-dark">Наши преимущества</h2>
                </div>

            </div>
            <div class="col-12 col-lg-3 text-center py-2">
                <div class="bg_advantages p-5">
                    <img src="{{ asset('img/delivery-truck.png') }}" alt="">
                    <hr class="" style="border: 1px solid #FFFFFF;width: 174px;">
                    <p>Скорость</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-center py-2">
                <div class="bg_advantages p-5">
                    <img src="{{ asset('img/men-carrying-a-box.png') }}" alt="">
                    <hr class="" style="border: 1px solid #FFFFFF;width: 174px;">
                    <p>Без посредников</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-center py-2">
                <div class="bg_advantages p-5">
                    <img src="{{ asset('img/package.png') }}" alt="">
                    <hr class="" style="border: 1px solid #FFFFFF;width: 174px;">
                    <p>Сохранность грузов</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-center py-2">
                <div class="bg_advantages p-5">
                    <img src="{{ asset('img/calendar.png') }}" alt="">
                    <hr class="" style="border: 1px solid #FFFFFF;width: 174px;">
                    <p>Работаем без выходных</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="col-12 text-center">
    <h2>Наши партнеры</h2>
</div>
<section class="" style="background: #E5E5E5;">
    <div class="container">
        <div class="row text-center">

            <div class="col-12 py-5 text-center">
                <img  class="img-fluid pt-2" src="{{ asset('img/bgi.png') }}" alt="">
                <img class="img-fluid pt-2" src="{{ asset('img/silk_way.png') }}" alt="">
                <img  class="img-fluid pt-2" src="{{ asset('img/logo2.png') }}" alt="">
                <img class="img-fluid pt-2" src="{{ asset('img/39665445_1848831628533501_8509947650815033344_n.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-3">
                <h2 >Частые вопросы</h2>
            </div>
            <div class="py-2 col-12">
                <button class="accordion border rounded-pill">Какой максимальный вес груза?
                </button>
                <div class="panel">
                    <p>No, all used tires at Emmo Tires are well inspected and there is no any repairs. They are
                        inspected at least twice, once prior to listing for sale and once again prior to shipping out to
                        a buyer.</p>
                </div>
            </div>
            <div class="py-2 col-12">
                <button class="accordion border rounded-pill">Can Shipping Charges Be Reduced Or Discounted?</button>
                <div class="panel">
                    <p>Shipping is FREE to all cities of California . </p>
                </div>
            </div>
            <div class="py-2 col-12">
                <button class="accordion border rounded-pill">Do You Sell Rims/Wheels?</button>
                <div class="panel">
                    <p>No. We focused on used tires only.</p>
                </div>
            </div>
            <div class="py-2 col-12">
                <button class="accordion border rounded-pill">Do you sell Tires For All Types Of Vehicles?
                </button>
                <div class="panel">
                    <p>Yes, we sell used tires for all types of vehicle. </p>
                </div>
            </div>
            <div class="py-2 col-12">
                <button class="accordion border rounded-pill">How do i make a request for used tires?</button>
                <div class="panel">
                    <p>Please contact us directly by mail, or telephone. </p>
                </div>
            </div>
            <div class="py-2 col-12">
                <button class="accordion border rounded-pill">What are the terms of payment?</button>
                <div class="panel">
                    <p>We have been working with our customers on the basis of trust. The payment would be done after
                        the delivery.No deposit required.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <section class="pt-5" style="">
        <div class="container">
            <div class="col-12 text-center">
                <h2>Свяжитесь с нами</h2>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 d-flex">
                    <div>
                        <p>Телефоны:</p>
                        <p>+996 770 199 144</p>
                        <p>+996 706 199 144</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div>
                        <p>Email:</p>
                        <p>info@akilbirs.kg</p>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <p>Адрес:</p>
                        <p>г. Бишкек, ул. Ибраимова, 208а,
                            рынок “Дордой”, “Ак-Суу”,
                            склад №125</p>
                    </div>

                </div>
                <div>
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
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Комментарий"></textarea>
                        </div>
                    </form>
                </div>
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

