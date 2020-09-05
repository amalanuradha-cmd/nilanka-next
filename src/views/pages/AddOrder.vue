<template>
    <div>
        
        <Header/>
        <CContainer>
        <h1>Add Order</h1>

        <CRow>
      <CCol sm="12" class="form-group">
        <CInput
          label="Customer B2B# (Internal Order Number)"
          placeholder="Optional"
        />
      </CCol>
    </CRow>
    
    <CRow>
      <CCol sm="12" class="form-group">
        <CInput
          label="Sleeping Barcode (If Generated)"
          placeholder="optional"
        />
      </CCol>
    </CRow>
    <CRow>
      <CCol sm="12" class="form-group">
        <label>Order Type</label>
        <CInputRadioGroup :name="type" :inline="true" :options="types">
          
        </CInputRadioGroup>
      </CCol>
    </CRow>
    <CRow>
      <CCol sm="12" class="form-group">
      
        <CInputRadioGroup :checked.sync="address" @update:checked="setAddress(address, $event)"  :inline="true" :options="pickup_address">
          
        </CInputRadioGroup>
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
    },
    data () {
      return {
        type: 'delivery',
        address: 'new',
        types: [
          
          { value: 'delivery', label: 'Delivery'}, 
          { value:'exchange', label: 'Exchange'}
        ],
        pickup_address: [
          { value: 'new', label: 'New Pickup Address'},
          { value: 'saved', label: 'Saved Pickup Address'},
          { value: 'drop', label: 'Drop Off Address'},
        ]
      }
  },
  watch: {
    address: function (val) {
      console.log(val);
    },
  },
  computed: {
    // a computed getter
    
  },
  methods: {
    setAddress(val, $event) {
      // console.log(val);
    }
  }
}
</script>