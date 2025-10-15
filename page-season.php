<?php
/*
Template Name: page-season
*/
?>
<?php get_header(); ?>
	<main>

		<div class="image-header">
			<nav class="breadcrumb">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><a href="<?php echo esc_url( home_url( 'concept' ) ); ?>">ブランドコンセプト</a></li>
					<li><span>季節限定酒</span></li>
				</ul>
			</nav>
			<p class="page-catchcopy">匠の技が魅せる優美な味わい</p>
			<h1 class="page-title">季節限定酒</h1>
		</div>

		<section class="season-intro">
			<h2>その季節しか出会えない<br>会津ほまれの季節限定酒</h2>
			<p>
				日本酒には特定の季節でしか造れない、
<br class="sp">さまざまな味わいのお酒が存在します。<br>
				季節の移ろいを感じながら日本酒を楽しむ事もまた一興。<br>
				ほまれ酒造のこだわりの季節限定酒をご紹介します。
			</p>
		</section>
		<article class="season-article">
			<h3><span>9月</span>純米吟醸 ひやおろし</h3>
			<figure id="hiyaoroshi"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/season/hiyaoroshi.png" width="100%" alt="純米吟醸 ひやおろし"></figure>
			<p>夏の間、低温でじっくりと醗酵させた純米吟醸酒。毎年ベストなお酒をお出しするため、スペックが変動いたします。「ひやおろし」の円熟味が加わったまろやかな味わいは、秋の味覚と相性が抜群です。</p>
			<a href="<?php echo esc_url( home_url( ) ); ?>/ec/plugin_rcsearch_result?name=純米吟醸+ひやおろし&orderby=&disp_number=" class="buy-link"><i class="fas fa-caret-right"></i>季節限定酒のお買い求めはこちら</a>
			<hr>
			<div class="season-article-footer">
				精米歩合・アルコール度数などの詳細は商品ページをご確認ください。
			</div>
			<div class="season-article-footercolumn">
			  <h4>「ひやおろし」とは？ </h4>
			  <p>冬から春にかけて仕込まれたお酒は、夏の間、熟成されることによって新酒の荒々しさがとれ、まろやかになります。この飲み頃をむかえたお酒を火入れせずに生詰めしたものが「ひやおろし」です。
			    当蔵ではお酒の品質安定を考慮し、生詰めした後に瓶火入れを行っております。 </p>
			</div>
		</article>

		<article class="season-article">
			<h3><span>11月</span>會津ほまれ　にごり酒</h3>
			<figure id="nigori"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/season/nigori.png" width="100%" alt="四段仕込み にごり酒"></figure>
			<p>当蔵のにごり酒の歴史は昭和初期まで遡ります。昔は「ゆきちろ」という名前で販売されていました。昔ながらの味わいを大切にしながらも、現代の食生活に合うように研究を重ね造られています。バナナを思わせるフルーティーな香りの中に瑞々しさとまろやかさを併せ持ち、甘すぎない爽やかな口あたりのにごり酒です。</p>
			<a href="https://www.aizuhomare.jp/ec/plugin_rcsearch_result?name=%E3%81%AB%E3%81%94%E3%82%8A%E9%85%92&checkbox0%5B%5D=76&orderby=&disp_number=" class="buy-link"><i class="fas fa-caret-right"></i>季節限定酒のお買い求めはこちら</a>
			<hr>
			<div class="season-article-footer">
				精米歩合70%／アルコール度15%／日本酒度-26.0／酸度1.3／アミノ酸1.5
			</div>
			<div class="season-article-footercolumn">
			  <h4>「にごり酒」とは？</h4>
			  <p>日本酒は原料を加えて発酵させると、柔らかく白い固形物の醪(もろみ)になります。この醪から液体をしぼり出す際に目の粗い袋で濾すことにより、あえて白濁した滓(おり)を多く残したものが「にごり酒」です。滓には原料である米や麹が含まれるため、米本来の旨みがより一層感じられるお酒となっています。</p>
			</div>
		</article>

		<!--<article class="season-article">
			<h3><span>11月</span>しぼりたて生 本醸造生原酒</h3>
			<figure id="shiboritate"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/season/shiboritate.png" width="100%" alt="しぼりたて生 本醸造生原酒"></figure>
			<p>しぼりたての美味しさがたっぷりと閉じ込められたフレッシュなお酒です。メロンやパイナップルを思わせるフルーティーな香りと、キレイな味わい。「生」本来の旨みを出しつつ、日本酒をあまり飲まない人にも飲んでいただけたら――。そんな思いで造られました。熟成させても円やかさが増して美味しくなるのもこのお酒の特徴です。</p>
			<a href="<?php echo esc_url( home_url( ) ); ?>/ec/plugin_rcsearch_result?name=しぼりたて生+本醸造生原酒&orderby=&disp_number=" class="buy-link"><i class="fas fa-caret-right"></i>季節限定酒のお買い求めはこちら</a>
			<hr>
			<div class="season-article-footer">
				 精米歩合65%／アルコール度18%／日本酒度-8.0／酸度1.8／アミノ酸1.5
			</div>
			<div class="season-article-footercolumn">
			  <h4>「生原酒」とは？</h4>
			  <p>通常の清酒は、お酒を搾った後に品質の安定や味の調整のために様々な処理を行います。濾過や火入れ、加水などがその最たるものですが、生原酒は濾過後にそれ以外の処理を行いません。火入れを行なわないため管理状態を間違えると風味を損ねる難しさがありますが、「生」のフレッシュさや濃醇さをより一層ご堪能いただけるお酒です。</p>
			</div>
		</article>-->

	<!--	<article class="season-article">
			<h3><span>12月</span>無濾過 純米生原酒</h3>
			<figure id="muroka"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/season/muroka.png" width="100%" alt="無濾過 純米生原酒"></figure>
			<p>醪(もろみ)からお酒を搾った後、濾過、加水、加熱処理など一切手を加えないで瓶詰めされた「生」の純米酒です。麹の香りが柔らかく漂い、徐々にメロンや洋なしを思わせるフレッシュでフルーティーな香りが現れます。口の中に含んだ瞬間に瑞々しさが広がり、「スーッ」としたのど越しの後に「ジワリ」と舌の奥から感じる旨味が絶妙です。</p>
			<a href="<?php echo esc_url( home_url( ) ); ?>/ec/plugin_rcsearch_result?name=%E7%84%A1%E6%BF%BE%E9%81%8E+%E7%B4%94%E7%B1%B3%E7%94%9F%E5%8E%9F%E9%85%92&orderby=&disp_number=" class="buy-link"><i class="fas fa-caret-right"></i>季節限定酒のお買い求めはこちら</a>
			<hr>
			<div class="season-article-footer">
				精米歩合58%／アルコール度17%／日本酒度+5.0／酸度1.6／アミノ酸1.3
			</div>
			<div class="season-article-footercolumn">
			  <h4>「無濾過」とは？</h4>
			  <p>現在、市販されているほとんどの日本酒には色がついていません。これは、しぼったお酒を炭素濾過し、雑味や色などを除去しているからです。「無濾過」とはその炭素濾過を行わないお酒ですので、グラスに注いで光をあてるとうっすら黄みがかった色をしています。「生原酒」より一層しぼった直後の状態に近いものですので、力強い風味がお楽しみいただけます。</p>
			</div>
		</article>-->
		
	</main>
<?php get_footer(); ?>
