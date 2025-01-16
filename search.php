<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Dimensions_Barbershop
 */

get_header();
?>

<div class="content">

	<section class="c-page-search">

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="c-page-search__header">
			
				<h1 class="page-title">
					<?php printf( esc_html__( 'Search Results for: %s', 'dimensions-barbershop' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<div class="c-page-search__results-found">
				<p><?php echo sprintf( 'Found %d result(s)', $wp_query->found_posts ); ?></p>
			</div>

			<ul class="c-page-search__results-list">
			<?php while ( have_posts() ) : the_post(); ?>

					<li class="c-page-search__results-list-item">
					<a href="<?php echo get_the_permalink(); ?>">
					<figure>
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""/>
					</figure>
					<h4 class="c-page-search__results-list-item-title"><?php the_title(); ?></h4>
					<p class="c-page-search__results-list-item-desc"><?php echo get_the_excerpt();?></p>
					</a>
				</li>

			<?php endwhile; ?>
			</ul>


		<?php else :
        get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

	</section>

	</div>

<?php get_footer(); ?>
