<?php
/*
Template Name: page-concept
*/
?>
<?php get_header();?>
	<main>

		<div class="image-header">
			<nav class="breadcrumb">
				<ul>
					<li><a href="/">TOP</a></li>
					<li><span>ブランドコンセプト</span></li>
				</ul>
			</nav>
			<p class="page-catchcopy">ほまれ酒造だからできる</p>
			<h1 class="page-title">ブランドコンセプト</h1>
		</div>

		<section class="concept-intro">
			<h2>ほまれ酒造ならではの<br>付加価値を込めて</h2>
			<p>
				ほまれ酒造は最高の日本酒をお届けすることはもちろん、<br>
				今まで培ってきた酒造りの技術やノウハウを活かして、<br>
				お客様の暮らしをより豊かにする“新しいご提案”を発信し続けます。
			</p>
		</section>

		<ul class="concept-brandlist">
			<li><h3>純米大吟醸酒</h3>
		    <a href="<?php home_url( );?>/premium"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/concept/junmaidaiginjo.jpg" alt="純米大吟醸酒 画像" border="0"></a></li>
			<li><h3>『からはし』ブランド</h3>
		    <a href="<?php home_url( );?>/karahashi"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/concept/karahashi.jpg" alt="『からはし』ブランド 画像"></a></li>
			<li><h3><span class="border">KITAKATA TERROIR</span><br><span class="jp">喜多方テロワール</span></h3>
		    <a href="https://www.aizuhomare.jp/sp/kitakataterroir"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/concept/kitakataterroir.jpg" alt="喜多方テロワール 画像"></a></li>
			<li><h3>季節限定酒</h3>
		    <a href="<?php home_url( );?>/season"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/concept/nigorisyu.jpg" alt="季節限定酒 画像"></a></li>
			<li><h3>会津ほまれ 化粧水</h3>
		    <a href="<?php home_url( );?>/cosme"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/concept/keshousui.jpg" alt="会津ほまれ 化粧水 画像"></a></li>
		</ul>

	</main>
<?php
get_footer();
?>
