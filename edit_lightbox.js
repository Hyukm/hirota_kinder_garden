/*--------------------------------
	ライトボックスの属性を付与する
--------------------------------*/

var links = document.querySelectorAll(".single_post_content_main a");

for (var i = 0; i < links.length; i++) {
  links[i].setAttribute("data-lightbox", "image");
  links[i].setAttribute("rel", "lightbox");
}

/*--------------------------------
ライトボックスのスクロール禁止
--------------------------------*/

// スクロールを禁止にする関数
function disableScroll(event) {
  event.preventDefault();
}

// スクロール解除  
$(window).click(function () {
  // イベントと関数を紐付け  
  document.removeEventListener('touchmove', disableScroll, { passive: false });
  document.removeEventListener('mousewheel', disableScroll, { passive: false });
  console.log('blackclick');
});

$(".lb-dataContainer a").click(function () {
  // イベントと関数を紐付け  
  document.removeEventListener('touchmove', disableScroll, { passive: false });
  document.removeEventListener('mousewheel', disableScroll, { passive: false });
  console.log('blackclick');
});

// スクロール禁止
$(".single_post_content img").click(function () {
  document.addEventListener('touchmove', disableScroll, { passive: false });
  document.addEventListener('mousewheel', disableScroll, { passive: false });
  console.log('imgclick');
});