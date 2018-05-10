<template>
  <div class="">

    <div class="tabs">
      <ul>

        <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">
          <a :href="tab.href" @click="selectTab(tab)">{{ tab.name }}</a>
        </li>

      </ul>
    </div>

    <div class="tabs-details">
      <slot></slot>
    </div>

  </div>

</template>

<script>
    import tab from './tab.vue'

    export default {
        data() {
          return { tabs: [] };
        },
        created() {
          this.tabs = this.$children;
        },
        methods: {
          selectTab(selectedTab) {
            this.tabs.forEach(tab => {
              tab.isActive = (tab.name == selectedTab.name);
            });
          }
        },
        mounted() {
            console.log(this.$children)
        }
    }

</script>
