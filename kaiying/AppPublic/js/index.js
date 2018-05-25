$(document).ready(function () {
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        autoplay: true,
        // 如果需要滚动条
        scrollbar: {
          el: '.swiper-scrollbar',
          draggable: true,  
        },
    })
    mySwiper.scrollbar.$el.css('height','10px');
})