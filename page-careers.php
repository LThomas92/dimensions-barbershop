<?php get_header(); ?>

<div class="content">
    <div class="c-page-careers">
    <?php 
        $careersHeader = get_field('careers_header');
        $careersTitle = get_field('careers_title');
        $careersCTA = get_field('careers_cta');
        $ourTeamTitle = get_field('our_team_title');
        $ourTeamDesc = get_field('our_team_desc');
    ?>

    <div style="background-image: url('<?php echo $careersHeader['url']; ?>');" class="c-page-careers__header">
        <div class="c-page-careers__header-text-box">
            <h1 class="c-page-careers__title"><?php echo $careersTitle; ?></h1>
            <a id="scrollToApplyForm" href="#applyform" class="c-page-careers__cta"><?php echo $careersCTA; ?></a>
        </div>
    </div>

    <div class="c-page-careers__our-team">
        <h4 class="c-page-careers__our-team__title"><?php echo $ourTeamTitle; ?></h4>
        <p class="c-page-careers__our-team__desc"><?php echo $ourTeamDesc; ?></p>

        <?php if( have_rows('team_member_testimonials') ): ?>

    <ul class="c-page-careers__our-team__testimonials">
    <?php while( have_rows('team_member_testimonials') ) : the_row();

        $teamMemberImage = get_sub_field('team_member_image'); 
        $teamMemberQuote = get_sub_field('team_member_quote');
        $teamMemberName =  get_sub_field('team_member_name');
        ?>
        <li class="c-page-careers__our-team__testimonial">
            <figure>
                <img src="<?php echo $teamMemberImage['url']; ?>" alt="<?php echo $teamMemberImage['alt']; ?>">
            </figure>
            <div class="c-page-careers__our-team__testimonial-desc-container">
                <p class="c-page-careers__our-team__testimonial__desc">
                    <?php echo $teamMemberQuote; ?>
                </p>
                <h4 class="c-page-careers__our-team__testimonial-name"><?php echo $teamMemberName; ?></h4>
            </div>
        </li>

    <?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>
    </div>

    <section id="applyform" class="c-page-careers__apply">
        
    <div class="c-page-careers__apply-form">
        <?php the_content(); ?>
    </div>
    </section>

    
    </div>
</div>

<?php get_footer(); ?>