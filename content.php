<?php
/**
 * @package Clear Content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( 'post' == get_post_type() ) : ?>
	<div class="entry-meta">
		<?php clear_content_posted_on(); ?>
	</div><!-- .entry-meta -->
	<?php endif; ?>

	<header class="entry-header">
		<h1 class="entry-title">
			<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
		</h1>
		<?php the_post_thumbnail(); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'clear-content' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'clear-content' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php clear_content_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->