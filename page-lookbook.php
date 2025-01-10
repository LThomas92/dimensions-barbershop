<?php get_header(); ?>

<div class="content">

<seciton class="c-page-lookbook">
    <?php $title = get_field('title'); ?>

    <h2 class="c-page-lookbook__title"><?php echo $title; ?></h2>

    <?php if( have_rows('images') ): ?>
<ul class="c-page-lookbook__images">
    <?php while( have_rows('images') ) : the_row();

        $image = get_sub_field('image'); ?>
        <li class="c-page-lookbook__image">
            <figure>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
        </li>

    <?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>
</seciton>



</div>

<?php get_footer(); ?>