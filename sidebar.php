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

<div id="secondary" class="widget-area m1 t7-t8 d9-d11" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
