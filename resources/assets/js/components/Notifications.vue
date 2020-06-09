<template>
    <div class="dropdown d-xs d-md-block">
        <a class="nav-link icon" data-toggle="dropdown">
            <i class="fe fe-bell"></i>
            <span class="pb-4" style="color: red" v-if="notifications.length > 0">{{notifications.length}}</span>
        </a>
        <div v-if="notifications.length > 0" class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a class="dropdown-item d-flex" href="#" v-for="notification in notifications">
                <a :style="{ backgroundImage: 'url(' + notification.data.user_avatar + ')' }"
                      class="avatar mr-1 align-self-center"></a>
                <img src="" alt="">
                <div class="ml-3">
                    <span class="message">{{ notification.data.message }}</span>

                <!--</div>-->
<!--                <div class="col-1">-->
                    <div class="small text-muted ml-4"><strong>Fecha:</strong> {{ new
                        Date(notification.created_at).toLocaleDateString('es-ES', {month: 'long', day: 'numeric', year:
                        'numeric'}) }}
                    </div>
                </div>
                <div>
                    <button type="button" class="btn close float-right mb-6 ml-3" aria-label="Close"
                            v-on:click="removeNotification(notification.id)">
                        <!--                    <span aria-hidden="true">&times;</span>-->
                    </button>
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
    .dropdown-menu{
        height: auto;
        max-height: 300px;
        overflow-y:auto;
        width: 600px;
    }
    .message{
        display:block;
        width:400px;
        word-wrap:break-word;
        white-space: normal;
        margin-left: 1rem;
    }
</style>
