<?php get_header(); ?>

<div class="content">

<section class="c-about-page">
    <?php
        $smallTitle = get_field('small_title'); 
        $headerTitle = get_field('header_title');
        $headerDesc = get_field('header_description');
    ?>

    <div class="c-about-page__header">
        <h5 class="c-about-page__small-title"><?php echo $smallTitle; ?></h5>
        <h2 class="c-about-page__title"><?php echo $headerTitle; ?></h2>
        <p class="c-about-page__header-desc">
            <?php echo $headerDesc; ?>
        </p>
    </div>

<?php if( have_rows('team_members') ): ?>

    <ul class="c-team-members">
    <?php while( have_rows('team_members') ) : the_row();

        // Load sub field value.
        $teamMemberImage = get_sub_field('team_member_image'); 
        $teamMemberName = get_sub_field('team_member_name');
        ?>
       <li class="c-team-member">
          <figure class="c-team-member__image">
            <img src="<?php echo $teamMemberImage['url']; ?>" alt="<?php echo $teamMemberImage['alt']; ?>">
          </figure>
          <h4 class="c-team-member__name"><?php echo $teamMemberName; ?></h4>
       </li>

    <?php endwhile; ?>
    </ul>

<?php else :
    // Do something...
endif;
?>
</div>

</section>

<?php get_footer(); ?>