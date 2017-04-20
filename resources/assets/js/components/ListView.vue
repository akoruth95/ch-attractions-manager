<template>

</template>

<script>
import axios from 'axios';

export default {
  props: ['category'],

  data () {
    return {
      places: []
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

  },
  methods: {

  }
}
</script>

<style>

</style>
