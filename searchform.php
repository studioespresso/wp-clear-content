<div class="site-search">
	<form action="/" method="get">
		<fieldset>
			<input type="search" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search" />
			<input type="hidden" value="post" name="post_type" id="post_type" />
	<!-- 		<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
	 -->	</fieldset>
	</form>
</div>