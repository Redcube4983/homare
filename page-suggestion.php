<?php
/*
Template Name: page-suggestion
*/
?>
<?php get_header();?>
<main>
		<div class="image-header">
			<nav class="breadcrumb">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><span>日本酒のススメ</span></li>
				</ul>
			</nav>
			<p class="page-catchcopy">日本酒の美味しい愉しみ方</p>
			<h1 class="page-title">日本酒のススメ</h1>
		</div>

		<section class="intro">
			<h2 class="intro-heading">日本酒で毎日を<br>もっと愉しく、面白く。</h2>
			<p class="intro-text">
				日本酒というカテゴリーの中でも、<br>
				その製造方法や原料の違いから<br class="sp">様々な種類が存在します。<br>
				そのため、同じ「日本酒」でも味や香りは、<br class="sp">それぞれ大きく異なります。<br>
				そんな個性豊かな日本酒を最大限に愉しむために、<br class="sp">役立つ知識をご紹介いたします。<br>
			</p>
		</section>

		<section class="susume-sec">
			<h2 class="susume-heading"><span>日本酒のタイプ分類</span>香りと味わい</h2>
			<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/fragrance_and_flavor_pc.png" width="100%" alt="日本酒のタイプ分類" class="pc">
			<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/fragrance_and_flavor_sp.png" width="100%" alt="日本酒のタイプ分類" class="sp">
		</section>

		<section class="susume-sec">
			<h2 class="susume-heading"><span>日本酒タイプ別</span>美味しい飲み方・合う料理</h2>
			<section class="susume-howto">
				<h3>薫酒</h3>
				<p class="susume-howto-caption">華やかな香りと<br>キレのある味わい。</p>
				<p class="susume-howto-text">軽快でさわやかな味わいが特長です。酸味とのバランスが良く、キレの良い飲み口のため、素材を活かしたシンプルな風味の料理と好相性。冷やすことによって薫酒の良さである清涼感が際立ちます。ただし、種類によっては冷やし過ぎると持ち味である香りの高さが落ちたり、味に雑味が出る場合もあるので注意が必要です。</p>
				<img  class="susume-howto-temperature" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/temperature_1.png" width="100%" alt="薫酒グラフ">
				<h4>相性の良い料理</h4>
				<ul class="susume-howto-cuisine-list">
					<li>
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image1.jpg" width="100%" alt="鮎の塩焼き">
					鮎の塩焼き</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image2.jpg" width="100%" alt="はまぐりの酒蒸し">
					はまぐりの酒蒸し</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image3.jpg" width="100%" alt="菜のてんぷら">
					山菜のてんぷら</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image4.jpg" width="100%" alt="海老しんじょう">
					海老しんじょう</li>
				</ul>
				<h4>おすすめのお酒</h4>
				<ul class="susume-howto-sake-list">
					<li>播州産山田錦仕込<br>純米大吟醸酒<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image5.jpg" width="100%" alt="純米大吟醸酒"><a href="<?php echo esc_url( home_url(  ) ); ?>/ec/plugin_rcsearch_result?name=播州産山田錦仕込+純米大吟醸酒&orderby=&disp_number=" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
					<li>純米大吟醸<br>極<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image6.jpg" width="100%" alt="極"><a href="<?php echo esc_url( home_url(  ) ); ?>/ec/plugin_rcsearch_result?name=%E7%B4%94%E7%B1%B3%E5%A4%A7%E5%90%9F%E9%86%B8+%E6%A5%B5&orderby=&disp_number=" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
					<li>喜多方テロワール<br>EPISODE Ⅳ<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image7.jpg" width="100%" alt="EPISODE Ⅳ"><a href="https://shop.aizuhomare.jp/i/144100" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
					<li>純米吟醸 巽蔵<br>一回瓶火入れ
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image8.jpg" width="100%" alt="巽蔵"><a href="<?php echo esc_url( home_url(  ) ); ?>/ec/plugin_rcsearch_result?name=純米吟醸+巽蔵+一回瓶火入れ&orderby=&disp_number=" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
				</ul>
			</section>
			<section class="susume-howto">
				<h3>爽酒</h3>
				<p class="susume-howto-caption">すっきりと飲みやすく、<br>フレッシュな味わい。</p>
				<p class="susume-howto-text">日本酒の中で最も爽涼な風味で、香りは抑えめの軽くさらりとした飲みやすさが特長。後味が短くすっきりとした味わいのため、幅広い料理とマッチします。フレッシュな味わいを活かすために、しっかりと冷やすことで、より美味しく飲むことができます。</p>
				<img  class="susume-howto-temperature" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/temperature_2.png" width="100%" alt="爽酒グラフ">
				<h4>相性の良い料理</h4>
				<ul class="susume-howto-cuisine-list">
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image9.jpg" width="100%" alt="そば">そば</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image10.jpg" width="100%" alt="生牡蠣">生牡蠣</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image11.jpg" width="100%" alt="茶碗蒸し">茶碗蒸し</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image12.jpg" width="100%" alt="だし巻き卵">だし巻き卵</li>
				</ul>
				<h4>おすすめのお酒</h4>
				<ul class="susume-howto-sake-list">
					<li>セキレイ純米<br>吟醸酒<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image13.jpg" width="100%" alt="セキレイ純米吟醸酒"><a href=" https://shop.aizuhomare.jp/i/136050" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
					<li>会津ほまれ<br>吟醸酒<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image14.jpg" width="100%" alt="会津ほまれ吟醸酒"><a href="https://shop.aizuhomare.jp/i/127020" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
					<li>本醸造淡麗辛口<br>生貯蔵酒<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image15.jpg" width="100%" alt="本醸造淡麗辛口生貯蔵酒"><a href="<?php echo esc_url( home_url(  ) ); ?>/ec/plugin_rcsearch_result?name=%E6%9C%AC%E9%86%B8%E9%80%A0%E6%B7%A1%E9%BA%97%E8%BE%9B%E5%8F%A3+%E7%94%9F%E8%B2%AF%E8%94%B5%E9%85%92&orderby=&disp_number=" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
					<li>DewDrop<br>特別本醸造<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image16.jpg" width="100%" alt="DewDrop特別本醸造"><a href="https://shop.aizuhomare.jp/i/111210" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
				</ul>
			</section>
			<section class="susume-howto">
				<h3>醇酒</h3>
				<p class="susume-howto-caption">米本来の良さを感じられる
<br>コクのある味わい。</p>
				<p class="susume-howto-text">ふくよかな香りと甘味と酸味、苦みが心地よく調和したコクのある風味が特長。原料である米そのものの良さを感じることができる日本酒です。しっかりとした味付けの料理や酒の肴などと好相性。特長であるコクと香りを引き立てるために高めの温度設定がお薦めです。</p>
				<img  class="susume-howto-temperature" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/temperature_3.png" width="100%" alt="醇酒グラフ">
				<h4>相性の良い料理</h4>
				<ul class="susume-howto-cuisine-list">
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image17.jpg" width="100%" alt="とんかつ">とんかつ</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image18.jpg" width="100%" alt="鯖の味噌煮">鯖の味噌煮</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image19.jpg" width="100%" alt="焼き鳥">焼き鳥</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image20.jpg" width="100%" alt="ブリの照り焼き">ブリの照り焼き</li>
				</ul>
				<h4>おすすめのお酒</h4>
				<ul class="susume-howto-sake-list">
					<li>セキレイ<br>純米酒<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image21.jpg" width="100%" alt="セキレイ純米酒"><a href="https://shop.aizuhomare.jp/i/125010" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
					<li><small>ならぬことはならぬものです</small><br>純米原酒<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image22.jpg" width="100%" alt="ならぬことはならぬものです"><a href="<?php echo esc_url( home_url(  ) ); ?>/ec/plugin_rcsearch_result?name=%E3%81%AA%E3%82%89%E3%81%AC%E3%81%93%E3%81%A8%E3%81%AF%E3%81%AA%E3%82%89%E3%81%AC%E3%82%82%E3%81%AE%E3%81%A7%E3%81%99&orderby=&disp_number=" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
					<li>上撰辛口<br>本醸造酒<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image23.jpg" width="100%" alt="上撰辛口本醸造酒"><a href="https://shop.aizuhomare.jp/i/111019" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
					<li>会津ほまれ<br>佳撰辛口<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image24.jpg" width="100%" alt="会津ほまれ佳撰辛口"><a href="https://shop.aizuhomare.jp/i/121019" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
				</ul>
			</section>
			<section class="susume-howto">
				<h3>熟酒</h3>
				<p class="susume-howto-caption">長い年月をかけて熟成させた、<br>ユニークな味わい。</p>
				<p class="susume-howto-text">複雑性のある熟成された香りとクセのある風味が特徴です。濃い味の料理や脂の多い素材と好相性。温度は香りと味の好みによって設定を変えましょう。温度設定を低くすればクセの強さを抑えることができます。ただし、温度が高すぎたり低すぎたりすると風味のバランスが崩れるため注意が必要です。</p>
				<img class="susume-howto-temperature" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/temperature_4.png" width="100%" alt="熟酒グラフ">
				<h4>相性の良い料理</h4>
				<ul class="susume-howto-cuisine-list">
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image25.jpg" width="100%" alt="鰻のかば焼き">鰻のかば焼き</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image26.jpg" width="100%" alt="鯉の甘煮">鯉の甘煮</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image27.jpg" width="100%" alt="豚の角煮">豚の角煮</li>
					<li><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image28.jpg" width="100%" alt="いのしし鍋">いのしし鍋</li>
				</ul>
				<h4>おすすめのお酒</h4>
				<ul class="susume-howto-sake-list">
					<li>純米麹長期熟成酒<br>2005<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image29.jpg" width="100%" alt="純米麹長期熟成酒2005"><a href="<?php echo esc_url( home_url(  ) ); ?>/ec/plugin_rcsearch_result?name=%E7%B4%94%E7%B1%B3%E9%BA%B9%E9%95%B7%E6%9C%9F%E7%86%9F%E6%88%90%E9%85%92&orderby=&disp_number=" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>
<!--					-2024.2.27削除依頼のためコメントアウト--->
<!--					<li>長期熟成<br>うめ酒<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/suggestion_image30.jpg" width="100%" alt="長期熟成うめ酒"><a href="<?php echo esc_url( home_url(  ) ); ?>/ec/plugin_rcsearch_result?name=%E9%95%B7%E6%9C%9F%E7%86%9F%E6%88%90+%E3%81%86%E3%82%81%E9%85%92&orderby=&disp_number=" class="buy-link"><i class="fas fa-caret-right"></i>お買い求めはこちら</a></li>-->
				</ul>
			</section>
		</section>

		<section class="susume-type-sec">
			<h2 class="susume-type-heading"><span>これであなたも<br>日本酒通！</span>日本酒の飲み方あれこれ<span>飲み方の種類</span></h2>
			<div class="susume-type-list">
				<dl>
					<dt>みぞれ酒</dt>
					<dd>お酒を−１２℃前後までゆっくり静かに冷やすことで、凍っていても液体の状態を保つ「過冷却状態」になります。衝撃を与えないように取り出しグラスに注ぐと、一瞬で凍ってシャーベット状に。口に含むとふわっと溶けて、香りと味わいが広がります。</dd>
				</dl>
				<dl>
					<dt>たまご酒</dt>
					<dd>昔は風邪に効くと言われ家庭などで飲まれていました。作り方は沸騰直前まで温めた日本酒に溶いた卵と小さじいっぱい分の砂糖を混ぜるのみ。とろっとした口当たりの甘くて優しいホットカクテルが出来上がります。卵を少しずつ加えることがポイントです。</dd>
				</dl>
				<dl>
					<dt>生姜酒</dt>
					<dd>冷え性や風邪の予防に最適です。温めたお酒にすりおろした生姜を溶かせば出来上がり。<br>お好みで量を調整したり生姜のスライスを入れるのもOK。体の芯からポカポカに温まります。</dd>
				</dl>
				<dl>
					<dt>にんにく酒</dt>
					<dd>生姜酒同様、飲めば体の芯から温まります。疲労回復にも効果的な一杯です。熱燗にすりおろしたにんにくを適量入れましょう。また、にんにくのにおいが苦手な方は、蒸してからすりおろすのがおすすめです。</dd>
				</dl>
				<dl>
					<dt>菊酒</dt>
					<dd>９月９日の重陽の節句（菊の節句）に長寿を願って飲まれます。<br>お酒に菊の花を浸して飲む菊酒は、見た目にも華やかで、節句以外にもお祝いの席などめでたい場面で飲むのもおすすめです。</dd>
				</dl>
				<dl>
					<dt>甲羅酒</dt>
					<dd>毛蟹などの甲羅に蟹味噌を多めに残し、そこにお酒を注いで煮立ったら完成。みその風味とお酒の旨味が絶妙な組み合わせを醸します。日本酒の飲み方の中でも一番贅沢な飲み方とも言えるかもしれません。</dd>
				</dl>
			</div>
		</section>

		<div class="susume-sec">
	      <div id="karahashiyumi">
		  <div class="karahashiyumi">
				<div class="karahashiyumi-photo">
				<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/suggestion/karahashi_yumi.jpg" width="100%" alt="唐橋ユミ"></div>
				<div class="karahashiyumi-catch">
					<h2>「ほまれ酒造の日本酒を<br>ぜひ、一度お召し上がりください」</h2>
				</div>
				<h3 class="karahashiyumi-name">
					フリーアナウンサー　唐橋ユミ
				</h3>
				<div class="karahashiyumi-profile">
					<h4>［プロフィール］</h4>
					<p>ほまれ酒造株式会社の現・社長(唐橋 裕幸)の妹。大学卒業後、アナウンス塾を経て、テレビユー福島のアナウンサーとして活動。朝の情報番組や夕方のニュースを担当する。その後、在京キー局の番組に出演中。趣味は大相撲観戦、料理など。着付け講師や利き酒師の資格も保持している。また、喜多方の観光大使にも就任した。</p>
					<h4>［主な出演番組］</h4>
					<p>■毎週日曜　8：00～9：54　TBS「サンデーモーニング」<br>
■毎週土曜　26：10～26：35　テレビ東京「新Shock感」<br>
■他、BS朝日「わかるわかるチャンネル」、<br class="sp" />
BSフジ「感動！大相撲がっぷり総見」など</p>
			  </div>
			</div>
			</div>
		</div>

	</main>
<?php
get_footer();
?>
