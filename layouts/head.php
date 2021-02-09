<?php defined('_EXEC') or die; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$vkye_lang}">
	<head>
		<meta charset="UTF-8" />
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		{$dependencies.meta}
		<base href="{$vkye_base}">
		<title>{$vkye_title}</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="codemonkey.com.mx" />
		<meta name="keywords" content="{$_vkye_seo_keywords}" />
		<meta name="description" content="{$_vkye_seo_description}" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="{$path.css}valkyrie.css?v=1.0" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=2.1" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}icons.css?v=1.0" type="text/css" media="all" />
		{$dependencies.css}

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180983917-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-180983917-1');
	  	</script>

		<!-- Recaptcha v3 -->
		<script src='https://www.google.com/recaptcha/api.js?render=6LdgUVAaAAAAANKpVofcI5u1yMxq_dXlnPd3iitu'></script>
		<script>
		    grecaptcha.ready(function() {
		    grecaptcha.execute('6LdgUVAaAAAAANKpVofcI5u1yMxq_dXlnPd3iitu', {action: 'formulario'})
		    .then(function(token) {
		    var recaptchaResponse = document.getElementById('recaptchaResponse');
		    recaptchaResponse.value = token;
		    });});
		</script>
	</head>
	<body>
		<header class="topbar">
			<div class="container">
				<figure class="logotype">
					<a href="/"><img src="{$path.images}one-consultores.svg" alt="ONE Consultores"></a>
				</figure>
				<nav class="main_menu">
					<ul class="list-inline m-0 visible-desktop visible-desktop-large">
						<li class="list-inline-item">
							<a href="/" class="btn btn-link">{$lang.main_menu_inicio}</a>
						</li>
						<li class="list-inline-item">
							<div class="dropmenu">
								<a class="btn btn-link">{$lang.main_menu_servicios}</a>
								<div class="dropdown">
									<a href="https://marbu.one-consultores.com"><img src="{$path.images}marbuu.png">{$lang.main_menu_servicios_laboratorio}</a>
									<a href="/servicios/contables"><img src="{$path.images}icon_contables.png">{$lang.main_menu_servicios_contables}</a>
									<a href="/servicios/fiscales"><img src="{$path.images}icon_fiscales.png">{$lang.main_menu_servicios_fiscales}</a>
									<a href="/servicios/mercadotecnia"><img src="{$path.images}icon_mercadotecnia.png">{$lang.main_menu_servicios_mercadotecnia}</a>
									<a href="/servicios/software"><img src="{$path.images}icon_software.png">{$lang.main_menu_servicios_software}</a>
									<a href="/servicios/legales"><img src="{$path.images}icon_legales.png">{$lang.main_menu_servicios_legales}</a>
									<a href="/servicios/recursos_humanos"><img src="{$path.images}icon_recursos_humanos.png">{$lang.main_menu_servicios_rh}</a>
									<a href="/servicios/psicologia"><img src="{$path.images}icon_psicologia.png">{$lang.main_menu_servicios_psicologia}</a>
									<a href="/servicios/poligrafo"><img src="{$path.images}icon_poligrafo.png">{$lang.main_menu_servicios_poligrafo}</a>
									<a href="/servicios/medicina_del_trabajo"><img src="{$path.images}icon_medicina_del_trabajo.png">{$lang.main_menu_servicios_medicina}</a>
								</div>
							</div>
						</li>
						<li class="list-inline-item">
							<a href="https://marbu.one-consultores.com" class="btn btn-link icon"><img src="{$path.images}marbuu.png" alt="">{$lang.main_menu_marbu}</a>
						</li>
						<!-- <li class="list-inline-item">
							<a href="#" class="btn btn-link">{$lang.main_menu_soluciones}</a>
						</li> -->
						<li class="list-inline-item">
							<a href="/nosotros" class="btn btn-link">{$lang.main_menu_nosotros}</a>
						</li>
						<li class="list-inline-item">
							<a href="/blog" class="btn btn-link">{$lang.main_menu_blog}</a>
						</li>
						<li class="list-inline-item">
							<a href="/contacto" class="btn btn-link">{$lang.main_menu_contacto}</a>
						</li>
						<li class="list-inline-item">
							<a href="?<?php echo Language::get_lang_url('es'); ?>" class="flag"><img src="{$path.images}es.png"></a>
							<a href="?<?php echo Language::get_lang_url('en'); ?>" class="flag"><img src="{$path.images}en.png"></a>
						</li>
					</ul>
					<button id="trigger-nav-mobile" class="menu-wrapper visible-phone visible-tablet">
						<div class="hamburger-menu"></div>
					</button>
				</nav>
				<nav class="mobile_menu visible-phone visible-tablet">
					<ul class="list-inline">
						<li>
							<a href="/" class="btn btn-link">{$lang.main_menu_inicio}</a>
						</li>
						<li>
							<a href="#" class="btn btn-link" style="opacity: 1 !important;">{$lang.main_menu_servicios}</a>
							<ul class="list-inline">
								<li>
									<a href="/servicios/contables" class="btn btn-link">{$lang.main_menu_servicios_contables}</a>
								</li>
								<li>
									<a href="/servicios/fiscales" class="btn btn-link">{$lang.main_menu_servicios_fiscales}</a>
								</li>
								<li>
									<a href="/servicios/mercadotecnia" class="btn btn-link">{$lang.main_menu_servicios_mercadotecnia}</a>
								</li>
								<li>
									<a href="/servicios/software" class="btn btn-link">{$lang.main_menu_servicios_software}</a>
								</li>
								<li>
									<a href="/servicios/legales" class="btn btn-link">{$lang.main_menu_servicios_legales}</a>
								</li>
								<li>
									<a href="/servicios/recursos_humanos" class="btn btn-link">{$lang.main_menu_servicios_rh}</a>
								</li>
								<li>
									<a href="/servicios/psicologia" class="btn btn-link">{$lang.main_menu_servicios_psicologia}</a>
								</li>
								<li>
									<a href="/servicios/poligrafo" class="btn btn-link">{$lang.main_menu_servicios_poligrafo}</a>
								</li>
								<li>
									<a href="/servicios/medicina_del_trabajo" class="btn btn-link">{$lang.main_menu_servicios_medicina}</a>
								</li>
								<li>
									<a href="https://marbu.one-consultores.com" class="btn btn-link">{$lang.main_menu_servicios_laboratorio}</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="https://marbu.one-consultores.com" class="btn btn-link icon"><img src="{$path.images}marbuu.png" alt="">{$lang.main_menu_marbu}</a>
						</li>
						<!-- <li>
							<a href="#" class="btn btn-link">{$lang.main_menu_soluciones}</a>
						</li> -->
						<li>
							<a href="/nosotros" class="btn btn-link">{$lang.main_menu_nosotros}</a>
						</li>
						<li>
							<a href="/blog" class="btn btn-link">{$lang.main_menu_blog}</a>
						</li>
						<li>
							<a href="/contacto" class="btn btn-link">{$lang.main_menu_contacto}</a>
						</li>
						<li>
							<a href="?<?php echo Language::get_lang_url('es'); ?>" class="flag"><img src="{$path.images}es.png"></a>
							<a href="?<?php echo Language::get_lang_url('en'); ?>" class="flag"><img src="{$path.images}en.png"></a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="floating_contacts">
			<a href="/contacto" style="background-color: #9c27b0;"><i class="fas fa-envelope"></i></a>
			<a href="tel:+9984403302" style="background-color: #ff5722;"><i class="fas fa-phone"></i></a>
			<a href="https://api.whatsapp.com/send?phone=+529984403302" target="_blank" style="background-color: #4AC959;"><i class="fab fa-whatsapp"></i></a>
			<a href="https://m.me/106456467505158" target="_blank" style="background-color: #0078FF;"><i class="fab fa-facebook-messenger"></i></a>
		</div>
