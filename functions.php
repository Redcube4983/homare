<?php

//metaタグWordPressのVersionを消す
remove_action('wp_head','wp_generator');

//テキストウィジェットでショートコードを使用する
add_filter('widget_text', 'do_shortcode');

//アイキャッチ画像の使用
add_theme_support( 'post-thumbnails' );

//余計なタグ(P等)の挿入を防ぐ
add_action('init', function() {
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function($init) {
	$init['wpautop'] = false;
	$init['apply_source_formatting'] = true;
	return $init;
});

//jQueryを出力しない
/*
function my_delete_local_jquery() {
	wp_deregister_script('jquery');
	//wp_dequeue_style('wp-pagenavi');
}
add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );
*/

//画像サイズの追加 
add_image_size( 'suggest_banner', 740, 0, false );

//サイドバー
register_sidebar(array(
	'name'=>'Instagram Bar',
	'before_widget'=>'<div class="instagram-wrapper">',
	'after_widget'=>'</div>',
	'before_title' => '<h4 class="instagram-title">',
	'after_title' => '</h4>'
));
//サイドバー
register_sidebar(array(
	'name'=>'Facebook Bar',
	'before_widget'=>'<div class="facebook-wrapper">',
	'after_widget'=>'</div>',
	'before_title' => '<h4 class="facebook-title">',
	'after_title' => '</h4>'
));

//カスタムメニュー有効化
add_theme_support('menus');
//メニューの配置 カスタムメニューを設定
function add_custom_menu(){
	register_nav_menu('global-menu','グローバルメニュー');
	register_nav_menu('global-menu2','グローバルメニューPC');
	register_nav_menu('global-submenu','グローバルSubメニュー');
}
add_action('after_setup_theme','add_custom_menu');

//Emojiを出力しない
/*
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'embed_head', 'print_emoji_detection_script' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'disable_emojis' );
*/
?>