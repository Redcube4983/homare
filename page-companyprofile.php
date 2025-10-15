<?php
/*
Template Name: page-companyprofile
*/
?>
<?php get_header();?>
	<main>

		<div class="simple-header">
			<nav class="breadcrumb">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><span>会社概要・アクセス</span></li>
				</ul>
			</nav>
			<h1 class="page-title">企業情報</h1>
		</div>

		<section class="company-overview">
			<h2 class="heading-02">会社概要</h2>
			<div class="table-wrap">
				<table>
					<tr>
						<th style="width:200px;">会社名</th>
						<td>
							<p>ほまれ酒造株式会社</p>
						</td>
					</tr>
					<tr>
						<th>所在地</th>
						<td>
							<p>
								〒966-0902<br>
								福島県喜多方市松山町村松字常盤町2706<br>
								TEL 0241-22-5151 FAX 0241-24-4600<br>
								ネット通販に関するお電話でのお問合せ<br>
								0241-23-5505
							</p>
						</td>
					</tr>
					<tr>
						<th>創業</th>
						<td>
							<p>1918年（大正7年）</p>
						</td>
					</tr>
					<tr>
						<th>資本金</th>
						<td>
							<p>4,500万円</p>
						</td>
					</tr>
					<tr>
						<th>代表者</th>
						<td>
							<p>代表取締役社長　唐橋　裕幸</p>
						</td>
					</tr>
					<tr>
						<th>事業内容</th>
						<td>
							<p>清酒・焼酎・リキュール・その他の醸造酒の製造、販売</p>
						</td>
					</tr>
					<tr>
						<th>全国新酒鑑評会</th>
						<td>
							<p>
								◆金賞受賞歴<br>
								昭和：61年 <br>
								平成：5、10、11、13、14、20、21、22、24、25、27、28、29年<br>
								令和：5年
							</p>
						</td>
					</tr>
					<tr>
						<th>東北清酒鑑評会</th>
						<td>
							<p>
								◆優等賞受賞歴<br>
								平成：元年、2、3、5、7、8、10、11、12、13、14、16、17、18、19、<br>
								20、21、23、24、25、26、27年<br>
								令和：５年
							</p>
						</td>
					</tr>
					<tr>
						<th>福島県清酒鑑評会 </th>
						<td>
							<p>
								◆県知事賞受賞歴<br>
								◇ 平成20年秋季　吟醸の部<br>
								◇ 平成21年春季　吟醸の部<br>
								◇ 平成27年春季　吟醸の部<br>
								◇ 平成27年秋季　吟醸の部<br>
								◇ 平成29年春季　吟醸の部<br>
								◇ 平成29年秋季　吟醸の部
							</p>
						</td>
					</tr>
					<tr>
						<th>店舗運営責任者</th>
						<td>
							<p>唐橋　裕幸（店舗セキュリティ責任者兼務）</p>
						</td>
					</tr>
				</table>
			</div>
		</section>

		<section id="access" class="company-access">
			<h2 class="heading-02">アクセス</h2>
			<!-- GoogleMap -->
			<div class="ggmap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12631.605647341961!2d139.872297!3d37.6750243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f700f6f507f7fef!2z44G744G-44KM6YWS6YCg5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1521795352894" width="1000" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div class="ggmap">
			<!-- /GoogleMap -->
		</section>

	</main>
<?php
get_footer();
?>
