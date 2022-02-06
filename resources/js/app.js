require('./bootstrap');

import Alpine from 'alpinejs';
import Vue from 'vue'
import 'livewire-vue'
Window.Vue = Vue;

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function () {
  const isHover = e => e.parentElement.querySelector(':hover') === e;

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
    infinite: false,
    draggable: false
  });

  let slider = document.querySelector('.item-slider');
  let prevBtn = slider.querySelector('.slick-prev');
  let nextBtn = slider.querySelector('.slick-next');
  prevBtn.style.display = 'none';
  nextBtn.style.display = 'none';

  ['mouseenter'].forEach(function (e) {
    slider.addEventListener(e, function () {
      const hovered = isHover(slider);
      if (hovered) {
        prevBtn.style.display = 'block';
        nextBtn.style.display = 'block';
      }
    }, false)
  });

  // product detail
  $('.product-detail-image').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    infinite: false,
    draggable: false,
    variableWidth: true
  });

  let cover = document.querySelector('img.product-cover');
  if (cover) {
    let imageCover = cover.src;
    let images = document.querySelectorAll('.product-detail-image .product-image');
    for (let i = 0; i < images.length; i++) {
      images[i].addEventListener('click', function () {
        cover.src = images[i].src;
        imageCover = images[i].src;
      });

      ['mouseenter', 'mouseleave'].forEach(function (e) {
        images[i].addEventListener(e, function () {
          const hovered = isHover(images[i]);
          hovered ? cover.src = images[i].src : cover.src = imageCover;
        }, false)
      });
    }
  }
});