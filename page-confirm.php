<?php /* WordPress CMS Theme WSC Project. */ 
get_header();
?>
	<main>

		<div class="simple-header">
			<nav class="breadcrumb">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><span>お問い合わせ</span></li>
					<li><span>お問い合わせ（確認ページ）</span></li>
				</ul>
			</nav>
			<h1 class="page-title">お問い合わせ（確認ページ）</h1>
		</div>
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
			<a href="<?php echo esc_url( home_url( 'privacypolicy' ) ); ?>">会津ほまれからのご連絡メールが届かない件について</a><br>
			<a href="<?php echo esc_url( home_url( 'privacypolicy' ) ); ?>">プライバシー・ポリシー</a>
		</div>
	</main>
<?php
get_footer();
?>
