<?php
/*
Template Name: page-artisan
*/
?>
<?php get_header();?>
	<main>

		<div class="image-header">
			<nav class="breadcrumb">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
					<li><a href="<?php echo esc_url( home_url( 'about' ) ); ?>">ほまれ酒造とは</a></li>
					<li><span>匠の技</span></li>
				</ul>
			</nav>
			<p class="page-catchcopy">最高の日本酒を生み出す―</p>
			<h1 class="page-title">匠の技</h1>
		</div>

		<ul class="homare-btn-list">
			<li><a href="<?php echo esc_url( home_url( 'about' ) ); ?>"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo4.svg" />ほまれ酒造とは</a></li>
			<li><a href="<?php echo esc_url( home_url( 'history' ) ); ?>"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo4.svg" />ほまれ酒造の軌跡</a></li>
		</ul>

		<section class="artisan-intro">
			<h2>酒造りにかける想い<br>世界に誇れる酒を会津から。</h2>
			<p>
				素材の選定から貯蔵まで、<br>
酒造りの全工程において徹底的にこだわり、<br>
最高の酒を生み出す。<br>
それがほまれ酒造の酒造りです。<br>
ほまれ酒造は創業100周年。<br>
喜多方の中では3番目に若い酒蔵ですが、<br>
だからこそ新しいことに積極的に取り組み、<br>
発信することが使命であると考えます。<br>
世界一にも輝いた経験のある、<br>
日本でも有数の酒蔵としてのプライドを胸に、<br>
徹底的なこだわりと飽くなき探求心で、<br>
みなさまに最上の日本酒をお届けします。
			</p>
		</section>
		
		<section class="artisan-kodawari">
			<h2>ほまれ酒造のこだわり</h2>
			<p class="artisan-kodawari-catch">全てが最高品質。<br>だからできる酒がある。</p>
			<div class="artisan-symbol-group">
				<span class="artisan-symbol">風土</span>
				<span class="artisan-symbol-separate">×</span>
				<span class="artisan-symbol">水</span>
				<span class="artisan-symbol-separate">×</span>
				<span class="artisan-symbol">米</span>
				<span class="artisan-symbol-separate">×</span>
				<span class="artisan-symbol">技</span>
			</div>
			<div class="artisan-kodawari-content">
				<span class="artisan-symbol">風土</span>
				<section class="artisan-kodawari-section-primary">
					<h3><span>酒造り理想の地、<br>会津。</span></h3>
					<p>福島県には65件以上の造り酒屋が存在します。中でも会津地方はその半数近くの蔵元があるほど、清酒製造業が盛んな地域です。その理由は会津の豊かな自然と酒造りに非常に適した環境。会津はその豊かな自然ゆえ、天然資源が豊富で、水、米ともに最高の品質の素材を揃えることが可能です。また、冬の厳しい寒さも酒造りに大変適しており、しんしんと降る雪は、空気中のチリやホコリを取り除き、醸造中の雑菌の繁殖を防ぎます。このような会津ならではの風土が全国でも有数の酒処と言われる所以です。</p>
					<figure><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image1.jpg" alt="風土画像1">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image2.jpg" alt="風土画像2">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image3.jpg" alt="風土画像3">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image4.jpg" alt="風土画像4">
					</figure>
				</section>
			</div>
			<span class="artisan-symbol-separate">×</span>
			<div class="artisan-kodawari-content">
				<span class="artisan-symbol">水</span>
				<section class="artisan-kodawari-section-secondary">
					<h3><span>素材の良さを最大に引き立てる、<br>『喜多方名水』</span></h3>
					<p>会津地方、喜多方の北端にそびえ立つ霊峰飯豊山。喜多方の水はそこに積もった豪雪が約百年の歳月を経て地層へと染みわたったものです。その水は平成の名水百選にも選ばれ、超軟質で口当たりがとてもやさしく、甘みが豊かなことが特徴です。さらに、ミネラルもバランスよく含んでおり、清酒、みそ、しょうゆなどの醸造業に大変適しています。清酒は成分の約85％が水分であり、製造過程でも一升瓶(1.8L)のお酒を造るのに、仕込み水から、洗米など合わせて約90Lが必要になります。そのため、清酒にとって水は命そのものとも言えるのです。当蔵では、この喜多方名水を地下１００メールから汲み上げたものを仕込水として使用しています。この豊富で清廉な水がなければ、ほまれ酒造の日本酒は成り立ちません。</p>
					<figure><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image5.jpg" alt="水画像1">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image6.jpg" alt="水画像2">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image7.jpg" alt="水画像3">
					</figure>
				</section>
			</div>
			<span class="artisan-symbol-separate">×</span>
			<div class="artisan-kodawari-content">
				<span class="artisan-symbol">米</span>
				<section class="artisan-kodawari-section-primary">
					<h3><span>酒質に合わせて、<br>最適な米を。</span></h3>
					<p>ほまれ酒造は製造する酒のコンセプトに合った酒米を研究し、最適なものを選定します。地元産の酒米、夢の香、五百万石、華吹雪などを中心に、兵庫県産「酒米の王様」とも言われる山田錦、岡山県産の雄町など、それぞれの酒米の特長とどういった酒質を目指すかによってお米を使い分け、クオリティを最大限に高めています。また、地元である会津の農家の方々と契約栽培することによって、安定的に高品質の酒米を確保することにも積極的に取り組んでいます。すべての日本酒に最適な酒米を使用できる環境を整えています。</p>
					<figure><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image8.jpg" alt="米画像1">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image9.jpg" alt="米画像2">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image10.jpg" alt="米画像3">
					</figure>
				</section>
			</div>
			<span class="artisan-symbol-separate">×</span>
			<div class="artisan-kodawari-content">
				<span class="artisan-symbol">技</span>
				<section id="waza" class="artisan-kodawari-section-primary">
					<h3><span>最高の素材を<br>最高の日本酒へ。</span></h3>
					<p>酒造りには数え切れないほどたくさんの要素が存在します。長年の酒造りで培ってきた「技」と「感性」をフルに活かすことはもちろん、米の吸水スピードを温度ごとにシミュレーションして、吸水率を一定にすることや、製麹での温度や湿度管理、醪においての低温発酵の管理など一つひとつの作業データをこと細かに計測して、デジタル面からの確認も余念を欠くことが許されません。そうすることによって経験や感性といった酒造りへの主観的なアプローチに、数値化された客観的なデータというひとつの物差しを加え、思い描いた理想の味へと導いていくことができるのです。</p>
					<figure><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image19.jpg" alt="技画像1">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image12.jpg" alt="技画像2">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image13.jpg" alt="技画像3">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image14.jpg" alt="技画像4">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image15.jpg" alt="技画像5">
					</figure>
				</section>
				<section class="artisan-kodawari-section-tertiary">
					<h3><span>質の向上は再現性の上にしか<br>成り立たない。</span></h3>
					<p>科学的に言えば、酒の仕込は酵母の培養です。しかし、その酵母をどうコントロールして人間に都合よく働かせるかで、ただの「培養」が「酒造り」に変わります。
年ごとに味や風味にばらつきがあっては、酒造りとは言えません。まずはどんな酒を造りたいかをイメージして、そのイメージ通りに造れた時に初めて「造った」と言えます。それ以外はただ「出来た」にすぎません。そして、それをやり続ける「再現性」であり、その「再現性」があってこそ、その上を超えることができます。美味しいお酒を愉しんでいただくために、良質のものを安定して造り上げる。そのためにより一層技術を磨き、更に上の味を追求し続けます。</p>
					<figure><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image16.jpg" alt="味画像1">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image17.jpg" alt="味画像2">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image18.jpg" alt="味画像3">
					</figure>
				</section>
			</div>
		</section>
		<section class="artisan-outro">
		<div class="artisan-outro-left">
		<figure>
		<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/artisan/artisan_image11.jpg" alt="中島一郎画像">	
		</figure>
		<h2><small>会津杜氏</small><br>
		中島一郎</h2>
		</div>
		<div class="artisan-outro-right">
		<h3>プロフィール</h3>
		<p>新潟大学農学部農芸学科卒。昭和５１年入社。平成１２年から杜氏として会津ほまれの酒造りを統括している。全国新酒鑑評会金賞10回受賞。福島県知事賞7回受賞。 </p>
		<h3>杜氏から一言</h3>
		<p>「酒造りで常に痛感させられるのは、酒は生き物であるという事。それ故に今必要としている事を、即過不足なく対応するという事です。それには、何が必要かを見抜く観察力と的確な洞察力、そして決断力が求められます。醸された酒がいつもその能力の評価をする訳ですが、その酒に叱咤激励されながらより一層の良酒を醸すべく、経験と精進を重ねていこうと想っております。」</p>
		</div>
		</section>
		<ul class="homare-btn-list">
			<li><a href="<?php echo esc_url( home_url( 'about' ) ); ?>"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo4.svg" />ほまれ酒造とは</a></li>
			<li><a href="<?php echo esc_url( home_url( 'history' ) ); ?>"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo4.svg" />ほまれ酒造の軌跡</a></li>
		</ul>

	</main>
<?php
get_footer();
?>
