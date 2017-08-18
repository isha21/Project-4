<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


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
		<img class="logo-circle" src=" <?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="inhabitent-logo">
	</div><!-- #primary -->


<?php get_footer(); ?>
