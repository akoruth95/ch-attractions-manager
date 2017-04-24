<template>
	<div class="home container">
		<div v-if="!listview">
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
			ListView
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

	.category {
		height: 220px;
		width: 220px;
		border-radius: 50%;
		background-color: #2C3E50;
		margin: 50px;
		display: flex;
		align-items: center;
		justify-content: center;
	}



</style>
