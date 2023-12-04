<?php

/**
 * Template Name: Services
 */
?>
<?php get_header(); ?>
<section class="headline">
        <div class="wrapper wrapper--service">
            <h1><?php single_post_title(); ?></h1>
        </div>
    </section>
    <section class="service">
        <div class="wrapper wrapper--service">
            <? echo wpautop( the_content() ) ?>
        </div>
    </section>
<?php get_footer(); ?>