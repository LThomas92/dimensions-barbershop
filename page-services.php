<?php get_header(); ?>

<div class="content">
    <div class="c-page-services">
        <?php 
            $title = get_field('title');
        ?>
        <div class="c-page-services__header">
            <h1 class="c-page-services__title"><?php echo $title; ?></h1>
        </div>

        <?php if( have_rows('services_list') ): ?>
    <ul class="c-page-services__list">
    <?php while( have_rows('services_list') ) : the_row(); ?>

        <?php $serviceImg = get_sub_field('service_image'); 
              $serviceTitle = get_sub_field('service_title');
              $serviceCTA = get_sub_field('service_cta');
        ?>
        <li class="c-page-services__list-item">
            <a href="<?php echo $serviceCTA['url']; ?>">
            <figure class="c-page-services__list-item-image">
                <img src="<?php echo $serviceImg['url']; ?>" alt="<?php echo $serviceImg['alt']; ?>">
            </figure>
            <h4 class="c-page-services__list-item-title"><?php echo $serviceTitle; ?></h4>
            </a>
        </li>

<?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>

<section class="c-page-services__why-choose-us">
    <?php $whyTitle = get_field('why_choose_us_title'); ?>
    <h3 class="c-page-services__why-title"><?php echo $whyTitle; ?></h3>

    <div class="c-page-services__why-choose-us__content">
        <div class="c-page-services__why-choose-us__dropdown-list">
            Dropdown list
        </div>
        <div class="c-page-services__why-choose-us__images">
            
        </div>
    </div>
</section>

    </div>
</div>
<?php get_footer(); ?>