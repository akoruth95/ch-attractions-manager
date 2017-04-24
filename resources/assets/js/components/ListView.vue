<template>
  <div>
    <div v-if="!profileview">
      <button type="button"class="btn btn-primary" @click="leaveListView">
        <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
      </button>
    <div class="panel panel-default" v-for="place in places" @click="viewProfile(place)">
      <div class="panel-heading">
        <h3 class="panel-title">{{place.place}}</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
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
    if (this.category === 'favorites') {
      axios.get('/favorites')
        .then((response) => {
          this.places=response.data;
        })
        .catch((error) => {
          console.error('failed');
          // show an error message
        });
    } else {
    axios.get(`/attractions/${this.category}`)
      .then((response) => {
        this.places=response.data;
      })
      .catch((error) => {
        console.error('failed');
        // show an error message
      });
    }

    this.$evt.$on('closeProfile', this.closeProfileView)
  },
  beforeDestroy () {
    this.$evt.$off('closeProfile', this.closeProfileView)
  },
  components: {
    ProfileView
  },
  methods: {
    viewProfile(place) {
      this.currentPlace = place;
      this.profileview = true;
    },

    closeProfileView() {
      this.profileview = false;
    },

    leaveListView() {
      this.$evt.$emit('closeList');
    }
  }
}
</script>

<style>

</style>
