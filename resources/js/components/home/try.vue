<template>
  <div>
    {{center}}
  </div>
</template>

<script>
export default {
  data() {
    return {
      center: { lat:0, lng: 0 },
    };
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