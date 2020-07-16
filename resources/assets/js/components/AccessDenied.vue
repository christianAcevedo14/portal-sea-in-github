<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>¡Alto!</h1>
                <img src="/img/hand_stop.gif" class="mb-3" alt="warning image">
                <div class="text-center">
                    <h3 class="my-5">{{this.message}}</h3>
                    <a :href="this.url" class="btn btn-primary btn-lg text-white">{{this.btn}}</a>
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
            } else {
                this.message = "Usted no tiene permiso para acceder a esta página.";
                this.url = '/home/';
                this.btn = "Menú Principal";
            }
        }
    }
</script>
