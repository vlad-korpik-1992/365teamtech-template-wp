<?php

/**
 * Template Name: Home
 */
?>
<?php get_header(); ?>
<section class="hero">
	<div class="wrapper">
		<div class="hero__box">
			<h1><?= the_field('title_smart_home') ?></h1>
			<span><?= the_field('desc_smart_home') ?></span>
			<p class="hero__box__link hero__box__link--one"><?= the_field('btn-01_smart_home') ?></p>
			<p class="hero__box__link hero__box__link--two"><?= the_field('btn-02_smart_home') ?></p>
			<p class="hero__box__link hero__box__link--three"><?= the_field('btn-03_smart_home') ?></p>
			<p class="hero__box__link hero__box__link--four"><?= the_field('btn-04_smart_home') ?></p>
		</div>
	</div>
</section>
<section class="about">
	<div class="wrapper">
		<div class="about__box">
			<div class="about__box__svg">
				<svg class="about__box__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 51" fill="none">
					<path d="M21.2 0.599976L12.4 37.6L10.8 29C14 29 16.6 30 18.6 32C20.6 33.8666 21.6 36.4 21.6 39.6C21.6 42.8 20.6 45.4 18.6 47.4C16.6 49.4 14.1333 50.4 11.2 50.4C8.00001 50.4 5.40001 49.4 3.40001 47.4C1.53334 45.2666 0.600006 42.6666 0.600006 39.6C0.600006 38.4 0.666673 37.3333 0.800006 36.4C0.933339 35.4666 1.20001 34.3333 1.60001 33C2.00001 31.6666 2.53334 30.0666 3.20001 28.2L11.6 0.599976H21.2ZM55.2 0.599976L46.4 37.6L44.8 29C48 29 50.6 30 52.6 32C54.6 33.8666 55.6 36.4 55.6 39.6C55.6 42.8 54.6 45.4 52.6 47.4C50.6 49.4 48.1333 50.4 45.2 50.4C42 50.4 39.4 49.4 37.4 47.4C35.5333 45.2666 34.6 42.6666 34.6 39.6C34.6 38.4 34.6667 37.3333 34.8 36.4C34.9333 35.4666 35.2 34.3333 35.6 33C36 31.6666 36.5333 30.0666 37.2 28.2L45.6 0.599976H55.2Z" fill="black" />
				</svg>
			</div>
			<div class="about__box__content">
				<?= wpautop(the_content()) ?>
			</div>
		</div>
	</div>
</section>
<section class="services">
	<div class="wrapper">
		<div class="services__box">
			<div class="services__box__items">
				<a class="services__box__items__black services__box__items__title" href="#">
					<h2>Smart Switches</h2>
					<span class="services__link services__link--black">Learn more</span>
					<img class="services__box__items__black__img" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/service-one.png" alt="Smart Switches">
				</a>
			</div>
			<div class="services__box__items">
				<a class="services__box__items__white services__box__items__title" href="#">
					<h2>Security Cameras</h2>
					<span class="services__link services__link--white">Learn more</span>
					<img class="services__box__items__white__img" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/service-two.png" alt="Security Cameras">
				</a>
				<a class="services__box__items__white services__box__items__title services__box__items__white--bg-grey" href="#">
					<h2>Smart Curtains</h2>
					<span class="services__link services__link--white">Learn more</span>
					<img class="services__box__items__grey__img" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/service-three.png" alt="Smart Curtains">
				</a>
			</div>
		</div>
		<div class="services__footer">
			<div class="services__box__items">
				<a class="services__box__items__white services__box__items__title" href="#">
					<h2>Access Control Systems</h2>
					<span class="services__link services__link--white">Learn more</span>
					<img class="services__box__items__grey__img" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/service-four.png" alt="Security Cameras">
				</a>
			</div>
			<div class="services__box__items">
				<a class="services__box__items__white services__box__items__title services__box__items__white--bg-black" href="#">
					<h2>Intercom <br /> systems</h2>
					<span class="services__link services__link--black">Learn more</span>
					<img class="services__box__items__grey__img" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/service-five.png" alt="Smart Curtains">
				</a>
			</div>
		</div>
	</div>
</section>
<section class="gallery">
	<div class="wrapper">
		<div class="section-title">
			<h2><?= the_field('title_gallery') ?></h2>
		</div>
		<div class="gallery__box">
			<div class="gallery__box__items">
				<? $gallery = get_field('gallery_01');
				$item = 1; ?>
				<?php foreach ($gallery as $photo) : ?>
					<a class="gallery__box__link" href="<?= $photo['url']; ?>">
						<img loading="lazy" class="gallery__box__img <? if ($item % 2 == 0) : ?> gallery__box__img--height--last <? endif ?>" src="<?= $photo['url']; ?>" alt="">
					</a>
				<?php $item++;
				endforeach; ?>
			</div>
			<div class="gallery__box__items">
				<? $gallery = get_field('gallery_02'); ?>
				<?php foreach ($gallery as $photo) : ?>
					<a class="gallery__box__link" href="<?= $photo['url']; ?>">
						<img loading="lazy" class="gallery__box__img gallery__box__img--height" src="<?= $photo['url']; ?>" alt="">
					</a>
				<?php endforeach; ?>
				<div class="gallery__box__items__inner">
					<div class="gallery__box__column">
						<? $gallery = get_field('gallery_03'); ?>
						<?php foreach ($gallery as $photo) : ?>
							<a class="gallery__box__link" href="<?= $photo['url']; ?>">
								<img loading="lazy" class="gallery__box__img" src="<?= $photo['url']; ?>" alt="">
							</a>
						<?php endforeach; ?>
					</div>
					<div class="gallery__box__column">
						<? $gallery = get_field('gallery_04'); ?>
						<?php foreach ($gallery as $photo) : ?>
							<a class="gallery__box__link" href="<?= $photo['url']; ?>">
								<img loading="lazy" class="gallery__box__img" src="<?= $photo['url']; ?>" alt="">
							</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="call">
	<div class="wrapper">
		<div class="call__box">
			<div class="section-title section-title--black">
				<h2><?= the_field('title_callme') ?></h2>
			</div>
			<div class="call__info">
				<div class="call__info__items">
					<h5><?= the_field('phone_callme') ?></h5>
					<?php if (get_field('phone_one_contact', 36)) : $phone = str_replace([' ', '(', ')', '-'], '', get_field('phone_one_contact', 36)); ?>
						<a href="tel:<?= $phone; ?>"><?= the_field('phone_one_contact', 36) ?></a>
					<?php endif; ?>
					<?php if (get_field('phone_two_contact', 36)) : $phone = str_replace([' ', '(', ')', '-'], '', get_field('phone_one_contact', 36)); ?>
						<a href="tel:<?= $phone; ?>"><?= the_field('phone_two_contact', 36) ?></a>
					<?php endif; ?>
				</div>
				<div class="call__info__items">
					<h5><?= the_field('email_callme') ?></h5>
					<a href="mailto:<?= the_field('email_contact', 36) ?>"><?= the_field('email_contact', 36) ?></a>
				</div>
			</div>
			<img loading="lazy" class="call__img" src="<?= the_field('image_callme') ?>" alt="Call me">
		</div>
	</div>
</section>
<?php get_footer(); ?>