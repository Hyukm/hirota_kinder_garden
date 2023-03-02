/*--------------------------------
	スライダー
--------------------------------*/
$(function () {
    $(".slider").slick({
      // arrows: true,
      autoplay: false,
      adaptiveHeight: true,
      dots: false,
      // slidesToShow: 3,
      focusOnSelect: true,
      swipe: true,
      centerMode: true,
      // centerPadding: "8%",
      infinite: true,
      variableWidth: true,
      loop: true, // ループ有効
      responsive: [
        {
          breakpoint: 641, // 640px以下のサイズに適用
          settings: {
            slidesToShow: 1,
          },
        },
        {
          breakpoint: 1501, // 640px以下のサイズに適用
          settings: {
            slidesToShow: 3,
            centerPadding: "8%",
            variableWidth: false,
          },
        },
      ],
    });
});

/*--------------------------------
	HM
--------------------------------*/
$(".btn_open").click(function () {
	$(this).toggleClass('active');
    $("#g-nav").toggleClass('panelactive');
});

$("#g-nav a").click(function () {
    $(".btn_open").removeClass('active');
    $("#g-nav").removeClass('panelactive');
});


/*--------------------------------
	アコーディオン
--------------------------------*/
//アコーディオンをクリックした時の動作
$('.title').on('click', function() {//タイトル要素をクリックしたら
	var findElm = $(this).next(".box");//直後のアコーディオンを行うエリアを取得し
	$(findElm).slideToggle();//アコーディオンの上下動作
    
	if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
		$(this).removeClass('close');//クラス名を除去し
	}else{//それ以外は
		$(this).addClass('close');//クラス名closeを付与
	}
});

//ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
// $(window).on('load', function(){
// 	$('.accordion-area li:first-of-type section').addClass("open"); //accordion-areaのはじめのliにあるsectionにopenクラスを追加
// 	$(".open").each(function(index, element){	//openクラスを取得
// 		var Title =$(element).children('.title');	//openクラスの子要素のtitleクラスを取得
// 		$(Title).addClass('close');				//タイトルにクラス名closeを付与し
// 		var Box =$(element).children('.box');	//openクラスの子要素boxクラスを取得
// 		$(Box).slideDown(500);					//アコーディオンを開く
// 	});
// });

/*--------------------------------
	ズームアップ
--------------------------------*/
//投稿にホバーしたとき写真がズームする

// $('.post_article > a').mouseover(function() {//タイトル要素をクリックしたら
//   $(this).children('.post_image').addClass('zoom')
// });
// $('.post_article > a').mouseleave(function() {//タイトル要素をクリックしたら
//   $(this).children('.post_image').removeClass('zoom')
// });