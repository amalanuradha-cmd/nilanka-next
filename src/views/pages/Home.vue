<template>
    <div>
        <siteHeader  
        
        />
        <div style="position: relative;">
        <carousal>
            
        </carousal>
        <div class="w-50" style="position: absolute;left: 3em;top: 6em;font-size: 3vw;">
        <div class="input-group">
       <input type="text" class="form-control" placeholder="Delivery Reference Number" aria-label="Delivery Reference Number" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Track</button>
  </div>
</div>
        </div>
        <h1 style="position: absolute;top: 3em;left: 3em;color: white;font-size: 3vw;">
        
            NO #01 Delivery Service <br> in Sri Lanka.
        
        </h1>
       
        </div>
       
        <siteFooter/>
    </div>
</template>
<script>
import VueResponsiveText from 'vue-responsive-text'
import siteFooter from '../../containers/Site/Footer'
import siteHeader from '../../containers/Site/Header'
import carousal from '../widgets/carousal'
export default {
    
    name: 'siteHome',
    components: {
      siteFooter, siteHeader , carousal , VueResponsiveText
    }

}
</script>