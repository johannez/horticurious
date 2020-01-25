<template>
  <div class="menu-container">
    <button @click.prevent="toggleMenu" class="navbar-burger flex items-center text-teal border rounded px-0 h-auto leading-none">
        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
          <!-- <line x1="1" y1="11" 
                x2="11" y2="1" 
                stroke="black" 
                stroke-width="2"/>
          <line x1="1" y1="1" 
                x2="11" y2="11" 
                stroke="black" 
                stroke-width="2"/> -->
        </svg>
    </button>

    <div class="absolute top-0 right-0 bg-gray-800 text-gray-100 w-1/2 h-screen p-6" :class="{ hidden: !displayMenu }">
      <a href="javscript:void(0)" class="text-3xl" @click.prevent="toggleMenu">&times;</a>
      <ul class="menu menu-level-0 text-lg">
        <menu-item v-for="mi in menuItems" :key="mi.id" :item="mi" :level="0"></menu-item>
      </ul> 
    </div>
  </div>
</template>

<script>
  import MenuItem from './MenuItem.vue';

  export default {
    props: {
      menuItems: {
        type: Array,
        required: true
      }
    },
    data() {
      return {
        displayMenu: false
      }
    },
    components: {
      MenuItem
    },
    methods: {
      toggleMenu() {
        this.displayMenu = !this.displayMenu
      }
    },
    mounted() {
      console.log('Component mounted.');
      console.dir('hello');
      console.log(this.menuItems);
    }
  };
</script>
