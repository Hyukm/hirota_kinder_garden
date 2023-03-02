/*--------------------------------
	年間行事スライダー
--------------------------------*/
$(function () {
    $(".slider_year").slick({
      autoplay: false, // 自動再生
      adaptiveHeight: true,
      dots: false, // ドット上のナビを表示
    //   slidesToShow: 3,
      focusOnSelect: true,
      swipe: true,
      centerMode: true, // 中央寄せ
      infinite: true,
      variableWidth: true, // 違うサイズの画像を入れる時
      loop: true, // ループ有効
      responsive: [
        {
          breakpoint: 641, // 640px以下のサイズに適用
          settings: {
            slidesToShow: 1, // 表示するスライド数
          },
        },
      ],
    });
});


/*--------------------------------
	モーダルの実装
--------------------------------*/

$(function () {
    // お泊り保育
    $("#comment_btn_stay").click(function() {
        $("#modals, #modal_stay, #back_stay").removeClass('modal_hidden');     
    });
    $("#back_stay").click(function() {
        $("#modals, #modal_stay, #back_stay").addClass('modal_hidden');     
    });
    // 運動会
    $("#comment_btn_work").click(function() {
        $("#modals, #modal_work, #back_work").removeClass('modal_hidden');     
    });
    $("#back_work").click(function() {
        $("#modals, #modal_work, #back_work").addClass('modal_hidden');     
    });
    // お店屋さんごっこ
    $("#comment_btn_shop").click(function() {
        $("#modals, #modal_shop, #back_shop").removeClass('modal_hidden');     
    });
    $("#back_shop").click(function() {
        $("#modals, #modal_shop, #back_shop").addClass('modal_hidden');     
    });
    // お遊戯会
    $("#comment_btn_play").click(function() {
        $("#modals, #modal_play, #back_play").removeClass('modal_hidden');     
    });
    $("#back_play").click(function() {
        $("#modals, #modal_play, #back_play").addClass('modal_hidden');     
    });
    // 音楽会
    $("#comment_btn_music").click(function() {
        $("#modals, #modal_music, #back_music").removeClass('modal_hidden');     
    });
    $("#back_music").click(function() {
        $("#modals, #modal_music, #back_music").addClass('modal_hidden');     
    });
});
