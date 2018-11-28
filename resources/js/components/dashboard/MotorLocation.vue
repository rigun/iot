<template>
  <div>
    <br>
    <gmap-map
      :center="center"
      :zoom="13"
      style="width:100%;  height: 400px;"
    ><gmap-polyline v-bind:path.sync="path" v-bind:options="{ strokeColor:'#008000'}">
         </gmap-polyline>
      <gmap-marker
        :key="index"
        v-for="(m, index) in markers"
        :position="m.position"
        @click="center=m.position"
      >
  
      </gmap-marker>
    </gmap-map>
  </div>
</template>

<script>
import _ from 'lodash'
export default {
  name: "GoogleMap",
  data() {
    return {
      // default to Montreal to keep it simple
      // change this to whatever makes sense
      center: { lat:-7.779047, lng: 110.416957 },
      destination: {lat:-7.795580, lng:110.369492 },
    path: [
                    {lat: -7.779047, lng: 110.416957 },
            
                    {lat:-7.795580, lng:110.369492 },
        ],
      markers: [],
      places: [],
      currentPlace: null,
       polylineGeojson: '',
        mvcPath: null,
    };
  },
watch: {
          polylinePath: _.throttle(function (path) {
            if (path) {
              this.path = path
              this.polylineGeojson = JSON.stringify({
                type: 'Polyline',
                coordinates: this.path.map(({lat, lng}) => [lng, lat])
              }, null, 2)
            }
          }, 1000)
},
  mounted() {
    this.geolocate();
  },

  methods: {
    geolocate: function() {
      navigator.geolocation.getCurrentPosition(position => {
        this.center = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        this.markers.push({ position: this.center },{position: this.destination});
        this.places.push( this.center );
      });
    },
  }
     
};
</script>