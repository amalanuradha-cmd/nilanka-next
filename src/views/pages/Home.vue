<template>
    <div>
        <siteHeader  
        
        />
        <div style="position: relative;">
        <carousal style="height: 70vw;">
            
        </carousal>
        <div class="w-50" style="position: absolute;width: 100%;left: 3em;top: 3em;font-size: 3vw;">
        
        
        
        <h1 style="color: white;font-size: 3vw;">
        
            NO #01 Delivery Service <br> in Sri Lanka.
        
        </h1>
        <h3  style="color: white;fomnt-size: 1vw;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin orci ipsum, accumsan eu elementum ut, tristique id sem. Aenean hendrerit et elit sit amet dapibus. Donec dictum gravida turpis placerat lobortis.
      </h3>
      <div class="input-group">
       <input type="text" class="form-control" placeholder="Delivery Reference Number" aria-label="Delivery Reference Number" aria-describedby="button-addon2">
        <div class="input-group-append">

          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Track</button>
        </div>
        
</div>
       </div>
        </div>

        <div>
            <CContainer >
    <CRow>

      <CCol sm="4">
        <CCard color="light"  class="text-white" data-aos="zoom-in">
          <CCardHeader>
            Standard usage
          </CCardHeader>
          <CCardBody>
            This content is in card body component.
          </CCardBody>
          <CCardFooter color="dark">
            Standard Footer.
          </CCardFooter>
        </CCard>
        
      
      </CCol>
      <CCol sm="4">
        <CCard color="light" class="text-white" data-aos="zoom-in">
          <CCardHeader>
            Standard usage
          </CCardHeader>
          <CCardBody>
            This content is in card body component.
          </CCardBody>
          <CCardFooter color="dark">
            Standard Footer.
          </CCardFooter>
        </CCard>
        
      
      </CCol>
      <CCol sm="4">
        <CCard color="light" class="text-white" data-aos="zoom-in">
          <CCardHeader>
            Standard usage
          </CCardHeader>
          <CCardBody>
            This content is in card body component.
          </CCardBody>
          <CCardFooter color="dark">
            Standard Footer.
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

import AOS from 'aos'
import 'aos/dist/aos.css'
import VueResponsiveText from 'vue-responsive-text'
import siteFooter from '../../containers/Site/Footer'
import siteHeader from '../../containers/Site/Header'
import carousal from '../widgets/carousal'
AOS.init({
    once: false,
    duration: 500,
    anchorPlacement: 'top-bottom',  
});

export default {
    
    name: 'siteHome',
    components: {
      siteFooter, siteHeader , carousal , VueResponsiveText
    }

}
</script>