<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card align-content-center">
                <div class="card-body">
                    <div class="col-12 text-center">
                        <h1><strong>¡Alto!</strong></h1>
                        <img src="/img/hand_stop.gif" class="mb-3" alt="warning image">
                        <div class="alert alert-warning" role="alert">
                            <h3 class="my-5">{{this.message}}</h3>
                        </div>
                        <span class="text-center">
                     <a :href="this.url" class="btn btn-primary btn-lg text-white">{{this.btn}}</a>
                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AccessDenied",
        props: ['source'],
        data() {
            return {
                message: "",
                url: '',
                btn: "",
            }
        },
        methods: {},
        mounted() {
            if (this.source === 'plan_status') {
                this.message = "El status de su Plan de Trabajo no le permite acceder a esta página aún.";
                this.url = '/sise/plan';
                this.btn = "Ver Plan";
            }else if (this.source === 'CE-9'){
              this.message = "Usted no ha creado una CE-9."
                this.url = "/sise/plan"
                this.btn = "Crear CE-9"
            }else if (this.source === 'notSupervisor'){
              this.message = "Usted no tiene permiso para ver la información de otros usuarios."
                this.url = "/sise/plan"
                this.btn = "Ver mi plan"
            } else {
                this.message = "Usted no tiene permiso para acceder a esta página.";
                this.url = '/home/';
                this.btn = "Menú Principal";
            }
        }
    }
</script>
