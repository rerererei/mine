<?php
/*
Template Name: 問い合わせ
*/
?>
<?php get_header(); ?>
<section class="second-header contact-head">
    <div class="second-title">
        <h1>お問い合せ</h1>
        <hr>
        <h2>Contact Us</h2>
    </div>
    <div class="dogandcat">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/dogandcat.webp">
    </div>
</section>
<section class="second-description">
    <p>お問い合せフォーム</p>
</section>
<section class="background-color-gray-contact">
    <div class="contact-f">
        <?php echo do_shortcode('[contact-form-7 id="ec9e4e4" title="Contact form 1"]'); ?>
    </div>
</section>
<?php get_footer(); ?>
