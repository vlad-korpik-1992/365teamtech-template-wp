<?php

/**
 * Template Name: Blog
 */
?>
<?php get_header(); ?>
<section class="headline">
    <div class="wrapper">
        <h1><?php single_post_title(); ?></h1>
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
<section class="blog">
    <div class="wrapper">
        <div class="blog__box">
            <div class="blog__box__items">
                <?php
                if (get_query_var('paged')) {
                    $paged = get_query_var('paged');
                } else if (get_query_var('page')) {
                    $paged = get_query_var('page');
                } else {
                    $paged = 1;
                }
                $item = 1;
                $args = array(
                    'post_type' => 'post',
                    'post_status'       => 'publish',
                    'paged'             => $paged,
                );
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query($args);
                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <? if ($item % 2 != 0) : 
                        $short_description = wp_trim_words( get_field('short_description', $posts['ID']), 20, '...' ); ?>
                        <a class="blog__box__link" href="<?= get_permalink($posts['ID']); ?>">
                            <img lazy="loading" class="blog__img" src="<? the_post_thumbnail_url(  )?>" alt="<? the_title();?>">
                            <h2><?php the_title(); ?></h2>
                            <p><?= $short_description;?></p>
                        </a>
                    <? endif; ?>
                <? $item++;
                endwhile;
                $wp_query = null;
                $wp_query = $temp;
                wp_reset_query(); ?>
            </div>
            <div class="blog__box__items">
                <?php
                $item = 1;
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query($args);
                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <? if ($item % 2 == 0) : 
                        $short_description = wp_trim_words( get_field('short_description', $posts['ID']), 20, '...' ); ?>
                        <a class="blog__box__link" href="<?= get_permalink($posts['ID']); ?>">
                            <img lazy="loading" class="blog__img" src="<? the_post_thumbnail_url(  )?>" alt="<? the_title();?>">
                            <h2><?php the_title(); ?></h2>
                            <p><?= $short_description;?></p>
                        </a>
                    <? endif; ?>
                <? $item++;
                endwhile;
                $wp_query = null;
                $wp_query = $temp;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>