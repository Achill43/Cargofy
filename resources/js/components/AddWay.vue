<template>
  <div>
    <button type="button" class="btn btn-primary" @click="openForm()">Додати</button>
      <div v-if="showForm">
            <form>
                <div class="form-group">
                    <label>Точка відправлення</label>
                    <input type="text" class="form-control" v-model="newWay.APoint">
                    <div class="invalideValidation">{{errors.get('APoint')}}</div>
                </div>
                <div class="form-group">
                    <label>Точка призначення</label>
                    <input type="text" class="form-control" v-model="newWay.BPoint">
                    <div class="invalideValidation">{{errors.get('BPoint')}}</div>
                </div>
                <div class="form-group">
                    <label>Вантаж</label>
                    <input type="text" class="form-control" v-model="newWay.product">
                    <div class="invalideValidation">{{errors.get('product')}}</div>
                </div>
                <div class="form-group">
                    <label>Вага</label>
                    <input type="number" class="form-control" v-model="newWay.weight">
                    <div class="invalideValidation">{{errors.get('weight')}}</div>
                </div>
                <button type="button" class="btn btn-primary" @click="addNewWay()">Створити</button>
            </form>
            <div class="invalideValidation"></div>
      </div>
</div>
</template>
<script>
import axios from 'axios';

class Errors{
    constructor(){
        this.errorsList={};
    }
    get(field){
        if(this.errorsList[field]){
            return this.errorsList[field][0]
        }
    }
    record(errors){
        this.errorsList=errors;
    }
}

export default{
    props: ['ways'],
    data(){
        return{
            showForm: false,
            errors: new Errors(),
            newWay: {
                APoint: null,
                BPoint: null,
                product: null,
                weight: 0
            },
        }
    },
    methods:{
        openForm(){
            this.showForm=!this.showForm
        },
        addNewWay(){
                axios.post('/addWay',{
                    APoint: this.newWay.APoint,
                    BPoint: this.newWay.BPoint,
                    product: this.newWay.product,
                    weight: this.newWay.weight
                }).then(response => {
                    this.showForm=!this.showForm
                    var result=response.data
                    console.log(result)
                    if(result.status=='success'){
                        var createWay=result.newWay
                        this.$emit('newway', createWay)
                    }
                    if(result.status=='validation'){
                        window.alert('Введені некоректні дані')
                    }
                })
                .catch(error => {
                    this.errors.record(error.response.data.errors)
                    console.log('Server error: '+error.response.data.message+";")

                    console.log('Detail error: '+error.message)
                })
        }
    }
}
</script>
<style>
.invalideValidation{
    color: red;
}
</style>