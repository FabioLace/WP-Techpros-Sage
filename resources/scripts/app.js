import domReady from '@roots/sage/client/dom-ready';
import $ from 'jquery';
import 'bootstrap';
import Swiper from 'swiper';

/**
 * Application entrypoint
 */
domReady(async () => {
    /**
    * EH, VOLEVI!! TI ASPETTAVI DI TROVARE SWIPER.JS VERO? PER ADESSO TE LO CARICO 
    * DA CDN DIRETTAMENTE NELL'HEADER (SONO BARBARO, LO SO) DATO CHE NON RIESCO A FARLO FUNZIONARE DA QUI.
    * PRIMA O POI LO VEDRAI QUI DOVE DOVREBBE STARE
    */

    const mobileDropdownOpeners = document.querySelectorAll('.mobile-dropdown-opener');

    mobileDropdownOpeners.forEach(function (opener) {
        opener.addEventListener('click', function () {
            const parent = opener.parentElement;
            toggleDropdown(parent);
        });
    });

    function handleScroll() {
        const scrollTop = window.scrollY;
        const windowHeight = window.innerHeight;
        const documentHeight = document.body.clientHeight;

        const scrollPercentage = (scrollTop / (documentHeight - windowHeight)) * 100;
        if (scrollPercentage > 1) {
            $('nav').classList.add('nav-scroll');
            $('#logo').src = 'wp-content/themes/techpros/assets/images/logo-transparent.png';
        } else {
            $('nav').classList.remove('nav-scroll');
            $('#logo').src = 'wp-content/themes/techpros/assets/images/main-logo.png';
        }
    }

    handleScroll();
    window.addEventListener('scroll', handleScroll);


    $('#hamburger').on('click',() =>{
        if($('#hamburger').hasClass('hamburger-is-open')){
            $('#hamburger').removeClass('hamburger-is-open');
            $('.mobile-nav-links').removeClass('mobile-nav-links-is-open');
        } else {
            $('#hamburger').addClass('hamburger-is-open');
            $('.mobile-nav-links').addClass('mobile-nav-links-is-open');
        }
    });

    //FUNZIONE PER APERTURA DROPDOWN
    function toggleDropdown(menuElement) {
        var dropdown = menuElement.querySelector('.mobile-dropdown');
        if (dropdown.style.display === 'block') {
            dropdown.style.display = 'none';
        } else {
            dropdown.style.display = 'block';
        }
    }
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
