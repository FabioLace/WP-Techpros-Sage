import domReady from '@roots/sage/client/dom-ready';
import $ from 'jquery';
import 'bootstrap';
//import Swiper from 'swiper';

/**
 * Application entrypoint
 */
domReady(async () => {

    function resizeHero(){
        var headerHeight = Math.round($('header').outerHeight());
        if($('section.hero').length > 0){
            $('section.hero').css('height', 'calc(100dvh - ' + headerHeight.toString() + 'px' + ')');
            $('section.hero').css('margin-top', headerHeight.toString() + 'px');
        }
    }
    resizeHero();

    $(window).on('resize', () => { resizeHero(); });

    const imgPath = "/wp-content/themes/techpros-sage/resources/images/";

    //HANDLE SCROLL
    function handleScroll() {
        const scrollTop = window.scrollY;
        const windowHeight = window.innerHeight;
        const documentHeight = document.body.clientHeight;
        const scrollPercentage = (scrollTop / (documentHeight - windowHeight)) * 100;
        if (scrollPercentage > 1) {
            if(!$('nav').hasClass('nav-scroll')){
                $('nav').addClass('nav-scroll');
            }
            if($(window).width() >= 992){
                $('.contacts-social').hide();
                if($('#logo').attr('src') !== imgPath + "logo-transparent.png"){
                    $('#logo').attr('src',imgPath + "logo-transparent.png");
                }
            }
        } else {
            if($('nav').hasClass('nav-scroll')){
                $('nav').removeClass('nav-scroll');
            }
            if($(window).width() >= 992){
                $('.contacts-social').show();
            }
            if($('#logo').attr('src') === imgPath + "logo-transparent.png"){
                $('#logo').attr('src', imgPath + "main-logo.png");
            }
        }
    }
    handleScroll();
    window.addEventListener('scroll', handleScroll);

    //HAMBURGER
    $('#hamburger').on('click',() =>{
        $('#hamburger').toggleClass('hamburger-is-open');
        $('.mobile-nav-links').toggleClass('mobile-nav-links-is-open');
    });

    //DROPDOWN
    $('.mobile-dropdown-opener').on('click', () => {
        var parent = $(this).parent();
        toggleDropdown(parent);
    });

    function toggleDropdown(menuElement) {
        var dropdown = $(menuElement).find('.mobile-dropdown');
        dropdown.toggle();
    }
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
