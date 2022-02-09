require('./bootstrap');

import Alpine from 'alpinejs';
import Vue from 'vue'
import 'livewire-vue'
Window.Vue = Vue;

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function () {
  const isHover = e => e.parentElement.querySelector(':hover') === e;

  // header
  let userDropdown = document.querySelector('.user-dropdown');
  let userButton = document.querySelector('.user-button');
  let toggle = false;
  if (userButton) {
    userButton.addEventListener('click', function () {
      if (!toggle) {
        userDropdown.classList.remove('hidden');
        toggle = !toggle;
      } else {
        userDropdown.classList.add('hidden');
        toggle = !toggle;
      }
    });
  }

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
  if (slider) {
    let prevBtn = slider.querySelector('.slick-prev');
    let nextBtn = slider.querySelector('.slick-next');
    prevBtn.style.display = 'none';
    nextBtn.style.display = 'none';

    ['mouseenter', 'mouseleave'].forEach(function (e) {
      slider.addEventListener(e, function () {
        const hovered = isHover(slider);
        if (hovered) {
          prevBtn.style.display = 'block';
          nextBtn.style.display = 'block';
        }
      }, false)
    });
  }

  // product detail
  let productImages = document.querySelectorAll('.product-image');
  let cover = document.querySelector('.product-cover');
  let quantityForm = document.querySelectorAll('#quantity');

  if (cover) {
    let imageCover = cover.src;
    for (let i = 0; i < productImages.length; i++) {
      productImages[i].addEventListener('click', function () {
        let image = productImages[i].src;
        for (let j = 0; j < productImages.length; j++) {
          if (productImages[j].parentElement.classList.contains('image-active')) {
            productImages[j].parentElement.classList.remove('image-active');
          }
        }

        productImages[i].parentElement.classList.add('image-active');
        cover.src = image;
      });
    }
  }

  if (quantityForm.length > 0) {
    if (quantityForm.length >= 1 && !quantityForm[0].classList.contains('add-to-cart')) {
      for (let i = 0; i < quantityForm.length; i++) {
        quantityForm[i].addEventListener('change', function () {
          let quantity = quantityForm[i].value;
          let slug = quantityForm[i].getAttribute('data-slug');
          Livewire.emit('setQuantity', slug, quantity);
        });
      }
    } else {
      quantityForm[0].addEventListener('change', function () {
        let quantity = quantityForm[0].value;
        Livewire.emit('setQuantity', quantity);
      });
    }
  }

  // let images = document.querySelectorAll('.product-detail-image .product-image');
  // for (let i = 0; i < images.length; i++) {
  //   images[i].addEventListener('click', function () {
  //     cover.src = images[i].src;
  //     imageCover = images[i].src;
  //   });

  //   ['mouseenter', 'mouseleave'].forEach(function (e) {
  //     images[i].addEventListener(e, function () {
  //       const hovered = isHover(images[i]);
  //       hovered ? cover.src = images[i].src : cover.src = imageCover;
  //     }, false)
  //   });
  // }
  // }
});