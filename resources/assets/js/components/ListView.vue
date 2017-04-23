<template>
  <div>
    <div class="panel panel-default" v-for="place in places" v-if="!profileview" @click="viewProfile(place)">
      <div class="panel-heading">
        <h3 class="panel-title">{{place.place}}</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
    <ProfileView v-if="profileview" :place="currentPlace"> </ProfileView>
  </div>
</template>

<script>
import axios from 'axios';
import ProfileView from './ProfileView'

export default {
  props: ['category'],

  data () {
    return {
      places: [],
      profileview: false,
      currentPlace: null
    }
  },
  mounted () {
    console.log('ListView -> mounted.')
    axios.get(`/attractions/${this.category}`)
      .then((response) => {
        this.places=response.data;
      })
      .catch((error) => {
        console.error('failed');
        // show an error message
      });
  },
  beforeDestroy () {

  },
  components: {
    ProfileView
  },
  methods: {
    viewProfile(place) {
      this.currentPlace = place;
      this.profileview = true;
    }
  }
}
</script>

<style>

</style>
