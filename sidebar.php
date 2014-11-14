<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Clear Content
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php if ( is_singular() ) : ?>
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php clear_content_posted_on(); ?>
			</div> 
			<!-- .entry-meta -->
		<?php endif; ?>
		<?php clear_content_post_nav(); ?>
	<?php endif; ?>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->



