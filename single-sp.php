<?php
/*
Template Name: sp
*/
?>
<?php get_template_part('sp-header'); ?>

<main>
<!-- Single -->
<div class="topics-list">
<?php if(have_posts()) :
	while (have_posts()) :
		the_post();
		remove_filter( 'the_content', 'wpautop' );
		remove_filter( 'the_excerpt', 'wpautop' );
		the_content();

	// Previous/next post navigation.
	the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">次へ</span><i class="fa fa-angle-right"></i>',
				'prev_text' => '<i class="fa fa-angle-left"></i><span class="meta-nav" aria-hidden="true">前へ</span> ',
				'screen_reader_text' => '前後の記事へ',
			) );

	endwhile;
endif;
?>
</div>
</main><!-- .site-main -->

<?php get_template_part('sp-footer'); ?>
