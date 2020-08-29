<template>
  <CDropdown
    inNav
    class="c-header-nav-items"
    placement="bottom-end"
    add-menu-classes="pt-0"
  >
    <template #toggler>
      <CHeaderNavLink>
        <div class="c-avatar">
          
        </div>
      </CHeaderNavLink>
    </template>
    <CDropdownHeader tag="div" class="text-center" color="light">
      <strong>Account</strong>
    </CDropdownHeader>
    
    <CDropdownItem @click="signIn()">
      <CIcon name="cil-lock-locked" /> Sign In
    </CDropdownItem>
  </CDropdown>
</template>

<script>
import router from 'vue-router'
import { freeSet } from '@coreui/icons'
export default {
    icons: { freeSet },
  name: 'TheHeaderDropdownAccnt',
  data () {
    return { 
      itemsCount: 42
    }
  },
  methods: {
    signIn() {
      
      this.$router.push({ path: '/login' })
    }
  }
}
</script>

<style scoped>
  .c-icon {
    margin-right: 0.3rem;
  }
</style>