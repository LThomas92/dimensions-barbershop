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
		<?php $logo = get_field('footer_logo', 'option'); ?>
		<a class="site-footer__logo" href="<?php echo site_url(); ?>">
			<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
		</a>
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
      <?php $copyrightInfo = get_field('copyright_info', 'option'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="site-footer__copyright">
		<div class="site-footer__copyright-margins">
        <p><?php echo $copyrightInfo; ?></p>
		</div>
      </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
