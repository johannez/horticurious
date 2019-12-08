<template>
  <div class="menu-container">
    <button class="navbar-burger flex items-center text-teal border rounded px-0 h-auto leading-none">
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
    <ul class="menu menu-level-0 hidden">
      <menu-item v-for="mi in menuItems" :key="mi.id" :item="mi" :level="0"></menu-item>
    </ul> 
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
    components: {
      MenuItem
    },
    mounted() {
      console.log('Component mounted.');
      console.dir('hello');
      console.log(this.menuItems);
    }
  };
</script>
