<template>
    <div>
        <siteHeader/>
        <siteFooter/>
    </div>
</template>
<script>
import siteFooter from '../../containers/Site/Footer'
import siteHeader from '../../containers/Site/Header'
export default {
    
    name: 'siteHome',
    components: {
      siteFooter, siteHeader  
    }

}
</script>