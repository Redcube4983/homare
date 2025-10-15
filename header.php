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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-92092216-1', 'auto');
  ga('send', 'pageview');
</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php bloginfo('name'); wp_title(' / '); ?></title>
	<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() ); ?>/css/swiper.min.css?<?php echo date_i18n('Ymd-His'); ?>">
	<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() ); ?>/css/style2.css?<?php echo date_i18n('Ymd-His'); ?>">
	<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() ); ?>/css/form.css?<?php echo date_i18n('Ymd-His'); ?>" />
<!-- href属性にファビコンファイルのURIを記述 -->
<link rel="shortcut icon" href="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo_shortcut_icon.svg">

<!-- コメントアウトしてあるコードは、iOS/Android用のアイコン指定 -->
<link rel="icon" href="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo_mobile.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo_mobile.png">
<?php
switch( true ){
case is_page('about'):
	$outputsheet = 'about';
	break;
case is_page('artisan'):
	$outputsheet = 'artisan';
	break;
case is_page('beauty'):
	$outputsheet = 'beauty';
	break;
case is_page('commerciallaw'):
case is_page('commerciallaw_new'):
	$outputsheet = 'commerciallaw';
	break;
case is_page('concept'):
	$outputsheet = 'concept';
	break;
case is_page('contact'):
	$outputsheet = 'contact';
	break;
case is_page('confirm'):
	$outputsheet = 'confirm';
	break;
case is_page('thanks'):
	$outputsheet = 'thanks';
	break;
case is_page('cosme'):
	$outputsheet = 'cosme';
	break;
case is_page('premium-fl'):
	$outputsheet = 'premium-fl';
	break;
case is_page('history'):
	$outputsheet = 'history';
	break;
case is_page('karahashi'):
	$outputsheet = 'karahashi';
	break;
case is_page('premium'):
	$outputsheet = 'premium';
	break;
case is_page('season'):
	$outputsheet = 'season';
	break;
case is_page('suggestion'):
	$outputsheet = 'suggestion';
	break;
case is_page('companyprofile'):
	$outputsheet = 'companyprofile';
	break;
case is_page('guide'):
case is_page('guide_new'):
    $outputsheet = 'guide';
	break;
case is_page('privacypolicy'):
	$outputsheet = 'privacypolicy';
	break;
case is_page('unreian'):
	$outputsheet = 'unreian_etc';
	break;
case is_page('message'):
	$outputsheet = 'message';
	break;
case is_page('topics'):
	$outputsheet = 'topics';
	break;
case is_page('maintenance'):
	$outputsheet = 'maintenance';
	break;
default:
	$outputsheet = '';
	break;
}
if( $outputsheet != '' ){
	$theme_path = get_stylesheet_directory_uri();
	echo "<link rel=\"stylesheet\" href=\"{$theme_path}/css/{$outputsheet}.css\">";
}
?>
<?php if(is_single()): ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/single.css?<?php echo date_i18n('Ymd-His'); ?>"  rel="stylesheet">
<?php endif; ?>
<?php wp_head(); ?>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script defer src="/js/deletecondition.js"></script>
</head>
<body class="<?php if(is_front_page()) echo 'top-page'; ?>">
<div class="wrap">

	<header>
		<div class="site-title">
			<h1 class="site-logo">
				<a href="/">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo2.svg" class="site-logo-2" alt="会津ほまれ">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo.svg" class="site-logo-1" alt="Homare Sake Brewery Co.,Ltd.">
				</a>
			</h1>
			<div class="site-description">会津ほまれ&ensp;<br>福島県喜多方市の酒蔵。</div>
		</div>
		<div class="hamburger"><div><span></span><span></span><span></span></div></div>
		<div class="header-menu">
<?php
	wp_nav_menu( array(
		'menu_class' => 'global-submenu',
		'theme_location' => 'global-submenu',
		'container' => 'nav',
		'container_class' => 'global-submenu',
		'items_wrap' => '<ul>%3$s</ul>'
	));
?>
<!--
			<ul>
				<li><a href="<?php bloginfo('url'); ?>/guide">ご利用ガイド / お支払い方法・送料について</a></li>
				<li><a href="<?php bloginfo('url'); ?>/privacypolicy">プライバシー・ポリシー</a></li>
				<li><a href="<?php bloginfo('url'); ?>/commerciallaw">特定商取引に関する表記</a></li>
			</ul>
-->
		</div>
		<div class="header-contact">
			<span class="header-contact-tel">
				<i class="fas fa-phone"></i><!--<span class="header-contact-gold">&#9742;</span>--><span x-ms-format-detection="none">0241-22-5151</span>
				<span class="header-contact-small">(平日 9:00～16:30)</span>
			<a class="contact" href="<?php echo esc_url( home_url( 'contact' ) ); ?>"><i class="fas fa-envelope"></i>お問い合わせ</a> </span>
		</div>
<?php if ( wp_is_mobile() ) : ?>
	<?php
	wp_nav_menu( array(
		'menu_class' => 'global-menu',
		'theme_location' => 'global-menu',
		'container' => 'nav',
		'container_class' => 'global-menu',
		'items_wrap' => '<ul id="main-nav">%3$s</ul>'
	));
?>
<?php else: ?>
	<?php
	wp_nav_menu( array(
		'menu_class' => 'global-menu',
		'theme_location' => 'global-menu2',
		'container' => 'nav',
		'container_class' => 'global-menu',
		'items_wrap' => '<ul id="main-nav">%3$s</ul>'
	));
?>
<?php endif; ?>

	</header>
