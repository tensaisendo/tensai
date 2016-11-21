<?php 
echo '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
		<input type="text" class="search-field" placeholder="Recherche dans tensai.com" value="" name="s" title="Recherche dans tensai.com">
		<input type="submit" class="search-submit" value=="'. esc_attr_x( 'Search', 'submit button' ) .'">
	 </form>';

