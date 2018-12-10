<template>
    <div class="dropdown d-none d-md-flex">
        <a class="nav-link icon" data-toggle="dropdown">
            <i class="fe fe-bell"></i>
            <span class="nav-unread" v-if="notifications.length > 0"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a class="dropdown-item d-flex" href="#" v-for="notification in notifications">
                <span :style="{ backgroundImage: 'url(' + notification.data.plan.user.avatar + ')' }" class="avatar mr-3 align-self-center"></span>
                <div>
                    <strong>{{ notification.data.plan.user.first_name}} {{ notification.data.plan.user.surname }}</strong> a sometido su plan de trabajo.
                    <div class="small text-muted"><strong>Fecha:</strong> {{ new Date(notification.created_at).toLocaleDateString('es-ES', {month: 'long', day: 'numeric', year: 'numeric'}) }}</div>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-center text-muted-dark" href="#">Mark all as read</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Notifications",
        data() {
            return {
                notifications : []
            }
        },
        mounted() {
            let domain = window.location.protocol + '//' + window.location.hostname;
            axios.get(`${domain}/notifications/get`).then(response => {
                this.notifications = response.data;
            });
        }
    }
</script>

<style scoped>

</style>