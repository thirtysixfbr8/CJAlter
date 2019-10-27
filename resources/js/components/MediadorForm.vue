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
                          v-model="user.name"
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
                          v-model="user.dataNascimento"
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
                          v-model="user.email"
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
                          v-model="user.telemovel"
                          />
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
                          v-model="user.name"
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
                          v-model="user.name"
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
        id: this.user_edit.id,
        username: this.user_edit.username,
        name: this.user_edit.name,
        email: this.user_edit.email,
        dataNascimento: this.user_edit.dataNascimento,
        perfilId: this.user_edit.perfilId,
        telemovel: this.user_edit.telemovel,
        updated_at: this.user_edit.updated_at,
        userable_id: this.user_edit.userable_id,
        userable_type: this.user_edit.userable_type,
      }
	  }
  },
  mounted() {
   console.log(this.user)
  },
  methods:{
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
  }
  
};
</script>