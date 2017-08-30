<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="shop-container">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail() ) : ?>

		<a href="<?php echo the_permalink();?>">	<?php the_post_thumbnail( 'large' );?></a>

<div class="shop-description">
		<?php endif; ?>
		<?php the_title( '<h2 class="entry-title">','</h2>' ); ?>
		<p>.....................</p>
	  <span class="item-price"><?php echo CFS()->get('price'); ?></span>
</div>
</div>	
</div><!-- #post-## -->
