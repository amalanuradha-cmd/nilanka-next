<template>
    <div>
        <siteHeader/>
        <carousal/>
        <siteFooter/>
    </div>
</template>
<script>
import siteFooter from '../../containers/Site/Footer'
import siteHeader from '../../containers/Site/Header'
import carousal from '../widgets/carousal'
export default {
    
    name: 'siteHome',
    components: {
      siteFooter, siteHeader , carousal 
    }

}
</script>