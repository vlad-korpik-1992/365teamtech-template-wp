<?php

/**
 * Template Name: Contacts
 */
?>
<?php get_header(); ?>
<section class="headline">
    <div class="wrapper">
        <h1><?php single_post_title(); ?></h1>
    </div>
</section>
<section class="contact">
    <div class="wrapper">
        <div class="contact__top">
            <?= wpautop( the_content() )?>
        </div>
        <div class="contact__box">
            <div class="contact__box__items">
                <div class="contact__box__info contact__box__info--grey">
                    <h3>Address</h3>
                    <p><?= the_field('address_contact') ?></p>
                </div>
                <div class="contact__box__inner">
                    <div class="contact__box__info contact__box__info--white">
                        <h3>Working hours:</h3>
                        <?= wpautop(the_field('working_hours_contact')) ?>
                    </div>
                    <div class="contact__box__info contact__box__info--black">
                        <h3>Service Areas:</h3>
                        <p><?= the_field('service_contact') ?></p>
                    </div>
                </div>
                <div class="contact__box__info contact__box__info--grey">
                    <h3>Call us:</h3>
                    <div class="conact__box__phone">
                        <?php if (get_field('phone_one_contact')) : $phone = str_replace([' ', '(', ')', '-'], '', get_field('phone_one_contact')); ?>
                            <a class="contact__box__phone__link" href="tel:<?= $phone; ?>"><?= the_field('phone_one_contact') ?></a>
                        <?php endif; ?>
                        <?php if (get_field('phone_two_contact')) : $phone = str_replace([' ', '(', ')', '-'], '', get_field('phone_two_contact')); ?>
                            <a class="contact__box__phone__link" href="tel:<?= $phone; ?>"><?= the_field('phone_two_contact') ?></a>
                        <?php endif; ?>
                    </div>
                    <h3>Email Us:</h3>
                    <a class="contact__box__phone__link" href="mailto:<?= the_field('email_contact') ?>"><?= the_field('email_contact') ?></a>
                </div>
            </div>
            <div class="contact__box__items">
                <div class="contact__box__info contact__box__info--white">
                    <h3>Please fill out the form:</h3>
                    <form class="form" action="">
                        <div class="form__items">
                            <label class="form__label" for="name">Your Name</label>
                            <input class="form__input" type="text" name="name" id="name" placeholder="Name" required>
                        </div>
                        <div class="form__items">
                            <label class="form__label" for="email">Your Email</label>
                            <input class="form__input" type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form__items">
                            <label class="form__label" for="phone">Your Phone number</label>
                            <input class="form__input" type="tel" inputmode="tel" name="phone" id="phone" placeholder="Number" required>
                        </div>
                        <div class="form__items">
                            <label class="form__label" for="need">I need:</label>
                            <select class="form__input" name="need" id="need" required>
                                <option value="Smart Shades / Blinds">Smart Shades / Blinds</option>
                                <option value="Smart Switches">Smart Switches</option>
                                <option value="Smart Light Dimmers">Smart Light Dimmers</option>
                                <option value="Home Automation Solution">Home Automation Solution</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form__items">
                            <label class="form__label" for="message">Your message (optional)</label>
                            <textarea class="form__input" name="message" id="message" cols="30" rows="5" require></textarea>
                        </div>
                        <div class="form__items">
                            <button class="form__submit" type="submit">Send</button>
                            <p class="form--error form--error--warning"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map">
    <?= the_field('map_contact') ?>
</section>
<?php get_footer(); ?>