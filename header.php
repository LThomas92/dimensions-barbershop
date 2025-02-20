<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dimensions_Barbershop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dimensions-barbershop' ); ?></a>

  <div class="site-header__container">
	<header id="masthead" class="site-header">
		<div class="site-branding">
		<?php $logo = get_field('logo', 'option'); ?>

		<a class="site-header__logo" href="<?php echo site_url(); ?>">
			<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
		</a> <!-- LOGO --> 
		
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<div class="site-header__misc">
			<img class="search-btn" title ="Search Icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/search.svg" alt="Search Icon">
		</div> <!-- MISC -->

	</div>

	</header><!-- #masthead -->
    </div>

	<div class="mobile-header">

    <div id="nav-icon3" class="mobile-header__menu-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>

	<a href="<?php echo site_url(); ?>">
    <img title="Dimensions Barbershop Logo" class="mobile-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Dimensions Barbershop Logo"/>
    </a>

	<img class="search-btn" title ="Search Icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/search.svg" alt="Search Icon">
    
  </div>

  <div class="mobile-menu-overlay">
	<div class="mobile-menu-overlay__container">
	<div class="mobile-menu-overlay__header">
	<img class="mobile-menu-overlay__close-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/close-white.svg" alt="Close Icon"/>


	<img class="search-btn" title ="Search Icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/search-white.svg" alt="Search Icon">
	</div>
  <nav class="mobile-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</div>
  </div>

  <div class="overlay-menu">
<img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/close.svg" alt="Close Icon"/>
  <div class="container-margins">
<div class="header-search-form">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'What are you looking for?', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit" name="submit" value="submit"></button>
</form>
    </div> <!-- header search form -->
    </div> <!-- container margins -->
</div> <!-- overlay menu -->
