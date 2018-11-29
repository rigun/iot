<template>
  <div>
    <br>
    <gmap-map
      :center="center"
      :zoom="13"
      style="width:100%;  height: 400px;"
    >
    <gmap-polyline v-if="path.length > 0" :path="path" ref="polyline"></gmap-polyline>
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
    };
  },

  mounted() {
    this.geolocate();
    this.setPath();
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
    setPath(){
        let url = "https://maps.googleapis.com/maps/api/directions/json?origin="+this.center.lat+","+this.center.lng+"&destination="+this.destination.lat+","+this.destination.lng+"&key=AIzaSyC4m3960a0NxbUHCNND05Us9fwb0MSJvoI"
        axios.get(url).then((response) => {
            console.log(response)
                  }).catch(error => {
                      console.log(error.response)
                  });
    }

  }
     
};
</script>