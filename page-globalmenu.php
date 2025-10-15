<?php get_header('globalmenu');?>

<?php if ( wp_is_mobile() ) : ?>
	<?php
	wp_nav_menu( array(
		'menu_class' => 'global-menu',
		'theme_location' => 'global-menu',
		'container' => false,
		'items_wrap' => '<ul id="main-nav">%3$s</ul>'
	));
?>
<?php else: ?>
	<?php
	wp_nav_menu( array(
		'menu_class' => 'global-menu',
		'theme_location' => 'global-menu2',
		'container' => false,
		'items_wrap' => '<ul id="main-nav">%3$s</ul>'
	));
?>
<?php endif; ?>
<? get_footer('globalmenu');?>
