<template>
    <div class="command">
       <div id="map"></div>
    </div>
</template>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7UX3TGX8Qzue_m30PgNcP-OD0rLR5Y1A&callback=initMap">    </script>

<script>
    export default {
              data(){
            return{

            }
        },
        created(){
            this.initMap()
        },
        methods:{
            initMap() {
                // The location of Uluru
                var uluru = {lat: -25.344, lng: 131.036};
                // The map, centered at Uluru
                var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 4, center: uluru});
                // The marker, positioned at Uluru
                var marker = new google.maps.Marker({position: uluru, map: map});
            }
        }
    }
</script> 