<?php
/*
Template Name: page-about
*/
?>
<?php get_header();?>
	<main>

		<div class="image-header">
			<nav class="breadcrumb">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><span>ほまれ酒造とは</span></li>
				</ul>
			</nav>
			<p class="page-catchcopy">大正七年創業。<br>長い歴史の中で培った独自の酒造り――</p>
			<h1 class="page-title">ほまれ酒造</h1>
		</div>

		<ul class="homare-btn-list">
			<li><a href="<?php echo esc_url( home_url( 'history' ) ); ?>"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo4.svg" />ほまれ酒造の軌跡</a></li>
			<li><a href="<?php echo esc_url( home_url( 'artisan' ) ); ?>"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo4.svg" />匠の技</a></li>
		</ul>

		<section class="what-history">
			<h2>成り立ち</h2>
			<div class="what-history-content">
				<p>米問屋から、味噌、麹製造業を営んでいた唐橋幸作が１９１８年（大正７年）に酒蔵を譲り受け現在の喜多方市熱塩加納町に加納酒造株式会社を創業しました。<br>その後、事業拡張の為、現在の地である喜多方市松山町に移り社名を合資会社唐橋酒造場、ほまれ酒造株式会社と順に改め、安定した品質と絶え間ない技術向上によって東北有数の酒蔵へと成長しました。<br>代表銘柄「会津ほまれ」は全国へ会津清酒の名を知らしめるべく「会津」の名を冠し、読みやすく覚えやすく、親しみやすいことからひらがなで「ほまれ」と命名。<br>当時において清酒の銘柄でひらがなを使うのは非常に珍しいことでした。<br>「会津ほまれ」の書体は、長野県生まれの近代書家・比田井天来氏の揮毫によるものです。</p>
				<figure>
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/about/about01.jpg" alt="成り立ち画像1">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/about/about02.jpg" alt="成り立ち画像2">
				</figure>
				<div class="what-history-logo">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo.svg" class="site-logo-1" alt="Homare Sake Brewery Co.,Ltd.">
				</div>
			</div>
		</section>

		<section class="what-awards">
			<h2>主な受賞歴</h2>
			<figure class="what-awards-eyecatch">
				<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/about/championsake.jpg" alt="IWCチャンピオン・サケ受賞写真">
			</figure>
			<p class="what-awards-plaintext">
				ほまれ酒造のお酒は国内外でも高い評価を受けており、<br>
				様々な賞を受賞しています。2016年Ｇ７伊勢志摩サミットにおいて、<br>
				安倍首相から各国首脳への贈答品として贈られるなど、<br>
				名実ともに世界に誇る酒蔵へ成長することができました。
			</p>
			<p class="what-awards-bigtext">世界の頂点へ…<br>IWCチャンピオン・サケ受賞</p>
			<article>
				<div class="what-awards-article-left">
					<h3>「播州産山田錦仕込 純米大吟醸酒」</h3>
					<ul>
						<li>2012年　IWC2012　シルバーメダル受賞</li>
						<li>2013年　IWC2013  ゴールドメダル受賞</li>
						<li>2014年　IWC2014  シルバーメダル受賞</li>
						<li>2015年　IWC2015　チャンピオン・サケ</li>
						<li>2016年　IWC2016　ゴールドメダル受賞</li>
						<li>2017年　IWC2017  シルバーメダル受賞</li>
					</ul>
				</div>
				<div class="what-awards-article-right">
					<figure><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/about/junmaidaiginjo.png" alt="播州産山田錦仕込 純米大吟醸酒 写真"></figure>
					<a href="<?php echo esc_url( home_url( ) ); ?>/ec/plugin_rcsearch_result?name=播州産山田錦仕込+純米大吟醸酒&orderby=&disp_number="><i class="fas fa-caret-right"></i>受賞酒のお買い求めはこちら</a>
				</div>
			</article>
			<article>
				<div class="what-awards-article-left">
					<h3>「会津ほまれ 大吟醸酒」</h3>
					<ul>
						<li>2014年　IWC2014 ゴールドメダル受賞</li>
						<li>2015年　IWC2015 ブロンズメダル受賞</li>
						<li>2016年　IWC2016 シルバーメダル受賞</li>
						<li>2017年　IWC2017 ゴールドメダル受賞</li>
						<li>2017年　平成28酒造年度 全国新酒鑑評会 金賞受賞</li>
						<li>2017年　福島県春季鑑評会 吟醸の部 県知事賞受賞</li>
						<li>2017年　福島県秋季鑑評会 吟醸の部 県知事賞受賞</li>
					</ul>
				</div>
				<div class="what-awards-article-right">
					<figure><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/about/daiginjo.png" alt="会津ほまれ 大吟醸酒 写真"></figure>
					<a href="<?php echo esc_url( home_url( ) ); ?>/ec/plugin_rcsearch_result?name=大吟醸酒&checkbox0[]=71&orderby=&disp_number="><i class="fas fa-caret-right"></i>受賞酒のお買い求めはこちら</a>
				</div>
			</article>
			<article>
				<div class="what-awards-article-left">
					<h3>「純米吟醸 からはし 山田錦」</h3>
					<ul>
						<li>2017年　IWC2017　純米吟醸酒の部　</li>
						<li>GOLD MEDAL ＆ Trophy受賞</li>
					</ul>
				</div>
				<div class="what-awards-article-right">
					<figure><img class="shadw" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/about/karahashi2.png" alt="純米吟醸 からはし 山田錦 写真"></figure>
					<a href="<?php echo esc_url( home_url( 'karahashi' ) ); ?>"><i class="fas fa-caret-right"></i>からはしのページはこちら</a>
				</div>
			</article>
			<article>
				<div class="what-awards-article-left">
					<h3>「純米吟醸 からはし 夢の香」</h3>
					<ul>
						<li>2016年　IWC2016　純米吟醸酒の部</li>
						<li>BRONZE MEDAL</li>
					</ul>
				</div>
				<div class="what-awards-article-right">
					<figure><img class="shadw" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/about/karahashi.png" alt="純米吟醸 からはし 夢の香 写真"></figure>
					<a href="<?php echo esc_url( home_url( 'karahashi' ) ); ?>"><i class="fas fa-caret-right"></i>からはしのページはこちら</a>
				</div>
			</article>
		</section>

		<ul class="homare-btn-list">
			<li><a href="<?php echo esc_url( home_url( 'history' ) ); ?>"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo4.svg" />ほまれ酒造の軌跡</a></li>
			<li><a href="<?php echo esc_url( home_url( 'artisan' ) ); ?>"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo4.svg" />匠の技</a></li>
		</ul>

	</main>
<?php
get_footer();
?>
