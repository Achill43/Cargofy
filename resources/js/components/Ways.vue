<template>
  <div class="waysDiv">
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
                <td>{{ way.APoint }}-{{ way.BPoint }}</td>
                <td>{{ way.product }}</td>
                <td>{{ way.weight }} т</td>
            </tr>
        </tbody>
    </table>
</div>
</template>
<script>
import axios from 'axios';
  export default {
    props: ['ways'],
    data() {
    return {
      interval: null,
    };
  },
  created() {
  },
  update(){
  },
  mounted () {
    /*
    window.Echo.channel('test')
    .listen('PusherWay', (e)=>{
        console.log("Дані через pusher: "+e);
    });*/
  },
  beforeDestroy () {
  },
  methods: {
    RealTimeWays(){
      
    },
  }
}
</script>