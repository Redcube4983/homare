<?php
/*
Template Name: single
*/
?>
<?php get_header(); ?>

<main>
<div class="simple-header">
			<nav class="breadcrumb">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><a href="<?php echo esc_url( home_url( 'topics' ) ); ?>">トピックス一覧</a></li>
					<li><span><?php the_title(); ?></span></li>
				</ul>
			</nav>
			<h1 class="page-title"><?php the_title(); ?></h1>
</div>
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
				'next_text' => '<span class="meta-nav" aria-hidden="true">次へ</span><i class="fas fa-angle-right"></i>',
				'prev_text' => '<i class="fas fa-angle-left"></i><span class="meta-nav" aria-hidden="true">前へ</span> ',
				'screen_reader_text' => '前後の記事へ',
			) );

	endwhile;
endif;
?>
</div>
</main><!-- .site-main -->

<?php get_footer(); ?>
