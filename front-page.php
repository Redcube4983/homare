<?php
/*
Template Name: front-page
*/
?>
<?php get_header();

function file_get_contents_curl($url){
	$cp = curl_init();
	curl_setopt($cp, CURLOPT_URL, $url); /*URLを指定*/
	curl_setopt($cp, CURLOPT_RETURNTRANSFER, 1); /*リダイレクトされたらリダイレクト先のページを取得*/
	curl_setopt($cp, CURLOPT_TIMEOUT, 30); /*タイムアウト時間を指定*/
	curl_setopt($cp, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); /*ユーザーエージェントを指定*/
	$data = curl_exec($cp);
	curl_close($cp);
	return $data;
}
?>
	<main>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<div class="top-slider">
			<div class="swiper-container">
				<div class="swiper-wrapper">
<?php
$args = array(
	'numberposts' => 16, //表示出来るスライダーの最大数
	'post_type' => '_topslider' //カスタム投稿タイプの指定
);
$customPosts = get_posts($args);
if($customPosts) :
	foreach($customPosts as $post) :
		setup_postdata( $post );
		$slider_copy = get_post_meta( $post->ID, 'copy', true );
		$slider_logo = ( get_post_meta( $post->ID, 'logo', true ) ) ? '<img src="' . get_stylesheet_directory_uri() . '/images/logo2.svg">': '';
		$slider_class = get_post_meta( $post->ID, 'class', true );
		$slider_copyloc = get_post_meta( $post->ID, 'copyloc', true );
		$slider_image = get_field( 'image' );
		$slider_imagesp = get_field( 'imagesp' );
		$slider_link = ( get_field( 'link' ) != "" ) ? ' href="' . get_field( 'link' ) . '"' : '';
echo <<< EOF
				<div class="swiper-slide {$slider_copyloc} {$slider_class}">
						<a{$slider_link}">
							<img data-sizes="(min-width: 920px) 100vw, 100vw"
								 data-src="{$slider_image['url']}" data-srcset="{$slider_imagesp['url']} 920w,{$slider_image['url']} 1200w" class="slider-img swiper-lazy">
							<div class="swiper-lazy-preloader"></div>
							<div class="slider-inner">
								<span class="slider-logo">{$slider_logo }</span>
								<span class="slider-text">{$slider_copy}</span>
							</div>
						</a>
					</div>

EOF;
	endforeach;
else:
?>
					<div class="swiper-slide slide-1">
						<a href="<?php echo esc_url( home_url( 'about' ) ); ?>">
							<img data-sizes="(min-width: 920px) 100vw, 100vw"
								 data-src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider01.jpg" data-srcset="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider01sp.jpg 920w,<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider01.jpg 1200w" class="slider-img swiper-lazy">
							<div class="swiper-lazy-preloader"></div>
							<div class="slider-inner">
								<span class="slider-logo"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo2.svg"></span>
								<span class="slider-text">安らぎと喜び、<br>そして感動を与える<br>ものづくり</span>
							</div>
						</a>
					</div>
					<div class="swiper-slide slide-2">
						<a href="<?php echo esc_url( home_url( 'concept' ) ); ?>">
							<img data-sizes="(min-width: 920px) 100vw, 100vw"
								 data-src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider02.jpg" data-srcset="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider02sp.jpg 920w
							,<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider02.jpg 1200w" class="slider-img swiper-lazy">
							<div class="swiper-lazy-preloader"></div>
							<div class="slider-inner">
								<span class="slider-logo"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo2.svg"></span>
								<span class="slider-text">ほまれ酒造ならではの<br>付加価値を込めて。</span>
							</div>
						</a>
					</div> 
					<div class="swiper-slide slide-3">
						<a href="<?php echo esc_url( home_url( 'suggestion' ) ); ?>">
							<img data-sizes="(min-width: 920px) 100vw, 100vw"
								 data-src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider03.jpg" data-srcset="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider03sp.jpg 920w
							,<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider03.jpg 1200w" class="slider-img swiper-lazy">
							<div class="swiper-lazy-preloader"></div>
							<div class="slider-inner">
								<span class="slider-logo"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo2.svg"></span>
								<span class="slider-text">日本酒で毎日を<br>もっと愉しく、面白く。</span>
							</div>
						</a>
					</div>
					<div class="swiper-slide slide-4">
						<a href="<?php echo esc_url( home_url( 'beauty' ) ); ?>">
							<img data-sizes="(min-width: 920px) 100vw, 100vw"
								 data-src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider04.jpg" data-srcset="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider04sp.jpg 920w
							,<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider04.jpg 1200w" class="slider-img swiper-lazy">
							<div class="swiper-lazy-preloader"></div>
							<div class="slider-inner">
								<span class="slider-logo"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo2.svg"></span>
								<span class="slider-text">たくさんあります。<br>日本酒の健康メリット。</span>
							</div>
						</a>
					</div>
					<div class="swiper-slide slide-5">
						<a href="<?php echo esc_url( home_url( 'unreian' ) ); ?>">
							<img data-sizes="(min-width: 920px) 100vw, 100vw"
								 data-src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider05.jpg" data-srcset="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider05sp.jpg 920w
							,<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider/slider05.jpg 1200w" class="slider-img swiper-lazy">
							<div class="swiper-lazy-preloader"></div>
							<div class="slider-inner">
								<span class="slider-logo"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo2.svg"></span>
								<span class="slider-text">世界一の酒を生み出す、<br>会津ほまれの名酒造。</span>
							</div>
						</a>
					</div>
<?php
endif;

wp_reset_postdata();
?>
				</div>
				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>

		<div class="topics">
			<a class="topicstitle" href="<?php echo esc_url( home_url( 'topics' ) ); ?>"><span class="topics-label">トピックス</span></a>
			<?php
$args = array( 'posts_per_page' => 1);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<p class="topics-text"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
			<?php endforeach; wp_reset_postdata();?>
		</div>

		<!--<div class="sake-list">
			<div class="swiper-container" style="height: 160px;">
</?php /* EC-Cube商品スライダー */ 
echo file_get_contents_curl('https://www.aizuhomare.jp/ec/user_data/block_productslider');
?>
			</div>
		</div>-->

		<!--<div class="topnavi">
</?php /* EC-Cube検索窓 */ 
echo file_get_contents_curl('https://www.aizuhomare.jp/ec/user_data/block_rcsearch');
?>
		</div>-->

		<div class="main-column">

			<section class="latest-info">
				<h2>最新情報</h2>
<?php
global $post;
$args = array( 'posts_per_page' => 5 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) {
	setup_postdata($post);
?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<a href="<?php the_permalink() ?>">
						<span class="label-notice">お知らせ</span><time datetime="<?php the_time('Y/m/d') ?>"><?php the_time('Y/m/d') ?></time>
						<h3><?php the_title(); ?></h3>
					</a>
					<p><?php the_excerpt(); ?></p>
				</article>
<?php
}
wp_reset_postdata();
?>
			</section>
<?php
$args = array(
	'numberposts' => 10, //表示する記事の数
	'post_type' => '_centerbanner' //カスタム投稿タイプの指定
);
$customPosts = get_posts($args);
if($customPosts) :
?>
<ul class="main-bnr-list">
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
	<li class="main-bnr-item"><a><? echo $image_tag; ?></a></li>
<?php
		else : //記事が無い場合
?>
	<li class="main-bnr-item"><a href="<?php echo $meta_link; ?>"><? echo $image_tag; ?></a></li>
<?php
		endif;
	endforeach;
?>
</ul>	
<?php
endif;

wp_reset_postdata();
?>
		</div>

		<div class="side-column">

<!--/?php /*EC-Cubeカレンダーインポート*/ 
echo file_get_contents_curl('https://www.aizuhomare.jp/ec/user_data/block_calender');
?>-->
<section class="calendar">
<h2>カレンダー</h2>
<?php echo do_shortcode( '[xo_event_calendar holidays="all" months="2" previous="0" next="0"]' ); ?>
</section>

			<div class="side-bnr-item sp">
			<a href="<?php echo esc_url( home_url( 'suggestion' ) ); ?>#karahashiyumi"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/karahashi_yumi2.jpg" alt="唐橋 ユミ (フリーアナウンサー)" width="640" height="400" border="0"></a></div>
			<div class="side-bnr-item pc">
			<a href="<?php echo esc_url( home_url( 'suggestion' ) ); ?>#karahashiyumi"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/karahashi_yumi.jpg" width="235" height="325" alt="唐橋 ユミ (フリーアナウンサー)"></a></div>
<?php
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
?>
		</div>

		<div class="widget-list" id="widget-list">
			<div data-scroll="once" class="widget-item"><?php get_sidebar('instagram'); ?></div>
			<!--<div class="widget-item"><div class="widget-item-inner"><img src="https://placehold.jp/30px/f13f79/ffffff/300x380.jpg?text=Instagram" width="100%" alt="Instagram"></div></div>-->
			<div id="widget-item-twitter" data-scroll="once" class="widget-item"><div class="widget-item-inner" id="widget-twitter"></div></div>
			<!--<a class="twitter-timeline" href="https://twitter.com/HomareSyuzo?ref_src=twsrc%5Etfw" data-width="100%" data-height="380">Tweets by HomareSyuzo</a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
<script language="javascript">
(function($){
	var wid = parseInt($('#widget-twitter').width()) > 500 ? 500 : parseInt($('#widget-twitter').width());
	var hei = parseInt(wid * 380 / 300);
	var agent = window.navigator.userAgent.toLowerCase();
	var ie11 = (agent.indexOf('trident/7') !== -1);
	var sns = document.querySelector('.js-ie');
	if (ie11){
		sns.classList.add('is-hidden');
	}
	$('#widget-twitter')
		.width( wid )
		.height( hei )
		.append('<div class="twitter js-ie"><a class="twitter-timeline" href="https://twitter.com/HomareSyuzo?ref_src=twsrc%5Etfw" data-width="' + wid + '" data-height="' + hei + '">Tweets by HomareSyuzo</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></div>')
		.parent().height( hei );
})(jQuery);
</script>
			<div data-scroll="once" class="widget-item" id="widget-last">
			<div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v22.0"></script>
			<div class="widget-item-inner" id="widget-facebook"></div></div>
<script language="javascript">
(function($){
	var wid = parseInt($('#widget-facebook').width()) > 500 ? 500 : parseInt($('#widget-facebook').width());
	var hei = parseInt(wid * 450 / 300);
	$('#widget-facebook')
		.width( wid )
		.height( hei )
		.append('<div id="fb-page" class="fb-page" data-href="https://www.facebook.com/profile.php?id=100063463306133" data-tabs="timeline" data-width="300" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>')
		.parent().height( hei );
})(jQuery);
</script>
		</div>
<script>
//ここだと先に動作してしまうためiframeが見付けられない
/*
(function($){
	if( $(window).width() < 920 ){
		$('#widget-list .widget-item').each(function(){
			$this = $(this);
			$(this).find('iframe').each(function(){
				$this.heigth = $(this).height();
			});
		});
	};
})(jQuery);
*/
</script>
	</main>

<?php get_footer(); ?>

