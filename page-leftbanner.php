<?php
get_header('leftbanner');

$args = array(
	'numberposts' => 10, //表示する記事の数
	'post_type' => '_leftbanner' //カスタム投稿タイプの指定
);
$customPosts = get_posts($args);
if($customPosts) :
?>
<ul class="side-mini-bnr-list">
<?php
	foreach($customPosts as $post) :
		setup_postdata( $post );
		$meta_link = get_post_meta( $post->ID, 'link', true );
		$meta_image = get_post_meta( $post->ID, 'image', true );
		$meta_alt = get_post_meta( $post->ID, 'title', true );
		$array_alt = array('alt' => $meta_alt);
		$image_tag = wp_get_attachment_image( $meta_image, 'full', false, $array_alt );
		if( $meta_link == '' ):
?>
	<li class="side-mini-bnr-item"><a><? echo $image_tag; ?></a></li>
<?php
		else : //記事が無い場合
?>
	<li class="side-mini-bnr-item"><a href="<?php echo $meta_link; ?>"><? echo $image_tag; ?></a></li>
<?php
		endif;
	endforeach;
?>
</ul>	
<?php
endif;

wp_reset_postdata();
get_footer('leftbanner');

?>
