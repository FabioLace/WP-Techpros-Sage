import domReady from '@roots/sage/client/dom-ready';
import $ from 'jquery';
import 'bootstrap';
import Swiper from 'swiper';

/**
 * Application entrypoint
 */
domReady(async () => {
    window.addEventListener('load', function () {
        console.log("WINDOW LOADED");
        let partnerSwiper = $('.swiper');
        if(typeof Swiper !== 'undefined' && partnerSwiper.length > 0) {
            try {
                console.log("SWIPER IS DEFINED");
                //IN20VA STYLE
                partnerSwiper.each(function() {
                    let currentSlider = this;
                    let swiperIstance = currentSlider.swiper;
                    if(swiperIstance){
                        console.log("DESTROYNG SWIPER ISTANCE");
                        swiperIstance.destroy();
                    }

                    new Swiper(currentSlider, {
                        slidesPerView: 3,
                        centeredSlides: true,
                        spaceBetween: 10,
                        loop: true,
                        styleMode: false,
                        pagination: {
                            el: '.swiper-pagination',
                        },
                        scrollbar: {
                            el: '.swiper-scrollbar',
                        },
                    });
                });
            } catch (err) {
                console.log(err);
            }
        } else {
            console.log("SWIPER IS NOT DEFINED");
        }
    });
});
/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
