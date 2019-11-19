<template>
    <div>
        <div
            class="modal fade"
            id="form_transaction"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Seguro de Viagens
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form" method="POST" @submit.prevent>
                        <div class="modal-body">
                            <div class="">
                                <h3 class="mt-0">CJA Seguros</h3>
                                <p class="help-block">
                                    Dados de Comprovação de Compra:
                                </p>
                            </div>
                            <div class="form-group">
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
                            </div>
                            <div class="btn btn-info btn raised">
                                Comprovativo de Pagamento
                                <input
                                    class=""
                                    id="comprovativo"
                                    type="file"
                                    name="comprovativo"
                                />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div
                                id="calculated"
                                class="footer text-align-left mb-20"
                            >
                                <button
                                    class="btn btn-success btn-raised text-center"
                                    @click="confirmationT()"
                                >
                                    Confirmar
                                </button>
                                <button
                                    class="btn btn-danger btn-raised text-center"
                                >
                                    Anular
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import jsPDF from 'jspdf';
export default {
    props: ["userss","travelData","prices","choosed"],
    data() {
        return {
            confirmedData: false
        };
    },
    mounted() {
        console.log("Transaction Form Mounted.");
    },
    methods: {
        confirmationT() {
            $("#form_transaction").modal("toggle");
            $("#select_seguro").modal("toggle");
            this.confirmedData = true;
            this.createRequest();
            this.$emit("transactionConfirmed");
            this.generateInvoice();
        },
        createRequest() {
            axios
                .post("/api/storeSolicitacoes", { clienteId: this.userss.id })
                .then(response => {
                    console.log(response.data);
                    //this.user = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
        generateInvoice(){
            console.log(this.userss, this.travelData, this.choosed);
            var doc = new jsPDF();
            doc.text(50, 20, 'Nossa Seguros');
            doc.text(50, 40, 'Apólice de Seguros - Modalidade: Viagem');
            doc.text(30, 70, 'Dados de Cliente:');
            doc.text(20, 80, 'Nome:'+this.userss.name);
            doc.text(20, 100, 'Email:'+this.userss.email);
            doc.text(20,120, 'Telemovel:'+this.userss.telemovel);
            doc.text(30, 150, 'Dados da Viagem:')
            doc.text(20,180, 'Plano Escolhido:'+this.travelData.plan+' - '+this.choosed.plan);
            doc.text(20,200, 'Periodo de Viagem:'+this.travelData.from+" - "+this.travelData.to);
            doc.text(20,220, 'Pessoas:'+this.travelData.people);
            doc.text(50,250, 'VALOR A PAGAR:'+this.choosed.value);


            // Output as Data URI
            var string = doc.output('datauristring');
            var iframe = "<iframe width='100%' height='100%' src='" + string + "'></iframe>"
            var x = window.open();
            x.document.open();
            x.document.write(iframe);
            x.document.close();
        }
    }
};
</script>
