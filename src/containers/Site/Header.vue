<template>
  <CNavbar expandable="md" type="dark" color="dark" class="text-white" style="padding: 15px;position: sticky;
  top: 0;
  width: 100%;z-index: 999;">
    <CToggler in-navbar @click="collapsed = !collapsed"/>
    <router-link
  to="/"><img
            src="img/logo.png"
            width="100px"
            class="img-fluid"
          />
    </router-link>
    <!-- <CNavbarBrand href="#">NavBar</CNavbarBrand> -->
    <CCollapse :show="collapsed" navbar>
      <CNavbarNav>
        <CNavItem href="#">Link</CNavItem>
        <CNavItem href="#" disabled>Disabled</CNavItem>
      </CNavbarNav>

      <!-- Right aligned nav items -->
      <CNavbarNav class="ml-auto">
        <CForm inline>
            
          <CInput
            class="mr-sm-2 mb-0"
            placeholder="Search"
            size="sm"
          />
          <CButton
            color="secondary"
            size="sm" 
            class="my-2 my-sm-0 mr-sm-2" 
            type="submit"
          >
            Search
          </CButton>
            
        </CForm>

        <!-- <CDropdown
          togglerText="Lang"
          nav
          placement="bottom-end"
        >
            <CDropdownItem>EN</CDropdownItem>
            <CDropdownItem>ES</CDropdownItem>
            <CDropdownItem>RU</CDropdownItem>
            <CDropdownItem>FA</CDropdownItem>
        </CDropdown> -->
      
        
         <TheHeaderDropdownAccnt/>
      </CNavbarNav>
    </CCollapse>
  </CNavbar>
</template>

<script>
import TheHeaderDropdownAccnt from './TheHeaderDropdownAccnt'

import router from 'vue-router'
export default {
    name: "siteHeader",
    components: {
        TheHeaderDropdownAccnt,
        
    },
    data() {
    return {
      collapsed: false,
    };
  },
  methods: {
      signin() {
          this.$router.push({ path: '/login' })
      }
  }
}
</script>