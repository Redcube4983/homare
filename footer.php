<?php
/* The template for displaying the footer */
?>
	<footer>
		<section class="sns">
			<h2>Follow US</h2>
			<ul class="sns-list">
      <li class="sns-item">
					<a href="//www.instagram.com/homare_sake_brewery/">
						<span class="sns-instagram"><span class="fa-layers"><i class="fab fa-instagram" data-fa-transform="shrink-4"></i></span></span>
					</a>
				</li>
				<li class="sns-item">
					<a href="//twitter.com/HomareSyuzo">
						<span class="sns-twitter"><span class="fa-layers"><img class='x-icon' src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/x-logo.svg" alt="x"></i></span></span>
					</a>
				</li>
				<li class="sns-item">
					<a href="https://www.facebook.com/profile.php?id=100063463306133">
						<span class="sns-facebook"><span class="fa-layers"><i class="fa fa-square"></i><i class="fab fa-facebook"></i></span></span>
					</a>
				</li>
				<!--
				<li class="sns-item">
					<a href="">
						<span class="sns-google-plus"><span class="fa-layers"><i class="fa fa-square"></i><i class="fab fa-google-plus-g" data-fa-transform="shrink-8 left-3"></i></span></span>
					</a>
				</li>
				<li class="sns-item">
					<a href="">
						<span class="sns-line"><span class="fa-layers"><i class="fa fa-square" data-fa-transform="shrink-1"></i><i class="fab fa-line"></i></span></span>
					</a>
				</li>
				-->
			</ul>
		</section>
		<div class="site-title">
			<div class="site-logo">
				<a href="/">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo2.svg" class="site-logo-2" alt="会津ほまれ">
					<img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo.svg" class="site-logo-1" alt="Homare Sake Brewery Co.,Ltd.">
				</a>
			</div>
			<div class="site-description">会津ほまれ&ensp;福島県喜多方市の酒蔵。</div>
		</div>
<?php
	wp_nav_menu( array(
		'menu_class' => 'global-menu',
		'theme_location' => 'global-menu',
		'container' => 'nav',
		'container_class' => 'global-menu',
		'items_wrap' => '<ul id="main-nav">%3$s</ul>'
	));
?>
		<div class="footer-contact">
			<span class="footer-contact-tel1">
				<i class="fas fa-phone"></i><!--<span class="header-contact-gold">&#9742;</span>--><span x-ms-format-detection="none">0241-22-5151</span>
				<span class="footer-contact-small">(平日 9:00～16:30)</span><br>
				<a class="contact" href="<?php echo esc_url( home_url( 'contact' ) ); ?>"><i class="fas fa-envelope"></i>お問い合わせ</a> 
			</span>
		</div>
		<p class="footer-attention">◆お酒は20歳から。未成年者への酒類の販売は固くお断りしています。</p>
		<div class="footer-menu">
<?php
	wp_nav_menu( array(
		'menu_class' => 'global-submenu',
		'theme_location' => 'global-submenu',
		'container' => 'nav',
		'container_class' => 'global-submenu',
		'items_wrap' => '<ul>%3$s</ul>'
	));
?>
<!--
			<ul>
				<li><a href="<?php bloginfo('url'); ?>/guide">ご利用ガイド</a></li>
				<li><a href="<?php bloginfo('url'); ?>/guide">お支払い方法・送料について</a></li>
				<li><a href="<?php bloginfo('url'); ?>/privacypolicy">プライバシー・ポリシー</a></li>
				<li><a href="#">サイトポリシー</a></li>
				<li><a href="<?php bloginfo('url'); ?>/commerciallaw">特定商取引に関する表記</a></li>
			</ul>
-->
		</div>
		<p class="copyright">Copyright &copy; 2012-<?php echo(date('Y', time())); ?> Homare Sake Brewery Co.,Ltd. All rights reserved.</p>
	</footer>

</div>
<div class="cookie-consent">
  <div class="cookie-text">当サイトでは、サイトの利便性向上のためCookieを使用しています。Cookieの使用に関する詳細は「<a href="<?php echo esc_url( home_url( 'privacypolicy' ) ); ?>">プライバシーポリシー</a>」をご覧ください。</div>
  <div class="cookie-agree">OK</div>
</div>
<style>
  .cookie-consent {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    bottom: -200px;
    left: calc(50% - 650px/2);
    width: 650px;
    font-size: 12px;
    background: #fff;
    padding: 1.2em;
    box-sizing: border-box;
    border: 1px solid #ddd;
    visibility: visible;
    transition: .5s;
  }
  .cookie-consent.is-show {
    bottom: 30px;
  }
  .cookie-text {
    width: 90%;
  }
  .cookie-agree {
    color: #fff;
    background: dodgerblue;
    padding: .5em 1.5em;
  }
  .cookie-agree:hover {
    cursor: pointer;
  }
  /* パッと消える */
  .cc-hide1 {
    display: none;
  }
  /* ゆっくり消える */
  .cc-hide2 {
    animation: hide 1s linear 0s;
    animation-fill-mode: forwards;
  }
  @keyframes hide {
    from {
      opacity: 1;
    }
    to {
      opacity: 0;
      visibility: hidden;
    }
  }
  /* メディアクエリ */
  @media screen and (max-width: 650px) {
    .cookie-consent {
      flex-direction: column;
      width: 300px;
      left: calc(50% - 300px/2);
    }
    .cookie-text {
      width: 100%;
      margin-bottom: 1em;
    }
  }
</style>
<script type='text/javascript'>
(function() {
  const expire = 365; // 有効期限（日）
  let cc = document.querySelector('.cookie-consent');
  let ca = document.querySelector('.cookie-agree');
  const flag = localStorage.getItem('popupFlag');
  if (flag != null) {
    const data = JSON.parse(flag);
    if (data['value'] == 'true') {
      window.onscroll = () => {
        if (window.pageYOffset) {
          popup();
        }
      }
    } else {
      const current = new Date();
      if (current.getTime() > data['expire']) {
        setWithExpiry('popupFlag', 'true', expire);
        window.onscroll = () => {
          if (window.pageYOffset) {
            popup();
          }
        }
      }      
    }
  } else {
    setWithExpiry('popupFlag', 'true', expire);
    window.onscroll = () => {
      if (window.pageYOffset) {
        popup();
      }
    }
  }
  ca.addEventListener('click', () => {
    cc.classList.add('cc-hide1');
    setWithExpiry('popupFlag', 'false', expire);
  });
  
  function setWithExpiry(key, value, expire) {
    const current = new Date();
    expire = current.getTime() + expire * 24 * 3600 * 1000;
    const item = {
      value: value,
      expire: expire
    };
    localStorage.setItem(key, JSON.stringify(item));
  }
  
  function popup() {
    cc.classList.add('is-show');
  }
}());
</script>

<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() ); ?>/css/rcproductslider.css">
<script language="javascript">
//node.jsを使わない前提で$をjQueryに再指定
var $ = jQuery.noConflict();
</script>
<script type=”text/javascript” src=”http://connect.facebook.net/en_US/all.js”></script>
<script language="JavaScript">
FB.init({
    appId: '216284168439069',
    status: true,
    cookie: true,
    xfbml: true
});
window.fbAsyncInit = function() {
  FB.Canvas.setSize();
}
function sizeChangeCallback() {
  FB.Canvas.setSize();
}
</script>
<script src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/ScrollTrigger.min.js"></script>
<script defer src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/swiper.min.js"></script>
<script defer src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/smooth-scroll.js"></script>
<script defer src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/script.js"></script>
<script src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/jquery-3.3.1.min.js"></script>
<script defer src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/fontawesome-all.min.js"></script>
<?php if(is_page(array('contact','confirm','thanks'))):?>
<script src="//ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script>
$(function() {
 $('#zip-search').click(function() {
  AjaxZip3.zip2addr('zip[data][0]', 'zip[data][1]', 'pref', 'addr01');
 });
});
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
