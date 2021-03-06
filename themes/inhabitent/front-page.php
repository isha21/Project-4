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
				<div class="shop-stuff-header">
				<h2>Shop Stuff</h2>
				</div>
        <div class="shop-items-container">
            <?php foreach( $terms as $term ) : ?>
                <div class="category-item">
								<img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';  ?>">
                    <p><?php echo $term->description; ?></p>
                    <button><a class="category-item-link" href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?> stuff</a></button>
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif;?>

		<?php 
				$args = array ('post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, 'orderby' => 'date');
				$journal_posts = get_posts($args);
		  ?>
		<h2 class="inhabitent-joural-header">Inhabitent Journal</h2>
		<div class="journal">
			<?php foreach ( $journal_posts as $post ) : setup_postdata($post); ?>
				<div class ="journal-recent-block-item">
					<div class="journal-text">
					<div class ="journal-thumbnail-wrapper">	
						<?php if  ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail('medium'); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="journal-box">
					<div class="entry-journal-meta">
						<?php red_starter_posted_on(); ?> /<?php comments_number();?>
					</div><!-- .entry-meta -->
				<div class="journal-title-meta">
					<a href="<? echo get_post_permalink() ?>"> <?php the_title(); ?> </a>
				</div>
				<div class="read-entry">	<a href="<? echo get_post_permalink() ?>">Read Entry</a></div>
				</div>				
			</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			
			
			  
				<div>
				<h2 class="adventure">Latest Adventures</h2>
				</div>

				<div class="adventure-container">
				<div class="canoe">
				<h3>Getting back to Nature in a Canoe<h3>
				<div><button>Read More</button></div>
				</div>

				<div class="beach">
				<h3>A Night with Friends at the beach<h3>
				<div><button>Read More</button></div>
				</div>
				

				<div class="mountain">
				<h3>Taking in the view at Big Mountain</h3>
				<span><button>Read More</button></span>
				</div>
				
				

				<div class="star">
				<h3>Star-Gazing at the Night Sky</h3>
				<div><button>Read More</button></div>
				</div>
			
				</div>
				</div>
				

		

		</main><!-- #main -->
		
	
	</div><!-- #primary -->
 <button class="adventures">More Adventures</button>

<?php get_footer(); ?>
