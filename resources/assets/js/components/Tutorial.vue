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
                    </button>
                </div>
                <div v-else-if="loggedUser.title_id === 1 && editMode" class="form-group">
                    <button type="button" class="btn btn-primary mt-5 float-right" @click="editPage(false)">Finalizar
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
                                    <label v-for="app in this.bucket.tutorial_apps" class="selectgroup-item">
                                        <input type="radio" class="selectgroup-input" :value="app.id"
                                               v-model="showApp"
                                               v-on:change="changeAppView(app , app.id)">
                                        <span class="selectgroup-button">
                                                                    {{app.name}}
                                             <i v-if="editMode" class="fe fe-edit text-blue" @click="editApp(app)"></i>
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
                                        <div class="col-6">
                                            <h3 v-if="showApp === selectedApp.id" class="page-title">
                                                {{selectedApp.name}}</h3>
                                        </div>
                                        <div class="col-6">
                                            <label class="selectgroup pt-2">
                                                <label v-for="section in selectedApp.tutorial_sections"
                                                       class="selectgroup-item">
                                                    <input type="radio" class="selectgroup-input" :value="section.id"
                                                           v-model="showSection"
                                                           v-on:change="changeSectionView(section , section.id)">
                                                    <span class="selectgroup-button">
                                                                    {{section.name}}
                                                        <i v-if="editMode" class="fe fe-edit text-blue"
                                                           @click="editSection(section)"></i>
                                                    </span>
                                                </label>
                                                <label v-if="selectedApp.tutorial_sections.length === 0"
                                                       class="selectgroup-item">
                                                    <button class="btn btn-secondary" disabled>No hay secciones para esta aplicación.
                                                    </button>
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
                                <div class="row form-fieldset m-4">
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

                                        <div v-for="video in selectedSection.tutorial_videos" class="row mt-3">
                                            <div class="col-1"></div>
                                            <div class="col-10">
                                                <div class="container form-control align-content-center m-3 p-3">
                                                    <div class="row card-header m-3">
                                                        <div class="col-11">
                                                            <h4 class="mb-3">{{video.title}}</h4>
                                                        </div>
                                                        <div class="col-1">
                                                            <button v-if="editMode"
                                                                    class="btn btn-secondary float-right"
                                                                    @click="editVideo(video)"> Editar <i
                                                                    class="fe fe-edit text-blue"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!--                                                                <video src=""></video>-->
                                                    <span class="m-3" v-html="video.embed"></span>

                                                    <div class="container form-control mt-3">
                                                        <p>{{video.description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"></div>
                                        </div>

                                        <div v-if="selectedSection.tutorial_videos.length === 0" class="row mt-3">
                                            <div class="col-1"></div>
                                            <div class="col-10">
                                                <div class="container form-control align-content-center m-3 p-3">
                                                    <div class="col-12">
                                                        <h4 class="text-center mt-2">No hay videos para mostrar.</h4>
                                                    </div>
                                                    <div class="col-12">
                                                        <p class="text-center mt-3">Esta área aún no cuenta con video-tutoriales. Por favor, seleccione otra área.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1"></div>
                                        </div>

                                    </div>
                                </div>
                              <!--  <div class="card-footer">
                                    <div class="row">
                                        <div class="col-9">
                                            <pagination :data="this.bucket.userPlans"
                                                        @pagination-change-page="getUserPlanResults"></pagination>
                                        </div>
                                        <div class="col-3 pt-2">
                                            <span>Mostrando records del <strong>{{ this.bucket.userPlans.from }}</strong>  al <strong>{{this.bucket.userPlans.to }}</strong>  de <strong>{{this.bucket.userPlans.total}}.</strong></span>
                                        </div>
                                    </div>
                                </div>-->
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
                    <form @submit.prevent="editItem ? updateItem() : createItem()">
                        <div class="modal-body">
                            <fieldset class="form-fieldset">
                                <div v-if="isApp || isSection " class="form-group">
                                    <label class="form-label">Nombre<span class="form-required">*</span></label>
                                    <input v-model="form.name" type="text" name="name" class="form-control"
                                           :class="{ 'is-invalid': form.errors.has('name') }">
                                    <has-error :form="form" field="code"></has-error>
                                </div>
                                <div v-if="isSection" class="form-group">
                                    <label class="form-label">Aplicación<span class="form-required">*</span></label>
                                    <select v-model="form.app" type="text" name="app"
                                            class="form-control"
                                            :class="{ 'is-invalid': form.errors.has('app') }">
                                        <option v-for="app in bucket.tutorial_apps" :value="app.id">{{app.name}}
                                        </option>
                                    </select>
                                    <has-error :form="form" field="app"></has-error>
                                </div>
                                <div v-if="isVideo" class="form-group">
                                    <label class="form-label">Sección<span class="form-required">*</span></label>
                                    <select v-model="form.section" type="text" name="section"
                                            class="form-control"
                                            :class="{ 'is-invalid': form.errors.has('section') }">
                                        <option v-for="section in selectedApp.tutorial_sections" :value="section.id">
                                            {{section.name}}
                                        </option>
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
                                    <input v-model="form.embed" type="text" name="embed" class="form-control"
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
                            <button v-show="editItem" type="button" class="btn btn-danger float-left"
                                    @click="deleteItem(form.id)">
                                Borrar <i
                                    class="fe fe-trash"></i></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="closeModal()">
                                Cancelar
                            </button>
                            <button v-show="editItem" type="submit" class="btn btn-success">
                                Actualizar
                            </button>
                            <button v-show="!editItem" type="submit" class="btn btn-primary">Crear
                            </button>
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
                bucket: {
                    tutorial_apps: [],
                },
                loggedUser: '',
                editMode: false,
                editItem: false,
                isApp: false,
                isSection: false,
                isVideo: false,
                showApp: '',
                selectedApp: {
                    tutorial_sections: [],
                },
                showSection: '',
                selectedSection: {
                    tutorial_videos: [],
                },
                form:
                    new Form({
                        id: '',
                        item: '',
                        name: '',
                        app: '',
                        section: '',
                        title: '',
                        embed: '',
                        description: '',
                    }),
            }
        },
        methods: {
            addApp() {
                this.editItem = false;
                this.isApp = true;
                this.form.item = 'app';
                $('#tutorialModal').modal('show');
            },
            editApp(app) {
                this.editItem = true;
                this.isApp = true;
                $('#tutorialModal').modal('show');
                this.form.fill(app);
                this.form.item = 'app';
            },
            addSection() {
                this.editItem = false;
                this.isSection = true;
                this.form.item = 'section';
                this.form.app = this.selectedApp.id;
                $('#tutorialModal').modal('show');
            },
            editSection(section) {
                this.editItem = true;
                this.isSection = true;
                $('#tutorialModal').modal('show');
                this.form.fill(section);
                this.form.item = 'section';
                this.form.app = this.selectedApp.id;
            },
            addVideo() {
                this.editItem = false;
                this.isVideo = true;
                this.form.item = 'video';
                this.form.app = this.selectedApp.id;
                this.form.section = this.selectedSection.id;
                $('#tutorialModal').modal('show');
            },
            editVideo(video) {
                this.editItem = true;
                this.isVideo = true;
                $('#tutorialModal').modal('show');
                this.form.fill(video);
                this.form.item = 'video';
                this.form.app = this.selectedApp.id;
                this.form.section = this.selectedSection.id;
            },

            editPage(boolean) {
                this.editMode = boolean;
            },

            createItem() {
                let domain = window.location.protocol + '//' + window.location.hostname;
                this.$Progress.start();
                this.form.post(`${domain}/tutorials`)
                    .then(() => {
                        Fire.$emit('ReloadPage');
                        this.closeModal();
                        $('#tutorialModal').modal('hide');

                        Toast.fire({
                            icon: 'success',
                            title: 'Creado'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                        Swal.fire(
                            '¡Error!',
                            'Algo falló.',
                            'warning'
                        )
                    })
            },

            updateItem() {
                let domain = window.location.protocol + '//' + window.location.hostname;
                this.form.put(`${domain}/updateTutorials` + this.form.id)
                    .then(() => {
                        this.$Progress.start();
                        this.closeModal();
                        $('#tutorialModal').modal('hide');

                        Fire.$emit('ReloadPage');
                        Swal.fire(
                            '¡Actualizado!',
                            'Se actualizó satisfactoriamente',
                            'success'
                        );
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                        Swal.fire(
                            '¡Error!',
                            'Algo falló.',
                            'warning'
                        )
                    })
            },

            deleteItem(id) {
                Swal.fire({
                    title: '¿Estas seguro?',
                    text: "¡No podrás revertir esta acción!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Eliminar'
                }).then((result) => {
                    if (result.value) {
                        let domain = window.location.protocol + '//' + window.location.hostname;
                        this.form.delete(`${domain}/deleteTutorials` + id).then(() => {
                            this.closeModal();
                            $('#tutorialModal').modal('hide');
                            Swal.fire(
                                '¡Eliminado!',
                                'Se elimino satisfactoriamente',
                                'success'
                            );
                            Fire.$emit('ReloadPage');
                        }).catch(() => {
                            Swal.fire(
                                '¡Error!',
                                'Algo falló.',
                                'warning'
                            )
                        })
                    }
                })
            },

            closeModal() {
                this.editItem = false;
                this.isApp = false;
                this.isSection = false;
                this.isVideo = false;
                this.form.reset();
                this.form.clear();
            },

            changeAppView(app, value) {
                this.$Progress.start();
                this.selectedApp = app;
                this.showApp = value;
                this.showSection = '';
                this.selectedSection = {
                    tutorial_videos: [],
                };
                this.$Progress.finish();
            },
            changeSectionView(section, value) {
                this.$Progress.start();
                this.selectedSection = section;
                this.showSection = value;
                this.$Progress.finish();
            },

            loadTutorials() {
                let domain = window.location.protocol + '//' + window.location.hostname;
                axios.get(`${domain}/showTutorials`).then(response => {
                    this.bucket = response.data;
                    this.showApp = this.bucket.tutorial_apps[0].id;
                    this.selectedApp = this.bucket.tutorial_apps[0];
                    this.selectedSection = {
                        tutorial_videos: [],
                    };
                    this.$Progress.finish();
                    Fire.$emit('finishLoad');
                });
            }
        },
        mounted() {
            this.$Progress.start();
            Fire.$emit('load');
            this.loadTutorials();

            let domain = window.location.protocol + '//' + window.location.hostname;
            axios.get(`${domain}/loggedUser`).then(response => {
                this.loggedUser = response.data;
            });
            Fire.$on('ReloadPage', () => {
                Fire.$emit('load');
                this.loadTutorials();
            })
        }
    }
</script>
