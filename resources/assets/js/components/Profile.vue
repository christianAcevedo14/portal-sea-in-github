<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">My Profile</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-auto">
                            <span class="avatar avatar-xl" style="background-image: url(demo/faces/female/9.jpg)"></span>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Email-Address</label>
                                <input class="form-control" placeholder="your-email@domain.com">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Bio</label>
                        <textarea class="form-control" rows="5">Big belly rude boy, million dollar hustler. Unemployed.</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email-Address</label>
                        <input class="form-control" placeholder="your-email@domain.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" value="password">
                    </div>
                    <div class="form-footer">
                        <button class="btn btn-primary btn-block">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Profile",

        data() {
            return {
                loggedUser: '',
            }
        },

        mounted() {
            // this.$Progress.start();
            // Fire.$emit('load');

            let domain = window.location.protocol + '//' + window.location.hostname;
            axios.get(`${domain}/loggedUser`).then(response => {
                this.loggedUser = response.data;
            });
            // Fire.$on('ReloadPage', () => {
            //     Fire.$emit('load');
            // })
        }
    }
</script>

<style scoped>

</style>