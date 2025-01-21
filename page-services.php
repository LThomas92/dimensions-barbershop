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
        ?>
        <li class="c-page-services__list-item">
            <figure class="c-page-services__list-item-image">
                <img src="<?php echo $serviceImg['url']; ?>" alt="<?php echo $serviceImg['alt']; ?>">
            </figure>
            <h4 class="c-page-services__list-item-title"><?php echo $serviceTitle; ?></h4>
        </li>

<?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>

<section class="c-page-services__why-choose-us">
    <div class="c-page-services__why-choose-us-wrapper">
    <?php $whyTitle = get_field('why_choose_us_title'); ?>
    <h3 class="c-page-services__why-title"><?php echo $whyTitle; ?></h3>

    <div class="c-page-services__why-choose-us__content">
        <div class="c-page-services__why-choose-us__left">
        <?php if( have_rows('dropdown_list') ): ?>

    <ul class="c-page-services__dropdown-list">
    <?php while( have_rows('dropdown_list') ) : the_row();

        $listItemTitle = get_sub_field('list_item_title'); 
        $listItemContent = get_sub_field('list_item_content');
        ?>
        <li class="c-page-services__dropdown-list-item">
        <h4 class="c-page-services__dropdown-list-item-title" key="<?php echo $listItemTitle; ?>"><?php echo $listItemTitle; ?>
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 125">
  <defs>
    <style>
      .cls-1 {
        fill: #112b5b;
        fill-rule: evenodd;
        stroke-width: 0px;
      }
    </style>
  </defs>
  <path class="cls-1" d="M76.6,4.8c.6-.6.6-1.5,0-2s-1.5-.6-2,0L17.2,60.1c-.6.6-.6,1.5,0,2l57.4,57.4c.6.6,1.5.6,2,0,.6-.6.6-1.5,0-2L20.2,61.1,76.6,4.8Z"/>
</svg>
          </h4>
          <div key="<?php echo $listItemTitle; ?>" class="c-page-services__wrapper">
          <div class="c-page-services__dropdown-list-item-content"><?php echo $listItemContent; ?></div>
          </div>
        </li>

<?php endwhile;?>
    </ul>
<?php 
else :
    // Do something...
endif; ?>
        </div>
        <div class="c-page-services__why-choose-us__images">
            <?php 
                $smallImage = get_field('small_image');
                $bigImage = get_field('big_image');
            ?>
            <figure class="c-page-services__why-choose-us__small-image">
                <img src="<?php echo $smallImage['url']; ?>" alt="<?php echo $smallImage['alt']; ?>">
            </figure>
            <figure class="c-page-services__why-choose-us__big-image">
                <img src="<?php echo $bigImage['url']; ?>" alt="<?php echo $bigImage['alt']; ?>">
            </figure>
        </div>
        </div>
    </div>
</section>

    </div>
</div>
<?php get_footer(); ?>