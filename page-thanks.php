<?php
/*
Template Name: page-thanks
*/
?>
<?php get_header();?>
	<main>

		<div class="simple-header">
			<nav class="breadcrumb">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><span>お問い合わせ</span></li>
					<li><span>お問い合わせ（完了ページ）</span></li>
				</ul>
			</nav>
			<h1 class="page-title">お問い合わせ（完了ページ）</h1>
		</div>
		<div class="contact-thanks">
			<h2>
				お問い合わせ内容の送信が<br>
				完了いたしました。
			</h2>
			<p>
				万一、ご回答メールが届かない場合は、<br>
				トラブルの可能性もありますので<br>
				大変お手数ではございますが<br>
				もう一度お問い合わせいただくか、<br>
				お電話にてお問い合わせください。<br>
				今後ともご愛顧賜りますようよろしくお願い申し上げます。
			</p>
			<hr>
			<p>
				ほまれ酒造株式会社<br>
				TEL：0241-22-5151<br>
				E-mail：<a href="mailto:info@aizuhomare.jp">info@aizuhomare.jp</a>
			</p>
			<div class="button-area">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button">トップページへ</a>
			</div>
		</div>
	</main>
<?php
get_footer();
?>
