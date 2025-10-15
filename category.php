<?php /* WordPress CMS Theme WSC Project. */ 
get_header();
?>
	<main>

		<div class="simple-header">
			<nav class="breadcrumb">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><span>トピックス一覧</span></li>
				</ul>
			</nav>
			<h1 class="page-title">最新情報</h1>
		</div>

<div class="topics-list">
<?php
global $post;
$args = array( 'posts_per_page' => 10 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) {
	setup_postdata($post);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink() ?>">
<span class="label-notice">お知らせ</span><time datetime="<?php the_time('Y/m/d') ?>"><?php the_time('Y/m/d') ?></time>
<h2><?php the_title(); ?></h2>
</a>
<p><?php the_excerpt(); ?></p>
</article>
<?php
}
wp_reset_postdata();
?>			
</div>
</main>

<?php
get_footer();
?>
