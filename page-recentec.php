<section class="latest-info">
	<h2>最新情報</h2>
<?php

global $post;
$args = array( 'posts_per_page' => 5 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) {
	setup_postdata($post);
?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<a href="<?php the_permalink() ?>">
						<span class="label-notice">お知らせ</span><time datetime="<?php the_time('Y/m/d') ?>"><?php the_time('Y/m/d') ?></time>
						<h3><?php the_title(); ?></h3>
					</a>
					<p><?php the_excerpt(); ?></p>
				</article>
<?php
}
wp_reset_postdata();
//get_footer('recentec');

?>
</section>
