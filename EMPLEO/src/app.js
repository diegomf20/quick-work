import Vue from 'vue'
import swal from 'sweetalert'
import App from './App.vue'
import axios from 'axios';
Vue.use(axios);

Vue.component('empty',require("./component/empty.vue").default);
window.local=localStorage;
window.axios = require('axios');
// console.log(local);

var router = require('./route.js').default;

new Vue({
    el: '#app',
    router,
    render: h => h(App)
})