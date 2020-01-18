/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'

import Ways from './components/Ways'
import AddWay from './components/AddWay'

Vue.component('addway', AddWay)

Vue.component('ways', Ways)
var app = new Vue({
  el: '#app',
  data(){
    return{
      ways: null,
    }
  },
  created(){
    this.GetWays();
  },
  update(){
  },
  mounted () {
    /*
    window.Echo.channel('test')
    .listen('PusherWay', (e)=>{
        console.log("Дані через pusher: "+e);
        GetWays()
    });
    */
  },
  methods: {
    GetWays() {
      axios
        .get('/ways')
        .then(response => {
            this.ways = response.data;
        }).catch(error => {
            console.log("Винекла помилка: "+error.response.data.message+"; "+error.message)
        });
    },
    updateWays: function(newWay){
      this.ways.unshift(newWay)
    }
  },
  components: {Ways, AddWay},
});