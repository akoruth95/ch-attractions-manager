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
  </div>
</template>

<script>
export default {
  props: ['place'],

  data () {
    return {
      comments: []
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

  },
  methods: {

  }
}
</script>

<style>

</style>
