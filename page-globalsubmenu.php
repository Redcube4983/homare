<?php
get_header('globalmenu');

wp_nav_menu( array(
	'menu_class' => 'global-submenu',
	'theme_location' => 'global-submenu',
	'container' => 'nav',
	'container_class' => 'global-submenu',
	'items_wrap' => '<ul>%3$s</ul>'
));

get_footer('globalmenu');
