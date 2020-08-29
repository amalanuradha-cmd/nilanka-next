<template>
  <div class="c-app flex-row align-items-center">
    <CContainer>
      <CRow class="justify-content-center">
        <CCol md="8">
          <CCardGroup>
            <CCard class="p-4">
              <CCardBody>
                <CForm>
                  <!-- {{info}} -->
                  <!-- {{loginReponse.data}} -->
                  <!-- {{count}} -->
                  <h1>Login</h1>
                  <p class="text-muted">Sign In to your account</p>
                  <CInput
                    placeholder="Username"
                    autocomplete="username email"
                    v-model="user.email"
                  >
                    <template #prepend-content><CIcon name="cil-user"/></template>
                  </CInput>
                  <CInput
                    placeholder="Password"
                    type="password"
                    autocomplete="curent-password"
                    v-model="user.password"
                  >
                    <template #prepend-content><CIcon name="cil-lock-locked"/></template>
                  </CInput>
                  <CRow>
                    <CCol col="6" class="text-left">
                      <CButton color="dark" class="px-4" @click="login()">Login</CButton>
                    </CCol>
                    <CCol col="6" class="text-right">
                      <CButton color="link" class="px-0">Forgot password?</CButton>
                      <CButton color="link" class="d-lg-none" @click="register()">Register now!</CButton>
                    </CCol>
                  </CRow>
                </CForm>
              </CCardBody>
            </CCard>
            <CCard
              color="dark"
              text-color="white"
              class="text-center py-5 d-md-down-none"
              body-wrapper
            >
              <CCardBody>
                <h2>Sign up</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <CButton
                  color="light"
                  variant="outline"
                  size="lg"
                  @click="register()"
                >
                  Register Now!
                </CButton>
              </CCardBody>
            </CCard>
          </CCardGroup>
        </CCol>
      </CRow>
    </CContainer>
  </div>
</template>

<script>
import router from 'vue-router'
import axios from 'axios'
export default {
  name: 'Login',
  data () {
    return {
      info: null,
      user: {
        email: "",
        password: ""
      },
      loginReponse: {
        data: {}
      }
    }
  },
  methods: {
    register: function () {
      this.$router.push({ path: '/register' })
    },
    login: function() {
      axios
      .post('http://localhost:8000/api/user/login', this.user)
      .then(response => {this.loginReponse = response;
      localStorage.setItem("token", this.loginReponse.data.access_token);
          if (this.loginReponse.data.access_token && this.loginReponse.data.user.role == 'admin')
            this.$router.push({ path: '/dash' })
          else 
              this.$router.push({ path: '/login' })  
        console.log("roles",this.loginReponse.data);
        // console.log(localStorage.getItem('token'));
      
      });
      
      
      
    },
    getData() {
    axios
      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
      .then(response => (this.info = response));
     
    }
  },
   computed: {
    count () {
      return this.$store.state.storeUser
    }
  },
   mounted () {
this.getData()  
  
}
}
</script>
