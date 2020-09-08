import api from './api'
import axios from 'axios'
import ls from 'local-storage'
let token = ls.get('token')
let headers = {
    Accept: 'application/json',
    Authorization: 'Bearer ' +token
  }

let current_user = axios
  .get(api + '/user', {
      headers: headers
  })
  .then(response => {
      console.log(response.data);
  })
  .catch(error => console.log(error))

  export default current_user;
