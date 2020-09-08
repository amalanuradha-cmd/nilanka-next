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
    <div>
      <hr/>
    </div>
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
    <div>
      <hr/>
    </div>
    <div>
      <CRow>
            <CCol sm="12" class="form-group">
              <CInput
              :value.sync="selectedAddress.street"
                label="Recipient Mobile Phone"
                placeholder="Contact No"
              />
            </CCol>
          </CRow>
        
          <CRow>
            <CCol sm="12" class="form-group">
              <CInput
              :value.sync="selectedAddress.street"
                label="Recipient Name"
                placeholder="Name of the Recipient"
              />
            </CCol>
          </CRow>
          <CRow>
            <CCol sm="12" class="form-group">
              <CInput
              :value.sync="selectedAddress.street"
                label="Dilivery Street"
                placeholder="Pickup Street"
              />
            </CCol>
          </CRow>
        <CRow>
            <CCol sm="12" class="form-group">
              <label>Delivery City</label>
              <CSelect
                :options="cities"
                :value.sync="deliverCity"  
              />
            </CCol>
          </CRow>
          <CRow>
            
          <CCol  sm="12" class="form-group">
            <label>Delivery Postcode</label>
            <CInput :value.sync="deliveryAddress.deliver_zip" type="text">
            </CInput>
          </CCol>
        </CRow>
        <div>
          <hr/>
        </div>
        <CRow>
            
          <CCol  sm="12" class="form-group">
            <div class="d-flex flex-row">
              <div ><label>Item Description</label>
                  <CInput :value.sync="item.item_description" type="text">
                  </CInput>
              </div>
              <div >
                <label>Quantity</label>
            <CInput :value.sync="item.quantity" type="text">
            </CInput>
              </div>
              <div >
          <CButton
            
            color="primary"
            size="lg"
            class="m-4"
            type="button"
            v-on:click="addItem()"
          >
          Add
          </CButton>
            
              </div>
            </div>
          </CCol>
        </CRow>
        <CRow v-if="itemsTable.length > 0">
          <CCol sm="12">
            <CDataTable
              :items="itemsTable"
              :fields="fields"
              column-filter
              table-filter
              items-per-page-select
              :items-per-page="5"
              hover
              sorter
              pagination
              
            >
              <template #status="{item}">
                <td>
                  <CBadge :color="getBadge(item.status)">
                    {{item.status}}
                  </CBadge>
                </td>
              </template>
              <template #show_details="{item, index}">
                <td class="py-2">
                  <CButton
                    color="danger"
                    
                    square
                    size="sm"
                    @click="deleteItem(item, index)"
                  >
                    Delete
                  </CButton>
                </td>
              </template>
              <template #details="{item}">
                <CCollapse :show="Boolean(item._toggled)" :duration="collapseDuration">
                  <CCardBody>
                    <CMedia :aside-image-props="{ height: 102 }">
                      <h4>
                        {{item.username}}
                      </h4>
                      <p class="text-muted">User since: {{item.registered}}</p>
                      <CButton size="sm" color="info" class="">
                        User Settings
                      </CButton>
                      <CButton size="sm" color="danger" class="ml-1">
                        Delete
                      </CButton>
                    </CMedia>
                  </CCardBody>
                </CCollapse>
              </template>
            </CDataTable>
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

const fields = [
  { key: 'item_description', _style:'min-width:200px' },
  
  { key: 'quantity', _style:'min-width:100px;' },
  
 
  { 
    key: 'show_details', 
    label: '', 
    _style: 'width:1%', 
    sorter: false, 
    filter: false
  }
]
export default {
    name: "AddOrder",
    components: {
        Header, Footer
    },
    data () {
      return {
        fields,
        
      details: [],
      itemsTable: [],
      collapseDuration: 0,
        order: {
          items: []
        },

        item: {
          'item_description': "",
          'quantity': "",
          'order_id': "",
        },
        items : [],
        
        deliverCity: "",
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
        deliveryAddress: {
          "recipient_mobile": "",
        "deliver_zip": "",
        "recipient_name": "",
        "delivery_street": "",
        "delivery_city": ""
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
    },
    deliverCity: function(val){
      console.log(val);
      let city = this.cities.filter(function(value) {
        return value.name_en == val;
      });
      this.deliveryAddress.delivery_city = val;
      this.deliveryAddress.deliver_zip = city[0].postcode;
    }
  },
  computed: {
    // a computed getter
    
  },
  mounted() {

      this.getCities();
  },
  methods: {
    deleteItem(item, index) {
      console.log("delete", index);
      this.itemsTable.splice(index, 1);
    },
    getBadge (status) {
      switch (status) {
        case 'Active': return 'success'
        case 'Inactive': return 'secondary'
        case 'Pending': return 'warning'
        case 'Banned': return 'danger'
        default: 'primary'
      }
    },
    toggleDetails (item) {
      this.$set(this.itemsTable[item.id], '_toggled', !item._toggled)
      this.collapseDuration = 300
      this.$nextTick(() => { this.collapseDuration = 0})
    },
    addItem() {
      
      this.itemsTable.push(this.item);
      this.itemsTable= this.itemsTable.map((item, id) => { return {...item, id}}),
      console.log(this.itemsTable);
    }
    ,
    getCities() {
    axios
        .get(api + '/cities')
        .then(response => {
          this.cities = response.data
          let cities = this.cities
          this.selectedAddress.postal_code = cities[0].postcode
          this.deliveryAddress.deliver_zip = cities[0].postcode
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