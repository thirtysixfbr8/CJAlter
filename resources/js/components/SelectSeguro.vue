<template>
  <div
    class="modal fade"
    id="select_seguro"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Seguros CJA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <button class="btn btn-info" href="#">Saude</button>
          <button class="btn btn-info" href="#">Automóvel</button>
          <button class="btn btn-info" href="#">Habitação</button>
          <button class="btn btn-info" @click="chamaModalidade('travel')" href="#">Viagem</button>
        </div>
        <div class="modal-footer"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return { };
  },
  mounted() {
    console.log("Select Mounted");
  },
  methods: {
      chamaModalidade(modalidade){
        modalidade = "#form_"+modalidade;
        console.log(modalidade)
        $(modalidade)
        .modal("show");
      }
  }
};
</script>