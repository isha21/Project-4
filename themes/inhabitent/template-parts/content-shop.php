<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h2 class="entry-title">','</h2>' ); ?>
	  <p class="item-price"><?php echo CFS()->get('price'); ?></p>

	
</div><!-- #post-## -->
