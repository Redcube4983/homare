<?php
/*
Template Name: page-snswidget
*/
?>
<?php get_header('snswidget');?>
	<main>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<div class="widget-list" id="widget-list">
			<div class="widget-item"><?php get_sidebar('instagram'); ?></div>
			<!--<div class="widget-item"><div class="widget-item-inner"><img src="https://placehold.jp/30px/f13f79/ffffff/300x380.jpg?text=Instagram" width="100%" alt="Instagram"></div></div>-->
			<div class="widget-item"><div class="widget-item-inner" id="widget-twitter"></div></div>
<!--<a class="twitter-timeline" href="https://twitter.com/HomareSyuzo?ref_src=twsrc%5Etfw" data-width="300" data-height="380">Tweets by HomareSyuzo</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
<script language="javascript">
(function($){
	var wid = parseInt($('#widget-twitter').width()) > 500 ? 500 : parseInt($('#widget-twitter').width());
	var hei = parseInt(wid * 380 / 300);
	$('#widget-twitter')
		.width( wid )
		.height( hei )
		.append('<a class="twitter-timeline" href="https://twitter.com/HomareSyuzo?ref_src=twsrc%5Etfw" data-width="' + wid + '" data-height="' + hei + '">Tweets by HomareSyuzo</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8">')
		.parent().height( hei );
})(jQuery);
</script>
			<div class="widget-item"><div class="widget-item-inner" id="widget-facebook"></div></div>
<script language="javascript">
(function($){
	var wid = parseInt($('#widget-facebook').width()) > 500 ? 500 : parseInt($('#widget-facebook').width());
	var hei = parseInt(wid * 380 / 300);
	$('#widget-facebook')
		.width( wid )
		.height( hei )
		.append('<div id="fb-page" class="fb-page" data-href="https://www.facebook.com/%E3%81%BB%E3%81%BE%E3%82%8C%E9%85%92%E9%80%A0-%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE-1165802586866601/" data-tabs="timeline" data-width="' + wid + '" data-height="' + hei + '" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/%E3%81%BB%E3%81%BE%E3%82%8C%E9%85%92%E9%80%A0-%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE-1165802586866601/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/%E3%81%BB%E3%81%BE%E3%82%8C%E9%85%92%E9%80%A0-%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE-1165802586866601/">ほまれ酒造　株式会社</a></blockquote></div>')
		.parent().height( hei );
})(jQuery);
</script>
		</div>
	</main>

<?php get_footer('snswidget'); ?>

