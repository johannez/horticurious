<template>
  <li class="menu-item py-2" :class="['menu-item-id-' + item.id, level === 0 ? 'border-t border-b' : '']">
    <div v-if="item.children && item.children.length > 0" class="flex">
      <a :href="item.url">{{ item.text }}</a>
      <div @click="toggleSubMenu('menu-level-' + (level + 1))" class="expander ml-4 cursor-pointer">></div>
    </div>
    <a v-else :href="item.url">{{ item.text }}</a>  
    
    <ul v-if="item.children && item.children.length > 0" class="menu hidden pl-4" :class="['menu-level-' + (level + 1)]">
      <menu-item v-for="child in item.children" :key="child.id" :item="child" :level="level + 1"></menu-item>
    </ul>
  </li>
</template>

<script>
  export default {
    name: "menuItem",
    props: {
      item: Object,
      level: Number
    },
    methods: {
      toggleSubMenu(target) {
        let subMenu = document.querySelector('.' + target);
        subMenu.style.display = (subMenu.style.display === 'block' ? 'none' : 'block');
      }
    }
  };
</script>
