<template>
  <div class="menu-container">
    <button @click.prevent="toggleMenu" class="navbar-burger bg-transparent hover:bg-transparent flex items-center border rounded px-0 h-auto leading-none" :class="['text-' + colors.trigger, 'hover:text-' + colors.trigger]">
      <svg class="fill-current h-8 w-8" :class="{ hidden: displayMenu }" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Menu Open</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
      </svg>
      <svg class="fill-current h-6 w-8" :class="[{ hidden: !displayMenu }]" viewBox="0 0 298.667 298.667">
        <title>Menu Close</title>
        <path d="M298.667 30.187L268.48 0 149.333 119.147 30.187 0 0 30.187l119.147 119.146L0 268.48l30.187 30.187L149.333 179.52 268.48 298.667l30.187-30.187L179.52 149.333z" fill="currentColor"/>
      </svg>
    </button>

    <div class="absolute right-0 w-screen md:w-1/2 h-screen overflow-scroll" :class="['bg-' + colors.bgPrimary, { hidden: !displayMenu }]" :style="{ top: offset }">
      
      <ul class="menu menu-level-0 text-lg pb-24">
        <menu-mobile-item v-for="mi in menuItems" :key="mi.id" :item="mi" :level="0" v-on:closeMenu="toggleMenu"></menu-mobile-item>
      </ul> 
    </div>
  </div>
</template>

<script>
  import MenuMobileItem from './MenuMobileItem.vue';

  export default {
    props: {
      menuItems: {
        type: Array,
        required: true
      },
      colors: {
        type: Object,
        default() {
          return {
            font: 'black',
            border: 'gray-300',
            bgPrimary: 'white',
            bgSecondary: 'gray-200',
            trigger: 'black'
          }
        }
      },
      offset: {
        type: String,
        default: '5.25rem'
      }
    },
    data() {
      return {
        displayMenu: false,
        scrollPosition: 0
      }
    },
    components: {
      MenuMobileItem
    },
    methods: {
      toggleMenu() {
        this.displayMenu = !this.displayMenu;

        if (this.displayMenu) {
          this.disableScrolling();
        }
        else {
          this.enableScrolling();
        }
      },
      disableScrolling() {
        // this.scrollPosition = window.pageYOffset;

        const $body = document.querySelector('body');
        $body.style.overflow = 'hidden';
        $body.style.position = 'fixed';
        $body.style.top = `-${this.scrollPosition}px`;
        $body.style.width = '100%';
      },
      enableScrolling() {
        const $body = document.querySelector('body');
        $body.style.removeProperty('overflow');
        $body.style.removeProperty('position');
        $body.style.removeProperty('top');
        $body.style.removeProperty('width');

        // window.scrollTo(0, this.scrollPosition);
      },
    }
  };
</script>
