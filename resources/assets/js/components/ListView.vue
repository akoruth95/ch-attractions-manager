<template>
  <div>
      <div class="loader" v-if="loading">
        <div class="line-spin-fade-loader">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    <div v-if="!profileview">
      <button type="button"class="btn btn-primary backbutton" @click="leaveListView">
        <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
      </button>
    <div class="panel panel-default" v-for="attraction in places" @click="viewProfile(attraction.place)">
      <div class="panel-heading">
        <h3 class="panel-title">{{attraction.place.place}}</h3>
      </div>
      <div class="panel-body">
        {{attraction.avgrating != 0 ? 'Review: ' + attraction.avgrating + '/5': 'No reviews yet!'}}
      </div>
    </div>
    </div>
    <ProfileView v-if="profileview" :place="currentPlace"> </ProfileView>
  </div>
</template>

<script>
import axios from 'axios';
import ProfileView from './ProfileView'
import loaders from 'loaders.css'

export default {
  props: ['category'],

  data () {
    return {
      places: [],
      profileview: false,
      currentPlace: null,
      loading: false
    }
  },
  mounted () {
    console.log('ListView -> mounted.')
    this.loading = true;
    if (this.category === 'favorites') {
      axios.get('/favorites')
        .then((response) => {
          this.places=response.data;
          this.loading = false;
        })
        .catch((error) => {
          console.error('failed');
          // show an error message
        });
    } else {
    axios.get(`/attractions/${this.category}`)
      .then((response) => {
        this.places=response.data;
        this.loading = false;
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

<style scoped>

.loader {
  position: absolute;
  z-index: 15;
  top: 50%;
  left: 50%;
}

.line-spin-fade-loader > div {
  background-color: #619af4;
}

.backbutton {
  margin-bottom: 20px;
}

.panel {
  cursor: pointer;
}

</style>
