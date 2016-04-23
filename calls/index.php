<html data-ember-extension="1"><head>
<meta charset="utf-8">
<title>ГП - Телефонные опросы</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" media="all" href="https://mksurvey-staging.gnhq.info/assets/application-07b516d7e0347153fb561db4fd322795a484f6d4dba68d51eacd6262380e34e0.css" data-turbolinks-track="true">
<script src="https://mksurvey-staging.gnhq.info/assets/application-fe8c70d1b972a5830d3c3e770c7dc8cd40ffd60db74ed707acbbc7016e4ce751.js" data-turbolinks-track="true"></script><style type="text/css"></style>
<link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,400italic&amp;subset=latin,cyrillic">
<link rel="stylesheet" href="style.css">
<meta name="csrf-param" content="authenticity_token">
<meta name="csrf-token" content="GcJ1GN7SEzZHJAmuaGOfFGwFjX4rx9ZmmxQEuOoiXEVOjNI1x3mt4UktIzQKJJ3RmDH5gY5DyqjwyJT1gTRx+A==">
<script>
//<![CDATA[
window.gon={};gon.user_id=4;gon.user_name="Victor Babenko";gon.sip_login="800";gon.sip_password="800";gon.logout_link="<a rel=\"nofollow\" data-method=\"delete\" href=\"/users/sign_out\">Logout</a>";
//]]>
</script>
</head>
<body id="trolleybus">
<div id="emberMain" class="ember-application">
    <div id="ember442" class="ember-view">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <div class="header">
                        <div class="header__logo col-md-4">
                            <img src="logo_shield.png" alt="logo">
                        </div>
                        <div class="header__target col-md-4">
                            <strong>Цель звонка:</strong> проинформировать жителя и получить его согласие помогать кампании, взять адрес и телефон.
                        </div>
                        <div class="call_controls col-md-4">
                            <div class="call_controls__time">00:23:00</div>
                            <div class="call_controls__button">
                                <button class="initiate-call btn btn-success ladda-button hidden" data-style="expand-left" data-ember-action="502">
                                    <span class="ladda-label">Принимать звонки</span>
                                </button>

                                <button class="end-call btn btn-danger ladda-button" data-style="expand-left">
                                    <span class="ladda-label">Отключиться</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="content">
                <div class="leftbar col-md-8 col-sm-12">
                    <div class="col-md-11">
                        <strong>
                            Начните разговор так:
                        </strong>
                        <p>
                            Здравствуйте. Я звоню вам из комитета “Москвичи за троллейбус”, меня зовут…..
                            Вы в курсе планов мэрии Москвы по ликвидации троллейбусов в центре города?
                            Что вы думаете по этому поводу? Как вы к этому относитесь?
                        </p>
                    </div>
                    <div class="col-md-11">
                        <strong>
                            Дальше постарайтесь обсудить тему с троллейбусами поподробнее, используя темы справа.
                        </strong>
                    </div>
                    <div class="col-md-11">
                        <strong>
                            В конце разговора призовите жителя записаться, чтобы мы к нему пришли, передали листовку и приняли обращение в мэрию.
                        </strong>
                    </div>
                    <div class="col-md-11">
                        <button class="btn btn-primary ladda-button" data-style="expand-left">
                            <span class="ladda-label">Начать звонить</span>
                        </button>
                    </div>
                </div>
                <div class="rightbar col-md-4 col-sm-12">
                    <div class="title">
                        Подсказки к разговору
                    </div>
                    <button class="btn btn-default ladda-button pull-right" data-style="expand-left">
                        <span class="ladda-label">Инфо о снятии</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p>
                                В этом году мэрия Москвы планирует ликвидировать троллейбусы в центре города.
                                Прекратится движение по Тверской, Бульварному кольцу, Новому Арбату, Сретенке, Кремлёвскому кольцу
                                и другим центральным улицам. Троллейбусы в центре заменят на дизельные автобусы.
                                Часть маршрутов станет невыгодной и в будущем их существование тоже под вопросом.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right" data-style="expand-left">
                        <span class="ladda-label">Почему собираются снять?</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p>Они объясняют это решение тем, что троллейбусы невыгодны.
                                Это неправда — эксплуатировать троллейбус по данным Мосготранса на 15,5% дешевле, чем автобус.
                            </p>
                            <p>
                                Ещё говорят что троллейбус неповоротливый и создает помехи.
                                На самом деле в центре города проведена реконструкция контактной сети и теперь троллейбусы также манёврены,
                                как автобусы.
                            </p>
                            <p>
                                Также говорят, что контактная сеть в плохом состоянии и происходят энергопотери,
                                но это опровергли сотрудники Мосготранса в открытом письме.
                                Также мэрия говорит, что дорого модернизировать контактную сеть. Однако, стоимость модернизации составляет меньше 1%
                                от расходов на программу благоустройства “Моя улица” в этом году.
                            </p>
                            <p>
                                Реальные причины снятия не ясны, их не анонсируют.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right" data-style="expand-left">
                        <span class="ladda-label">Почему молчат?</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p>
                                Мэрия знает, что эксперты и жители против снятия троллейбуса, поэтому не анонсирует это решение.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right" data-style="expand-left">
                        <span class="ladda-label">Преимущества</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p>
                                Троллейбус более комфортен для поездок. В нём в отличие от автобуса не пахнет горючим, он плавнее едет,
                                электрический двигатель не создаёт вибрацию и не нагревает салон.
                            </p>
                            <p>
                                Троллейбусы дешевле автобусов в эксплуатации; срок службы подвижного состава у них больше,
                                чем автобуса; затраты на обслуживание троллейбусного парка на 15,5% меньше, чем на автобусный.
                                Троллейбус не производит выбросов в атмосферу в отличие даже от самых современных дизельных автобусов.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right" data-style="expand-left">
                        <span class="ladda-label">Экология</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p>
                                Во время движения троллейбус не производит вредных выбросов. С заменой одного троллейбуса на один дизельный автобус
                                в городскую атмосферу будут ежегодно выбрасываться 1,5 тонны угарного газа , 1 тонна оксида азота, пол-тонны оксидов серы
                                и 200 килограмм твердых микрочастиц.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right" data-style="expand-left">
                        <span class="ladda-label">Экономика</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p>
                                Стоимость эксплуатации одного троллейбуса составляет 3 миллиона 410 тысяч рублей в год,
                                в то время как эксплуатация одного автобуса стоит 3 миллиона 940 тысяч рублей.
                                Таким образом, троллейбус экономичнее на 15,5% с учетом всей сопутствующей инфраструктуры и амортизации.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right" data-style="expand-left">
                        <span class="ladda-label">Модернизация</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p>
                                Московские власти говорят о необходимости обновления контактной сети и огромных инвестициях для этого.
                                Однако контактная сеть Москвы нуждается в модернизации лишь отдельных узлов и агрегатов,
                                чтобы соответствовать современным мировым стандартам качества и эстетичности. Кроме того,
                                в конце 90-х — начале 2000-х годов была проведена практически полная реконструкция контактной сети по всему
                                центру Москвы. Таким образом, мэрия планирует демонтировать недавно обновлённые участки сети
                                с современным оборудованием, срок службы которого до 25 лет, а у отдельных элементов — бессрочный.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right" data-style="expand-left">
                        <span class="ladda-label">Троллейбус в мире</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p>
                                В середине прошлого века некоторые города отказались от троллейбусов.
                                В настоящее время экспертным сообществом это признано крупной градостроительной ошибкой.
                                В тех городах, где сегодня сохранились троллейбусные системы, их развивают и модернизируют.
                            </p>
                            <p>
                                Технологии развиваются, и современный троллейбус по всем характеристикам не уступает автобусу.
                                Он манёвренный, такой же быстрый, а его провода почти незаметны.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right" data-style="expand-left">
                        <span class="ladda-label">О неповороливости</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p>
                                Троллейбус объезжает без проблем машины, припаркованные на обочине с соблюдением правил.
                                А вот автотранспорт, стоящий не по правилам, является проблемой не только троллейбуса, а для всего транспортного потока.
                                Еще нужно знать, что проблема не в троллейбусе, а в его контактной сети.
                                Современная сеть, которая уже имеется в центре Москвы, позволяет троллейбусу ехать с максимально разрешенной скоростью
                                и проходить повороты на 50 км/ч. К тому же современные троллейбусы имеют функцию автономного хода.
                                С его помощью они могут отключиться от линии и проехать без сети несколько километров.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right" data-style="expand-left">
                        <span class="ladda-label">Что делать?</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p>
                                Комитет “Москвичи за троллейбус” выпустил информационные буклеты, и есть интернет-сайт.
                                Важно помочь с распространением информации, потому что многие москвичи не в курсе планов мэрии.
                                Листовки можно получить с курьером себе домой и раздать их соседям, коллегам или разложить их по почтовым ящикам
                                в своем подъезде. Если хотите, я ваш дом отмечу на карте, и с вами свяжется курьер из комитета,
                                чтобы принести вам листовок.
                                Он может принести вам на подпись и обращение в мэрию и потом отправить его.
                            </p>
                            <p>
                                <a href="http://trolley.city4people.ru/map/">http://trolley.city4people.ru/map/</a>
                            </p>
                            <p>Скажите улицу и номер дома. Ваш телефон. Как вас зовут. Спасибо!</p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>
                    <form class="form">
                        <input class="form__input" type="text" name="name" placeholder="Имя и отчество жителя">
                        <input class="form__input" type="text" name="phone" placeholder="Номер телефона">
                        <input class="form__input" type="text" name="address" placeholder="Адрес">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
      $('.btn-default').click( function() {
        if($(this).next('.tip').hasClass('show')) {
            $(this).next('.tip').removeClass('show').addClass('hidden');
        }
        else {
            $(this)
            .siblings('.tip').removeClass('show').addClass('hidden').end()
            .next('.tip').removeClass('hidden').addClass('show').end()
            .addClass('active').siblings('.btn-default').removeClass('active');
        }
      });
      $('.close').on('click', function() {
        $(this).closest('.tip').removeClass('show').addClass('hidden');
      });
      $('.tip').on('click', function() {
        $(this).removeClass('show').addClass('hidden');
      });
    });
</script>

</body>
</html>