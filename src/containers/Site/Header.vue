<template>
  <CNavbar expandable="md" type="dark" color="dark" class="text-white">
    <CToggler in-navbar @click="collapsed = !collapsed"/>
    <CNavbarBrand href="#">NavBar</CNavbarBrand>
    <CCollapse :show="collapsed" navbar>
      <CNavbarNav>
        <CNavItem href="#">Link</CNavItem>
        <CNavItem href="#" disabled>Disabled</CNavItem>
      </CNavbarNav>

      <!-- Right aligned nav items -->
      <CNavbarNav class="ml-auto">
        <CForm inline>
          <CInput
            class="mr-sm-2"
            placeholder="Search"
            size="sm"
          />
          <CButton
            color="secondary"
            size="sm" 
            class="my-2 my-sm-0" 
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
      
        <CDropdown
          nav
          togglerText="User"
          placement="bottom-end"
        >
          <CDropdownItem>Profile</CDropdownItem>
          <CDropdownItem>Signout</CDropdownItem>
        </CDropdown>
         <header class="navbar navbar-light">
            <button class="navbar-toggler aside-menu-toggler" type="button" data-toggle="aside-menu-show">
                <span class="navbar-toggler-icon"></span>
            </button>
        </header>
      </CNavbarNav>
    </CCollapse>
  </CNavbar>
</template>

<script>
export default {
    name: "siteHeader",
    data() {
    return {
      collapsed: false,
    };
  },
}
</script>