import Vue from 'vue';

import MenuMobile from './components/MenuMobile';

window.Vue = Vue;

Vue.mixin({
  methods: {
    scrollTo(target) {
      
      // Check, if we are on the home page.
      if (window.location.pathname == '/') {
        let element = document.getElementById('section-' + target);

        if (element) {
          let offset = -120; 
          let y = element.getBoundingClientRect().top + window.pageYOffset + offset;

          window.scrollTo({top: y, behavior: 'smooth'});
          window.location.hash = target;
        }
      }
      else {
        // Send them back to the home page. 
        window.location.href = '/#' + target;
      } 
    },
  }
});

Vue.component('menu-mobile', MenuMobile);



new Vue({
  el: '#app',
  // mixins: [window.horticurious.mixin],
  methods: {
    imagesAreLoaded(instance) {
      this.scrollTo(window.location.hash.substring(1));
    }
  },
  mounted() {
    // Check is a hash is set and if we are on the home page
    if (window.location.pathname == '/') {
      if (window.location.hash) {
        imagesLoaded( document.querySelector('#app'), this.imagesAreLoaded);
      }
    }
  }
});
