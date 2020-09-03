<template>
    <div>
        
        <Header/>
        <CContainer>
        <h1>Add Order</h1>

        <CRow>
      <CCol sm="12">
        <CInput
          label="Name"
          placeholder="Enter your name"
        />
      </CCol>
    </CRow>
    <CRow>
      <CCol sm="12">
        <CInput
          label="Credit Card Number"
          placeholder="0000 0000 0000 0000"
        />
      </CCol>
    </CRow>
    <CRow>
      <CCol sm="4">
        <CSelect
          label="Month"
          :options="[1,2,3,4,5,6,7,8,9,10,11,12]"
        />
      </CCol>
      <CCol sm="4">
        <CSelect
          label="Year"
          :options="[2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025]"
        />
      </CCol>
      <CCol sm="4">
        <CInput
          label="CVV/CVC"
          placeholder="123"
        />
      </CCol>
    </CRow>
</CContainer>
        <Footer/>
        
    </div>
</template>

<script>
import Header from '../../containers/Site/Header'
import Footer from '../../containers/Site/Footer'
export default {
    name: "AddOrder",
    components: {
        Header, Footer
    }
}
</script>