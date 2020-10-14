<template>
    <div class="dropdown d-xs d-md-block">
        <a class="nav-link icon" data-toggle="dropdown">
            <span class="btn btn-pill btn-sm mt-1" :class="{ 'btn-outline-primary' : notifications.length > 0 , 'btn-outline-secondary' : notifications.length === 0 }"> <i class="fe fe-bell"></i>
            <span class="pb-4" style="color: red" v-if="notifications.length > 0">{{notifications.length}}</span></span>

        </a>
        <div v-if="notifications.length > 0" class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a class="dropdown-item d-flex" href="#" v-for="notification in notifications">
                <a :style="{ backgroundImage: 'url(' + notification.data.user_avatar + ')' }"
                      class="avatar mr-1 align-self-center"></a>
                <div class="ml-3">
                    <span class="message pt-1">{{ notification.data.message }}</span>
                    <div class="small text-muted ml-4"><strong>Fecha:</strong> {{ new
                        Date(notification.created_at).toLocaleDateString('es-ES', {month: 'long', day: 'numeric', year:
                        'numeric'}) }}
                    </div>
                </div>
                <div>
                    <button type="button" class="btn close float-right mb-6 ml-3" aria-label="Close"
                            v-on:click="removeNotification(notification.id)">
                    </button>
                </div>
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
                Fire.$emit('ReloadNotifications');
                },

            removeAllNotifications() {
                let domain = window.location.protocol + '//' + window.location.hostname;
                axios.get(`${domain}/notifications/markAllAsRead`);

                this.notifications.splice(0);

            },

            loadNotifications(){
                let domain = window.location.protocol + '//' + window.location.hostname;
                axios.get(`${domain}/notifications/get`).then(response => {
                    this.notifications = response.data
                });
            }

        },

        mounted() {
            this.loadNotifications();
            setInterval(() => this.loadNotifications(), 20000)

            Fire.$on('ReloadNotifications', () => {
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
        transition: .5s ease;
    }
    .message{
        display:block;
        width:430px;
        word-wrap:break-word;
        white-space: normal;
        margin-left: 1rem;
    }
</style>
