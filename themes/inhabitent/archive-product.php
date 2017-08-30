<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				  
       
					$terms = get_terms( 'product-type' );
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
							echo '<ul class="product-types">';
							foreach ( $terms as $term ) {
									echo '<li><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';
							}
							echo '</ul>';
					}
				
				
				?>
			</header><!-- .page-header -->

			<div class="shop-products">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			
				<?php
					get_template_part( 'template-parts/content', 'shop' );
				?>
		
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
