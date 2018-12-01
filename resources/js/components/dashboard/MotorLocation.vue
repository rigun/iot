<template>
  <div>
    <br>
    <gmap-map
      :center="center"
      :zoom="13"
      style="width:100%;  height: 400px;"
    >
      <gmap-marker
        :key="index"
        v-for="(m, index) in markers"
        :position="m.position"
        @click="center=m.position"
      >
  
      </gmap-marker>
    </gmap-map>
    <h2>Lokasi saat ini : {{center.lat}} {{center.lng}}</h2>
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
                    this.destination,
                    this.center,
        ],
      markers: [],
      places: [],
      currentPlace: null,
    };
  },

  mounted() {
    this.getLocation();
    this.setRealtime();
  },

  methods: {
    getLocation(){
      this.geolocate();
    this.getMotorLocation();
    this.getData();
    },
    geolocate: function() {
      navigator.geolocation.getCurrentPosition(position => {
        this.center = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        this.markers.push({ position: this.center },{position: this.center});
        this.places.push( this.center );
      });
    },
    getMotorLocation(){
          let uri = '/api/place/'+localStorage.getItem('token');
          axios.get(uri).then((response) => {
            console.log(response)

              this.destination.lat = parseFloat(response.data.longitude);
              this.destination.lng = parseFloat(response.data.latitude);
          }).catch(error => {
              console.log(error.response)
          });
    },
    getData(){
          let uri = '"http://iot.thekingcorp.org/api/place/arduino/6ab703fb42a7b87d5f977f212a82f7ae8cc164a9705d05ebf1616f41feaa5553a7071f17c193099fbd7ae97e092e64e45f54d45891f856a76619513b0805ae4e/'+this.center.lat+"/"+this.center.lng;
          axios.get(uri).then((response) => {
            console.log(response)
          }).catch(error => {
              console.log(error.response)
          });
    },
    setRealtime(){
      this.interval = setInterval(() => this.getLocation(), 2000);
    }  
  }
     
};
</script>