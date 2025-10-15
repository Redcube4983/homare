<?php

//処理文字コードの指定
mb_language("Japanese");
mb_internal_encoding("UTF-8");
mb_regex_encoding("UTF-8");

//include_once ("echo_commonhtml.php");

//iframe同一ドメイン抑制 クリックジャッキング対策
header("x-frame-options: sameorigin");

require_once( './wp/wp-load.php' );

$theme_dir = get_template_directory_uri();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php bloginfo('name'); wp_title(' / '); ?></title>
	<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() ); ?>/css/swiper.min.css">
	<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() ); ?>/css/style.css">
	<script defer src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/fontawesome-all.min.js"></script>
	<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() ); ?>/css/form.css" />
	<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() ); ?>/css/rcproductslider.css">
<?php wp_head(); ?>
<script language="javascript">
//node.jsを使わない前提で$をjQueryに再指定
var $ = jQuery.noConflict();
</script>
<script defer src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/jquery.cookie.js"></script>
</head>
<body class="<?php if(is_front_page()) echo 'top-page'; ?>">
