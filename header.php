<!DOCTYPE html>
<html lang="en">

<head>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<title><?php wp_title("", true); ?></title>
</head>

<body>
	<header class="header">
		<div class="wrapper">
			<div class="header__box">
				<a class="header__link" href="/">
					<img class="header__logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="Home">
				</a>
				<nav class="menu">
					<a href="" onclick="openMenu(event)" class="menu__btn">
						<span class="menu__btn__element"></span>
					</a>
					<ul class="menu__list">
						<li class="menu__list__items">
							<a class="menu__list__link" href="/">Home</a>
						</li>
						<li class="menu__list__items">
							<a class="menu__list__link" href="<?php echo get_page_link(15)?>">Our services</a>
						</li>
						<li class="menu__list__items">
							<a class="menu__list__link" href="#" onclick="openDropMenu(event)">FAQ</a>
							<div class="drop__menu">
								<a href="<?php echo get_page_link(21)?>" class="menu__list__link menu__list__link--minw">Smart Switches FAQ</a>
								<a href="<?php echo get_page_link(25)?>" class="menu__list__link menu__list__link--minw">Smart Shades / Motorized Blinds FAQ</a>
							</div>
						</li>
						<li class="menu__list__items">
							<a class="menu__list__link" href="<?php echo get_page_link(10)?>">About</a>
						</li>
						<li class="menu__list__items">
							<a class="menu__list__link" href="<?php echo get_page_link(36)?>">Contact</a>
						</li>
						<li class="menu__list__items">
							<a class="menu__list__link" href="<?php echo get_page_link(42)?>">Blog</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>