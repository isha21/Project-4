<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <section class="hero-image">
		<img class="logo-circle" src=" <?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="inhabitent-logo">
		</section>	
		
		<?php
        $terms = get_terms( 'product-type' );
        if ( !empty( $terms ) && !is_wp_error ( $terms )) : 
				?>
				<h2 class="shop-stuff-header">Shop Stuff </h2>
        <div class="shop-items-container">
            <?php foreach( $terms as $term ) : ?>
                <div class="category-item">
								<img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';  ?>">
                    <p><?php echo $term->description; ?></p>
                    <a class="category-item-link" href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?> stuff</a>
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif;?>

		<?php 
				$args = array ('post_type' => 'post', order => 'DESC', 'posts_per_page' => 3, 'orderby' => 'date');
				$journal_posts = get_posts($args);
		  ?>
			<?php foreach ( $journal_posts as $post ) : setup_postdata($post); ?>
				<div class ="journal-recent-block-item">
					<div class ="journal-thumbnail-wrapper">
						<?php if  ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail('medium'); ?>
						<?php endif; ?>
					</div>
					<a href="<? echo get_post_permalink() ?>"> <?php the_title(); ?> </a>
				</div>

					<?php endforeach; wp_reset_postdata(); ?>
				</div>
	

		</main><!-- #main -->
		
	
	</div><!-- #primary -->


<?php get_footer(); ?>
