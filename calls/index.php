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


<script>


// Shorter variant of the jquery ajax function.
function shortAjax(path, data, onSuccess, unique_name){

	if (unique_name === undefined){
		$.ajax({
			type: "GET",
			url: path,
			cache: false,
			data: data,
			success: onSuccess,
		});	
	}
	else {
		// Deletes multi-queries
		if (GLOBAL_AJAX[unique_name] !== undefined){
			if (typeof(GLOBAL_AJAX[unique_name]) !== undefined)	GLOBAL_AJAX[unique_name].abort();
		}
		
		GLOBAL_AJAX[unique_name] = $.ajax({
			type: "GET",
			url: path,
			cache: false,
			data: data,
			success: onSuccess,
		});		
	}
}

function smartAjax(path, data, onSuccess, onError, unique_name){
	
	var innerHandler = function(msg){
		//var steamid = arguments.callee.steamid ;
		
		try {
			
			msg = JSON.parse(msg);
			
		}
		catch (e){
			msg = {};
			msg.error = 'incorrectJSON';
		}
	
			
		if (typeof(arguments.callee.onSuccess) == "function" && msg.error == "false"){
			arguments.callee.onSuccess.apply(null, [msg]);
		}		


		
		if (typeof(arguments.callee.onError) == "function" && msg.error != "false"){
			arguments.callee.onError.apply(null, [msg]);
		}
		else {
			if (msg.error != "false"){
				if (msg.error_text !== undefined){
					mainSite.postError(msg.error_text);
				}
				else {
					console.log(msg.error);
				}			
			}					
		}
		
	};
	
	innerHandler.onSuccess = onSuccess ;
	innerHandler.onError = onError ;
	
	shortAjax(path, data, innerHandler, unique_name);
	
}



gitter = {
	
	button: {},

	sendUserInfoForm: function(){
		
		gitter.setButtonStatus('Подождите');
		
		var container = $('.userInfoForm');
	
		var data = {};
		
		container.find('input.ajax_arg, textarea.ajax_arg').each(function(){
			data[$(this).attr('name')] = $(this).val();
		});		
		
		data.context = 'addFromCallcentre';
		
		smartAjax('http://trolley.city4people.ru/map/ajax/ajax_trolley.php', data, function(msg){
			
			alert('Готово!');
			
			gitter.setButtonStatus('Отправить');
			
			var container = $('.userInfoForm');
			
			container.find('ajax_arg').val('');
			
		}, function(msg){
			alert(msg.error_text);
			
			gitter.setButtonStatus('Отправить');
		});			
	
	},
	
	setButtonStatus: function(text){
	
		$(gitter.button).find('span').html(text);
	},

};

</script>


</head>
<body id="trolleybus">
<div id="emberMain" class="ember-application calls">
    <div id="ember442" class="ember-view">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <div class="header">
                        <div class="header__logo col-md-6">
                            <img src="logo_shield.png" alt="logo">
                        </div>
                        <div class="call_controls col-md-6">
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
                        <p class="paragraf_text">
                            Здравствуйте. Я звоню вам из комитета “Москвичи за троллейбус”, меня зовут…..
                            Вы в курсе планов мэрии Москвы по ликвидации троллейбусов в центре города?
                            Что вы думаете по этому поводу? Как вы к этому относитесь?
                        </p>
                    </div>
                    <div class="col-md-11">
                        <div class="highlight-blue">
                            Дальше постарайтесь обсудить тему с троллейбусами поподробнее, используя темы справа.
                        </div>
                    </div>
                    <div class="col-md-11">
                        <div class="highlight-blue">
                            В конце разговора призовите жителя записаться, чтобы мы к нему пришли, передали листовку и приняли обращение в мэрию.
                        </div>
                    </div>
                    <div class="col-md-11">
                        <button class="btn btn-primary ladda-button btn--main" data-style="expand-left">
                            <span class="ladda-label">Начать звонить</span>
                        </button>
                    </div>
                </div>
                <div class="rightbar col-md-4 col-sm-12">
                    <div class="title">
                        Подсказки к разговору
                    </div>
                    <button class="btn btn-default ladda-button pull-right button--tips" data-style="expand-left">
                        <span class="ladda-label">Инфо о снятии</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p class="paragraf_text">
                                В этом году мэрия Москвы планирует ликвидировать троллейбусы в центре города.
                                Прекратится движение по Тверской, Бульварному кольцу, Новому Арбату, Сретенке, Кремлёвскому кольцу
                                и другим центральным улицам. Троллейбусы в центре заменят на дизельные автобусы.
                                Часть маршрутов станет невыгодной и в будущем их существование тоже под вопросом.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right  button--tips" data-style="expand-left">
                        <span class="ladda-label">Почему собираются снять?</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p class="paragraf_text">Они объясняют это решение тем, что троллейбусы невыгодны.
                                Это неправда — эксплуатировать троллейбус по данным Мосготранса на 15,5% дешевле, чем автобус.
                            </p>
                            <p class="paragraf_text">
                                Ещё говорят что троллейбус неповоротливый и создает помехи.
                                На самом деле в центре города проведена реконструкция контактной сети и теперь троллейбусы также манёврены,
                                как автобусы.
                            </p>
                            <p class="paragraf_text">
                                Также говорят, что контактная сеть в плохом состоянии и происходят энергопотери,
                                но это опровергли сотрудники Мосготранса в открытом письме.
                                Также мэрия говорит, что дорого модернизировать контактную сеть. Однако, стоимость модернизации составляет меньше 1%
                                от расходов на программу благоустройства “Моя улица” в этом году.
                            </p>
                            <p class="paragraf_text">
                                Реальные причины снятия не ясны, их не анонсируют.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right button--tips" data-style="expand-left">
                        <span class="ladda-label">Почему молчат?</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p class="paragraf_text">
                                Мэрия знает, что эксперты и жители против снятия троллейбуса, поэтому не анонсирует это решение.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right button--tips" data-style="expand-left">
                        <span class="ladda-label">Преимущества</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p class="paragraf_text">
                                Троллейбус более комфортен для поездок. В нём в отличие от автобуса не пахнет горючим, он плавнее едет,
                                электрический двигатель не создаёт вибрацию и не нагревает салон.
                            </p>
                            <p class="paragraf_text">
                                Троллейбусы дешевле автобусов в эксплуатации; срок службы подвижного состава у них больше,
                                чем автобуса; затраты на обслуживание троллейбусного парка на 15,5% меньше, чем на автобусный.
                                Троллейбус не производит выбросов в атмосферу в отличие даже от самых современных дизельных автобусов.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right button--tips" data-style="expand-left">
                        <span class="ladda-label">Экология</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p class="paragraf_text">
                                Во время движения троллейбус не производит вредных выбросов. С заменой одного троллейбуса на один дизельный автобус
                                в городскую атмосферу будут ежегодно выбрасываться 1,5 тонны угарного газа , 1 тонна оксида азота, пол-тонны оксидов серы
                                и 200 килограмм твердых микрочастиц.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right button--tips" data-style="expand-left">
                        <span class="ladda-label">Экономика</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p class="paragraf_text">
                                Стоимость эксплуатации одного троллейбуса составляет 3 миллиона 410 тысяч рублей в год,
                                в то время как эксплуатация одного автобуса стоит 3 миллиона 940 тысяч рублей.
                                Таким образом, троллейбус экономичнее на 15,5% с учетом всей сопутствующей инфраструктуры и амортизации.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right button--tips" data-style="expand-left">
                        <span class="ladda-label">Модернизация</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p class="paragraf_text">
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

                    <button class="btn btn-default ladda-button pull-right button--tips" data-style="expand-left">
                        <span class="ladda-label">Троллейбус в мире</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p class="paragraf_text">
                                В середине прошлого века некоторые города отказались от троллейбусов.
                                В настоящее время экспертным сообществом это признано крупной градостроительной ошибкой.
                                В тех городах, где сегодня сохранились троллейбусные системы, их развивают и модернизируют.
                            </p>
                            <p class="paragraf_text">
                                Технологии развиваются, и современный троллейбус по всем характеристикам не уступает автобусу.
                                Он манёвренный, такой же быстрый, а его провода почти незаметны.
                            </p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>

                    <button class="btn btn-default ladda-button pull-right button--tips" data-style="expand-left">
                        <span class="ladda-label">О неповороливости</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p class="paragraf_text">
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

                    <button class="btn btn-default ladda-button pull-right button--tips" data-style="expand-left">
                        <span class="ladda-label">Что делать?</span>
                    </button>
                    <div class="tip hidden">
                        <div class="tip__text">
                            <p class="paragraf_text">
                                Комитет “Москвичи за троллейбус” выпустил информационные буклеты, и есть интернет-сайт.
                                Важно помочь с распространением информации, потому что многие москвичи не в курсе планов мэрии.
                                Листовки можно получить с курьером себе домой и раздать их соседям, коллегам или разложить их по почтовым ящикам
                                в своем подъезде. Если хотите, я ваш дом отмечу на карте, и с вами свяжется курьер из комитета,
                                чтобы принести вам листовок.
                                Он может принести вам на подпись и обращение в мэрию и потом отправить его.
                            </p>
                            <p class="paragraf_text">
                                <a href="http://trolley.city4people.ru/map/" class="calls_link">http://trolley.city4people.ru/map/</a>
                            </p>
                            <p class="paragraf_text">Скажите улицу и номер дома. Ваш телефон. Как вас зовут. Спасибо!</p>
                        </div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>
                </div>
                <form class="form col-md-12 col-sm-12 userInfoForm" onsubmit="return false;">
                    <div class="form__target col-md-4">
                        <strong>Цель звонка:</strong> <br />проинформировать жителя и получить его согласие помогать кампании, взять адрес и телефон.
                    </div>
                    <div class="form__inputs col-md-8">
                        <label for="input-name" class="form__label">Имя, отчество</label>
                        <input id="input-name" class="form__input ajax_arg" type="text" name="name">
                        <label for="input-phone" class="form__label ">Телефона</label>
                        <input id="input-phone" class="form__input ajax_arg" type="text" name="phone">
                        <label for="input-address" class="form__label">Адрес</label>
                        <input id="input-address" class="form__input ajax_arg" type="text" name="address">
                        <label class="form__label"></label>
                        <button class="btn btn-primary ladda-button btn--main" onClick="gitter.button = this ; gitter.sendUserInfoForm(); return false;" data-style="expand-left">
                            <span class="ladda-label">Отправить</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
      $('.button--tips').click( function(event) {
        event.stopPropagation();
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
      $('#trolleybus').on('click', function() {
            if($('.tip').hasClass('show')) {
                $('.tip').removeClass('show').addClass('hidden');
            }
      });
    });
</script>

</body>
</html>