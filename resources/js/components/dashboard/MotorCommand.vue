<template>
    <div class="command">
        <div class="box">
            <div class="columns">
                <div class="column is-half">
                    <a class="button is-large is-fullwidth" @click="command(1)">Nyalakan</a>
                </div>
                <div class="column is-half">
                    <a class="button is-large is-fullwidth" @click="command(2)">Melihat Lokasi</a>
                </div>
            </div>
            <div class="columns">
                <div class="column is-half">
                    <a class="button is-large is-fullwidth">Kondisi Motor</a>
                </div>
                <div class="column is-half">
                    <a class="button is-large is-fullwidth">Service Terdekat</a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
         methods: {
            command(x){
                  let uri = '/api/command/'+localStorage.getItem('token');
                  axios.patch(uri, {commad: x}).then((response) => {
                      this.command = response.data;
                  }).catch(error => {
                      console.log(error.response)
                  });
            },
         },
   
        
}
</script>