/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'

import Ways from './components/Ways'

Vue.component('ways', Ways)

var app = new Vue({
  el: '#app',
  components: {Ways},
});