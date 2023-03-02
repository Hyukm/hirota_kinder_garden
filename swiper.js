/* スワイパーの表示画像数の調整 */

  const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    breakpoints: {
      // ウィンドウサイズが640px以上
      640: {
        slidesPerView: 4,
        spaceBetween: 10
      }
    }
  })
