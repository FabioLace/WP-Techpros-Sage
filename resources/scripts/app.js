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
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
