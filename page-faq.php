<?php

/**
 * Template Name: FAQ
 */
?>
<?php get_header(); ?>
<section class="headline">
    <div class="wrapper wrapper--service">
        <h1><?php single_post_title(); ?></h1>
    </div>
</section>
<section class="faq">
    <div class="wrapper wrapper--service">
        <div class="faq__box">
            <? if (have_rows('questions')) :
                $col = 1;
                while (have_rows('questions')) : the_row(); ?>
                    <div class="faq__box__items" data-id="faq<?= $col; ?>">
                        <a class="faq__box__link" href="#" data-faqid="faq<?= $col; ?>" onclick="openFAQ(event)">
                            <span data-faqid="faq<?= $col; ?>"><? the_sub_field('title_question'); ?></span>
                            <svg data-faqid="faq<?= $col; ?>" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path data-faqid="faq1" d="M10 17L15 12L10 7" stroke="#A4A4A4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="faq__box__content">
                            <?= wpautop(the_sub_field('content_question')); ?>
                        </div>
                    </div>
            <? $col++;
                endwhile;
            else : echo 'There will be information here very soon.';
            endif;
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>