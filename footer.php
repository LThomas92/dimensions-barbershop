<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dimensions_Barbershop
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		<?php $logo = get_field('footer_logo', 'option'); 
			  $desc = get_field('footer_desc', 'option');
			  $address = get_field('address', 'option');
		?>

		<div class="site-footer__container">
		<div class="site-footer__logo-desc">
		<a tareget="_blank" class="site-footer__logo" href="<?php echo site_url(); ?>">
			<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
		</a>
		<p class="site-footer__desc"><?php echo $desc; ?></p>
		<p class="site-footer__address"><?php echo $address; ?></p>
		</div>

    <div class="site-footer__main-content">
			<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		
			</div>

    <div class="site-footer__social-media">
    <?php if( have_rows('social_media_icons', 'option') ): ?>

    <ul class="site-footer__social-media-icons">
    <?php while( have_rows('social_media_icons', 'option') ) : the_row();
        $socialMediaIcon = get_sub_field('social_media_icon');
        $socialMediaLink = get_sub_field('social_media_link'); ?>

        <li class="site-footer__social-media-icon">
          <a target="_blank" href="<?php echo $socialMediaLink; ?>" class="site-footer__social-media-link">
            <img src="<?php echo $socialMediaIcon['url']; ?>" alt="<?php echo $socialMediaIcon['alt']; ?>">
          </a>
        </li>
        

    <?php endwhile; ?>
    </ul>

<?php
else :
    // Do something...
endif; ?>
    </div>

      <?php $copyrightInfo = get_field('copyright_info', 'option'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="site-footer__copyright">
		<div class="site-footer__copyright-margins">
        <p><?php echo $copyrightInfo; ?></p>
		</div>
		
		</div>
      </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
