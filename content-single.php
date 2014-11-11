<?php
/**
 * @package Clear Content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<!-- 		<div class="entry-meta">
			<?php clear_content_posted_on(); ?>
		</div> -->
		<!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php clear_content_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
