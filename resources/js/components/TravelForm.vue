<template>
  <div
    class="modal fade"
    id="form_travel"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Seguro de Viagens</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form" method="POST" @submit.prevent>
          <div class="modal-body">
            <div class>
              <h3 class="mt-0">CJA Seguros</h3>
              <p class="help-block">Insira os Dados Relativos à Sua Viagem:</p>
            </div>
            <div class="content">
              <div class="form-group">
                <input type="hidden" id="id_perfil" name="id_perfil" value="2" />
              </div>
              <!--div class="form-group">
                <input
                  id="bi"
                  type="text"
                  class="form-control is-invalid"
                  name="bi"
                  required
                  autocomplete="name"
                  autofocus
                  placeholder="Bilhete de Identidade"
                />
              </div-->
              <div class="btn-group btn-group-toggle btn-group-raised" data-toogle="buttons">
                <p>Plano Pretendido:</p>
                <label class="btn btn-secondary active"> 
                  <input v-model="travelData.plan" value="Europa" type="radio" name="plan" id="plan1" autocomplete="off" checked>Europa
                </label>
                <br>
                <label class="btn btn-secondary"> 
                  <input  v-model="travelData.plan" value="Mundial" type="radio" name="plan" id="plan2" autocomplete="off">Mundial
                </label>
                <br>
                <label class="btn btn-secondary"> 
                  <input  v-model="travelData.plan" type="radio" value="Medica" name="plan" id="plan3" autocomplete="off">Protecção Médica
                </label>
                <!--select required>
                  <option selected>País de Destino</option>
                  <option v-for="pais in listaPaises" :value="pais.nome_pais" :key="pais.sigla">{{pais.nome_pais}}</option>
                </select-->
              </div>
              <div class="form-group">
                <label for="from">Insira o Período de Sua Viagem:</label>
                <input
                  id="from"
                  type="date"
                  class="form-control is-invalid"
                  name="from"
                  required
                  autocomplete="from"
                  autofocus
                  placeholder="De"
                  v-model="travelData.from"
                />
                <input
                  id="to"
                  type="date"
                  class="form-control is-invalid"
                  name="to"
                  required
                  autocomplete="to"
                  autofocus
                  placeholder="A"
                  v-model="travelData.to"
                />
              </div>
              <div class="form-group">
                <input  v-model="travelData.people" type="number" id="people" name="people" placeholder="Nº de Pessoas"  class="form-control is-invalid" required>
              </div>
              <!--div class="form-group">
                <label for="comprovativo" class="btn btn-info">Comprovativo de Pagamento</label>
                <input
                  id="comprovativo"
                  type="file"
                  name="comprovativo"
                  required
                >
              </div-->
            </div>
          </div>
           
          <div class="modal-footer">
            <div id="calculated" class="footer text-align-left mb-20" v-if="calculate">
              <div class="row d-inline-flex position-absolute">
                <p class="text-center">Selecione o Plano:</p>
                <div class="col-4">
                   <p>5.000.000,00kz</p>
                  <button class="btn btn-success btn-raised" @click="callTransaction(5,prices.cinco)">{{prices.cinco}} Kz</button>
                </div>
                <div class="col-4">
                     <p>10.000.000,00kz</p>
                  <button class="btn btn-success btn-raised" @click="callTransaction(10,prices.dez)">{{prices.dez}} Kz</button>
                </div>
                <div class="col-4">
                    <p>15.000.000,00kz</p>
                  <button class="btn btn-success btn-raised" @click="callTransaction(15,prices.quinze)">{{prices.quinze}} Kz</button>
                </div>
              </div>
              <button class="btn btn-warning btn-raised text-center" @click="clearInsurance()">Limpar</button>
            </div>
            <div id="calculate" @click="calculateInsurance()" class="footer text-center mb-20" v-else>
              <button  class="btn btn-success btn-raised">Simular Seguro</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <transaction-form :userss="users" :travel-data="travelData" :choosed='choosed'></transaction-form>
  </div>
</template>
<script>
import json from '../plans.json'
export default {
  props:["users"],
  data() {
	  return{
      planos: json,
      calculate: false,
      travelData:{
            plan: null,
            from: "",
            to:"",
            people:0
      },
      prices:{
          cinco:null,
          dez:null,
          quinze:null
      },
      choosed:{
        plan:0,
        value:0
      }
		}
  },
  mounted() {
    //this.userData = this.userEdit;
   console.log("TravelForm mounted");
  },
  methods:{
	   calculateInsurance(){
        this.calculate = true;
        this.generatePlans();
     },
     clearInsurance(){
       this.calculate = false;
     },
     generatePlans(){
        var plan = this.planos[0]["Planos"][this.travelData.plan];
        var from = new Date(this.travelData.from);
        var to = new Date(this.travelData.to);
        var difference = Math.abs(to.getTime() - from.getTime());
        var days = Math.ceil(difference/(1000 * 60 * 60 * 24));
        var people = this.travelData.people;
        var index;

        if(days >= 1 && days <= 8){
          index = 0;
        }else if(days >= 9 && days <=10){
          index = 1;
        }else if(days >= 11 && days <=15){
          index = 2;
        }else if(days >= 16 && days <=21){
          index = 3;
        }else if(days >= 22 && days <=30){
          index = 4;
        }else if(days >= 31 && days <=60){
          index = 5;
        }else if(days >= 61 && days <=90){
          index = 6;
        }else{
          index = null;
        }

        this.prices.cinco = (plan["Cinco"][index] * people).toFixed(2); 
        this.prices.dez = (plan["Dez"][index] * people).toFixed(2); 
        this.prices.quinze = (plan["Quinze"][index] * people).toFixed(2); 

        console.log(this.prices)

     },

     callTransaction(plan, value){
       $("#form_travel").modal("toggle");
       $("#form_transaction").modal("show").appendTo('body');
       this.choosed.plan = plan;
       this.choosed.value = value;
     },
  }
  
};
</script>