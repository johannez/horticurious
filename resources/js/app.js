import Vue from 'vue';

import MenuTree from './components/MenuTree';

window.Vue = Vue;

Vue.component('menu-tree', MenuTree);



new Vue({
  el: '#app'
});
