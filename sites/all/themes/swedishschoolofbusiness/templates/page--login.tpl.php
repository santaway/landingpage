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
					<div class="telephone"><a href="tel:+375291080388">+375 29 108 03 88</a></div>
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
</header>
	
<div class="full-width padding-b-300 img img-0" style="background: url(/sites/all/themes/swedishschoolofbusiness/uploads/skyscrapers.png) center no-repeat; background-size: contain !important; padding-bottom: 500px;">
	<div class="name"><h1>Шведский Институт Менеджмента IFL при поддержке ИПМ</h1></div>
	<div class="fixed" style="position:relative">
		<section class="col-xs-12 col-md-6 col-md-offset-5">
			<div class="programma-main">
  			<div class="programma" >
    			<strong>Авторизация пользователя</strong>
				<?php print(drupal_render(drupal_get_form('user_login_block'))); ?>
    			</div>
			</div><!--.programma-main-->
		</section>
	</div>
</div><!--.img-0-->

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
			<p class="phone">+375291080388</p>
			<p class="email">info@tanix.by</p>
			<div class="creator">
					<a href="//tanix.by/">Разработано <img alt="tanix.by" title="tanix.by" src="/sites/all/themes/swedishschoolofbusiness/uploads/tanix_logo.png"></a>
			</div>
		</div><!--.social-->
	</div>
</footer>
</div><!--.page-container-->
	
<script>
	$('.sliderLocation').bxSlider({
  slideWidth: 1160,
  minSlides: 3,
  maxSlides: 3,
  moveSlides: 3,
  slideMargin: 0,
  pager: false,
  mode: 'vertical'
});
</script>
<a href="#" class="scrollup">Наверх</a>
<script type="text/javascript">
	$(document).ready(function(){
 		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
		});
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 900);
			return false;
		});
	});
</script>