<?php
/*
Template Name: page-topics
*/
?>
<?php get_header();?>
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
$dispnum =  5; //navigationの最大表示個数「前」もしくは「後」へ幾つリンクを表示させるかの設定。実際表示されるリンクは最大で「設定値×2＋1」)
$paged = (int) get_query_var('paged');
$args = array(
	'posts_per_page' => 10,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish',
	'ignore_sticky_posts' => true
);
//「先頭に固定」を無視する場合	'ignore_sticky_posts' => true
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink() ?>">
<span class="label-notice">お知らせ</span><time datetime="<?php the_time('Y/m/d') ?>"><?php the_time('Y/m/d') ?></time>
<h2><?php the_title(); ?></h2>
</a>
<p><?php the_excerpt(); ?></p>
</article>

<?php
	endwhile;
else:
	get_template_part( 'content', 'none' );
endif;
if( mb_substr(get_pagenum_link(1),-1) == '/' ){
	$format = 'page/%#%';
}	else {
	$format = '/page/%#%';
};
if ($the_query->max_num_pages > 1) {
	$pagenation_array =  paginate_links(array(
		'base' => get_pagenum_link(1) . '%_%',
		'format' => $format,
		'current' => max(1, $paged),
		'total' => $the_query->max_num_pages,
		'prev_next' => false,
		'show_all' => true,
		'type' => 'array'
	));
	if( count($pagenation_array) > 1 ){
		echo "<div><ul>\n";
		foreach( $pagenation_array as $wkKey => $wkData ){
			if( mb_ereg('current', $wkData) ){
				$cur = $wkKey;
				break;
			}
		}
		if( $dispnum * 2 + 1 > count($pagenation_array)  ){
			//全件出力
			for( $i = 0; $i < count($pagenation_array); $i++ ){
					echo "<li>".$pagenation_array[$i]."</li>\n";
			}
		} else {
			if( $cur < $dispnum ){
				//最初から出力
				for( $i = 0; $i < $dispnum * 2 + 1; $i++ ){
					echo "<li>".$pagenation_array[$i]."</li>\n";
				}
			} else if( $cur >= count($pagenation_array) - $dispnum  ){
				//最後までになるように出力
				for( $i = 0; $i < $dispnum * 2 + 1; $i++ ){
					$ind = count($pagenation_array) - ($dispnum * 2 + 1) + $i;
					echo "<li>".$pagenation_array[$ind]."</li>\n";
				}
			} else {
				//「$cur - 5」から出力
				for( $i = 0; $i < $dispnum * 2 + 1; $i++ ){
					$ind = $cur - 5 + $i;
					echo "<li>".$pagenation_array[$ind]."</li>\n";
				}
			}
		}
		echo "</ul></div>\n";
	}
}
	
	wp_reset_postdata();
?>			
</div>
</main>

<?php
get_footer();
?>
