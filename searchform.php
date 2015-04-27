<div class="site-search">
	<form id="main-search" action="/" method="get">
		<fieldset>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'clean-content' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
			<input type="hidden" value="post" name="post_type" id="post_type" />
			<button type="submit" value="" id="search-submit" name="submit" class="submit">
		</fieldset>
	</form>
</div><!-- .searchform -->