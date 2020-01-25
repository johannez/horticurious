import Vue from 'vue';

import MenuMobile from './components/MenuMobile';

window.Vue = Vue;

Vue.component('menu-mobile', MenuMobile);



new Vue({
  el: '#app'
});
