<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Dimensions_Barbershop
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="content">

		<section class="error-404">
			<?php  
				$title = get_field('404_title', 'option');
				$desc = get_field('404_description', 'option');
				$cta = get_field('404_cta', 'option');
				$image = get_field('404_image', 'option');
			?>

			<div class="page-content">

			<div class="error-404__content">
				<h1 class="error-404__title"><?php echo $title; ?></h1>
				<p class="error-404__desc"><?php echo $desc; ?></p>
				<a class="error-404__cta" href="<?php echo $cta['url']; ?>"><?php echo $cta['title']; ?></a>
			</div>

			<div class="error-404__image">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>
				
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

		</div>	
	</main><!-- #main -->

<?php get_footer();
