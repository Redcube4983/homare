<?php /* WordPress CMS Theme WSC Project. */ 
get_header();
?>
	<main>

		<div class="simple-header">
			<nav class="breadcrumb">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><span>お問い合わせ（入力ページ）</span></li>
				</ul>
			</nav>
			<h1 class="page-title">お問い合わせ（入力ページ）</h1>
		</div>
		<section class="contact-intro">
			<p>内容によっては回答をさしあげるのに<br class="sp">お時間をいただくこともございます。<br>
			また、休業日・営業時間終了後は<br class="sp">翌営業日以降の対応となりますのでご了承ください。<br>
			お電話でのお問合せは<br>
			ネット通販に関するお問合せ：<br class="sp">0241-23-5505<br>
			お電話でのご購入や見学・その他お問合せ：<br class="sp">0241-22-5151<br>
			までお願いいたします。</p>
		</section>
		<section class="company-overview">
			<div class="table-wrap">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>
			
			<?php endwhile; ?>
			<?php else : ?>
			<h2>記事が見つかりません</h2>
			<p>記事が存在しないときのテキスト</p>
			<?php endif; ?>
			</div>
		</section>
		<div class="contact-form-footer">
			<!--<a href="https://www.aizuhomare.jp/news/news_1210.html">会津ほまれからのご連絡メールが届かない件について</a><br>-->
			<a href="<?php echo esc_url( home_url( 'privacypolicy' ) ); ?>">プライバシー・ポリシー</a>
		</div>
	</main>
<?php
get_footer();
?>
