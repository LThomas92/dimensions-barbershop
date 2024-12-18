<?php get_header(); ?>

<div class="content">
  <div class="c-homepage">
  <?php $bgImage = get_field('background_image'); ?>
    <div style="background-image: url(<?php echo $bgImage['url']; ?>);" class="c-homepage__header"></div>

  <section class="c-homepage__book-apt">
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
      <h2 class="c-homepage__services-title"><?php echo $servicesTitle; ?></h2>

      <?php if( have_rows('services_list') ): ?>

      <ul class="c-homepage__services-list">
    <?php while( have_rows('services_list') ) : the_row();

        $serviceIcon = get_sub_field('service_icon'); 
        $serviceTitle = get_sub_field('service_title');
        $serviceDesc = get_sub_field('service_description');
        ?>
        <li class="c-homepage__services-list-item">
          <img src="<?php echo $serviceIcon['url']; ?>" alt="<?php echo $serviceIcon['alt']; ?>"/>
          <h4 class="c-homepage__service-name"><?php echo $servicesTitle; ?></h4>
          <div class="c-homepage__service-desc">
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

  </div>
</div>


<?php get_footer(); ?>