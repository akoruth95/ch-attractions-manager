<template>
  <div>
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
    }
  },
  mounted () {
    console.log('ProfileView -> mounted.')
    axios.get(`/comments/${this.place.id}`)
      .then((response) => {
        this.comments = response.data;
        console.log(response.data);
      })
      .catch((error) => {
        console.error('failed');
        // show an error message
      });

  },
  beforeDestroy () {

  },
  components: {
    Modal
  },
  methods: {
    openModal (whichMeal) { // function to toggle open and close of modal
     this.showModal = true
   }
  }
}
</script>

<style>

</style>
