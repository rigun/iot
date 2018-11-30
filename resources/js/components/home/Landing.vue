<template>
<div id="Utama">
    <div class="Kotak">
  
      <figure class="Atas">
        <img :src="'./images/logo.png'" alt="logo">
      </figure>
  
      <div class="content">
        <form v-on:submit.prevent="loadUpdate();submitLogin()" >
  
          <input id="Email" type="email" name="Email" title="Email" placeholder="Email Anda"  v-model="email" required  autofocus>
          <input id="password" type="password" name="password" title="password" placeholder="Password"  v-model="password"  required>
  
          <button type="submit" class="btn btn-primary"  >{{Login}}</button>
        </form>
      </div>
    </div>
  </div>
</template>
<style>

</style>

<script>
    import store from '../../store'
    export default {
        data() {
            return {
                email: '',
                password: '',
                loginError: false,
                load: false,
                Login: 'Login'
            }
        },
        methods: {
            loadUpdate(){
                this.Login = "Memuat . . ";
               this.$toast.open({
                duration: 2000,
                message: 'Login . . .',
                position: 'is-bottom',
                type: 'is-success',
                queue: false,
            })
            },
            submitLogin() {
                this.loginError = false;
                axios.post('/api/user/login', {
                    email: this.email,
                    password: this.password
                }).then(response => {
             
                        store.commit('loginUser')
                        localStorage.setItem('token', response.data.access_token)
                        localStorage.setItem('roles', response.data.role)
                        this.$router.push({ name: 'DashboardComponent' })
                        this.load = false;
                    
                }).catch(error => {
                    this.loginError = true;
                    this.Login = "Login";
                    this.load = false;
                    this.$toast.open({
                            duration: 2000,
                            message: 'Email atau Password salah',
                            position: 'is-bottom',
                            type: 'is-danger',
                            queue: false,
                    })

                });

            }
        }
    }
</script>