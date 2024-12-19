<?php get_header(); ?>

<div class="content">
  <div class="c-homepage">
  
  <section class="c-homepage__header">
  <?php if( have_rows('homepage_slides') ): ?>
    <ul class="c-homepage__slides">
    <?php while( have_rows('homepage_slides') ) : the_row();
        $slideImage = get_sub_field('homepage_slide');
        if ($slideImage) :
            ?>
            <li style="background-image:url(<?php echo esc_url($slideImage['url']); ?>);" class="c-homepage__slide">
            <div class="slide-image-overlay "></div> <!-- Dark overlay -->  
          </li>
        <?php endif; ?>
    <?php endwhile; ?>
    </ul>
  <?php else : ?>
    <!-- Optional: Fallback content if no slides are available -->
  <?php endif; ?>
</section>


  <section class="c-homepage__book-apt gutenberg-styles">
    <?php 
      $bookAptContent = get_field('book_apt_content');
      $bookAptTitle = get_field('book_apt_title');
      $bookAptImage = get_field('book_apt_image');
      $bookAptCTA = get_field('book_apt_cta');
    ?>
    <div class="c-homepage__book-apt__main-content">

    <div class="c-homepage__book-apt__content">
      <h2 class="c-homepage__book-apt__title"><?php echo $bookAptTitle; ?></h2>
      <div class="c-homepage__book-apt__text"><?php echo $bookAptContent; ?></div>
      <a class="c-homepage__book-apt__cta" href="<?php echo $bookAptCTA['url']; ?>"><?php echo $bookAptCTA['title']; ?></a>
    </div>
    <figure class="c-homepage__book-apt__image">
      <img src="<?php echo $bookAptImage['url']; ?>" alt="<?php echo $bookAptImage['alt']; ?>">
    </figure>

  </div>
  </section>

  <section class="c-homepage__services">
    <?php 
      $servicesTitle = get_field('services_title');
    ?>
    <div class="c-homepage__services-container">
      <h2 class="c-homepage__services__title"><?php echo $servicesTitle; ?></h2>

      <?php if( have_rows('services_list') ): ?>

      <ul class="c-homepage__services-list">
    <?php while( have_rows('services_list') ) : the_row();

        $serviceIcon = get_sub_field('service_icon'); 
        $serviceTitle = get_sub_field('service_title');
        $serviceDesc = get_sub_field('service_description');
        ?>
        <li class="c-homepage__services-list-item">
          <img class="c-homepage__services-list-item__icon" src="<?php echo $serviceIcon['url']; ?>" alt="<?php echo $serviceIcon['alt']; ?>"/>
          <h4 class="c-homepage__services-list-item__name"><?php echo $serviceTitle; ?></h4>
          <div class="c-homepage__services-list-item__desc">
            <?php echo $serviceDesc; ?>
          </div>
        </li>

    <?php endwhile; ?>

<?php else :
    // Do something...
endif; ?>
      </ul>

    </div>
  </section>

  <section class="c-homepage__testimonials">
    <?php $testimonialsTitle = get_field('testimonials_title'); ?>
    <div class="c-homepage__testimonials-container">
        <h2 class="c-homepage__testimonials__title"><?php echo $testimonialsTitle; ?></h2>
        <div class="c-homepage__testimonials__slide__prev-arrow"></div>
        <div class="c-homepage__testimonials__slide__next-arrow"></div>
        <?php if( have_rows('testimonial_slides') ): ?>

    <ul class="c-homepage__testimonials__slides">
    <?php while( have_rows('testimonial_slides') ) : the_row();

        $testimonialName = get_sub_field('testimonial_name');
        $testimonialContent = get_sub_field('testimonial_content'); 
        ?>
        <li class="c-homepage__testimonials__slide">
            <div class="c-homepage__testimonials__slide-content">
                <?php echo $testimonialContent; ?>
            </div>
            <h4 class="c-homepage__testimonials__slide-title">–<?php echo $testimonialName; ?></h4>
        </li>

    <?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>
    </div>
  </section>

  </div>
</div>


<?php get_footer(); ?>