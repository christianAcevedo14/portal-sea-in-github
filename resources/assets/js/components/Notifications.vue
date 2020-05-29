<template>
    <div class="dropdown d-none d-md-flex">
        <a class="nav-link icon" data-toggle="dropdown">
            <i class="fe fe-bell"></i>
            <span class="pb-4" style="color: red" v-if="notifications.length > 0">{{notifications.length}}</span>
        </a>
        <div v-if="notifications.length > 0" class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a class="dropdown-item d-flex" href="#" v-for="notification in notifications">
                <span :style="{ backgroundImage: 'url(' + notification.data.user_avatar + ')' }"
                      class="avatar mr-3 align-self-center"></span>
                <div class="">
                    <span style="display:block; width:400px; word-wrap:break-word; white-space: normal;">{{ notification.data.message }}</span>
                    <button type="button" class="btn close float-right" aria-label="Close"
                            v-on:click="removeNotification(notification.id)">
                        <!--                    <span aria-hidden="true">&times;</span>-->
                    </button>
                <!--</div>-->
<!--                <div class="col-1">-->
                    <div class="small text-muted"><strong>Fecha:</strong> {{ new
                        Date(notification.created_at).toLocaleDateString('es-ES', {month: 'long', day: 'numeric', year:
                        'numeric'}) }}
                    </div>
                </div>
                <!--<span class="pl-9 float-right">
                                    </span>-->
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-center text-muted-dark" href="#" v-on:click="removeAllNotifications()">Marcar
                todas como leídas</a>
        </div>
        <div v-else class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <span class="dropdown-item text-center text-muted-dark">No hay notificaciones.</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Notifications",
        data() {
            return {
                notifications: []
            }
        },
        methods: {
            removeNotification(id) {
                let domain = window.location.protocol + '//' + window.location.hostname;
                axios.get(`${domain}/notifications/markAsRead/` + id);
                Fire.$emit('ReloadPage');
                },

            removeAllNotifications() {
                let domain = window.location.protocol + '//' + window.location.hostname;
                axios.get(`${domain}/notifications/markAllAsRead`);

                this.notifications.splice(0);

            },

            loadNotifications(){
                let domain = window.location.protocol + '//' + window.location.hostname;

                // this.$root.disableInterceptor();

                axios.get(`${domain}/notifications/get`).then(response => {
                    this.notifications = response.data

                    // this.$root.enableInterceptor()

                    // console.log('Interceptor Enabled')
                });
            }

        },

        mounted() {
            this.loadNotifications();
            setInterval(() => this.loadNotifications(), 20000)

            Fire.$on('ReloadPage', () => {
                this.loadNotifications();
            })
        }
    }
</script>


<style scoped>

</style>
