<template>
  <div>
    <button type="button"class="btn btn-primary" @click="leaveProfileView">
      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
    </button>
    <span class="favorite-star" v-bind:class="{ selected: isFavorite }" @click="favoritePlace">&#x2605;</span>
  <div class="panel panel-default">
    <div class="panel-body">
      <h1>{{this.place.place}}</h1>
      description
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
      Price: {{this.place.price}}
    </div>
  </div>
  <div class="panel panel-default" v-for="comment in comments">
  <div class="panel-heading">
    <h3 class="panel-title">{{comment.username}}</h3>
  </div>
  <div class="panel-body">
    {{comment.body}}
  </div>
  </div>
   <a class='btn-floating btn-large waves-effect waves-light light-blue darken-3' @click="openModal()"><i class="material-icons">add</i></a>
   <Modal v-if="showModal" @close="showModal = false" :attraction-id="place.id" ></Modal>
  </div>
</template>

<script>
import Modal from './AddModal'
export default {
  props: ['place'],

  data () {
    return {
      comments: [],
      showModal: false, // used to toggle modal hide and show,set to true when add button is clicked
      myComment:[],
      isFavorite: false
    }
  },
  mounted () {
    console.log('ProfileView -> mounted.')
    axios.get(`/comments/${this.place.id}`)
      .then((response) => {
        this.comments = response.data;
        console.log('comments: ', response.data);
      })
      .catch((error) => {
        console.error('failed');
        // show an error message
      });

      axios.get(`/favorites/${this.place.id}`)
        .then((response) => {
          console.log('favorite: ', response.data);
          if (response.data.length != 0) {
            this.isFavorite = true;
          }
        })
        .catch((error) => {
          console.error('failed');
          // show an error message
        });

    this.$evt.$on('newComment', this.updateComments)

  },
  beforeDestroy () {
    this.$evt.$on('newComment', this.updateComments)
  },
  components: {
    Modal
  },
  methods: {
    openModal (whichMeal) { // function to toggle open and close of modal
     this.showModal = true
   },

   updateComments(newComment) {
     this.myComment[0] = newComment;
     this.comments.push(this.myComment[0].newComment);
     this.showModal = false;
   },

   leaveProfileView() {
     this.$evt.$emit('closeProfile');
   },

   favoritePlace() {
     if (!this.isFavorite) {
       axios.post(`/favorites/${this.place.id}`)
      .then((response) => {
        console.log('SubmitFavorite -> post success');
        console.log(response.data);
        this.isFavorite = true;
      })
      .catch((error) => {
        console.error('SubmitFavorite -> post error');
        // show an error message
      });
    } else {
      axios.delete(`/favorites/${this.place.id}`)
     .then((response) => {
       console.log('DeleteFavorite -> delete success');
       console.log(response.data);
       this.isFavorite = false;
     })
     .catch((error) => {
       console.error('DeleteFavorite -> delete error');
       // show an error message
     });
    }
   }
  }
}
</script>

<style scoped>
 .favorite-star {
   font-size: 30px;
   cursor: pointer;
 }

 .favorite-star.selected {
  color: yellow;
 }
</style>
