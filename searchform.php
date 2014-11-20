<div class="site-search">
	<form id="main-search" action="/" method="get">
		<fieldset>
			<input type="search" class="search-field" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search" />
			<input type="hidden" value="post" name="post_type" id="post_type" />
			<button type="submit" value="" id="search-submit" name="submit" class="submit">
		</fieldset>
	</form>
</div><!-- .searchform -->