<template>
	<div class="container">
		<h1>Hello World</h1>
	</div>
</template>

<script type="text/javascript">

	export default {
		name: 'app',
		data () {
			return {
				authState: 'guest',
				user: null
			}
		},
		mounted () {
			console.log('App -> mounted.')
			this.$evt.$on('logged_in', this.logInAuth)
		},
		beforeDestroy () {
			this.$evt.$off('logged_in', this.logInAuth)
		},
		components: {

		},
		methods: {
			logInAuth (data) {
				console.log('App -> logIn')
				this.authState = 'user';
			}
		}
	}
</script>
