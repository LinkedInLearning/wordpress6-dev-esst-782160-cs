<?php

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		printf( '<a href="%s"><h2>%s</h2></a>', get_permalink(), get_the_title() );
		the_content();

		echo '<hr>';
	}
}

get_sidebar();

get_footer();
