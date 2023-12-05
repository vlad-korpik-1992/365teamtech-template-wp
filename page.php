<?php get_header(); ?>
<section class="headline">
    <div class="wrapper wrapper--service">
        <h1><?php single_post_title(); ?></h1>
    </div>
</section>
<section class="company">
	<img class="company__img company__img--single" lazy="loading" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php single_post_title(); ?>">
</section>
<section class="single">
	<div class="wrapper wrapper--service">
		<div class="single__box">
			<?php echo wpautop(the_content());?>
		</div>
	</div>
</section>
<?php get_footer(); ?>