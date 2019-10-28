<template>
  <div class="modal fade" id="form_users" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de Mediador</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form class="form" method="POST" @submit.prevent="submitUser()">
              <div class="modal-body">
                <div class>
                    <h3 class="mt-0">CJA Seguros</h3>
                    <p class="help-block">Insira os dados pessoais do Mediador abaixo:</p>
                </div>
                <div class="content">
                    <div class="form-group">
                      <input type="hidden" id="id_perfil" name="id_perfil" value="2" />
                    </div>
                    <div class="form-group">
                      <input id="name"
                          type="text"
                          class="form-control is-invalid"
                          name="name"
                          required
                          autocomplete="name"
                          autofocus
                          placeholder="Nome"
                          v-model="getUser.name"
                          />
                    </div>
                    <div class="form-group">
                      <input
                          id="birth"
                          type="date"
                          class="form-control is-invalid"
                          name="birth"
                          required
                          autocomplete="birth"
                          autofocus
                          placeholder="Data de Nascimento"
                          v-model="getUser.dataNascimento"
                          />
                    </div>
                    <div class="form-group">
                      <input
                          id="email"
                          type="email"
                          class="form-control underline-input is-invalid"
                          name="email"
                          required
                          autocomplete="email"
                          placeholder="Email"
                          v-model="getUser.email"
                          />
                    </div>
                    <div class="form-group">
                      <input
                          id="telemovel"
                          type="telemovel"
                          class="form-control underline-input el') is-invalid"
                          name="telemovel"
                          required
                          autocomplete="telemovel"
                          placeholder="Telemovel"
                          v-model="getUser.telemovel"
                          />
                    </div>
                  <div class="form-group" v-if="!is_edit">
                      <label class="col-sm-2 control-label">Perfil</label>
                      <select v-model="user.perfilId" tabindex="3" class="form-control chosen-select" style="width: 240px;">
                        <option v-for="perfil in perfils" :key="perfil.perfilId">{{perfil.perfil}}</option>
                      </select>
                  </div>
                    <div class="form-group" v-if="!is_edit">
                      <input
                          id="password"
                          placeholder="Password"
                          type="password"
                          class="form-control d') is-invalid"
                          name="password"
                          required
                          autocomplete="new-password"
                          v-model="getUser.name"
                          />
                    </div>
                    <div class="form-group" v-if="!is_edit">
                      <input
                          id="password-confirm"
                          placeholder="Confirmar Password"
                          type="password"
                          class="form-control"
                          name="password_confirmation"
                          required
                          autocomplete="new-password"
                          v-model="getUser.name"
                          />
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="footer text-center mb-20">
                    <button type="submit" class="btn btn-success btn-raised" v-if="is_edit">Alterar</button>
                    <button type="submit" class="btn btn-info btn-raised" v-else>Registrar</button>
                </div>
              </div>
          </form>
        </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["user_edit", "is_edit"],
  data() {
	  return{
      user:{
        username: "",
        name: "",
        email: "",
        dataNascimento: "",
        perfilId: "",
        telemovel: "",
      },
      perfils:[]
	  }
  },
  mounted() {
    this.getPerfils();
  },
  methods:{
    getPerfils(){
      axios.post('/api/getPerfils')
        .then(response => {
            this.perfils = response.data;
            console.log(this.perfils);
        })
        .catch(function (error) {
            console.log(error);
        });
    },
    submitUser(){      
      if(this.is_edit) this.updateUser(this.user);    
      else this.createUser(this.user);
    
    },
	  updateUser(){
      axios.post('/api/updateMediador', {'user':this.user})
        .then(response => {
            this.user = response.data;
            $('#form_users').modal('hide');
        })
        .catch(function (error) {
            console.log(error);
        });
    },
    createUser(){
      this.user.perfilId=2;
      axios.post('/api/createMediador', {'user':this.user})
        .then(response => {
            this.user = response.data;
        })
        .catch(function (error) {
            console.log(error);
        });
    }
  },
  computed:{
    getUser(){
      if(this.is_edit) {
        this.user = this.user_edit;
      }else{
        this.user = {
          username: "",
          name: "",
          email: "",
          dataNascimento: "",
          perfilId: "",
          telemovel: "",
        };
      }
      return this.user;
    }
  }
  
};
</script>