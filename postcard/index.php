<!DOCTYPE html>
<html>
<head>
    <title>Москвичи за троллейбус</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property="og:url" content="">
    <meta property="og:type" content="article">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:image:width" content="900" />
    <meta property="og:image:height" content="605" />
    <meta name="twitter:card" content="summary">  <!-- Тип окна -->
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen, projection, print">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="icon" href="/favicon.ico" sizes="32x32">
</head>
<body>

    <div class="block1">
        <div class="container">
            <div class="centered">
                <div class="postcards_all">
                    <img src="images/postcard_all.jpg" alt="Открытка с троллейбусом" width="828px" height="370px">
                </div>
                <div class="message">
                    <span>В знак благодарности за пожертвование на кампанию <br> «Москвичи за троллейбус» мы пришлем вам открытку</span>
                </div>
            </div>
            <form id="form1">
                <div class="form1">
                    <div class="form1__title">Напишите свой почтовый адрес </div>
                    <textarea class="form__textarea form1__textarea" name="address" placeholder="Индекс, населенный пункт, улица, квартира"></textarea>
                    <div class="form1__button">
                        <button class="button" type="button">Получить открытку</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="block2">
        <div class="message">
            <div class="container">
                <div class="message__part1">
                    <span>Открытка скоро будет у вас!</span>
                </div>
                <div class="message__part2">
                    <span>Вы так же можете выбрать и отправить открытку <br> чиновникам Москвы или на любой другой адрес</span>
                </div>
            </div>
        </div>
        <form id="form2">
            <div class="steps">
                <div class="step__item">
                    <div class="container">
                        <div class="step__title">
                            <span class="step__num">1</span>
                            <span>Выберите обложку открытки</span>
                        </div>
                        <div class="flexbox postcards">
                            <input type="radio" name="postcard" id="postcard1">
                            <label for="postcard1">
                                <div class="flexbox__item">
                                    <div class="image_wrap">
                                        <img src="images/postcard1.jpg" alt="Открытка с троллейбусом" width="278px" height="200px">
                                    </div>
                                </div>
                            </label>

                            <input type="radio" name="postcard" id="postcard2">
                            <label for="postcard2">
                                <div class="flexbox__item flexbox__item--active">
                                    <div class="image_wrap">
                                        <img src="images/postcard2.jpg" alt="Открытка с троллейбусом" width="278px" height="200px">
                                    </div>
                                </div>
                            </label>

                            <input type="radio" name="postcard" id="postcard3">
                            <label for="postcard3">
                                <div class="flexbox__item">
                                    <div class="image_wrap">
                                        <img src="images/postcard3.jpg" alt="Открытка с троллейбусом" width="278px" height="200px">
                                    </div>
                                </div>
                            </label>

                            <input type="radio" name="postcard" id="postcard4">
                            <label for="postcard4">
                                <div class="flexbox__item">
                                    <div class="image_wrap">
                                        <img src="images/postcard4.jpg" alt="Открытка с троллейбусом" width="278px" height="200px">
                                    </div>
                                </div>
                            </label>

                            <input type="radio" name="postcard" id="postcard5">
                            <label for="postcard5">
                                <div class="flexbox__item">
                                    <div class="image_wrap">
                                        <img src="images/postcard5.jpg" alt="Открытка с троллейбусом" width="278px" height="200px">
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="step__item padded">
                    <div class="container">
                        <div class="step__title">
                            <span class="step__num">2</span>
                            <span>Кому отправить открытку</span>
                        </div>
                        <div class="flexbox destination">
                            <input type="radio" name="destination" id="destination1">
                            <label for="destination1">
                                <div class="flexbox__item flexbox__item--active">
                                    <div class="step__container">
                                        <div class="step__name">Сергей Собянин</div>
                                        <div class="step__post">мэр г. Москвы</div>
                                    </div>
                                </div>
                            </label>
                            <input type="radio" name="destination" id="destination2">
                            <label for="destination2">
                                <div class="flexbox__item">
                                    <div class="step__container">
                                        <div class="step__name">Максим Ликсутов</div>
                                        <div class="step__post">глава Департамента <br /> транспорта Москвы</div>
                                    </div>
                                </div>
                            </label>
                            <input type="radio" name="destination" id="destination3">
                            <label for="destination3">
                                <div class="flexbox__item">
                                    <div class="step__container">
                                        <div class="step__name">Евгений Михайлов</div>
                                        <div class="step__post">директор <br /> ГУП «Мосгортранс»</div>
                                    </div>
                                </div>
                            </label>
                            <input type="radio" name="destination" id="destination4">
                            <label for="destination4">
                                <div class="flexbox__item" id="other_dest">
                                    <div class="step__container">
                                        <div class="step__name">Другой адресат</div>
                                    </div>
                                </div>
                                <div class="dropdown_wrap">
                                    <div class="dropdown">
                                        <div class="dropdown__tail"></div>
                                        <textarea class="form__textarea form2__textarea" name="address" placeholder="Индекс, населенный пункт, улица, квартира"></textarea>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="step__item backgrounded">
                    <div class="container">
                        <div class="step__title">
                            <span class="step__num">2</span>
                            <span>Кому отправить открытку</span>
                        </div>
                        <textarea class="form__textarea form2__textarea" name="message" >Спасибо, что поучаствовали в кампании «Москвичи за троллейбус»! Кампания полностью финансируется на небольшие пожертвования, такие, как ваши.

Электротранспорт — это будущее общественного транспорта. Москва не должна повторять ошибки 60-х годов прошлого века, которые совершали европейские города, убирая электротранспорт из центра города.

Независимые общественные кампании и позиция неравнодушных людей позволяют горожанам узнать о подобных планах, а властям посылают сигнал, что вредные для города решения не удастся провести в тишине.

Надеюсь на ваше дальнейшее участие в этом и других наших проектах

Максим Кац,
директор фонда «Городские проекты»</textarea>
                        <div class="form__hint">
                            <span>Вы можете редактировать текст, <br> как вам угодно</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <button class="button" type="button">Отправить открытку</button>
            </div>
        </form>
    </div>
    <div class="block3">
        <div class="centered_table">
            <div class="centered_row">
                <div class="centered_cell">
                    <div class="message">
                        <span>Открытка уже летит к адресату!</span>
                    </div>
                    <button class="button_another" type="button">Создать ещё одну открытку</button>
                </div>
            </div>
        </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.flexbox__item').on('click', function() {
            if($(this).hasClass('flexbox__item--active')) {
                $('.dropdown').removeClass('dropdown--visible');
                return;
            }
            else {
                $('.dropdown').removeClass('other_dest');
                $('.dropdown').removeClass('dropdown--visible');
                $('.flexbox__item').removeClass('flexbox__item--active');
                $(this).addClass('flexbox__item--active');
                if($(this).attr('id') === "other_dest") {
                    $(this).addClass('other_dest');
                    $('.dropdown').addClass('dropdown--visible');
                }
            }
        });
    });
</script>
</body>
</html>