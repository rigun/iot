<template>
   
     <div id="appPage">
            <main class="pageContent">
            <transition name="fade">
            <router-view></router-view>
            </transition>
            </main>
        </div>
</template>
<style>

</style>


<script>
    export default {
        data() {
            return {
             year:'',
         }
     },
     created(){
        this.getThisYear();
     },
     methods:{
         getUser(){
            },
         getThisYear(){
                this.year = new Date().getFullYear();
            },
     },
    }
</script>