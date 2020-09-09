<template>
<div>
  <!-- <div v-if="warningZone">warning</div> -->
  <router-view></router-view>
</div>
  
</template>

<script>
import api from './router/api'
import axios from 'axios'
import ls from 'local-storage'
export default {
  name: 'App',
  data: function() {
    return {
      events: ['click', 'mousemove', 'scroll', 'keypress', 'load'],
      warningTimer: null,
      logoutTimer: null,
      warningZone: false


    }
  },
  mounted() {
    this.events.forEach(function(event) {
      window.addEventListener(event, this.resetTimer);
    }, this);
    this.setTimers()
  },
  destroyed() {
    this.events.forEach(function(event) {
      window.removeEventListener(event, this.resetTimer);
    }, this);
    this.resetTimer()
  },
  methods: {
    logout() {
      let token = ls.get('token')
      
        let headers = {
        Accept: 'application/json',
      Authorization: 'Bearer '+ token 
      ,
      }
    
     axios
      .get(api + '/logout', {
    headers: headers
  })
      .then(response => {this.loginReponse = response;
      
      
      })
      ls.remove('token')
      this.$router.push({ path: '/login' })
    },
    setTimers: function() {
      this.warningTimer = setTimeout(this.warningMessage, 4 * 1000);
      this.logoutTimer = setTimeout(this.logoutUser, 900 * 1000);

      this.warningZone = false
    },
    resetTimer: function() {
      clearTimeout(this.warningTimer)
      clearTimeout(this.logoutTimer)
      this.setTimers()

    },
    warningMessage: function() {
      this.warningZone = true;
    },
    logoutUser: function() {
      if (ls.get('token')) 
      this.logout()
    }
  }
}
</script>

<style lang="scss">
  // Import Main styles for this application
  @import 'assets/scss/style';
</style>
