<template>
    <div class="command">
        <div class="box">
            <div class="columns">
                <div class="column is-half">
                    <a class="button is-large is-fullwidth" :class="{'is-success': command == 1}"><span v-if="command == 1">ON</span><span v-if="command == 0" >Off</span></a>
                </div>
                <div class="column is-half">
                    <a class="button is-large is-fullwidth" :class="{'is-success': command == 2}" >Melihat Lokasi</a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
        data(){
            return{
                command: 0,
            }
        },
        created: function() {
            this.getCommand();
        },
         methods: {
            getCommand(){
                  let uri = '/api/command/'+localStorage.getItem('token');
                  axios.get(uri).then((response) => {
                      this.command = response.data;
                  }).catch(error => {
                      console.log(error.response)
                  });
            },
         },
   
        
}
</script>
