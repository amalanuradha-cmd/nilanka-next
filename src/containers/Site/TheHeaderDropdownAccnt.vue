<template>
  <CDropdown
    inNav
    class="c-header-nav-items"
    placement="bottom-end"
    add-menu-classes="pt-0"
  >
    <template #toggler>
        <div style="padding-left: 20px;color: white;">
      <CHeaderNavLink style="color: white;">
        <div>
          <CIcon name="cilList" style="color: white;"/>
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
      <CIcon name="cil-lock-locked" /> Register
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