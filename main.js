// --- main entry point ---

// get styles
import "./assets/css/styles.css"

// get scripts
import './assets/js/animations.js'

import './assets/js/mobile-menu.js'

import './assets/js/smooth-scroll.js'

import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
// src/main.js

import $ from 'jquery';
import 'slick-carousel';

$(function () {
    $('.carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true
    });
});