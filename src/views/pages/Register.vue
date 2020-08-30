<template>
<div>
   <Header/>
  <div class="d-flex align-items-center min-vh-100" style="margin-top: 100px;">

    <CContainer fluid>
      <CRow class="justify-content-center">
        <CCol md="6">
          <CCard class="mx-4 mb-0">
            <CCardBody class="p-4">
              <CForm>
                <h1>Register</h1>
                {{registerReponse}}
                <p class="text-muted">Create your account</p>
                <CInput
                v-model="user.name"
                  placeholder="Username"
                  autocomplete="username"
                >
                  <template #prepend-content><CIcon name="cil-user"/></template>
                </CInput>
                <CInput
                v-model="user.email"
                  placeholder="Email"
                  autocomplete="email"
                  prepend="@"
                />
                <CInput
                v-model="user.password"
                  placeholder="Password"
                  type="password"
                  autocomplete="new-password"
                >
                  <template #prepend-content><CIcon name="cil-lock-locked"/></template>
                </CInput>
                <CInput
                v-model="user.password_confirmation"
                  placeholder="Repeat password"
                  type="password"
                  autocomplete="new-password"
                  class="mb-4"
                >
                  <template #prepend-content><CIcon name="cil-lock-locked"/></template>
                </CInput>
                <CButton color="success" block @click="signUp()">Create Account</CButton>
              </CForm>
            </CCardBody>
            <CCardFooter class="p-4">
              <CRow>
                <CCol col="6">
                  <CButton block color="facebook">
                    Facebook
                  </CButton>
                </CCol>
                <CCol col="6">
                  <CButton block color="twitter">
                    Twitter
                  </CButton>
                </CCol>
              </CRow>
            </CCardFooter>
          </CCard>
        </CCol>
      </CRow>
    </CContainer>
  </div>
  <siteFooter/>
</div>
</template>

<script>
import axios from 'axios'
import Header from '../../containers/Site/Header'
import siteFooter from '../../containers/Site/Footer'
import api from '../../router/api'
export default {
  name: 'Register',
  components: {
      Header, siteFooter
  },
  data () {
    return {
      registerReponse: null,
      user: {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        role: 'cust'
      }
    }
  },
  methods: {
    signUp: function () {
      axios
      .post(api + '/user/create', this.user)
      .then(response => {this.registerReponse = response;
     
      
      });
    }
  }
}
</script>
