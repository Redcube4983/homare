<?php
/*
Template Name: page
*/
?>
<?php get_header();?>
<main>
<?php if(have_posts()) :
	while (have_posts()) :
		the_post();
		remove_filter( 'the_content', 'wpautop' );
		remove_filter( 'the_excerpt', 'wpautop' );
		the_content();
	endwhile;
else:
?>
</main>
<?php
endif;
get_footer();
?>
