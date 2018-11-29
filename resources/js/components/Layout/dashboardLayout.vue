<template>
   <div class="content">
    <div >
    <div id="topnav" class="topnav" >
        <nav class="navbar has-shadow dashnav" style="padding: 0px">
                <div class="navbar-start">
                    <div class="navbar-item box-hamburger">
                        <div class="hamburger" onclick="myHamburger(this)">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </div>
                </div>
                <div class="navbar-end">
                    <!-- <div class="navbar-item notif-space">
                        <i class="fa fa-bell"></i>
                    </div> -->
                    <div class="navbar-item dropdown-space has-dropdown is-hoverable">
                    <div class="navbar-item"  @click="rightDropDown()">
                        <i id="logoRightNav" class="fa fa-user-circle m-l-15 size-40"></i>
                    </div>
                    <div class="navbar-dropdown arrow-up"></div>
                        <ul id="navbarRight" class="navbar-dropdown is-boxed is-right box-dropdown-custom" :class="{'box-dropdown-custom-change': show}">
                            <hr class="navbar-divider">
                            <li>  <router-link v-bind:to="{name: 'Logout'}" class="navbar-item">
                                        <span class="icon">
                                        <i class="fa fa-fw fa-sign-out m-r-5"></i>
                                        </span>
                                        Logout
                        </router-link ></li>
                        </ul>
                    </div>

                </div>
                        
            </nav>
    </div>
       <div id="side-menu"  class="side-menu">
            <aside class="menu">
                <div id="side-header" class="side-header">
                    <div class="menu-label imgLabel">
                       <router-link :to="{name: 'Landing'}" style="color: white">
                        <img src="/images/logo.png" height="40" style="margin-right: 20px; width: auto;">
                        <p class="amihealthy">Motor ID</p>
                        </router-link>
                    </div>
                </div>
                <hr class="separator-side">
                <div class="side-body">
                
                    <div class="side-label">
                        HOME
                    </div>
                    <ul class="menu-list">
                        <li><router-link v-bind:to="{name: 'DashboardComponent'}"><i class="fa fa-home m-r-10" aria-hidden="true"></i>  <span>Motor Command</span> </router-link></li>
                        <li><router-link v-bind:to="{ name: 'MotorStatus'}"  ><i class="fa fa-fogs m-r-10" aria-hidden="true"></i>  <span>Motor Status</span> </router-link></li>
                        <li><router-link v-bind:to="{ name: 'MotorLocation'}"  ><i class="fa fa-maps m-r-10" aria-hidden="true"></i>  <span>Motor Location</span> </router-link></li>
                        <li><router-link v-bind:to="{ name: 'MotorStnk'}"  ><i class="fa fa-off m-r-10" aria-hidden="true"></i>  <span>Motor Location</span> </router-link></li>
                    </ul>
                </div>
            </aside>
        </div>
        <div id="app">
            <main class="dashboardContent">
            <transition name="fade">
            <router-view></router-view>
            </transition>
            </main>
        </div>
          <div  class="modal" v-bind:class="{ 'is-active' : activeFirst }" v-if="roles=='user'">
      <div class="modal-background" ></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title text-resetpassword" style="text-align:center">Selamat datang <br/>silahkan update password anda terlebih dahulu <br/> Terima Kasih</p>
          </header>
            <form v-on:submit.prevent ="firstLogin()">

            <section class="modal-card-body">
            
            <div class="columns">
              <div class="column">
                
                <div class="field">
                  <label for="name" class="label">Password Baru</label>
                  <p class="control">
                    <input type="password" class="input" v-bind:class="{ 'is-danger' : wrongPassword }" v-model="dataPassword.password_baru" @keyup="cek" required>
                  </p>

                </div>
                <div class="field">
                  <label for="name" class="label">Konfirmasi Password Baru</label>
                  <p class="control">
                    <input type="password" class="input" v-bind:class="{ 'is-danger' : wrongPassword }" v-model="dataPassword.password_konfirmasi" @keyup="cek" required>
                  </p>
                  <label for="name" class="label" v-if="wrongPassword == true"><span style="color:red">Password tidak cocok</span></label>

                </div>
                
              
                
              </div> <!-- end of .column -->
            </div> <!-- end of .columns for forms -->       
          </section>
          <footer class="modal-card-foot">
            <button class="button is-success" :disabled="wrongPassword">Ubah Password</button>
          </footer>
          </form>

      </div>
    </div>
        </div>
      
   </div>
</template>

<script>
       export default {
        data() {
            return {
                user: {},
                error:'',
                loading: true,
                roles: localStorage.getItem('roles'),
                activeFirst : false,
                wrongPassword: false,
                dataPassword: {
                    password_baru: '',
                    password_konfirmasi: '',
                },
                show: false   
            }
        },
        created(){
        },
        mounted(){
        },
        methods:{
          rightDropDown(){
              if(this.show){
                  this.show = false
              }else{
                  this.show = true
              }
          }
        }
    }
</script>
