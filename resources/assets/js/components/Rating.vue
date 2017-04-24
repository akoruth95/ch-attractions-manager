<template>
  <span>
    <span class="rating-star" v-bind:class="{ selected: star1 }" @click="rate(1)">&#x2605;</span>
    <span class="rating-star" v-bind:class="{ selected: star2 }" @click="rate(2)">&#x2605;</span>
    <span class="rating-star" v-bind:class="{ selected: star3 }" @click="rate(3)">&#x2605;</span>
    <span class="rating-star" v-bind:class="{ selected: star4 }" @click="rate(4)">&#x2605;</span>
    <span class="rating-star" v-bind:class="{ selected: star5 }" @click="rate(5)">&#x2605;</span>
  </span>
</template>

<script>
export default {
  props: [],

  data () {
    return {
      star1: false,
      star2: false,
      star3: false,
      star4: false,
      star5: false,
      currentRating: null
    }
  },
  mounted () {

  },
  methods: {
    rate(rating) {
    switch(rating) {
      case 1:
          console.log('rated 1 star')
          this.star1 = true;
          this.star2 = false;
          this.star3 = false;
          this.star4 = false;
          this.star5 = false;
          this.currentRating = 1;
          this.$evt.$emit('newRating',this.currentRating);
          break;
      case 2:
          this.star1 = true;
          this.star2 = true;
          this.star3 = false;
          this.star4 = false;
          this.star5 = false;
          this.currentRating = 2;
          this.$evt.$emit('newRating',this.currentRating);
          break;
      case 3:
          this.star1 = true;
          this.star2 = true;
          this.star3 = true;
          this.star4 = false;
          this.star5 = false;
          this.currentRating = 3;
          this.$evt.$emit('newRating',this.currentRating);
          break;
      case 4:
          this.star1 = true;
          this.star2 = true;
          this.star3 = true;
          this.star4 = true;
          this.star5 = false;
          this.currentRating = 4;
          this.$evt.$emit('newRating',this.currentRating);
          break;
      case 4:
          this.star1 = true;
          this.star2 = true;
          this.star3 = true;
          this.star4 = true;
          this.star5 = true;
          this.currentRating = 5;
          this.$evt.$emit('newRating',this.currentRating);
          break;
      default:
          this.star1 = true;
          this.star2 = true;
          this.star3 = true;
          this.star4 = true;
          this.star5 = true;
          this.currentRating = 5;
          this.$evt.$emit('newRating',this.currentRating);
          break;
  }
    }
  }
}
</script>

<style scoped>
.rating-star {
  font-size: 30px;
  cursor: pointer;
}

.rating-star.selected {
  color: yellow;
}
</style>
