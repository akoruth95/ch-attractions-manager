import Vue from 'vue'
import VueRouter from 'vue-router'

import Login from '../components/Login.vue'
import Register from '../components/Register.vue'
import Home from '../components/Home.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
    { path: '/home', component: Home },
		{ path: '/register', component: Register },
		{ path: '/login', component: Login }
	]
})

export default router
