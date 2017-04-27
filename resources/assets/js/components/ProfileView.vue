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
    <button type="button"class="btn btn-primary backbutton" @click="leaveProfileView">
      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
    </button>
    <span class="favorite-star" v-bind:class="{ selected: isFavorite, blocked: loading }" @click="favoritePlace">&#x2605;</span>
  <div class="panel panel-default">
    <div class="panel-body">
        <h1>{{this.place.place}}
          <h5>
            <a target="_blank" v-bind:href="place.link">
              <button>Website</button>
            </a>
          </h5>
        </h1>
      {{this.place.description}}
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
      Price: {{this.place.price}}
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
      Address: {{this.place.address}}
    </div>
  </div>
  <button type="button" class="btn btn-primary waves-effect waves-light light-blue darken-3 commentbutton" @click="openModal()">Add Comment</button>
  <div class="commentcontainer">
    <div class="panel panel-default comment" v-for="comment in comments">
      <div class="panel-heading">
        <span>
          <h3 class="panel-title">{{comment.username}}</h3>

        </span>
      </div>
      <div class="panel-body">
        {{comment.body + " -" + comment.rating + "/5"}}
      </div>
    </div>
  </div>
   <Modal v-if="showModal" @close="showModal = false" :attraction-id="place.id" ></Modal>
  </div>
</template>

<script>
import Modal from './AddModal'
import loaders from 'loaders.css'

export default {
  props: ['place'],

  data () {
    return {
      comments: [],
      showModal: false, // used to toggle modal hide and show,set to true when add button is clicked
      myComment:[],
      isFavorite: false,
      loading: false
    }
  },
  mounted () {
    console.log('ProfileView -> mounted.')
    this.loading = true;
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
          this.loading = false;
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
     this.loading = true;
     if (!this.isFavorite) {
       axios.post(`/favorites/${this.place.id}`)
      .then((response) => {
        console.log('SubmitFavorite -> post success');
        console.log(response.data);
        this.isFavorite = true;
        this.loading = false;
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
       this.loading = false;
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

 .favorite-star.blocked {
   pointer-events: none;
 }

 .loader {
   position: absolute;
   z-index: 15;
   top: 50%;
   left: 50%;
 }

 .line-spin-fade-loader > div {
   background-color: #619af4;
 }

 .comment {
   margin: 0px;
 }

 .commentbutton {
   margin-bottom: 10px;
 }

 .commentcontainer {
   margin-bottom: 20px;
 }

 .backbutton {
   margin-bottom: 10px;
 }
</style>
