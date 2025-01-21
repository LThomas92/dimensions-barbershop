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


		<?php else : ?>
        
		<div class="c-page-search__no-results-found">
			<h3 class="c-page-search__no-results-title">Nothing Found, Sorry, but nothing matched your search terms. Please try again with some different keywords.</h3>
			<div class="c-page-search__no-results-search">
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<label>
				<span class="c-page-search__no-results-keyword">Search Keywords:
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Try Search Again', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
				</span>	
				</label>
				<button type="submit" name="submit" value="submit">Search</button>
				</form>
			</div>
		</div>


		<?php  endif;
		?>

	</main><!-- #main -->

	</section>

	</div>

<?php get_footer(); ?>
