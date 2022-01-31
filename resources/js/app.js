require('./bootstrap');

import Alpine from 'alpinejs';
import Vue from 'vue'
import 'livewire-vue'
Window.Vue = Vue;

window.Alpine = Alpine;

Alpine.start();
