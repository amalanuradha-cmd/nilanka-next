<template>
  <CDropdown
    inNav
    class="c-header-nav-items"
    placement="bottom-end"
    add-menu-classes="pt-0"
  >
    <template #toggler>
        <div style="color: white;">
      <CHeaderNavLink style="color: white;">
        <div>
          <CIcon name="cilMenu" style="color: white;" size="xl"/>
        </div>
      </CHeaderNavLink>
        </div>
    </template>
    <CDropdownHeader tag="div" class="text-center" color="light">
      <strong>Account</strong>
    </CDropdownHeader>
    
    <CDropdownItem @click="signIn()">
      <CIcon name="cil-lock-locked" /> Sign In
    </CDropdownItem>
    <CDropdownItem @click="signUp()">
      <CIcon name="cil-lock-locked" /> Sign Up
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
    },
    signUp() {
        this.$router.push({ path: '/register' })
    }
  }
}
</script>

<style scoped>
  .c-icon {
    margin-right: 0.3rem;
  }
</style>