<?php get_header(); ?>

<div class="content">
  <div class="c-homepage">
  
  <section class="c-homepage__header">
  <?php if( have_rows('homepage_slides') ): ?>
    <ul class="c-homepage__slides">
    <?php while( have_rows('homepage_slides') ) : the_row();
        $slideImage = get_sub_field('homepage_slide');
        $smallTitle = get_sub_field('homepage_small_title');
        $title = get_sub_field('homepage_title');
        $desc = get_sub_field('homepage_desc');
        if ($slideImage) : ?>
            <li class="c-homepage__slide">
              <img src="<?php echo $slideImage['url']; ?>" alt="<?php echo $slideImage['alt']; ?>"/>
              <div class="c-homepage__content">
                <h4 class="c-homepage__header-small-title"><?php echo $smallTitle; ?></h4>
                <h1 class="c-homepage__header-title"><?php echo $title; ?></h1>
              <p class="c-homepage__header-desc"><?php echo $desc; ?></p>
              </div>
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

  <section class="c-homepage__testimonials gutenberg-styles">
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