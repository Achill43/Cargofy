<template>
  <div class="waysDiv">
    <h2>Біржа вантажів</h2>
    <hr>
    <addWay v-bind:ways="ways" @newway="updateWays"></addWay>
    <br>
    <button type="button" class="btn btn-primary" @click="GetWays()">Оновити дані</button>
    <table class="table table-striped table-hover ">
        <thead>
             <th>Дата</th>
             <th>Маршрут</th>
             <th>Вантаж</th>
             <th>Вага</th>
        </thead>
        <tbody>
            <tr v-for="(way, id) in ways" v-bind:key="id">
                <td>{{ way.created_at }}</td>
                <td>{{ way.points }}</td>
                <td>{{ way.name }}</td>
                <td>{{ way.weight }} т</td>
            </tr>
        </tbody>
    </table>
</div>
</template>
<script>
import axios from 'axios'
import Vue from 'vue'
import AddWay from '../components/AddWay'

Vue.component('addway', AddWay)

  export default {
    data() {
    return {
      ways: null,
    };
  },
  created() {
    this.GetWays();
  },
  methods: {
    GetWays() {
      axios
        .get('/api/load')
        .then(response => {
            this.ways = response.data.data;            
        }).catch(error => {
            console.log("Винекла помилка: "+error.response.data.message+"; "+error.message)
        });
    },
    updateWays: function(newWay){
      this.ways.unshift(newWay)
    }
  },
  components: {AddWay},
}
</script>