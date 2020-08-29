<template>
<div>
  <Header/>
  <div class="c-app flex-row align-items-center" style="margin-top: 100px;">
    
    <CContainer>
      
<div class="alert alert-danger" role="alert" v-if="success">
  not allowed
</div>
      <CRow class="justify-content-center">
        <CCol md="8">
          <CCardGroup>
            <CCard class="p-4">
              <CCardBody>
                <CForm>
                  <!-- {{loginReponse}} -->
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
  <Footer/>
</div>
</template>

<script>
import router from 'vue-router'
import Header from '../../containers/Site/Header'
import Footer from '../../containers/Site/Footer'
import axios from 'axios'
export default {
  name: 'Login',
  components: {
    Header, Footer
  },
  data () {
    return {
      success: false,
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
      this.loginReponse = "set";
      let headers = {
        Accept: 'application/json'
      //  Authorization: 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZGI2ZTNmNDFhNDEzYmI2NzM0ZjA3ODY1ZTkyOWE0OTRiODdiMzgyMTIwOTg3MzY1NzUyNzdmZjYwODkzZGEyMGNlZDEzYTFjYzM5ZmM5NDYiLCJpYXQiOjE1OTg3MDA5MzEsIm5iZiI6MTU5ODcwMDkzMSwiZXhwIjoxNjMwMjM2OTMxLCJzdWIiOiI1Iiwic2NvcGVzIjpbXX0.VACEqlWaeDeeZIZ5BiGIqpAzfsqsdeBxhs9v5gmtsrMRNBUHwHmmmOY7_Q8Ari21oFdFfr2vjomN-v073XOxeKoa4yrrjsPxHhCr2c4eaWCq9bpDVSwZI8mhpHPUL3hywynbDRHkkSirZ00raIq7ereSiAmor6F49Dtl98rDZedKKpTpGe936-SMhISVdQYQIENE-7xGoiyPJSy0jGP_B93nITwCJYcs7a7DlSAI7Epu11yXHocnE4cPaVqYBmoEdTjyqGN8pl1fY8B2XXmCEjGXwbceNNxrPYbpWEmCj96ZJ6a7yZTnX3AWjsgxdfL8K1gES8P7JTnPnFs_hkbUNurZxIv-PnBgKbZqv2X2rdB18ckyefueT5ZdGD_EMwGaSbjpNq4ngExD0S3aTvwbaWOVtG2Iy3nEEpVghuIKuf6DKKBx00iPYfwxx_KsVt1IOyzqkTRQQ3wxmk_T3_FZK0hiuC6s96FdE1zh5s87Q5fHA2OAxo3nfS8C5Oki2wxT5hlZi9fzH5CD9B8jDiD77n2TYeiMefPof6vl2g_beMJukAwWl4D6hDWCe6PZcPRJAdBQ3rUH3L-HquWKaESBzZR9xinBKeekNRNj4w3k4ForaZyxIzpp1rUQfbAw-HvbXuPjPC5wJhCnKpqNaaMfT137b7HBbm5QzwR-O-0tP_0'
      }
    
     axios
      .post('http://192.168.8.101:8000/api/user/login', this.user, {
    headers: headers
  })
      .then(response => {this.loginReponse = response;
      localStorage.setItem("token", this.loginReponse.data.access_token);
      
      if (this.loginReponse.data && this.loginReponse.data.access_token && this.loginReponse.data.user.role == 'admin'){
this.loginReponse = this.loginReponse.data.access_token;
      this.$router.push({ path: '/dash' })
      
          }
      
              
                
        console.log("roles",this.loginReponse.data);
        // console.log(localStorage.getItem('token'));
      
      }).catch(error => {
    console.log(error.response)
    console.log("no success");
            this.success = true;
            
});;
     
      
      
      
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
