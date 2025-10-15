var ua = navigator.userAgent.toLowerCase();
var ver = navigator.appVersion.toLowerCase();

// IE(11以外)
var isMSIE = (ua.indexOf('msie') > -1) && (ua.indexOf('opera') == -1);
// IE6
var isIE6 = isMSIE && (ver.indexOf('msie 6.') > -1);
// IE7
var isIE7 = isMSIE && (ver.indexOf('msie 7.') > -1);
// IE8
var isIE8 = isMSIE && (ver.indexOf('msie 8.') > -1);
// IE9
var isIE9 = isMSIE && (ver.indexOf('msie 9.') > -1);
// IE10
var isIE10 = isMSIE && (ver.indexOf('msie 10.') > -1);
// IE11
var isIE11 = (ua.indexOf('trident/7') > -1);
// IE
var isIE = isMSIE || isIE11;
// Edge
var isEdge = (ua.indexOf('edge') > -1);
 
// Google Chrome
var isChrome = (ua.indexOf('chrome') > -1) && (ua.indexOf('edge') == -1);
// Firefox
var isFirefox = (ua.indexOf('firefox') > -1);
// Safari
var isSafari = (ua.indexOf('safari') > -1) && (ua.indexOf('chrome') == -1);
// Opera
var isOpera = (ua.indexOf('opera') > -1);
 
$(function() {
  if (isOpera) {
  //オペラならつけるクラス
    $("body").addClass("Opera");
  } else if (isIE) {
  //IEならつけるクラス
    $("body").addClass("Ie");
  } else if (isChrome) {
  //Chromeならつけるクラス
    $("body").addClass("Chrome");
  } else if (isSafari) {
  //Safariならつけるクラス
    $("body").addClass("Safari");
  } else if (isEdge) {
  //Edgeならつけるクラス
    $("body").addClass("Edge");
  } else if (isFirefox) {
  //Firefoxならつけるクラス
    $("body").addClass("Firefox");
  } else {
    return false;
  }
});
 
  //デバイス判定
  var _ua = (function(u){
  return {
    Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1)
      || u.indexOf("ipad") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
      || u.indexOf("kindle") != -1
      || u.indexOf("silk") != -1
      || u.indexOf("playbook") != -1,
    Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
      || u.indexOf("iphone") != -1
      || u.indexOf("ipod") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
      || u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());
 
$(function() {
  if(_ua.Mobile){
  //スマホならつけるクラス
  　$('body').addClass("mobile");
  }else if(_ua.Tablet){
  //タブレットならつけるクラス
  　$('body').addClass("tablet");
  }else{
  //スマホ・タブレット以外ならつけるクラス
  　$('body').addClass("desktop");
  }
});

if(navigator.platform.indexOf("Win") != -1){
//Windowsならつけるクラス  
$('body').addClass('Win');
}else{
//Windows以外ならつけるクラス 
  $('body').addClass('notWin');
}

$(function() {
  var ua = navigator.userAgent;
if( ua.indexOf('iPhone') > 0 ) {
//iPhoneならつけるクラス 
$('body').addClass('iPhone');
} else if( ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0 ) {
//Andoroidのスマホならつけるクラス 
$('body').addClass('Android');
} else if( ua.indexOf('iPad') > 0 ) {
//iPadならつけるクラス 
$('body').addClass('iPad');
} 
});

$(function() {
	$('.hamburger').on('click', function(){
		$('header').toggleClass('openNav');
	});
});

var topSlider = new Swiper ('.top-slider .swiper-container', {
	// オプションパラメータ(一部のみ抜粋)
    loop: true, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 800, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: 1, // 何枚のスライドを表示するか
    spaceBetween: 0, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
	
	//Disable preloading of all images 
	preloadImages: false, 
	//Enable lazy loading 
	lazy: { loadPrevNext: true,
		  	loadPrevNextAmount :1,
		   	loadOnTransitionStart: true,
		   	elementClass :'swiper-lazy' ,
		   	preloaderClass:'swiper-lazy-preloader' 
		  },

    // スライダーの自動再生
    // autoplay: true 　のみなら既定値での自動再生
    autoplay: {
      delay: 4000, // スライドが切り替わるまでの表示時間(ミリ秒)
      stopOnLast: false, // 最後のスライドまで表示されたら自動再生を中止するか
      disableOnInteraction: false // ユーザーのスワイプ操作を検出したら自動再生を中止するか
    },
 
    // レスポンシブ化条件
    breakpoints: {
      // 980ピクセル幅以下になったら
      980: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // 640ピクセル幅以下になったら
      640: {
        slidesPerView: 1,
        spaceBetween: 0
      }
    },
 
     // ページネーションを表示する場合
    pagination: {
      el: '.swiper-pagination',　 // ページネーションを表示するセレクタ
	　clickable: 'true',
	  clickableClass: 'swiper-pagination-clickable',
    },
 
    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
      nextEl: '.swiper-button-next', // 次のスライドボタンのセレクタ
      prevEl: '.swiper-button-prev', // 前のスライドボタンのセレクタ
    },
 
    // スクロールバーを表示する場合
    scrollbar: {
      el: '.swiper-scrollbar', // スクロールバーを表示するセレクタ
    }
  });
var sakeSlider = new Swiper ('.sake-list .swiper-container', {
	loop: true,
	speed: 2000,
	autoplay: {
		disableOnInteraction: false,
		stopOnLast: false,
		delay: 000
	},
	
	//preloadImages: false, 
	//Enable lazy loading 
	//lazy: { loadPrevNext: true,
		  	//loadPrevNextAmount :'auto',
		   	//loadOnTransitionStart: true,
		   	//elementClass :'swiper-lazy2',
		   	//preloaderClass:'swiper-lazy-preloader2' 
	//},
	slidesPerView: 'auto',
	freeMode: true,
	freeModeMomentumBounce: false
	
});

document.addEventListener('DOMContentLoaded', function(){
	var trigger = new ScrollTrigger();
});

$(function(){
	$( 'img.lazy' ).lazyload() ;
} ) ;
var scroll = new SmoothScroll('a[href*="#"]');