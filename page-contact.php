<?php get_header(); ?>

<div class="content">
    <div class="c-page-contact">
        <h2 class="c-page-contact__title"><?php echo get_the_title(); ?></h2>
        <div class="c-page-contact__form">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>