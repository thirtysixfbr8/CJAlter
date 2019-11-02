<template>
    <div
      class="modal fade"
      id="form_users"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de Mediador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
		  <form class="form" method="POST" @submit.prevent="updateUser()">
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
                  <input
                    id="name"
                    type="text"
                    class="form-control is-invalid"
                    name="name"
                    required
                    autocomplete="name"
                    autofocus
                    placeholder="Nome"
					v-model="user_edit.name"
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
                  />
                </div>

                <div class="form-group" v-if="edit == false">
                  <input
                    id="password"
                    placeholder="Password"
                    type="password"
                    class="form-control d') is-invalid"
                    name="password"
                    required
                    autocomplete="new-password"
                  />
                </div>
                <div class="form-group" v-if="edit == false">
                  <input
                    id="password-confirm"
                    placeholder="Confirmar Password"
                    type="password"
                    class="form-control"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                  />
                </div>
              </div>
            
          </div>
          <div class="modal-footer">
            <div class="footer text-center mb-20">
              <button type="submit" class="btn btn-success btn-raised" v-if="edit">Alterar</button>
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
  props: ["user_edit", "edit"],
  data() {
	  return{
		updateUser:{
			name:this.user_edit.name,
			email:this.user_edit.email,
			telemovel:this.user_edit.telemovel
		}
	  }
  },
  mounted() {
    //this.userData = this.userEdit;
   console.log(this.name)
  },
  methods:{
	  updateUser(){
		
/*const params = {
			name:this.userEdit.name,
			telemovel:this.userEdit.telemovel,
			email:this.userEdit.email	
		};
		/*axios.patch(`/backoffice/mediador/update/${this.userEdit.id}`,params)
			 .then((response)=>{
				console.log(this.userEdit)
				this.edit = false;
				const updateUser = response.data;	
			 });*/
            
	  } 
  }
  
};
</script>