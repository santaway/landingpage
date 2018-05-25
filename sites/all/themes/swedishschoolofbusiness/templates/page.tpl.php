<div class="page-container">
<header>
	<div class="col-xs-12 navbar-header">
			<?php if ($logo): ?>
			<a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			</a>
			<?php endif; ?>
			<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
			<div class="navbar-collapse collapse" id="navbar-collapse">
				<button class="ask-button blue-bg" href="#" type="button" data-toggle="modal" data-target="#questionModal" style="float:right;">Задать вопрос</button>
				<div class="contact-info">
					<div class="telephone"><a href="tel:+375291080388">+375 29 680 78 48</a></div>
					<div class="mail"><a href="mailto:info@tanix.by">info@tanix.by</a></div>
				</div><!--.contact-info-->
				<nav role="navigation">
					<?php if (!empty($primary_nav)):
						print render($primary_nav);
					endif;
					if (!empty($secondary_nav)):
						print render($secondary_nav);
					endif;
					if (!empty($page['navigation'])):
						print render($page['navigation']);
					endif; ?>
				</nav>
			</div>
   		<?php endif; ?>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"></a>
				</div><!--.navbar-header-->
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="#preimuschestva">Преимущества</a></li>
						<li><a href="#programma">Программы</a></li>
						<li><a href="#stoimost">Стоимость</a></li>
						<li><a href="#prepodavateli">Преподаватели</a></li>
						<li><a href="mailto:info@tanix.by" class="email">info@tanix.by</a></li>
						<li><a href="tel:+375291080388" class="phone">+375291080388</a></li>
					</ul>
				</div><!--.navbar-collapse-->
			</div><!--.container-fluid-->
		</nav>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47355261 = new Ya.Metrika2({
                    id:47355261,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47355261" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112713470-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112713470-1');
</script>
</header>

<div class="full-width padding-b-300 img img-0" style="background: url(/sites/all/themes/swedishschoolofbusiness/uploads/skyscrapers.png) center no-repeat;">
	<div class="name"><h1>Шведский Институт Менеджмента IFL при поддержке ИПМ</h1></div>
	<div class="fixed" style="position:relative">
		<section class="col-xs-12 col-md-6 col-md-offset-5">
			<div class="programma-main">
  			<div class="programma" >
    			<h3>Программа</h3>
    			<h2 class="first-block">"Развивай свой бизнес"</h2>
    			<p><strong>Для собственников компаний, активно вовлечённых<br/>в процесс управления, которым необходимо:</strong></p>
    			<ul>
     				<li class="list">Получить доступ к бесценной информации: новейшим методам, технологиям и тенденциям ведения бизнеса</li>
      			<li class="list">Приобретение контактов среди белорусской бизнес-элиты</li>
      			<li class="list">Разработать план развития компании с помощью всемирно извесных коучей (на протяжении всего времени обучения)</li>
      			<li class="list">Вдохновение и способность покорять новые вершины. Что может быть важнее?</li>
    			</ul>
    			<button class="button button-more-info" href="" data-toggle="modal" data-target="#questionModal">Узнать подробнее</button>
  			</div>
			</div><!--.programma-main-->
		</section>
	</div>
</div><!--.img-0-->
	
<div class="full-width padding-b-300 img img-1" style="background: url(/sites/all/themes/swedishschoolofbusiness/uploads/vipriobretaete.png) center no-repeat;">
	<div class="fixed" style="position:relative">
		<section class="col-xs-12 col-md-6 col-md-offset-1" style="margin-bottom: 20px;">
			<h1 class="section-title" style="float: none;">Вы приобретаете</h1>
  		<ul class="custom-list icon-pri pris">
    		<li class="icon-pri-1">Идеи для решения задач, основанные на внешней эксперной оценке преподавателей и богатом бизнес-опыте других участников программы</li>
    		<li class="icon-pri-2">Навыки, позволяющие рацонально справиться с перегруженностью в процессе руководства компанией</li>
    		<li class="icon-pri-3">Знакомства с другими участниками программы, обладающими высоким уровнем компетенции и богатым опытом в ведении бизнеса</li>
    		<li class="icon-pri-4">Методики, используемые при ведении семейного бизнеса, подготовки преемника. Возможно совместное обучение</li>
  		</ul>
		</section>
  	<section class="col-xs-12 col-md-6 col-md-offset-6">
    	<ul class="custom-list icon-pri">
    		<li class="icon-pri-5">Инструменты, помогающие быть эффективным партнёром, и самому требовать результативного партнёрства от других</li>
    		<li class="icon-pri-6">Знания, используемые международным бизнес-сообществом в процессе руководства компанией</li>
    		<li class="icon-pri-7">Способы повышения доходности бизнеса</li>
    		<li class="icon-pri-8">Варианты снижения затрат компании</li>
  		</ul>
  	</section>
	</div>
</div><!--.img-1-->
	
<div class="full-width padding-b-300 img img-2" style="background: url(/sites/all/themes/swedishschoolofbusiness/uploads/preimuschestva.png) center no-repeat;">
	<div class="fixed" style="position:relative">
		<h1 class="section-title" style="text-align:center; margin-bottom:90px;float: none;" ><a name="preimuschestva"></a>Преимущества программы</h1>
		<section class="col-xs-12 col-md-6 ">
    	<ul class="custom-list icon-pre">
    		<li class="icon-pre-1">Программа основана на всемирно известной методике Стокгольмской Школы Экономики.</li>
    		<li class="icon-pre-2">Индивидуальный подход к формированию групп. Обучение проходит в группах до 5 человек.</li>
    		<li class="icon-pre-3">Общение продолжается и после обучения. Закрытый Клуб выпускников.</li>
    		<li class="icon-pre-4">Основная часть занятий проходит в Вильнюсе, в обстановке полного погружения, разработанной Стокгольмской Школой Экономики.</li>
  		</ul>
		</section>
		<section class="col-xs-12 col-md-6 ">
    	<ul class="custom-list icon-pre" style="padding-top:50px;">
    		<li class="icon-pre-5">Преподаватели - международные эксперты, имеющие большой опыт в своей области (стратегия, ведение бизнеса, маркетинг, финансы, персонал).</li>
    		<li class="icon-pre-6">70% времени - это практические занятия (работа в группах, дискуссии, обсуждения, что делает программу не похожей на других).</li>
    		<li class="icon-pre-7">Многие выпускники программы организовали совместные предприятие, нашли партнёров для бизнеса.</li>
  		</ul>
		</section>
	</div>
</div><!--.img-2-->
	
<div class="full-width padding-b-300 image img-3" style="background: url(/sites/all/themes/swedishschoolofbusiness/uploads/zapisatsya.png) center no-repeat;">
	<div class="fixed" style="position:relative">
		<section class="col-xs-12 col-md-12 color-white" style="padding-top:115px;">
			<h1 class="section-title white-title" style="text-align:center; margin-bottom:15px;padding-left:0;">Записаться</h1>
			<p style="text-align:center;">на встречу с преподавателем/менеджером программы</p>
  		<form id="visit-form" class="form-appointment" method="post" style="text-align:center">
				<input type="hidden" name="subject_field" value="заявка на встречу с преподавателем/менеджером программы"/>
				<input class="appointment-field" placeholder="Ваше имя*" type="text" name="name_field" rows="10" cols="40" required>
				<input class="appointment-field" placeholder="Ваш телефон" type="text" pattern="^[0-9\-\+\s\(\)]*$" name="phone_field" rows="10" cols="40">
    		<input class="appointment-field" placeholder="E-mail*" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email_field" rows="10" cols="40" required>
				<input class="appointment-field" placeholder="Ваша компания*" type="text" pattern="[A-Za-zА-Яа-яЁё0-9\s]+" title="Допустимы латинские и кирилические буквы верхнего и нижнего регистра, цифры от 0 до 9, а также пробелы." name="company_field" rows="10" cols="40" required>
    		<p style="text-align:center;"><input type="submit" class="appointment-button" value="ОСТАВИТЬ ЗАЯВКУ"></p>
			</form>
		</section>
	</div>
</div><!--.img-3-->
	
<div class="full-width padding-b-300 image img-4" style="background: url(/sites/all/themes/swedishschoolofbusiness/uploads/programma.png) center no-repeat;">
	<div class="fixed" style="position:relative">
		<section class="col-xs-12 col-md-8 col-md-offset-3">
			<div class="programma-main" style="box-shadow: 0 0 12px 9px #45444436;">
				<div class="programma-bord">
					<div class="down">
						<div class="col-md-6 buttom-down">
							<a href="/sites/all/themes/swedishschoolofbusiness/uploads/as-rsb-presentation.pdf"><button class="button button-more-info download" >Скачать презентацию</button></a>
						</div>
						<div class="col-md-6 date-start">
							<h3><a name="programma"></a>Программа</h3>
							<p class="start">Старт: 4 октября 2018 года</p>
						</div>
					</div><!--.down-->
					<div class="raspisanie">
  					<div class="modul col-md-9" >
    					<h3 class="first-block ">Модуль 1: Стратегия собственника</h3>
    					<ul>
      					<li class="list">Цели владельцев бизнеса</li>
      					<li class="list">Отношения между партнёрами в бизнесе. Партнёрские соглашения</li>
      					<li class="list">Стратегическая платформа и выбор бизнес-концепции</li>
      					<li class="list">Определение фокуса компании</li>
						<li class="list">Фокус компании и создание матрицы: продукт/рынок</li>
    					</ul>
  					</div>
						<div class="date col-md-3">
							<p class="start">4-7 октября 2018</p>	
						</div>
					</div><!--.raspisanie-->
					<div class="raspisanie">
  					<div class="modul col-md-9" >
    					<h3 class="first-block ">Модуль 2: Персонал и лидерство</h3>
    					<ul>
      					<li class="list">Личный стиль управления и Ваш профиль лидера</li>
      					<li class="list">Подбор, развитие и мотивация персонала, грейдирование</li>
      					<li class="list">Создание эффективности команды ТОП-менеджеров</li>
      					<li class="list">Управление изменениями</li>
						<li class="list">Контроль бизнеса собственниками</li>
    					</ul>
  					</div>
						<div class="date col-md-3">
							<p class="start">15-18 ноября 2018</p>	
						</div>
					</div><!--.raspisanie-->
					<div class="raspisanie">
  					<div class="modul col-md-9" >
    					<h3 class="first-block ">Модуль 3: Маркетинг и продажи или "ДНК" успешной компании </h3>
    					<ul>
      					<li class="list">Определение целевого клиента и вашей ценности для него</li>
      					<li class="list">Ваша форма бизнеса и ваш продуктовый профиль</li>
      					<li class="list">Хитрости вашей ценовой политики</li>
      					<li class="list">Продвижение и брендирование</li>
								<li class="list">Система ценообразования и построение карты процесса продаж</li>
    					</ul>
  					</div>
						<div class="date col-md-3">
							<p class="start">13-15 декабря 2018</p>	
						</div>
					</div><!--.raspisanie-->
 					<div class="raspisanie">
  					<div class="modul col-md-9" >
    					<h3 class="first-block ">Модуль 4: Финансы и контроль с точки зрения собственника</h3>
   						<ul>
      					<li class="list">Ключевые показатели контроля бизнеса</li>
      					<li class="list">Факторы капитализации и оценка стоимости бизнесса</li>
      					<li class="list">Управление издержками</li>
      					<li class="list">Дивидентная политика</li>
    					</ul>
  					</div>
						<div class="date col-md-3">
							<p class="start">17-19 января 2019</p>	
						</div>
					</div><!--.raspisanie-->
					<div class="raspisanie">
  					<div class="modul col-md-9" >
    					<h3 class="first-block">Модуль 5: Защита стратегического бизнес-плана</h3>
    					<ul>
      					<li class="list">Защита перед Экспертным Советом Вашего стратегического 
бизнес-плана, включающего в себя: Ваше видение как собственника  концепции и стратегии развития своего бизнеса, его цели и задачи, матрицу продукт/рынок, план развития человеческих ресурсов, контролируемые показатели 
и перспективы реализации бизнес-плана</li>
      					<li class="list">Презентация бизнес-плана в формате Microsoft Power Point</li>
    					</ul>
  					</div>
						<div class="date col-md-3">
							<p class="start">7-9 февраля 2019</p>	
						</div>
					</div><!--.raspisanie-->
					<div style="clear: both;"></div>
				</div>
			</div><!--.programma-main-->
		</section>
	</div>
</div><!--.img-4-->

<div class="full-width padding-b-300 image img-5" style="background: url(/sites/all/themes/swedishschoolofbusiness/uploads/stoimost.png) center no-repeat;">
	<div class="fixed" style="position:relative">
		<section class="col-xs-12 col-md-12" style="text-align:center;">
			<h1 class="section-title stoimost" style="float: none;"><a name="stoimost"></a>Стоимость</h1>
  		<div class="count">
    		<p style="font-size:20px;">При оплате до 31 января 2018:<span style="font-weight:bold; font-size:24px;"> 14 790 BYN</span></p>
    		<p style="font-size:20px;">При оплате с 1 февраля 2018 и до начала программы:<span style="font-weight:bold;font-size:24px;"> 17 790 BYN</span></p>
    		<p style="padding-top:20px;">*Оплата возможна четырьмя частями с заранее оговоренными сроками.</p>
  		</div>  
		</section>
	</div>
</div><!--.img-5-->

<div class="full-width padding-b-300 image img-6" style="background: url(/sites/all/themes/swedishschoolofbusiness/uploads/zayavka.png) center no-repeat;">
	<div class="fixed" style="position:relative">
		<section class="col-xs-12 col-md-12 color-white" style="padding-top: 90px">
			<h1 class="section-title white-title" style="text-align:center; margin-bottom:15px;padding-left:0;">Оставьте заявку<br/>на участие в программе</h1>
  		<form id="programm-form" class="form-appointment" method="post" style="text-align:center">
				<input type="hidden" name="subject_field" value="заявка на участие в программе"/>
				<input class="appointment-field" placeholder="Ваше имя*" type="text" name="name_field" rows="10" cols="40" required>		
				<input class="appointment-field" placeholder="Ваш телефон" type="text" pattern="^[0-9\-\+\s\(\)]*$" title="" name="phone_field" rows="10" cols="40">
				<input class="appointment-field" placeholder="E-mail*" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email_field" rows="10" cols="40" required>
				<input class="appointment-field" placeholder="Ваша компания*" type="text" pattern="[A-Za-zА-Яа-яЁё0-9\s]+" title="Допустимы латинские и кирилические буквы верхнего и нижнего регистра, цифры от 0 до 9, а также пробелы."  name="company_field" rows="10" cols="40" required>
				<p style="text-align:center;"><input type="submit" class="appointment-button" value="ЗАПИСАТЬСЯ"></p>
			</form>
		</section>
	</div>
</div><!--.img-6-->

<div class="full-width img-7" style="background-size: cover; background: url(/sites/all/themes/swedishschoolofbusiness/uploads/prepodavateli.png) center no-repeat;">
	<div class="fixed" style="position:relative; text-align:center;" >
		<h1 class="section-title"><a name="prepodavateli"></a>Преподаватели</h1>
		<section class="col-xs-12 col-md-12">
  		<div class="col-xs-12 col-md-3">
    		<img class="person-img" src="/sites/all/themes/swedishschoolofbusiness/uploads/photo/ferling.png">
    		<h4 class="person">Кристер Ферлинг</h4>
        <p>Основатель, генеральный директор и совладелец IFL Entrepreneur AB.</p>
  		</div>
  		<div class="col-xs-12 col-md-3">
    		<img class="person-img" src="/sites/all/themes/swedishschoolofbusiness/uploads/photo/daneiko.png">
    		<h4 class="person">Павел Данейко</h4>
        <p>Генеральный Директор Бизнес-школы ИПМ</p>
  		</div>
  		<div class="col-xs-12 col-md-3">
  			<img class="person-img" src="/sites/all/themes/swedishschoolofbusiness/uploads/photo/makovchuk.png">
    		<h4 class="person">Виктор Маковчук</h4>
   			<p>Основатель группы компаний М8. Executive МВА.</p>
  		</div>
   		<div class="col-xs-12 col-md-3">
    		<img class="person-img" src="/sites/all/themes/swedishschoolofbusiness/uploads/photo/gut.png">
    		<h4 class="person">Игорь Гут</h4>
        <p>Управляющий партнер шведского проекта DYB Develop Your Business в Украине, основатель DYB business club, PhD, эксперт в сфере бизнес-стратегии и маркетинга</p>
			</div>
		</section>
		<section class="col-xs-12 col-md-12" style="margin-top: 50px;">
			<div class="col-xs-12 col-md-3"></div>
  		<div class="col-xs-12 col-md-3">
    		<img class="person-img" src="/sites/all/themes/swedishschoolofbusiness/uploads/photo/kovaleva.png">
    		<h4 class="person">Татьяна Ковалева</h4>
    		<p>К.э.н., тренер-консультант Санкт-Петербургского Международного Института Менеджмента.</p>
  		</div>
  		<div class="col-xs-12 col-md-3">
    		<img class="person-img" src="/sites/all/themes/swedishschoolofbusiness/uploads/photo/tolkach.png">
    		<h4 class="person">Владислав Толкач</h4>
    		<p>Controller’s Master (Controller Akademie, Германия), бизнес-тренер и консультант, партнер и руководитель ряда программ в Бизнес-школе ИПМ.</p>
  		</div>
			<div class="col-xs-12 col-md-3"></div>
		</section>
	</div>
</div><!--.img-7-->

<div class="full-width img-8" style="background: url(/sites/all/themes/swedishschoolofbusiness/uploads/videophoto.png) top no-repeat; margin-top: 80px; background-size: 100% 100%;">
	<div class="fixed" style="position:relative">
		<h1 class="section-title"><a name="otzivi">Отзывы слушателей</a></h1>
		<section class="col-xs-12 col-md-12" style="padding-top: 40px">
			<?php print render($page['testimonials_text']); ?>
		</section>
</div>
</div><!--.img-8-->
<div class="full-width img-9">
	<div class="fixed" style="position:relative">
		<h1 class="section-title">Видео-отзывы</h1>
		<section class="col-xs-12 col-md-12" style="padding-top: 40px">
			<?php print render($page['testimonials_video']); ?>
		</section>
	</div>
</div><!--.img-9-->

<div class="full-width img-11">
	<div class="fixed" style="position:relative">
		<h1 class="section-title">Уже прошли обучение</h1>
		<section class="col-xs-12 col-md-12" >
			<?php print render($page['logo_grid']); ?>
		</section>
	</div>
</div><!--.img-11-->

<footer class="footer_page" style="background: url(/sites/all/themes/swedishschoolofbusiness/uploads/footer.png) bottom no-repeat;">
	<div class="container">
		<div class="col-xs-12 col-sm-6 col-md-6 unique">
			<h3>Уникальная программа "Развивай свой бизнес"</h3>
			<p>Для собественников компаний, активно вовлеченных в процесс управления</p>
		</div><!--.unique-->
		<div class="col-xs-12 col-sm-6 col-md-3 foomenu">
			<ul class="footer_navlist">
				<li class="menu_item"><a title="Преимущества" class="menu_link" href="#preimuschestva">Преимущества</a></li>
				<li class="menu_item"><a title="Программы" class="menu_link" href="#programma">Программы</a></li>
				<li class="menu_item"><a title="Стоимость" class="menu_link" href="#stoimost">Стоимость</a></li>
				<li class="menu_item"><a title="Преподаватели" class="menu_link" href="#prepodavateli">Преподаватели</a></li>
				<li class="menu_item"><a title="Отзывы" class="menu_link" href="#otzivi">Отзывы</a></li>
		</div><!--.foomenu-->
		<div class="col-xs-12 col-sm-6 col-md-3 social">
			<button class="ask-button white-bg" href="#" type="button" data-toggle="modal" data-target="#questionModal">Записаться</button>
			<p class="phone">+375 29 680 78 48</p>
			<p class="email">info@tanix.by</p>
			<div class="creator">
					<a href="//tanix.by/">Создание и продвижение сайтов <img alt="tanix.by" title="tanix.by" src="/sites/all/themes/swedishschoolofbusiness/uploads/tanix_logo.png"></a>
			</div>
		</div><!--.social-->
	</div>
</footer>
</div><!--.page-container-->
<a href="#" class="scrollup">Наверх</a>
<script type="text/javascript">
	jQuery(document).ready(function(){
 		jQuery(window).scroll(function(){
			if (jQuery(this).scrollTop() > 100) {
				jQuery('.scrollup').fadeIn();
			} else {
				jQuery('.scrollup').fadeOut();
			}
		});
		jQuery('.scrollup').click(function(){
			jQuery("html, body").animate({ scrollTop: 0 }, 900);
			return false;
		});
	});
</script>
<div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="modal-form" class="form-appointment" method="post" style="text-align:center">
				<input type="hidden" name="subject_field" value="заявка на консультацию"/>
				<input class="appointment-field" placeholder="Ваше имя*" type="text" name="name_field" rows="10" cols="40" required>
				<input class="appointment-field" placeholder="Ваш телефон" type="text" pattern="^[0-9\-\+\s\(\)]*$"  name="phone_field" rows="10" cols="40">
				<input class="appointment-field" placeholder="E-mail*" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email_field" rows="10" cols="40" required>
				<input class="appointment-field" placeholder="Ваша компания*" type="text" pattern="[A-Za-zА-Яа-яЁё0-9\s]+" title="Допустимы латинские и кирилические буквы верхнего и нижнего регистра, цифры от 0 до 9, а также пробелы." name="company_field" rows="10" cols="40" required>
				<input class="appointment-field" placeholder="Комментарий" type="text" name="note_field" rows="10" cols="40">
				<label><input type="submit" class="ask-button blue-bg" value="Отправить"></label>
			</form>
      </div>
    </div>
  </div>
</div><!--#questionModal-->
<div class="modal fade" id="thanksModal" tabindex="-1" role="dialog" style="margin-top: 5em;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Благодарим за сообщение!</h4>
            </div>
            <div class="modal-body">
                <p style="text-align: center;">Ваше сообщение успешно отправленно. В скором времени наши менеджеры свяжуться с Вами.</p>                     
            </div>    
        </div>
    </div>
</div><!--#thanksModal-->
<script>
	
	jQuery('#modal-form, #visit-form, #programm-form').submit(function(event) {
    event.preventDefault();

    jQuery.ajax({
        url: '/sites/all/themes/swedishschoolofbusiness/templates/send.php',
        type: 'POST',
        data: jQuery(this).serialize(),
        success: function(data) {
			jQuery('body').removeClass('modal-open');
			jQuery('.modal-backdrop').remove();
			jQuery('#thanksModal').modal('toggle');
			jQuery('#questionModal').css('display','none');
			jQuery('#modal-form')[0].reset();
			jQuery('#visit-form')[0].reset();
			jQuery('#programm-form')[0].reset();
        }
    });
});

</script>