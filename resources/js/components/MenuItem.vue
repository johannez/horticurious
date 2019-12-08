<template>
  <li class="menu-item" :class="['menu-item-id-' + item.id]">
    <div v-if="item.children && item.children.length > 0" class="flex">
      <a :href="item.url">{{ item.text }}</a>
      <div class="expander">></div>
    </div>
    <a v-else :href="item.url">{{ item.text }}</a>  
    

    <ul v-if="item.children && item.children.length > 0" class="menu" :class="['menu-level-' + (level + 1)]">
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
    }
  };
</script>
