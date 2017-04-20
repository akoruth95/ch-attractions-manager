<template>
	<div class="home container">
		<div v-if="!listview">
			<div class="row">
				<div class="col-sm-4">
					<div class="category" @click="setCategory('restaurants')">
						Restaurants
					</div>
				</div>

				<div class="col-sm-4">
					<div class="category" @click="setCategory('nightlife')">
						Nightlife
					</div>
				</div>
				<div class="col-sm-4">
					<div class="category" @click="setCategory('parks')">
						Parks
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="category" @click="setCategory('theaters')">
						Theaters
					</div>
				</div>

				<div class="col-sm-4">
					<div class="category" @click="setCategory('libraries')">
						Libraries
					</div>
				</div>
				<div class="col-sm-4">
					<div class="category" @click="setCategory('gyms')">
						Gyms
					</div>
				</div>
			</div>
			</div>
			<div v-if='listview'>
				<ListView></ListView>
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
		text-align: center;
	}

</style>
