<template>
  <footer class="footer bg-dark row" style="padding: 20px;color: white;">
    <div class="col-md-6">
      <a href="https://coreui.io">CoreUI</a>
      <span>&copy; 2020 creativeLabs.</span>
    </div>
    <div class="ml-auto col-md-6">
      <span>Powered by</span>
      <a href="https://coreui.io">CoreUI</a>
    </div>
  </footer>
</template>

<script>

import router from 'vue-router'
export default {
    name: "siteFooter",
    components: {
        
        
    },
    data() {
    return {
      collapsed: false,
    };
  }
}
</script>