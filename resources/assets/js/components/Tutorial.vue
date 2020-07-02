<template>
    <div class="container">
        <h1 class="page-header">
            Tutoriales
        </h1>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12">
                                <div class="selectgroup pt-2">
                                    <label class="selectgroup-item">
                                        <input type="radio" class="selectgroup-input" value="1"
                                               v-model="showTutorial"
                                               v-on:change="changeTutorialView(1)">
                                        <span class="selectgroup-button">
                                                                    Portal-Sea
                                                                </span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" class="selectgroup-input" value="2"
                                               v-model="showTutorial"
                                               v-on:change="changeTutorialView(2)">
                                        <span class="selectgroup-button">
                                                                    SISE
                                                                </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-5">
                                            <h3 v-if="showTutorial === 1" class="page-title">Portal-Sea</h3>
                                            <h3 v-else-if="showTutorial === 2" class="page-title">SISE</h3>
                                        </div>
                                        <div class="col-7">
                                            <div class="selectgroup pt-2">
                                                <label class="selectgroup-item">
                                                    <input type="radio" class="selectgroup-input" value="1"
                                                           v-model="showSection"
                                                           v-on:change="changeSectionView(1)">
                                                    <span class="selectgroup-button">
                                                                    Planes
                                                                </span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" class="selectgroup-input" value="2"
                                                           v-model="showSection"
                                                           v-on:change="changeSectionView(2)">
                                                    <span class="selectgroup-button">
                                                                    Informes
                                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mt-3">
                                            <div class="col-1"></div>
                                            <div class="col-10">
                                                <div class="container form-control align-content-center m-3 p-3">
                                                    <h4>FreeCodeGram</h4>
                                                    <!--                                                                <video src=""></video>-->
                                                    <iframe width="560" height="315" style="display: block;
                                                                        margin: 0 auto;"
                                                            src="https://www.youtube.com/embed/ImtZ5yENzgE"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>
                                                    <div class="container form-control m-2">
                                                        <!--                                                                    <p>Description</p> -->
                                                        <p>Learn Laravel 5.8 by creating an Instagram clone
                                                            in this full tutorial course for beginners.
                                                            Laravel is a free, open-source PHP web framework
                                                            used for creating web applications. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"></div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-1"></div>
                                            <div class="col-10">
                                                <div class="container form-control align-content-center m-3 p-3">
                                                    <h4>FreeCodeGram</h4>
                                                    <!--                                                                <video src=""></video>-->
                                                    <iframe width="560" height="315" style="display: block;
                                                                        margin: 0 auto;"
                                                            src="https://www.youtube.com/embed/ImtZ5yENzgE"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>
                                                    <div class="container form-control m-2">
                                                        <!--                                                                    <p>Description</p> -->
                                                        <p>Learn Laravel 5.8 by creating an Instagram clone
                                                            in this full tutorial course for beginners.
                                                            Laravel is a free, open-source PHP web framework
                                                            used for creating web applications. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"></div>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <!--<div class="row">
                                            <div class="col-9">
                                                <pagination :data="this.bucket.userPlans"
                                                            @pagination-change-page="getUserPlanResults"></pagination>
                                            </div>
                                            <div class="col-3 pt-2">
                                                <span>Mostrando records del <strong>{{ this.bucket.userPlans.from }}</strong>  al <strong>{{this.bucket.userPlans.to }}</strong>  de <strong>{{this.bucket.userPlans.total}}.</strong></span>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Tutorial",
        data() {
            return {
                showTutorial: 2,
                showSection: 1,
            }
        },
        methods: {
            changeTutorialView(value) {
                this.showTutorial = value;
            },
            changeSectionView(value) {
                this.showSection = value
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
