import domReady from '@roots/sage/client/dom-ready';
import $ from 'jquery';
import 'bootstrap';

import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

import "@fortawesome/fontawesome-free/css/all.min.css";

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
        parent.find('.mobile-dropdown').toggle();
    });

    //ANIMATE COUNTER
    function animateCount(element, target, duration) {
        const start = 0;
        const increment = target / (duration / 16); // 16ms è il tempo approssimativo di un frame
        let current = start;

        const interval = setInterval(() => {
            current += increment;
            element.textContent = Math.floor(current);

            if (current >= target) {
                clearInterval(interval);
                element.textContent = target;
            }
        }, 16);
    }

    const statisticsElement = document.querySelector('.statistics');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                const happyCustomersElement = document.querySelector('#happy-customers .title');
                if(happyCustomersElement){
                    animateCount(happyCustomersElement, 147, 1000);
                }

                const accountNumber = document.querySelector('#account-number .title');
                if(accountNumber){
                    animateCount(accountNumber, 1280, 1000);
                }

                const finishedProjects = document.querySelector('#finished-projects .title');
                if(finishedProjects){
                    animateCount(finishedProjects,10, 1000);
                }

                const winAwards = document.querySelector('#win-awards .title');
                if(winAwards){
                    animateCount(winAwards,992,1000);
                }

                observer.unobserve(statisticsElement);
            }
        });
    });
    observer.observe(statisticsElement);

    const swiper = new Swiper(".swiper", {
        modules: [Navigation, Pagination],
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 10,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
    });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
