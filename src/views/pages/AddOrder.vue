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
        <CInputRadioGroup :checked.sync="type"  :inline="true" :options="types">
          
        </CInputRadioGroup>
      </CCol>
    </CRow>
    <CRow>
      <CCol sm="12" class="form-group">
      
        <CInputRadioGroup :checked.sync="address" @update:checked="setAddress(address, $event)"  :inline="true" :options="pickup_address">
          
        </CInputRadioGroup>
      </CCol>
    </CRow>
    <div v-if="address == 'new'">
         <CRow>
            <CCol sm="12" class="form-group">
              <CInput
              :value.sync="selectedAddress.street"
                label="Pickup Street"
                placeholder="Pickup Street"
              />
            </CCol>
          </CRow>
        
          <CRow>
            <CCol sm="12" class="form-group">
              <label>Pickup City</label>
              <CSelect
                :options="cities"
                :value.sync="city"  
              />
            </CCol>
          </CRow>
          <CRow>
            
          <CCol  sm="12" class="form-group">
            <label>Postcode</label>
            <CInput :value.sync="selectedAddress.postal_code" type="text">
            </CInput>
          </CCol>
        </CRow>
        <CRow>
          <CCol  sm="12" class="form-group">
            <label>Pick Up Date</label>
            <CInput type="date"
            :value.sync="selectedAddress.date"
            >
            </CInput>
          </CCol>
        </CRow>
        <CRow>
          <CCol  sm="12" class="form-group">
            <label>Pick Up Time</label>
            <CInput type="time"
            :value.sync="selectedAddress.time"
            >
            </CInput>
          </CCol>
        </CRow>
    </div>
</CContainer>
        <Footer/>
        
    </div>
</template>

<script>
import Header from '../../containers/Site/Header'
import Footer from '../../containers/Site/Footer'
import axios from 'axios'
import api from '../../router/api'
export default {
    name: "AddOrder",
    components: {
        Header, Footer
    },
    data () {
      return {
        city: {},
        cities: [],
        postcode : "",
        selectedAddress: {
          "street": "",
        "city": "",
        "postal_code": "",
        "date": "",
        "time": ""
        },
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
    type: function(val){
      console.log(this.type);
    },
    city: function(val){
      console.log(val);
      let city = this.cities.filter(function(value) {
        return value.name_en == val;
      });
      this.selectedAddress.city = val;
      this.selectedAddress.postal_code = city[0].postcode;
    }
  },
  computed: {
    // a computed getter
    
  },
  mounted() {

      this.getCities();
  },
  methods: {
    getCities() {
    axios
        .get(api + '/cities')
        .then(response => {
          this.cities = response.data
          let cities = this.cities
          this.cities.forEach(function (element) {
            element.value = element.name_en;
          });
        })
        .catch(error => console.log(error))
    },
    setAddress(val, $event) {
      // console.log(val);
    }
  }
}
</script>