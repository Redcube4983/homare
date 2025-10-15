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

//wp_head();
