<template>
	<div class="home container">
		<div v-if="!listview">
				<div class="imageWrapper">
				  <h3>Love Chapel Hill?</h3>
					<p>
						Then explore what this town has to offer by category by clicking one of the options below!
					</p>
				  <div class="screen"></div>
				  <img src="../../img/unc.jpg" />
				</div>
				<!-- <parallax :speedFactor=.5>
					<img src="../../img/unc.jpg" alt="unc">
				</parallax> -->
			<div class="row">
				<div class="col-sm-4">
					<div class="category" @click="setCategory('restaurant')">
						<p>Restaurants</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="category" @click="setCategory('nightlife')">
						Nightlife
					</div>
				</div>
				<div class="col-sm-4">
					<div class="category" @click="setCategory('theater')">
						Theaters
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="category" @click="setCategory('library')">
						Library
					</div>
				</div>

				<div class="col-sm-4">
					<div class="category" @click="setCategory('other')">
						Other
					</div>
				</div>
				<div class="col-sm-4">
					<div class="category" @click="setCategory('favorites')">
						Favorites
					</div>
				</div>
			</div>
			</div>
			<div v-if='listview'>
				<ListView :category="category"></ListView>
			</div>
	</div>
</template>

<script >

import ListView from './ListView'
import Parallax from 'vue-parallaxy'

	export default {

		data () {
			return {
				listview: false,
				category: null
			}
		},
		mounted () {
			console.log('App -> mounted.')
			this.$evt.$on('closeList', this.closeListView)
		},
		beforeDestroy () {

		},
		components: {
			ListView,
			Parallax
		},
		methods: {
			setCategory(category) {
				this.category = category;
				this.listview = true;
			},

			closeListView() {
	      this.listview = false;
	    }
		}
	}
</script>

<style>

	.imageWrapper {
		display: inline-block;
		position: relative;
	}

	.imageWrapper h3 {
		position: absolute;
		top: 10px;
		color: #000;
		left: 0;
		right: 0;
		text-align: center;
		z-index: 2;
		text-align: center;
		vertical-align: middle;
		line-height: 570px;
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-weight: 700;
		font-size: 100px;
		color: white;
	}

	.imageWrapper p {
		position: absolute;
		top: 10px;
		color: #000;
		left: 0;
		right: 0;
		text-align: center;
		z-index: 2;
		text-align: center;
		vertical-align: middle;
		line-height: 800px;
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-weight: 700;
		font-size: 25px;
		color: white;
	}

	.imageWrapper .screen {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		margin: auto;
		background-color: rgba(0, 0, 0, .5);
		z-index: 1;
	}

	.category {
		height: 220px;
		width: 220px;
		border-radius: 50%;
		border:1px solid #99BADD;
		background-color: white;
		margin: 60px;
		display: flex;
		align-items: center;
		justify-content: center;
		cursor: pointer;
	}

	.category:hover {
		background-color: #99BADD;
		transition: 0.5s ease-in;
	}

	img {
		width: 100%;
	}

</style>
