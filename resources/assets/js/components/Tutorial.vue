<template>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h1 class="page-header">
                    Tutoriales
                </h1>
            </div>
            <div class="col-9">
                <div v-if="loggedUser.title_id === 1 && !editMode" class="form-group">
                    <button type="button" class="btn btn-primary mt-5 float-right" @click="editPage(true)">Editar Página
                        <!--                        <span class="form-help ml-3"-->
                        <!--                              v-tooltip:top="tooltipText('Acceso')">?</span>-->
                    </button>
                </div>
                <div v-else-if="loggedUser.title_id === 1 && editMode" class="form-group">
                    <button type="button" class="btn btn-primary mt-5 float-right" @click="editPage(false)">Finalizar
                        <!--                        <span class="form-help ml-3"-->
                        <!--                              v-tooltip:top="tooltipText('Acceso')">?</span>-->
                    </button>
                </div>
            </div>
        </div>
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
                                             <i v-if="editMode" class="fe fe-edit" @click="editApp()"></i>
                                                                </span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" class="selectgroup-input" value="2"
                                               v-model="showTutorial"
                                               v-on:change="changeTutorialView(2)">
                                        <span class="selectgroup-button">
                                                                    SISE
                                            <i v-if="editMode" class="fe fe-edit" @click="editApp()"></i>
                                                                </span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <button v-if="editMode" class="btn btn-secondary" @click="addApp()">
                                            Añadir
                                            <i class="fe fe-plus-circle"></i></button>
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
                                            <label class="selectgroup pt-2">
                                                <label class="selectgroup-item">
                                                    <input type="radio" class="selectgroup-input" value="1"
                                                           v-model="showSection"
                                                           v-on:change="changeSectionView(1)">
                                                    <span class="selectgroup-button">
                                                                    Planes
                                                          <i v-if="editMode" class="fe fe-edit"
                                                             @click="editSection()"></i>
                                                                </span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" class="selectgroup-input" value="2"
                                                           v-model="showSection"
                                                           v-on:change="changeSectionView(2)">
                                                    <span class="selectgroup-button">
                                                                    Informes
                                                          <i v-if="editMode" class="fe fe-edit"
                                                             @click="editSection()"></i>
                                                                </span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <button v-if="editMode" class="btn btn-secondary"
                                                            @click="addSection()"> Añadir
                                                        <i class="fe fe-plus-circle"></i></button>
                                                </label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div v-if="editMode" class="row mt-3">
                                            <div class="col-1"></div>
                                            <div class="col-10">
                                                <button class="btn btn-secondary float-right" @click="addVideo()">
                                                    Añadir Video
                                                    <i class="fe fe-plus-circle"></i></button>
                                            </div>
                                            <div class="col-1"></div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-1"></div>
                                            <div class="col-10">
                                                <div class="container form-control align-content-center m-3 p-3">
                                                    <div class="row card-header m-3">
                                                        <div class="col-11">
                                                            <h4 class="mb-3">Cómo Enmendar Planes de Trabajo</h4>
                                                        </div>
                                                        <div class="col-1">
                                                            <button v-if="editMode"
                                                                    class="btn btn-secondary float-right"
                                                                    @click="editVideo()"> Editar <i
                                                                    class="fe fe-edit"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!--                                                                <video src=""></video>-->
                                                    <span>
                                                       <iframe width="560" height="315"
                                                               src="https://www.youtube.com/embed/CQx3EsortEc"
                                                               frameborder="0"
                                                               allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                               allowfullscreen></iframe>
                                                    </span>

                                                    <div class="container form-control mt-3">
                                                        <!--                                                                    <p>Description</p> -->
                                                        <p>Video demostrativo de cómo editar los planes de trabajo (CE-9).</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"></div>
                                        </div>

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
        <!-- Modal -->
        <div class="modal fade" id="tutorialModal" tabindex="-1" role="dialog" aria-labelledby="tutorialModal"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-show="!editItem">Añadir
                            <span v-if="isApp">Aplicación</span>
                            <span v-if="isSection">Sección</span>
                            <span v-if="isVideo">Video</span>
                        </h5>
                        <h5 class="modal-title" v-show="editItem">Editar
                            <span v-if="isApp">Aplicación</span>
                            <span v-if="isSection">Sección</span>
                            <span v-if="isVideo">Video</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="closeModal">
                        </button>
                    </div>
                    <form @submit.prevent="editMode ? updateAudience() : createAudience()">
                        <div class="modal-body">
                            <fieldset class="form-fieldset">
                                <div v-if="isApp || isSection " class="form-group">
                                    <label class="form-label">Nombre<span class="form-required">*</span></label>
                                    <input v-model="form.name" type="text" name="name" class="form-control"
                                           :class="{ 'is-invalid': form.errors.has('name') }">
                                    <has-error :form="form" field="code"></has-error>
                                </div>
                                <div v-if="isSection || isVideo" class="form-group">
                                    <label class="form-label">Aplicación<span class="form-required">*</span></label>
                                    <select v-model="form.app" type="text" name="app"
                                            class="form-control"
                                            :class="{ 'is-invalid': form.errors.has('app') }">
                                        <option></option>
                                    </select>
                                    <has-error :form="form" field="app"></has-error>
                                </div>
                                <div v-if="isVideo" class="form-group">
                                    <label class="form-label">Sección<span class="form-required">*</span></label>
                                    <select v-model="form.section" type="text" name="section"
                                            class="form-control"
                                            :class="{ 'is-invalid': form.errors.has('section') }">
                                        <option></option>
                                    </select>
                                    <has-error :form="form" field="section"></has-error>
                                </div>
                                <div v-if="isVideo" class="form-group">
                                    <label class="form-label">Título<span class="form-required">*</span></label>
                                    <input v-model="form.title" type="text" name="title" class="form-control"
                                           :class="{ 'is-invalid': form.errors.has('title') }">
                                    <has-error :form="form" field="title"></has-error>
                                </div>
                                <div v-if="isVideo" class="form-group">
                                    <label class="form-label">Embed<span class="form-required">*</span></label>
                                    <input v-model="form.url" type="text" name="embed" class="form-control"
                                           :class="{ 'is-invalid': form.errors.has('embed') }">
                                    <has-error :form="form" field="embed"></has-error>
                                </div>
                                <div v-if="isVideo" class="form-group">
                                    <label class="form-label">Descripción<span class="form-required">*</span></label>
                                    <input v-model="form.description" type="text" name="description"
                                           class="form-control"
                                           :class="{ 'is-invalid': form.errors.has('description') }">
                                    <has-error :form="form" field="description"></has-error>
                                </div>
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <button v-show="editItem" class="btn btn-danger float-right" @click="deleteItem()">Borrar <i
                                    class="fe fe-trash"></i></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="closeModal()">
                                Cancelar
                            </button>
                            <button v-show="editItem" type="submit" class="btn btn-success">Actualizar</button>
                            <button v-show="!editItem" type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
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
                loggedUser: '',
                editMode: false,
                editItem: false,
                isApp: false,
                isSection: false,
                isVideo: false,
                showTutorial: 2,
                showSection: 1,
                form: new Form({
                    id: '',
                    item: [],
                }),
            }
        },
        methods: {
            addApp() {
                this.editItem = false;
                this.isApp = true;
                this.form.item.push({
                    type: 'app',
                    name: '',
                });
                $('#tutorialModal').modal('show');
            },
            editApp() {
                this.editItem = true;
                this.isApp = true;
                $('#tutorialModal').modal('show');
            },
            addSection() {
                this.editItem = false;
                this.isSection = true;
                this.form.item.push({
                    type: 'section',
                    name: '',
                    app: '',
                });
                $('#tutorialModal').modal('show');
            },
            editSection() {
                this.editItem = true;
                this.isSection = true;
                $('#tutorialModal').modal('show');
            },
            addVideo() {
                this.editItem = false;
                this.isVideo = true;
                this.form.item.push({
                    type: 'video',
                    app: '',
                    section: '',
                    title: '',
                    embed: '',
                    description: '',
                });
                $('#tutorialModal').modal('show');
            },
            editVideo() {
                this.editItem = true;
                this.isVideo = true;
                $('#tutorialModal').modal('show');
            },

            editPage(boolean) {
                this.editMode = boolean;
            },

            closeModal() {
                this.editItem = false;
                this.isApp = false;
                this.isSection = false;
                this.isVideo = false;
                this.form.reset()
            },

            changeTutorialView(value) {
                this.showTutorial = value;
            },
            changeSectionView(value) {
                this.showSection = value
            }
        },
        mounted() {

            let domain = window.location.protocol + '//' + window.location.hostname;
            axios.get(`${domain}/loggedUser`).then(response => {
                this.loggedUser = response.data;
            });
            console.log('Component mounted.')
        }
    }
</script>
