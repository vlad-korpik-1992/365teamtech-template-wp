<?php get_header(); ?>
<section class="headline">
	<div class="wrapper">
		<a class="headline__link" href="<?php echo get_page_link(42) ?>">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<path d="M5 12L11 6M5 12L11 18M5 12H19" stroke="#A4A4A4" stroke-opacity="0.643137" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
			<p>Back</p>
		</a>
	</div>
</section>
<section class="service">
	<div class="wrapper wrapper--service">
		<h1><?php single_post_title(); ?></h1>
	</div>
</section>
<section class="company">
	<img class="company__img company__img--single" lazy="loading" src="<? the_post_thumbnail_url() ?>" alt="<?php single_post_title(); ?>">
</section>
<section class="single">
	<div class="wrapper wrapper--service">
		<div class="single__box">
			<?php echo wpautop(the_content());?>
		</div>
	</div>
</section>
<?php get_footer(); ?>