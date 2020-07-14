<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="/img/hand_stop.gif" class="mb-3" alt="warning image">
                <div class="text-center">
                    <h3 class="my-5">Usted no tiene permiso para ver esta página.</h3>
                    <a :href="/home/" class="btn btn-primary btn-lg text-white"> Menú Principal</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        }
    }
</script>
