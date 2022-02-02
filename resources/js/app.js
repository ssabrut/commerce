require('./bootstrap');

import Alpine from 'alpinejs';
import Vue from 'vue'
import 'livewire-vue'
Window.Vue = Vue;

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function () {
  // banner
  $('.banner-wrapper').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  // item slider
  $('.item-slider').slick({
    slidesToShow: 6,
    slidesToScroll: 6,
    variableWidth: true,
    infinite: false,
    draggable: false,
    speed: 800
  });
});