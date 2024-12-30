<?php get_header(); ?>

<div class="content">

<section class="c-about-page">

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