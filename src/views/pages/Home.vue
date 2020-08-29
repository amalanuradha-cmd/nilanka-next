<template>
    <div>
        <siteHeader/>
        <div style="position: relative;">
        <carousal>
            
        </carousal>
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